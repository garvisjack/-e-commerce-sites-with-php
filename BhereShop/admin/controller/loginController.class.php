<?php

require './model/adminModel.class.php';
class LoginController{

    public function index(){
        $GLOBALS['smarty']->display("login/index.html");
    }

    public function vc(){
        require '../libs/Verify.class.php';
        $vc = new Verify();
        $vc->showVc();
    }

    /**
     * 用于表单验证，验证码，帐号密码以及登录次数错误的统计
     */
    public function check(){
        //1首先检查验证码，通过了才检测帐号密码       3 错误过多禁止登录
       if(strtolower(trim($_POST['postcode']))!=strtolower($_SESSION['vc'])){
            echo "<script>alert('验证码有误');location.href='?c=login&a=index'</script>";
            exit();
        }

        $admin = new AdminModel();//引用管理员模型
        $username = htmlentities(addslashes($_POST['username']));
        $password = sha1(htmlentities(addslashes($_POST['password'])));

        //求时间差，解封
        $errors = $admin->select("select errors,errortime from bhs_admin where username='{$username}'");
        $timeData = time()-$errors[0]['errortime'];   //定义预定解封的时间差
        if($timeData>30&&$errors[0]['errors']>2){
            $admin->query("update tb_admin set errors=0 where username='{$username}'");
        }

        $errors = $admin->select("select errors,errortime from tb_admin where username='{$username}'");
        if($errors[0]['errors']>2){
            echo "<script>alert('错误超过3次，明天再登录');location.href='?c=login&a=index'</script>";
            exit();
        }

        $arr = $admin->select("select a.*,ar.role_id from bhs_admin a inner join bhs_admin_role ar on a.id=ar.admin_id where username='{$username}' and password='{$password}'");
        if(!empty($arr)){
            //登陆成功以后把错误次数清0,记录登录时间，记录登录IP地址
            $admin->select("update bhs_admin set status=1 where id='{$arr[0]['id']}'");
            $loginip =$_SERVER['REMOTE_PORT'];
            $sql ="update bhs_admin set errors=0,lastip={$loginip},lasttime=now() where username='{$username}'";
            $admin->query($sql);
            $_SESSION['role_id']=$arr[0]['role_id'];//所属角色
            $_SESSION['id']=$arr[0]['id'];//登录者的id
            $_SESSION['admin'] = $arr[0]['username'];//管理员名称
            $this->access($arr[0]['id']);
            echo "<script>location.href='?c=frame&a=index'</script>";
            exit();
        }else{
            //记录错误次数
            $errortime = time();
            $admin->query("update bhs_admin set errors=`errors`+1,errortime={$errortime} where username='{$username}'");
            echo "<script>alert('帐号或密码有误');location.href='?c=login&a=index'</script>";
            exit();
        }
    }

    //退出后台
    public function logout(){
        unset($_SESSION['admin']);
        $admin = new AdminModel();
        $admin->select("update bhs_admin set status=0");
        echo "<script>location.href='?c=login&a=index'</script>";
        exit();
    }

    public function __call($fn,$param){
        exit('not this action');
    }
    
    //没有权限
    public function nojurisdiction(){
        $GLOBALS['smarty']->display("login/nojurisdiction.html");
    }

    //获取权限数据
    public function access($adminid){
        $admin = new AdminModel();
       $resdata = Db::getInstance()->query("select n.id,n.pid,n.node,a.username from bhs_admin a inner join bhs_admin_role ar on a.id=ar.admin_id
inner join bhs_role r on ar.role_id=r.id
inner join bhs_access ac on r.id=ac.role_id
inner join bhs_node n on ac.node_id=n.id where a.id=".$adminid);
       $arr = Db::getInstance()->fetchAll($resdata);
       $arrx = $this->jiagong($arr);
       $_SESSION['access'] = $arrx;
    }

    //加工数组
    public function jiagong($arr,$pid=1){
        $list = array();
        foreach($arr as $value){
            if($value['pid']==$pid){
                $list[$value['node']] = $this->jiagong($arr,$value['id']);
            }
        }
        return $list;
    }

    public function getCode(){
        $code = $_SESSION['vc'];
        if(!empty($_REQUEST)&&!empty($_REQUEST['code'])){
            if(strtolower(trim($_REQUEST['code']))==$code){
                echo 1;
            }else{
                echo 0 ;
            }
        }
    }


}