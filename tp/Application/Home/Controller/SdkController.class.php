<?php 
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Com\WechatAuth;
class SdkController extends Controller{
     private  $appid="wx569270c4ceee0204";
     private  $appSecret="3405042b00a3241b8f72ce7f7098d63c";
     private  $WechatAuth="";
     private  $access_token="";
     private  $jsapi_ticket="";//»º´æjsapiµÄÁÙÊ±Æ±¾Ý
     public function  __construct()
     {     
        parent::__construct();
		     if(!session('token'))
		     {
		         $this->WechatAuth=new WechatAuth($this->appid,$this->appSecret);//³õÊ¼»¯WechatAuthÀà
		         $WechatAuth=$this->WechatAuth;
		         $token=$WechatAuth->getAccessToken();//»ñÈ¡token
		         //³õÊ¼»¯sessionµÄÊ±¼ä·ÀÖ¹¹ýÆÚ
		         session(array('expire' => $token['expries_in']));
		         //È»ºó°Ñtoken±£´æµ½sessionÖÐ
		         session('token',$token['$accsess_token']);
		         //»º´ætoken
		         $this->$accsess_token=$token;
		     }else
		     {
                //·ñÔò¾ÍÊÇÔÚsession´æÔÚËÍtokenÖ±½ÓÈ¡³öÀ´
                $token=session('token');
                $this->WechatAuth=new WechatAuth($this->appid,$this->appSecret,$token);
                $this->$accsess_token=$token;
		     }


         
		    // jsapi_ticket Ó¦¸ÃÈ«¾Ö´æ´¢Óë¸üÐÂ£¬ÒÔÏÂ´úÂëÒÔÐ´Èëµ½ÎÄ¼þÖÐ×öÊ¾Àý
		    
		    if (!session('jsapi_ticket')) {
            
		      $accessToken = $this->access_token;

		      // Èç¹ûÊÇÆóÒµºÅÓÃÒÔÏÂ URL »ñÈ¡ ticket
		      // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
		      //$url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
		      $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=$accessToken&type=jsapi";

		      $res = json_decode($this->httpGet($url));

		      $this->jsapi_ticket=$res->ticket;

		      //°ÑÆ±¾ÝÉèÖÃ¹ýÆÚÊ±¼ä
		      session(array('expire' => 7000));

		      //»º´æÆðÀ´
		      session('jsapi_ticket',$this->jsapi_ticket);

		    } else {

		      $this->jsapi_ticket = session('jsapi_ticket');


		    }


             
           
     }
     public function index()
     {
     	$data=$this->getSignPackage();
      $this->assign('data',$data);
     	$this->display();	

     }

     public function getSignPackage() {
     $jsapiTicket = $this->jsapi_ticket; 

    // ×¢Òâ URL Ò»¶¨Òª¶¯Ì¬»ñÈ¡£¬²»ÄÜ hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $timestamp = time();
    $nonceStr = $this->createNonceStr();

    // ÕâÀï²ÎÊýµÄË³ÐòÒª°´ÕÕ key Öµ ASCII ÂëÉýÐòÅÅÐò
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appid,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
    return $signPackage; 
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }

  private function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    // Îª±£Ö¤µÚÈý·½·þÎñÆ÷ÓëÎ¢ÐÅ·þÎñÆ÷Ö®¼äÊý¾Ý´«ÊäµÄ°²È«ÐÔ£¬ËùÓÐÎ¢ÐÅ½Ó¿Ú²ÉÓÃhttps·½Ê½µ÷ÓÃ£¬±ØÐëÊ¹ÓÃÏÂÃæ2ÐÐ´úÂë´ò¿ªssl°²È«Ð£Ñé¡£
    // Èç¹ûÔÚ²¿Êð¹ý³ÌÖÐ´úÂëÔÚ´Ë´¦ÑéÖ¤Ê§°Ü£¬Çëµ½ http://curl.haxx.se/ca/cacert.pem ÏÂÔØÐÂµÄÖ¤ÊéÅÐ±ðÎÄ¼þ¡£
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
  }

}





 ?>