<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/9
 * Time: 13:01
 */
 class AdministratorModel{
    //添加用户及角色方法
     public function add(){
         if(!empty($_POST)){
             $username = htmlentities(addslashes($_POST['username']));
             $password = sha1(htmlentities(addslashes($_POST['password'])));
             $obj = Db::getInstance();
             $obj->query("insert into bhs_admin(username,password) values('{$username}','$password')");
             $userid = mysql_insert_id();
             $roleid = $_POST['roleid'];
             $obj->query("insert into bhs_admin_role(admin_id,role_id) values('{$userid}','$roleid')");
             return true;
         }
     }

     //添加页面 显示的角色
     public function addselect(){
         $db = Db::getInstance();
        return $db->fetchAll($db->query("select id,name from bhs_role"));
     }

     //查询管理员表及其其他操作
      public function handle($sql){
          $obj = Db::getInstance();
          $res = $obj->query($sql);
          $arr = $obj->fetchAll($res);
          return $arr;
      }
      
     //修改管理员密码及角色操作
     public function editor(){
         $obj = Db::getInstance();
         if(!empty($_POST['password'])) {
             $password = $_POST['password'];
             $res = $obj->query("select password from bhs_admin where id={$_POST['id']}");
             $arr = $obj->fetchAll($res);
             $str = $arr[0];
             if ($password == $str['password']) {
                 $password = $_POST['password'];
             } else {
                 $password = sha1($_POST['password']);
             }
         }
         $roleid = $_POST['roleid'];
         $sql="update bhs_admin_role ar inner join bhs_admin a on ar.admin_id=a.id set ar.role_id='{$roleid}',a.password='{$password}' where ar.admin_id={$_POST['id']}";
         return $obj->query($sql);
     }

     //根据id删除
     public function delete(){
         $obj=Db::getInstance();
         $sql="delete from bhs_admin where id={$_GET['id']}";
         return $obj->query($sql);

     }

//下面是selectPage方法，表示需要显示多少条记录
    public function selectPage(){
        $total = $this->getTotal();//首先要拿到总记录数有多少条，在自己类里的gettotal方法里面已经处理完了，就直接调用过来，给到变量total
        $page = new Page($total,5); //实例化page类
        $sql = "select r.name,a.id,a.username,a.lastip,a.lasttime,a.`status` from bhs_role r inner join bhs_admin_role ar on r.id=ar.role_id inner join bhs_admin a on ar.admin_id=a.id order by a.id desc limit {$page->limitpage},{$page->show}";//这是设置一个sql语句，单这里经常出错，所以以后要经常检查sql语句是否有错误的；
        $arr = $this->select($sql);//调用自己类里面的select方法 <—里面的$sql就是上一行代码传过来的语句，给到$arr
        return $arr;    //arr里面的值: 选到bhs_brand的表里面，根据条件显示多少条记录的所有字段；
    }

    //下面这个方法是方便这个模型里面的方法使用，简洁代码量
    public function select($sql){   //设置一个控制器来调用的方法
        $db = Db::getInstance();    //先调用Db类 给到变量db
        $res = $db->query($sql); //在取db里面的query方法，设置参数，给到变量brandRes，得到的是资源
        if(is_resource($res)) {    //判断一下变量brandRes是不是资源集，如果是就执行里面的代码
            return $db->fetchAll($res);   //在调用变量db里面的fetchAll方法将 资源brandRes转换成二维数组给到$arr
        }
    }

    //下面方法是用来记录brand表里的总记录数
    public function getTotal(){
        $db = Db::getInstance();    //先调用Db类 给到变量db
        $count = $db->query("select count(*) total from bhs_admin order by id desc");//选取brand表里的所有记录，倒叙，count函数是总记录数，order by id desc表示根据id倒叙 返回资源
        if(!empty($count)) {    //判断一下变量brandRes是不是资源集，如果是就执行里面的代码
            $arrcount = $db->fetchAll($count);    //在调用变量db里面的fetchAll方法将 资源brandRes转换成二维数组给到$arr
            $total = $arrcount[0]['total'];
        }
        return $total;
    }

    //下面是page方法，是用来处理分页的
    public function page(){//设置一个方法
        $total = $this->getTotal();//首先要拿到总记录数有多少条，在自己类里的gettotal方法里面已经处理完了，就直接调用过来，给到变量total
        $page = new Page($total,5);//在实例化Page类库，而Page需要传参数，所以才需要上面一行代码，拿到之后；给到page变量
        $pageData = $page->showpage('&c=administrator&a=select');   //在调用page里面的showpage方法，showpage需要传参数，这个参数也就是在前台点击 《上一页》 或者 《下一页》~~里面要跳转的文件个方法
        return $pageData;   //上面一行代码已经把值给到pageData， 这里直接把值返回给page；
    }



 }