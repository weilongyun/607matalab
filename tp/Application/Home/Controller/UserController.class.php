<?php 
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class UserController extends Controller{
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

       
}





 ?>