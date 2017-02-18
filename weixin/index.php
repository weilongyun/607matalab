<?php 
   require_once "get_token.php";
   define('TOKEN','weixin');
   //当用户打通微信服务器和自己的微信服务器的时候需要提交三个参数
   //signature timestamp nonce
   $res=new Weixin();
   if(!isset($_GET['echostr']))
   {
     //不存在说明已经验证通过了 进行接收用户发来的消息
     $res->receive();
     
   }else
   {
   	//说明此事已经存在就需要进行验证
      $res->checkSignature();
   }
   
   class Weixin
   {
		public function checkSignature()
		{
			$signature = $_GET["signature"];//获取签名
			$timestamp = $_GET["timestamp"];//获取时间戳
			$nonce = $_GET["nonce"];//获取随机数

			$token = TOKEN;
			$tmpArr = array($token, $timestamp, $nonce);//形成一个新的数组
			sort($tmpArr, SORT_STRING);//对数组进行排序
			$tmpStr = implode( $tmpArr );//将数组变为字符串
			$tmpStr = sha1( $tmpStr );//对数组进行sha1加密

			if( $tmpStr == $signature ){
			   echo $_GET['echostr'];
			}else{
			return false;
			}
		}
		public function receive()
		{
           $obj=$GLOBALS['HTTP_RAW_POST_DATA']; 
           //把接收到的xml要转为php的对象
           //接收到的xml不能直接解析 要转为对象那个  simpleXMLElement代表接收到的xml类
           //LIBXML_NOCDATA代表去掉CDATA节点
           $postSql=simplexml_load_string($obj,'SimpleXMLElement',LIBXML_NOCDATA);
           //把接收到的消息放到日志里面
           $this->logger($obj);
           if(!empty($postSql))
           {
                 //如果这个消息不为说明取到了消息
                 //取到消息之后要进行判断 看看想要恢复什么样子的消息
                 switch(trim($postSql->MsgType))
                 {
                    case 'text':
                       //此时接收到的是文本消息 然后用单独的函数来处理并且回复这个消息
                      $result=$this->receiveText($postSql);
                      //开发者在5s钟没有回复 腾讯服务器会发出请求 导致错误异常 所以要进行判断一下
                    break;
                    case 'event':
                    if($postSql->Event=="subscribe")
                    {
                        $result=$this->receiveautoEvent($postSql);
                    }
                    if($postSql->EventKey="V1001_TODAY_MUSIC")
                    {
                           
                        $xml="<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[text]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        </xml>";
                        $content="请点击小工具下的萌宠首页";
                        $result=sprintf($xml,$postSql->FromUserName,$postSql->ToUserName,time(),$content);
                        echo  $result;  

                    }
                  
                    break;

                 }

                 if(!empty($result))
                      {
                        echo $result;
                      }else
                      {
                        $xml="<xml>
                        <ToUserName><![CDATA[%s]]></ToUserName>
                        <FromUserName><![CDATA[%s]]></FromUserName>
                        <CreateTime>%s</CreateTime>
                        <MsgType><![CDATA[%s]]></MsgType>
                        <Content><![CDATA[%s]]></Content>
                        </xml>";
                        $content="你发送的文本消息不存在";
                        $res=sprintf($xml,$postSql->FromUserName,$postSql->ToUserName,time(),$postSql->MsgType,$content);
                        echo $res;
                      }


           }

		}
       public function receiveText($postSql)
       {
            //在这里接收用户发送的文本消息
           $Content=trim($postSql->Content);
           //这个代表你好存在这个内容中
           if(strstr($Content,"你好"))
           {
              //接收并且恢复文本消息
            $xml="<xml>
            <ToUserName><![CDATA[%s]]></ToUserName>
            <FromUserName><![CDATA[%s]]></FromUserName>
            <CreateTime>%s</CreateTime>
            <MsgType><![CDATA[%s]]></MsgType>
            <Content><![CDATA[%s]]></Content>
            </xml>";
            $content="你也好啊";
            $res=sprintf($xml,$postSql->FromUserName,$postSql->ToUserName,time(),$postSql->MsgType,$content);
            return $res;
 
           }else if(strstr($Content,"单条图文"))
           {
               $res=$this->receiveImage($postSql);
               return $res;
                
           }else if(strstr($Content,"多条图文"))
           {
            $res=$this->receiveImages($postSql);
            return $res;

           }

           

       }

        //用来回复单条图文消息的函数
       private function receiveImage($postSql)
       {

             //接收兵回复单条图文消息
           $xml="<xml>
          <ToUserName><![CDATA[%s]]></ToUserName>
          <FromUserName><![CDATA[%s]]></FromUserName>
          <CreateTime>%s</CreateTime>
          <MsgType><![CDATA[%s]]></MsgType>
          <ArticleCount>1</ArticleCount>
          <Articles>
          <item>
          <Title><![CDATA[%s]]></Title>
          <Description><![CDATA[%s]]></Description>
          <PicUrl><![CDATA[%s]]></PicUrl>
          <Url><![CDATA[%s]]></Url>
          </item>
          </Articles>
          </xml>";
           $res=sprintf($xml,$postSql->FromUserName,$postSql->ToUserName,time(),"news",
            "德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)","德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)",
            "http://img1.gtimg.com/17/1724/172461/17246175_980x1200_0.jpg","http://www.baidu.com");
            return $res;

       }
      //接收文本消息并且回复多图文消息
       private function receiveImages($postSql)
       {
         
         $content=array();
         $content[]=array("Title"=>"德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)",
          "Description"=>"赶快看看里约奥运会吧","PicUrl"=>"http://img1.gtimg.com/17/1724/172461/17246175_980x1200_0.jpg",
           "Url"=>"http://www.baidu.com");
          $content[]=array("Title"=>"德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)",
          "Description"=>"赶快看看里约奥运会吧","PicUrl"=>"http://img1.gtimg.com/17/1724/172461/17246175_980x1200_0.jpg",
           "Url"=>"http://www.baidu.com");
           $content[]=array("Title"=>"德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)",
          "Description"=>"赶快看看里约奥运会吧","PicUrl"=>"http://img1.gtimg.com/17/1724/172461/17246175_980x1200_0.jpg",
           "Url"=>"http://www.baidu.com");
            $content[]=array("Title"=>"德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)",
          "Description"=>"赶快看看里约奥运会吧","PicUrl"=>"http://img1.gtimg.com/17/1724/172461/17246175_980x1200_0.jpg",
           "Url"=>"http://www.baidu.com");
             $content[]=array("Title"=>"德阳女拳手任灿灿奥运摘铜 拿川军里约第一枚奖牌(图)",
          "Description"=>"赶快看看里约奥运会吧","PicUrl"=>"http://img1.gtimg.com/17/1724/172461/17246175_980x1200_0.jpg",
           "Url"=>"http://www.baidu.com");
         
          $str="<item>
          <Title><![CDATA[%s]]></Title>
          <Description><![CDATA[%s]]></Description>
          <PicUrl><![CDATA[%s]]></PicUrl>
          <Url><![CDATA[%s]]></Url>
          </item>";
          $news="";
          foreach($content as $newsArray)
          {
             $news.=sprintf($str,$newsArray['Title'],$newsArray['Description'],$newsArray['PicUrl'],$newsArray['Url']);
          } 
          $xml="<xml>
          <ToUserName><![CDATA[%s]]></ToUserName>
          <FromUserName><![CDATA[%s]]></FromUserName>
          <CreateTime>%s</CreateTime>
          <MsgType><![CDATA[%s]]></MsgType>
          <ArticleCount>%s</ArticleCount>
          <Articles>
          $news
          </Articles>
          </xml>";
          $res=sprintf($xml,$postSql->FromUserName,$postSql->ToUserName,time(),"news",count($content));
          return $res;
       }

        //这个函数是处理用户在关注时间
      public function receiveautoEvent($postSql)
      {

         $xml="<xml>
        <ToUserName><![CDATA[%s]]></ToUserName>
        <FromUserName><![CDATA[%s]]></FromUserName>
        <CreateTime>%s</CreateTime>
        <MsgType><![CDATA[%s]]></MsgType>
        <Content><![CDATA[%s]]></Content>
        </xml>";
        $content="欢迎关注兰西县王淑波箱包柜台，欢迎购买";
         $res=sprintf($xml,$postSql->FromUserName,$postSql->ToUserName,time(),"text",$content);
          return $res;
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


 ?>