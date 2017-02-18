<?php
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class IndexController extends Controller {
    public function index(){
           //请看tp3.2.2开发文档
    	$token="weixin";
    	$wechat=new Wechat($token);
    	//这个相当于 $obj=$GLOBALS['HTTP_RAW_POST_DATA']; 返回的是一个数组
    	 $data=$wechat->request();
    	//有数据并且返回的是数组
    	if($data && is_array($data))
    	{

            //回复文本消息 如果接受的是文本消息 就要进行回复消息
            switch($data['MsgType'])
            {
                case 'text':
                //回复消息
                $this->HuifuText($data,$wechat);
                break;

                case 'event':
                $this->scan_qrcode($data,$wechat);
                break;
            }
    	}
    }
    private function HuifuText($data,$wechat)
    {
         if(strstr($data['Content'],"think"))
         {
         	$content="欢迎使用thinkphp开发微信";

             $wechat->replyText($content);
         }else if(strstr($data['Content'],"获取用户基本信息"))
         {
             $this->Users($data,$wechat);
         }


    }
    //获取用户的基本信息
    private function Users($data,$wechat)
    {
        //获取token
            $appid="wx569270c4ceee0204";
            $appsecret="3405042b00a3241b8f72ce7f7098d63c";
            $token=session('token');
            //如果token存在就不用再向服务器发送请了 直接在session里取
            if($token)
            {
               //如果存在就会直接得到token
                $WechatAuth=new WechatAuth($appid,$appsecret,$token);

            }else
            {
                $WechatAuth=new WechatAuth($appid,$appsecret);
                //获取token 此时返回的token是一个数组 我们要的是数组里的access_token
                $token=$WechatAuth->getAccessToken();
                //获得了token
                $token=$token['access_token'];
                //此时获得$token里面的东西要存到token中
                session('token',$token);
            }
            
            //获取openid 用户发来的是一段文本消息 可以获取到FromUserName 等价于openid
            $openid=$data['FromUserName'];
            $users=$WechatAuth->userInfo($openid);
            $text="用户的openid为：".$users[openid]."\r\n"."用的性别为：".$users[sex]."\r\n"."用户所造的城市为：". "$users[city]".
            "\r\n"."用户所在国家是：". $users['country'];
            $this->logger($text);
            $wechat-> replyText($text);

       }

       //网页授权获取用户的基本信息
   public function WebUsers()
    {
        //获取token
            $appid="wx569270c4ceee0204";
            $appsecret="3405042b00a3241b8f72ce7f7098d63c";
            $WechatAuth=new WechatAuth($appid,$appsecret);
            if($_GET['iscode'])
            {
                
                $url="http://www.weilongyun.cn/tp/Index.php/Home/Index/WebUsers";
                //getRequestCodeURL这个函数就是用来拼接地址的
                $result=$WechatAuth->getRequestCodeURL($url);
                //跳转后会把code取回来
                header("Location:{$result}");

            }else if($_GET['code'])
            {
               $users=$WechatAuth->getAccessToken('code',$_GET['code']);
               $openid=$users['openid'];
               $users=$WechatAuth->getUserInfo($openid);
               $m=M('users');
               $data1['openid']=$users['openid'];
               $data1['nickname']=$users['nickname'];
               $result=$m->add($data1);
               if($result)
               {
                      $text="用户的openid为：".$users[openid]."\r\n"."用的性别为：".$users[sex]."\r\n"."用户所造的城市为：". "$users[city]".
                      "\r\n"."用户所在国家是：". $users['country'];
                       echo  $text;
               }
            
            }
           
            

       }

       public function scan_qrcode($data,$wechat)
       {
            
            if($data['EventKey']=="10086")
            {
                $content="欢迎通过扫描来打到10086移动客服 ，稍后为您解答请稍等";
                $wechat->replyText($content);

            }

       }

    private function logger($content)
        {
         $logsize=10000;    
         $logname="log.txt";
         if(file_exists($logname) && filesize($logname) > $logsize)
         {
           unlink($logname);
         }
         file_put_contents($logname,date('H:i:S')." ".$content."\r\n",FILE_APPEND);

        }

}
