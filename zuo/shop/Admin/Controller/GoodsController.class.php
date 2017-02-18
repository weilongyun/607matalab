<?php
 namespace Admin\Controller;
 use Think\Controller;
 class GoodsController extends Controller
 {
        public function showlist()
        {
          //实例化model
           $goodsmodule=new \Model\GoodsModel();
            var_dump($goodsmodule);
            $this -> display();
        }
        public function tianjia()
        {

            $this -> display();
        }
        public function xiugai()
        {

            $this -> display();
        }

 }