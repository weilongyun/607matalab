<?php

//require_once 如果找不到文件会报错 不会往下执行 而include_once 可以执行
//创建自定义菜单首先要先要获取access_token 所以要先引入get_token.php 
   require_once 'get_token.php';
   require_once 'common.php';
   $url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token={$access_token}";
   //var_dump($access_token);
  
   //要创建自定义菜单的内容
   $menu_content='{
     "button":[
     {	
          "type":"click",
          "name":"萌宠家",
          "key":"V1001_TODAY_MUSIC"
      },
      {
           "name":"小工具",
           "sub_button":[
           {	
               "type":"view",
               "name":"萌宠网页",
               "url":"http://www.baidu.com"
            },
            {
               "type":"view",
               "name":"商城",
               "url":"http://www.weilongyun.cn/xiao/m/web/#/tab/home"
            },
            {
               "type":"click",
               "name":"赞一下我们",
               "key":"V1001_GOOD"
            }]
       }]
 }';

   $result=http_request($url,$menu_content);
   var_dump($result);
    
   