<?php
  
   //通过curl函数来获取access_token
   $appId='wx569270c4ceee0204';
   $appsecret='3405042b00a3241b8f72ce7f7098d63c';
   $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appId}&secret={$appsecret}";

   //运用curl函数来发送http请求来获得获取access_token
   //1初始化
    $ch=curl_init();

   //2设置变量
    //需要获取的URL地址
    curl_setopt($ch,CURLOPT_URL,$url);
	//不进行验证
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);


   //3执行返回句柄
   //如果 CURLOPT_RETURNTRANSFER选项被设置，函数执行成功时会返回执行的结果
    $reslut=curl_exec($ch);
	curl_close($ch);
    //4由于返回来的是json数据 所以要进行json_decode解码返回数组并且取出access_token true返回的是一个数组
	$json_info=json_decode($reslut,true);
	var_dump($json_info);
    $access_token=$json_info['access_token'];

   
