<?php 
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class YulanqunfaController extends Controller{
     private  $appid="wx569270c4ceee0204";
     private  $appSecret="3405042b00a3241b8f72ce7f7098d63c";
     private  $WechatAuth="";
     private  $access_token="";
     public function  __construct()
     {     
        parent::__construct();
		     if(!session('token'))
		     {
		         $this->WechatAuth=new WechatAuth($this->appid,$this->appSecret);//初始化WechatAuth类
		         $WechatAuth=$this->WechatAuth;
		         $token=$WechatAuth->getAccessToken();//获取token
		         //初始化session的时间防止过期
		         session(array('expire' => $token['expries_in']));
		         //然后把token保存到session中
		         session('token',$token['$accsess_token']);
		         //缓存token
		         $this->$accsess_token=$token;
		     }else
		     {
                //否则就是在session存在送token直接取出来
                $token=session('token');
                $this->WechatAuth=new WechatAuth($this->$appid,$this->$appSecret,$token);
                $this->$accsess_token=$token;
		     }
             
     }




     //查询用户所有分组
     public function getAllgroup()
     {
       header("Content-type:text/html;charset=utf-8");
       $WechatAuth=$this->WechatAuth;
       $allgroup_info=$WechatAuth->groupsGet();
       var_dump($allgroup_info);


     }

     //创建一个分组
     public function createfenzu()
     {
        header("Content-type:text/html;charset=utf-8");
       $WechatAuth=$this->WechatAuth;
       $niuzu=$WechatAuth->groupsCreate("大牛组");
       var_dump($niuzu);


     }
   //查询指定用户所在的组
     public function Group()
     {
       header("Content-type:text/html;charset=utf-8");
       $WechatAuth=$this->WechatAuth;
       //openid在数据库中
       $m=M('users');
       $user=$m->find(3);
       $openid=$user['openid'];
       $data=$WechatAuth->groupsGetid($openid);
       var_dump($data);


     }


     //预览群发高级接口
     public function yulanqunfa()
     {
        $openid="";
        $m=M('users');
        $user=$m->find(4);
        $openid=$user['openid'];
        $WechatAuth=$this->WechatAuth;
        $content="我正在使用的是预览高级群发接口 大家好我是田力";
        $msgtype="text";
        $WechatAuth->Yulan($openid,$content,$msgtype);
     }

     //创建一个永久的二维码
     public function forever_qrcode()
     {

        $WechatAuth=$this->WechatAuth;
        $scene_id="10086";
        //第二个参数不填就代表永久有效
        $forever_qrcode=$WechatAuth->qrcodeCreate($scene_id);
        //var_dump($forever_qrcode);
        //此时会拿到票据
        $ticket=$forever_qrcode['ticket'];
        //拿到票据换区二维码
        $qr_code=$WechatAuth->showqrcode($ticket);
        //此时会拿到二维码的地址
        //var_dump($qr_code);
        echo "<img width:70%;
        src='https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=gQEJ8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzlULVl0WFRsc2czTElXMnpVeFBoAAIEEpm5VwMEAAAAAA=='>";
     }

    //长链接转短链接接口
     public function long_short()
     {
          
      $WechatAuth=$this->WechatAuth;
      //会返回一个数组
      $data1=$WechatAuth->shorturl("https://www.baidu.com/s?wd=%E4%BA%8C%E7%BB%B4%E7%A0%81%20site%3Aweixin.qq.com&rsv_spt=1&rsv_iqid=0xc69630e20014d2da&issp=1&f=8&rsv_bp=1&rsv_idx=2&ie=utf-8&rqlang=cn&tn=baiduhome_pg&rsv_enter=0&oq=%E9%BA%A6%E5%AD%90%E5%AD%A6%E9%99%A2&rsv_t=cda0ALYpqZ1zDiuO4YS32VHIinue5q086LWJiMBJIqBVc353wuFt%2F9YZir1iarwAeEAt&rsv_pq=aaa349b80010ede8&inputT=11516&rsv_sug3=164&rsv_sug1=115&rsv_sug7=100&rsv_sug2=0&rsv_sug4=11516");
      // var_dump($data1);
      $shorturl=$data1['short_url'];
      var_dump($shorturl);


     }

       
}





 ?>