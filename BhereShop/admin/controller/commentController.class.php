<?php
require "./controller/Controller.php";
require './model/commentModel.class.php';
class CommentController extends Controller{
    /**
     * 控制器负责调用数据，正确显示的方法,传值给模版引擎
     */
    public function select() {
        $cm = new CommentModel();
        $arr = $cm->selectPage();  //商品分类名称
        $page = $cm->page();     //分页数据展示，返回字符串
        $GLOBALS['smarty']->assign('arr',$arr);
        $GLOBALS['smarty']->assign('page',$page);
        $GLOBALS['smarty']->display("comment/comment.html");
    }


    /**
     * 删除模版中指定的数据
     * @return boolean
     */
    public function delete(){
        $cm = new CommentModel();
        if(!empty($_GET['id'])) {
            if ($cm->delete($_GET['id'])) {
                $this->skip('?c=comment&a=select',1);
            } else {
                $this->skip('?c=comment&a=select',0);
            }
        }
        else{
            $this->skip('?c=comment&a=select',0);
        }
    }

    public function add(){
        $cm = new CommentModel();
        //管理员信息,user_id默认为0，属于管理员对用户的回复
        $arrm = $cm->editor("select id,username,lastip from bhs_admin where status=1");
        $ip = $_SERVER['REMOTE_ADDR'];
        $time = time();
        //判断一把是否有管理员评论出现，管理员只能评论一条进行限制，有新的则会覆盖更新掉
        $admin = $cm->editor("select id,user_name,content,addtime,ip from bhs_comment where user_id=0 and parent_id=".$_POST['parent_id']);
        if(!empty($_POST['content'])) {
            //管理员第一次评论
            if (empty($admin)) {
                $boolData = $cm->query("insert into bhs_comment values(null,'{$_POST['user_name']}',1,
{$_POST['goods_id']},'{$_POST['content']}',99,$time,'{$ip}',1,{$_POST['parent_id']},0,{$_POST['order_id']})");
                if ($boolData) {
                    $this->skip('?c=comment&a=select',1);
                } else {
                    $this->skip('?c=comment&a=select',0);
                }
            } else {
                $boolData = $cm->query("update bhs_comment set user_name='{$_POST['user_name']}',content=
'{$_POST['content']}',addtime=$time,ip='{$ip}' where user_id=0 and parent_id=" . $_POST['parent_id']);
                if ($boolData) {
                    $this->skip('?c=comment&a=select',1);
                } else {
                    $this->skip('?c=comment&a=select',0);
                }
            }
        }

    }

    /**
     * 编辑页面的展示
     * @return 展示内容
     */
    public function editor() {
        $cm = new CommentModel();
        if(!empty($_GET['id'])) {
            //对应ID的商品数据
            //需要评论表和商品数据表联查
            $arr = $cm->editor("select c.*,g.title from bhs_comment c inner join bhs_goods g on c.goods_id=g.id  where c.id=".$_GET['id']);
            $GLOBALS['smarty']->assign('arr',$arr);
            //管理员回复用户评论进行管理提示,user_id=0的时候为管理员回复
            $arrm = $cm->editor("select id,username,lastip from bhs_admin where status=1");
            $GLOBALS['smarty']->assign('arrm',$arrm);

            //管理员回复内容的展示
            $admin = $cm->editor("select id,user_name,content,addtime,ip from bhs_comment where user_id=0 and parent_id=".$_GET['id']);
            $GLOBALS['smarty']->assign('admin', $admin);
            $GLOBALS['smarty']->display("comment/comment_editor.html");
        }
    }


    /**
     * 用于ajax操作批量删除
     */
    public function deleteAll(){
        $n = 0;
        if (!empty($_REQUEST)&&!empty($_REQUEST['id'])) {
            $cm = new CommentModel();
            //遍历删除传值过来的数组
            foreach($_REQUEST['id'] as $val){
                if ($cm->delete($val)) {
                    $n += 0;
                } else {
                    $n += 1;
                }
            }
            echo $n;

        }
    }
    /**
     * 更新商品分类
     * @return boolean
     */
    public function update(){
        $cm = new CommentModel();
        //隐藏评论
        if(!empty($_REQUEST)&&!empty($_REQUEST['id'])&&$_REQUEST['action']=='hide') {
            $bool = $cm->query("update bhs_comment set status=0 where id=".$_REQUEST['id']);
            if($bool){
                echo 1;
            }else{
                echo 0;
            }
        }
        //显示评论
        if(!empty($_REQUEST)&&!empty($_REQUEST['id'])&&$_REQUEST['action']=='show') {
            $bool = $cm->query("update bhs_comment set status=1 where id=".$_REQUEST['id']);
            if($bool){
                echo 1;
            }else{
                echo 0;
            }
        }

    }
    /**
     * 数据模糊查询 用于搜索关键字，修改分类名称
     * @return boolean
     */
    public function like(){
        $cm = new CommentModel();
        if(!empty($_POST['search'])){
            $arr = $cm->like($_POST['search']);
            if(is_resource($arr)) {
                foreach ($arr as $value) {
                    if ($id = $value['id']) {
                        echo "<script>location.href='?c=comment&a=editor&id={$id}';</script>";
                    } else {
                        $this->skip('?c=comment&a=select',0);
                    }
                }
            }
            else{
                $this->skip('?c=comment&a=select',0);
            }
        }
        else{
            $this->skip('?c=comment&a=select',0);

        }
    }
    public function skip($url,$bool){
        if($bool){
            $skip = array(
                'result'=>'成功!',
                'url'=>$url
            );
        }
        else{
            $skip = array(
                'result'=>'失败!',
                'url'=>$url
            );
        }
        $GLOBALS['smarty']->assign("skip",$skip);
        $GLOBALS['smarty']->display("skip/skip.html");
    }


}