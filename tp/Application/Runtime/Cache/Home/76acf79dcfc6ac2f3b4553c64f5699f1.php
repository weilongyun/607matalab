<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
     <button id="button1" style="width:100%;height:300px;font-size:100px;background:red;">图像接口</button>
     <button id="button2" style="width:100%;height:300px;font-size:100px;background:red;">微信扫一扫接口</button>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: false,
    appId: '<?php echo $data["appId"];?>',
    timestamp:'<?php echo $data["timestamp"];?>',
    nonceStr: '<?php echo $data["nonceStr"];?>',
    signature: '<?php echo $data["signature"];?>',
    jsApiList: [
      'checkJsApi',
      'chooseImage',
      'scanQRCode'
     
    ]
  });
  var btn1=document.getElementById('button1');
  var btn2=document.getElementById('button2');
  btn1.onclick=function()
  {
         
         wx.chooseImage({
    count: 1, // 默认9
    sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
    sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
    success: function(res) {
        var localIds=res.localIds; 
        // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
        document.write("<img src="+localIds+">");

       
    }
});    
 // window.alert("rr");
      
  }

  btn2.onclick=function()
  {
         wx.scanQRCode({
    needResult: 0, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
    scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
    success: function (res) {
    var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
}
});
        
    
      
  }



  wx.ready(function () {
    wx.checkJsApi({
        jsApiList: ['chooseImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
        success: function(res) {
            // 以键值对的形式返回，可用的api值true，不可用为false
            // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
        }
    });
  });
</script>
</html>