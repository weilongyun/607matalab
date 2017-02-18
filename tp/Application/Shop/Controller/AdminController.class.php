<?php
namespace shop\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
header('Content-type:text/html;charset=utf-8');
class AdminController extends Controller {
    public function add()
    {
        $this->display();
    }

     public function lists()
    {

        $m=M('goods');
        $data=$m->select();
        $this->assign("data",$data);
        $this->display();


    }

    public function addgoods()
    {
        header('Content-type:text/html;charset=utf-8');
        //add中的表单通过post提交之后 打印出来的是一个数组
       // var_dump($_POST);exit;

        //这个时候把添加的商品插入到数据库中
        $m=M("goods");

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =3145728 ;// 设置附件上传大小
        $upload->exts      =array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  ='./Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $info=$upload->upload();
      // var_dump($info);
        if(!$info)
        {
            // 上传错误提示错误信息
            echo "上传图片失败";
        }else
        {

            // 上传成功之后就要拿到图片的路径
           $_POST['img']=$info['img']['savepath'].$info['img']['savename'];
            $arr=$m->add($_POST);
            if($arr)
            {
                echo '<script type="text/javascript">window.alert("添加商品成功,请点击商品列表进行查看以添加的商品");location.href=document.referrer;</script>';


            }else
            {

                echo '<script>alert("添加商品失败");exit;</script>';
            }
        }



    }


    public function del()
    {
        //var_dump($_GET);此时拿到的要删除的id

        //拿到要删除的id值
        $id=$_GET['id'];
        //连接数据库 把数据库数据删除 操作这个之前看一下lists.html方法
        $m=M('goods');
        $res=$m->delete($id);
        if($res)
        {
            //说明删除成功

            echo '<script type="text/javascript">alert("删除成功");location.href=document.referrer; </script>';
        }else
        {
            //说明删除失败
            echo '<script type="text/javascript">alert("删除失败");exit; </script>';
        }
    }
    //这个函数用来检测错误提示
    public function test()
    {

        $this->display();

    }
           
}



