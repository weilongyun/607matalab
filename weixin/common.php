<?php
 
function http_request($url,$data=null)
{
//运用curl函数来发送http请求来获得获取access_token
//1初始化
$ch=curl_init();

//2设置变量
//需要获取的URL地址
curl_setopt($ch,CURLOPT_URL,$url);
//不进行验证
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
if(!empty($data))
{
	curl_setopt($ch,  CURLOPT_POST, 1);
	curl_setopt($ch,  CURLOPT_POSTFIELDS, $data);
}

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);


//3执行返回句柄
//如果 CURLOPT_RETURNTRANSFER选项被设置，函数执行成功时会返回执行的结果
$reslut=curl_exec($ch);
curl_close($ch);
return $reslut;
}

