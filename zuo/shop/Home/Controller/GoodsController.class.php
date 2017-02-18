<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller
{
     public function showlist()
     {
         //这句话默认是调用视图模板文件的goods/showlist
        // $this->display();

         //这句话是调用视图中的goos/showlist
        // $this->display('showlist');

         //如果要想访问其他控制器下的模板文件
         $this->display('user/login');


     }
    public function detail()
    {
        $this->display();

    }

}