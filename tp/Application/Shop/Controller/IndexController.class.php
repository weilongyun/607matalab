<?php
namespace shop\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
header('Content-type:text/html;charset=utf-8');
class IndexController extends Controller {
    //前台商品首页
    public function index()
    {
        //连接数据库把数据库的所有商品取出来 传到index.html 为了从后台输入数据前台进行显示
        $m=M('goods');
        $data=$m->select();
        $this->assign('data',$data);
        $this->display();
    }
    //前台商品详情页面
     public function detail()
    {

        $m=M('goods');
        $data=$m->find($_GET['id']);
        $this->assign('data',$data);
        $this->display();


    }


    //前台生成订单的函数
    public function order()
    {


        /*$name=$_GET['id'];
        $name=$_GET['name'];
        $name=$_GET['guige'];
        $name=$_GET['price'];
        $name=$_GET['num'];
        $m=M('');
        $data=$m->add();
        $this->assign('data',$data);*/

        $this->assign('data',$_POST);
        $this->display();



    }

    public function weixinzhifu()
    {
      //此时要跳转到微信支付页面

       header('Location:http://www.weilongyun.cn/weixinzhifu/example/jsapi.php');
        if(empty($_GET['isnull']))
        {
            $data['name'] = $_POST['name'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['province'] = $_POST['province'];
            $data['city'] = $_POST['city'];
            $data['town'] = $_POST['town'];
            $data['address'] = $_POST['address'];
            $data['xiangxidizhi'] = $_POST['xiangxidizhi'];
            $data['guige'] = $_POST['guige'];
            $data['num'] = $_POST['num'];
            $data['gid'] = $_POST['id'];
            $data['username'] = $_POST['username'];
            $data['price'] = $_POST['price'] * $data['num'];
            session('data', $data);
        }else
        {

            $m=M('weixinzhifu');
            $res=$m->add(session('data'));
            if($res)
            {
                echo "<script>alert('生成订单成功');history.go(-3);</script>";

            }
            else
            {

                echo "<script>alert('生成订单失败');exit;</script>";
            }
        }


    }
    //这个函数用来检测错误提示
    public function test()
    {

        $this->display();

    }
           
}



