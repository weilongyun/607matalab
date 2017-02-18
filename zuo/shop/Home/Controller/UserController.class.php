<?php
namespace Home\Controller;
use Think\Controller;
 //创建一个用户登录的控制器
//Controller所在的位置为ThinkPHP/library/Think/Controller.class.php
     class UserController extends Controller
     {

         public function login()
         {

            // echo "login success!";
             //在这里调用视图
             $this->display();
         }


         public function register()
         {

             // echo "login success!";
             //在这里调用视图
             $this->display();
         }

     }

