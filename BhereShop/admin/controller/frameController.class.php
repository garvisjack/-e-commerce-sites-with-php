<?php
require "./controller/Controller.php";
require './model/orderModel.class.php';
class FrameController extends Controller{

    public function index(){
        $obj = new OrderModel();
        if(isset($_SESSION['admin'])) {
            $admin = $_SESSION['admin'];
            $GLOBALS['smarty']->assign("admin",$admin);
        }
        $GLOBALS['smarty']->display("frame/index.html");

    }



}