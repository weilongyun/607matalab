<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="author" content="m.ehaier.com">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport"  />
	<meta name="format-detection" content="telephone=no" />
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	<meta content="false" id="twcClient" name="twcClient" />
	<meta property="qc:admins" content="24524700661454534650115263757" />
	<link type="text/css" rel="stylesheet" href="/tp/Public/Css/style.css">
	<link rel="apple-touch-icon-precomposed" href="/tp/Public//images/ehaier-icon.png"/>	
	<link rel="shortcut icon" type="image/x-icon" href="/tp/Public//images/ehaier-icon.png"/>  
	<script type="text/javascript" src="/tp/Public/Scripts/zepto.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/gs.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/mediav.js"></script>
	<script type="text/javascript" name="baidu-tc-cerfication" data-appid="4746793" src="/tp/Public/Scripts/lightapp.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/criteo.js"></script>
	<script type="text/javascript" src="/tp/Public/Scripts/ld.js" async="true"></script>
	<meta name="keywords" content="" />
<meta name="description" content="【216升智能远控冰箱】：① 手机操控，您身边的养生顾问；② 故障报修，自动一键报修；③ 12KG大冷冻力，一级能效；④ 官方商城，全国联保，货到付款" />
<title>海尔商城手机版</title>
<link type="text/css" rel="stylesheet" href="/tp/Public/Css/details.css"/>
<link rel="stylesheet" type="text/css" href="/tp/Public/Css/swiper.css"/>
<script type="text/javascript" src="/tp/Public/Scripts/pz.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/cig.js"></script>
</head>
<body>
<header class="header"> 
	<span class="fh left"><a href="/tp/Public/">&nbsp;</a></span>	
	商品详情
      	<span class="hd_right right">
		<a class="gwc" href="/tp/Public//mobile/cart/myCart.html"><span id="count">0 </span>&nbsp;</a>
		<a class="right_but" href="/tp/Public//mobile/common/navigate.html">&nbsp;</a>
</span>
  	</header>
<div id="page">
  <!--======main=====-->
  <div class="main">
    <div class="m_banner">
      <div class="swiper-container">
        <div class="pagination"></div>
        <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="/tp/Public/javascript:void(0);"><img src="/tp/Public/Picture/5717590d58e114ec537dfdd1.png" /></a></div>
                    <div class="swiper-slide"><a href="/tp/Public/javascript:void(0);"><img src="/tp/Public/Picture/5717591558e114ec537dfdd4.png" /></a></div>
                    <div class="swiper-slide"><a href="/tp/Public/javascript:void(0);"><img src="/tp/Public/Picture/5717591e58e114ec537dfdd7.png" /></a></div>
                    <div class="swiper-slide"><a href="/tp/Public/javascript:void(0);"><img src="/tp/Public/Picture/5717592658e114ec537dfdda.png" /></a></div>
                    <div class="swiper-slide"><a href="/tp/Public/javascript:void(0);"><img src="/tp/Public/Picture/5717594fb702cfd8bd71177c.png" /></a></div>
           </div>
      </div>
    </div>
      <form action="<?php echo U('Index/order');?>" method="post">
    <div class="details_text">
      <div class="details_title"><?php echo ($data['name']); ?> <?php echo ($data['guige']); ?></div>
      <div class="details_nr">【216升智能远控冰箱】：① 手机操控，您身边的养生顾问；② 故障报修，自动一键报修；③ 12KG大冷冻力，一级能效；④ 官方商城，全国联保，货到付款</div>
            <div class="details_jg">商城价格：<span>￥<?php echo ($data['price']); ?></span> </div>
      	  <a class="activemsg" href="/tp/Public/">【今日值得买】活动时间8月25日-8月26日，活动价1799元！满1000减100元，仅需1699元！数量有限，抢到即赚到！</a>
     <!-- <div class="details_dq">         <div class="details_dq_left left">配送区域：</div>
        <div class="details_dq_right">
        <span class="select_box"><span></span><a id="provincetip">选择省</a>
          <select name="provinceId" id="provinceId">
            <option value="">选择省</option>
          </select>
          </span>
		  <span class="select_box"><span></span><a id="citytip">选择市</a>
          <select name="cityId" id="cityId">
            <option value="">选择市</option>
          </select>
          </span> <span class="select_box"><span></span><a id="regiontip">选择区</a>
          <select name="regionId" id="regionId">
            <option value="">选择区</option>	
          </select>
          </span>
		</div>
      </div>-->
      <div class="details_nr">服务承诺：<span id="isSupportCOD"></span><span id="service">送货入户（违约赔付100元），送装同步</span><span id="limit"></span></div>
	  		<div class="details_nr">分&nbsp;&nbsp;期&nbsp;付：<span><img src="/tp/Public/Picture/ic-hbf.png" width="30px" style="vertical-align: middle;margin: 0 4px;">花呗分期 </span></div>
      	  <div class="details_nr"> 购买数量：<span class="count_num">
	  <a href="/tp/Public/javascript:void(0)" id="btnMinus" class="inputcheckbox">-</a>
        <div class="count-input">
          <input type="text" maxlength="2"  name="num" value="1" id="proCount" readonly="readonly">
        </div>
        <a href=" javascript:void(0)" id="btnAdd" class="inputcheckbox">+</a>
		</span>
		<span class="count-msg" id="stockStatus"></span>
		<span style="display:none;" id="stockType"></span></div>
    </div>
    <div class="details_kf">
    <a href="/tp/Public/javascript:void(0);" id="praise">
    	<span id="praiseIcon" class="micon icon-praise"></span>
    	<span id="praiseCount">1033</span>
    </a>
    <a href="/tp/Public/javascript:void(0);" id="collect">
    	<span id="collectIcon" class="micon icon-collect"></span>
    	<span id="collectCount">552</span>
    </a>
    <!-- <a href="/tp/Public/javascript:void(0);" id="collect"><span class="micon icon-fav"></span><span id="collectContent">收藏</span></a> -->
    <a href="/tp/Public/javascript:void(0);" class="lxkf"><span class="micon icon-contact"></span>联系客服</a>
      <!--&nbsp;&nbsp;&nbsp;&nbsp;分享到:<a href="/tp/Public/javascript:void(0);"><span class="micon icon-sina"></span>新浪微博</a><a href="/tp/Public/javascript:void(0);"><span class="micon icon-weixin"></span>微信</a> -->
    </div>
    <div class="details_xx">
      <ul>
        <li class="lb1"><a href="/tp/Public//mobile/item/productIntroduction/12161.html">详细介绍</a><span class="micon icon-right-gray"></span></li>
        <li><a href="/tp/Public//mobile/item/productSpecification/12161.html">规格参数</a><span class="micon icon-right-gray"></span></li>
        <li class="lb2"><a href="/tp/Public//mobile/item/productComment/12161.html"><span>           ★★★★★
           </span> 100%好评（<span class="pls">864</span>人评价）</a><span class="micon icon-right-gray"></span></li>
        <li class="lb3"><a href="/tp/Public//mobile/item/productConsulation/12161.html">商品咨询 <span>0</span> 条</a><span class="micon icon-right-gray"></span></li>
        <li class="lb4" id="estore" style="display:none"><a href="/tp/Public/#">查看授权门店</a><span class="micon icon-right-gray"></span></li>
      </ul>
    </div>

            <div class="details_but"   id="you">
          <input type="submit" value="立即购买 "/>
          <input type="hidden" name="name" value="<?php echo ($data['name']); ?>"/>
          <input type="hidden" name="id" value="<?php echo ($data['id']); ?>"/>
          <input type="hidden" name="price" value="<?php echo ($data['price']); ?>"/>
          <input type="hidden" name="guige" value="<?php echo ($data['guige']); ?>"/>
      </div>
      </form>
    	<!--订金尾款、限时抢购、二维码、套装走快捷购物流程-->
       <!-- <input type="submit" value="加入购物车 "/>
    </div>
    <div class="details_qh" style="display:none" id="tongzhi"><a href="/tp/Public/javascript:void(0);" class="dhtz">到货通知</a></div>
    <div class="details_qh" style="display:none" id="wu"><a href="/tp/Public/javascript:void(0)">无货</a></div>
    &lt;!&ndash;======到货通知=====&ndash;&gt;
    <div class="dhtz_tc" id="tongZhiCeng">
      <header class="header"><span class="fh left"><a href="/tp/Public/javascript:history.go(-1);">&nbsp;</a></span>到货通知</header>
      <div class="dhtz_bottom">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <input type="hidden" id="tzpid" name="tzpid" value="12161" />
          <tr>
            <td height="45" align="right"  valign="middle" width="20%">姓   名：</td>
            <td height="45" align="left" valign="middle" width="80%"><input type="text" id="name" name="name" value="" class="tz_wbk"></td>
          </tr>
          <tr>
            <td height="45" align="right" valign="middle">邮   箱：</td>
            <td height="45" align="left" valign="middle"><input type="text" id="email" name="email" value=""  class="tz_wbk"></td>
          </tr>
          <tr>
            <td height="45" align="right" valign="middle">手机号：</td>
            <td height="45" align="left" valign="middle"><input type="text" id="mobile" name="mobile" value=""  class="tz_wbk"></td>
          </tr>
          <tr>
            <td height="45" colspan="2" align="center" valign="middle"><a href="/tp/Public/javascript:void(0);" id="tj" class="tz_but">提交</a></td>
          </tr>
        </table>
      </div>
    </div>
   </div>
    </div>-->

  <!--======footer=====-->
    <footer class="footer">
	<div id="footer" class="ft_top">
				<a href="/tp/Public//mobile/member/toMemberLogin.html">登录</a>|<a href="/tp/Public//mobile/member/toMemberRegist.html">注册</a>
			</div>
  	<p><a href="/tp/Public/javascript:scroll(0,0)">返回顶部</a>|<a href="/tp/Public//">返回首页</a>|<a href="/tp/Public//mobile/common/suggestInfos.html">意见反馈</a> </p>
  	<p>Copyright©2000-2015 m.ehaier.com<br />鲁ICP备09096283号 </p>
</footer>
<script id="_trs_ta_js" src="/tp/Public/Scripts/ta.js" async="async" defer="defer"></script>
<script type="text/javascript" src="/tp/Public/Scripts/ehaier.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/baidu.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/ga.js"></script>

<!--联系客服-->
<div class="tc2" style="display:none;">
	<div class="kf_top">
		<p style="font-size:18px;color:#4c4c4c;height:40px;padding-left:60px;line-height:40px;overflow:hidden;">工作时间</p>
		<p class="tc_cg">早8:30 - 晚24:00</p>
	</div>
	<div class="tc_button">
		<ul>
			<li><span onclick="javascript:NTKF.im_openInPageChat('kf_9949_1358748431343');" title="在线客服"><a href="/tp/Public/javascript:void(0)">在线客服</a></span></li>
			<li><a href="/tp/Public/javascript:void(0)" class="lxkf_close">取消</a></li>
		</ul>
	</div>
</div>

<script type="text/javascript">
	
	//ntalk
	NTKF_PARAM = {
				siteid:"kf_9949",
  		settingid: "kf_9949_1358748431343"
    						,itemid:"12161"
  		    				} 
	
	//联系客服打开
	$(".lxkf").click(function(){
		if ($('#load_mask').length) {}
		else{
			var h = $(document.body).height()+"px";
			$("<div id='load_mask' class='tc_zz' style='height:"+h+"' />").appendTo("body");
		}
		$("#load_mask").show();
		var t = $(window).scrollTop(), h = $(window).height(), iTop = 0;
		iTop = ((h - $(".tc2").height()) / 2 + t) + "px";
		$(".tc2").css("top", iTop).show();	
	 
	})
	//联系客服关闭
	$(".lxkf_close").click(function(){
		$(".tc2").hide(); 
		$("#load_mask").hide();
	})
</script>
<script type="text/javascript" src="/tp/Public/Scripts/ntkfstat.js" charset="utf-8"></script> </div>
  
  <!--zepto and extend-->
<script type="text/javascript" src="/tp/Public/Scripts/touch.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/selector.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/swiper-2.4.js"></script>
<script type="text/javascript" src="/tp/Public/Scripts/util.js"></script>
<script type="text/javascript">

$(document).ready(function (e) {
	
	

	//商品图片展示 
	var gallery = $('.swiper-container').swiper({
		slidesPerView: 'auto',
		centeredSlides: true,
		pagination: '.pagination',
		paginationClickable: true,
		/*resizeReInit: true,*/
		keyboardControl: true,
		grabCursor: true,
		/*loop: true,*/ //slidesPerView为auto时不支持loop模式
		autoplay:4000//自动播放的开关及延时
	})

	//购买数量增加或减少
	var doEvent = document.hasOwnProperty("ontouchstart") ? "tap" : "click";
	//减少
	$("#btnMinus").on(doEvent, function () {
		var count = parseInt($("#proCount").val());
		if (count > 1) {
			$("#proCount").val(--count);
		}
	});

	//增加，最多99个
	$("#btnAdd").on(doEvent, function () {
		var count = parseInt($("#proCount").val());
		if (count < 100) {
			$("#proCount").val(++count);
		}
	});
	
	//通知层显示
	$("#tongzhi").click(function(){
		$("#tongzhi").hide(); //通知按钮隐藏
		$("#tongZhiCeng").show();  //通知层显示
	});
	
	//通知层提交
	$("#tj").click(function(){
		var name=$("#name").val();
    	var productId=$("#tzpid").val();
    	var emall=$("#email").val();
    	var mobile=$("#mobile").val();
    	
    	if(Zepto.trim(name) == ""){
    		alert("姓名不能为空");
    		return false;
    	}
    	if(emall=="" && mobile==""){
    		alert("请填写邮箱或手机，不能都为空");
    		return false;
    	}
    	if(emall != ""){
        	if(!isEamll(emall)){
				return false;
			}
    	}
    	if(mobile != ""){
        	if(!isMobileNO(mobile)){
				return false;
			}
    	}
		var regionId = $("#regionId").val();
		var provinceName = $("#provincetip").text();
		var cityName = $("#citytip").text();
		var regionName = $("#regiontip").text();
		$.post("/mobile/item/inform.html"
		,{	name:name,
			productId:productId,
			emall:emall,
			mobile:mobile,
			regionId:regionId,
			provinceName:provinceName,
			cityName:cityName,
			regionName:regionName
		},
		function(data)
		{
			if(data.success){
				alert("设置到货通知成功")
				$("#tongZhiCeng").hide();  //通知层显示
				$("#tongzhi").show();
			}
			else{
				alert("设置到货通知失败");
				$("#tongZhiCeng").hide();  //通知层显示
				$("#tongzhi").show();
			}	
		}, "json")
	});
	
	//手机号校验
	function isMobileNO(mobileNum){
		var pattern = new RegExp("^((13[0-9])|(14[57])|(15[^4,\\D])|(18[0-9]))\\d{8}$");
		if(!pattern.test(mobileNum)){
			alert("手机号不正确！");
			return false;
		}
		return true;
	}
	
	//邮箱校验
	function isEamll(emall){
		var pattern = new RegExp("^([a-zA-Z0-9]*[-_]?[a-zA-Z0-9]+)*@([a-zA-Z0-9]*[-_]?[a-zA-Z0-9]+)+[\\.][A-Za-z]{2,3}([\\.][A-Za-z]{2})?$");
		if(!pattern.test(emall)){
			alert("邮箱不正确！");
			return false;
		}
		return true;
	}
  
});
	  
</script>
<script type="text/javascript">
$(document).ready(function(){
	var provinceId = '';
	var cityId = '';
	var regionId = '';
	var provinceName = '';
	var cityName = '';
	var regionName = '';		  
  	
  	if( provinceId == '') { provinceId='16';}	
  	if( cityId == '') { cityId='173';}
  	if( provinceName == '') { provinceName='山东';}	
  	if( cityName == '') { cityName='青岛';}

	//所有省市区json
	var prcJson = {};
	var province_da = [];
	var city_da = [];
	var region_da = [];
	//加载省市区
	$.ajax({
		type: 'POST',
		url: '/mobile/item/getRegion.html',
		data:'',
		dataType: 'json',
		success: function(data){
			parsePrcJson(data.data);
		},
		/*
		type : 'get',
		dataType : 'jsonp',
		url : 'http://www.ehaier.com/region.php?a=outRegionJson&pid=5949&acid=0&m=1',
		success : function (data) {
			alert(data);
			parsePrcJson(data);
		}
		*/
	});
		
	//解析prcJson
	function parsePrcJson(data){
		
		for( var i=0;i<data.length;i++ ){
			var cur_province = data[i];
			province_da.push({
				'id':cur_province.id,
				'name':cur_province.regionName
			});
			
			for( var j=0;j<cur_province.childs.length;j++ ){
				var cur_city = cur_province.childs[j];
				city_da.push({
					'id':cur_city.id,
					'name':cur_city.regionName,
					'fid':cur_province.id
				});
				
				for( var k=0;k<cur_city.childs.length;k++ ){
					var cur_region = cur_city.childs[k];
					region_da.push({
						'id':cur_region.id,
						'name':cur_region.regionName,
						'fid':cur_city.id
					});
				}
			}
		}
	 //初始化省
	 for(var i=0; i<province_da.length;i++){
	 	$("#provinceId").append("<option value='"+province_da[i].id+"'>"+province_da[i].name+"</option>");
	 }

	//初始化市
	for(var i=0; i<city_da.length;i++){
	     if( city_da[i].fid == provinceId ){
			$("#cityId").append('<option value="'+city_da[i].id+'">'+city_da[i].name+'</option>');
		 }
     }
		     
	//初始化区
	for(var i=0; i<region_da.length;i++){
		 if( region_da[i].fid == cityId ){
			$("#regionId").append('<option value="'+region_da[i].id+'">'+region_da[i].name+'</option>');
		 }
	 }
	 
	//省市区回显或设置默认值
	//省
	$("#provinceId option[value='"+provinceId+"']").attr("selected","selected");
	$("#provincetip").text(provinceName);
	//市
	$("#cityId option[value='"+cityId+"']").attr("selected","selected");
	$("#citytip").text(cityName);
	//区
	if(regionId == '') {
		var count = 0;
		for(var i=0; i<region_da.length;i++){
			 if( region_da[i].fid == cityId ){
			 	count++;
			 	if(count == 1){
			 		regionId = region_da[i].id;
			 		regionName = region_da[i].name;
					$("#regionId option[value='"+region_da[i].id+"']").attr("selected","selected");
					$("#regiontip").text(region_da[i].name);
					break;
			 	}
		 	}
	 	}	
		Zepto.post("/mobile/item/storeRegion.html",
			{
				province : provinceId,
				city : cityId,
				region : regionId,
				regionName : provinceName + " " + cityName + " " + regionName
			},
			function(json,status){
				if(!json.success){
					//console.log("省市区存储失败！");
				}
			}
		);
	}else{
		$("#regionId option[value='"+regionId+"']").attr("selected","selected");
		$("#regiontip").text(regionName);
	}
	
	$("#estore").hide();
	
	//校验库存
	checkStock(regionId);
}

	 (function(){
	  	if(false){
	  		//已收藏
	  		$("#collectIcon").removeClass("icon-collect");
	  		$("#collectIcon").addClass("icon-nav-fav");
	  	}
	  	if(false){
	  		//已点过赞
	  		$("#praiseIcon").removeClass("icon-praise");
	  		$("#praiseIcon").addClass("icon-praised");
	  	}
	  })();
		
	//省选择事件
	$("#provinceId").change(function(){
		var $provinceSel = $("#provinceId option:selected");
		var parentId = $provinceSel.val();
		$("#stockStatus").empty();
		$("#provincetip").text($provinceSel.text());
		$("#cityId option").remove();
		$("#cityId").append('<option value="">选择市</option>');
		$("#citytip").text("选择市");
		$("#regionId option").remove();
		$("#regionId").append('<option value="">选择区</option>');
		$("#regiontip").text("选择区");
		if(parentId == null || parentId == "" || parentId == 0){
			return;
		}
		for( var i=0;i<city_da.length;i++ ){
			if( city_da[i].fid == parentId ){
				$("#cityId").append('<option value="'+city_da[i].id+'">'+city_da[i].name+'</option>');
			}
		}
		hasStock();
	});
	//市选择事件
	$("#cityId").change(function(){
		var $citySel = $("#cityId option:selected");
		var parentId = $citySel.val();
		$("#stockStatus").empty();
		$("#citytip").text($citySel.text());
		$("#regionId option").remove();
		$("#regionId").append('<option value="">选择区</option>');
		$("#regiontip").text("选择区");
		if(parentId == null || parentId == "" || parentId == 0){
			return;
		}
		for( var i=0;i<region_da.length;i++ ){
			if( region_da[i].fid == parentId ){
				$("#regionId").append('<option value="'+region_da[i].id+'">'+region_da[i].name+'</option>');
			}
		}
		hasStock();
	});
	//区选择事件
	$("#regionId").change(function(){
		var $provinceSel = $("#provinceId option:selected");
		var $citySel = $("#cityId option:selected");
		var $regionSel = $("#regionId option:selected");
		var province = $provinceSel.val();
		var city = $citySel.val();
		var region = $regionSel.val();
		var provinceName = $provinceSel.text();
		var cityName = $citySel.text();
		var districtName = $regionSel.text();
		var regionName = provinceName + " " + cityName + " " + districtName;
		$("#regiontip").text($regionSel.text());
		if(region == null || region == "" || region == 0){
			$("#stockStatus").empty();
			return;
		}
		checkStock(region);
		($).post("/mobile/item/storeRegion.html",
			{
				province : province,
				city : city,
				region : region,
				regionName : regionName
			},
			function(json,status){
				if(!json.success){
					//console.log("省市区存储失败！");
				}
			}
		);
	});
	
	/*//库存校验
	function checkStock(regionId){
		var sku = 'BA09Q0090';
		var productId = '12161';
		$.getJSON("/mobile/item/checkStock.html?sku="+sku+"&regionId="+regionId+"&prodId="+productId,function(data,status){
			var json = data;
			if(json.success){
				if(json.data.hasStock){
					if(json.data.expectTime != null){
						hasStock();
						$("#buyImmediately").text("立即购买");
						$("#addCart").show();
						$("#stockStatus").text(json.data.expectTime);
						$("#stockType").text(json.data.stockType);
						$("#tongzhi").hide();
						$("#you").css('display','block');
					}
					if(json.data.isSupportCOD){
						$("#isSupportCOD").text("货到付款，");
					}else{
						$("#isSupportCOD").text("");
					}
				}else if(json.data.bookable){
					if(json.data.expectTime != null){
						hasStock();
						$("#stockStatus").text(json.data.expectTime);
						$("#stockType").text(json.data.stockType);
						$("#tongzhi").hide();
						$("#you").css('display','block');
					}
					if(json.data.bookable){
						$("#buyImmediately").text("立即预定");
						$("#addCart").hide();
						$("#isSupportCOD").text("");
					}
				}else{
					noStock();
					$("#you").hide();
					$("#tongzhi").show();
				}
				//如果是b2c物流模式，更改服务承诺
				if(json.data.isB2C){
					$("#service").text("送货入户");
				}else{
					$("#service").text("送货入户（违约赔付100元），送装同步");
					if(json.data.isLimit==1){
						$("#limit").text("，24小时限达");
					}else{
						$("#limit").text("");
					}
				}
			}else{
				noStock();
				$("#you").hide();
				$("#tongzhi").show();
			}
			checkStore(regionId);
		});
	}
	*/
	/*function checkStore(regionId){
        var stockType = $("#stockType").text();
        if(stockType=="WA" || stockType == "" || stockType == null) return;
		$.ajax({
			url:"/mobile/productmain/storeregion.html",
			type:"POST",
			dataType:"json",
			data:{regionId:regionId},
			success:function(result){
				if(result.success){
                    $("#estore").show();
                    $("#estore a").attr("href","/mobile/o2omini/"+ result.data.storeCode+".html?storeId="+result.data.storeId);
				}else{
                    $("#estore").hide();
				}
			}
		});*/
		/*var regions = [2444,2445,2446,2447,2448,2449,2450,2451,2452,2453,2454];
		for(var index = 0;index < regions.length;index++)
		{
			if(regionId==2452){
				$("#estore").show();
				$("#estore a").attr("href","http://www.ehaier.com/tpl/pddf/m/index.html");
				break;
			}else if(regionId == regions[index]){
				$("#estore").show();
				$("#estore a").attr("href","http://www.ehaier.com/tpl/hcyt/m/index.html");
				break;
			}else{
				$("#estore").hide();
			}
		}*/
	}
	
	/*//有货
	function hasStock(){
		$("#stockStatus").text("");
	}
	//无货
	function noStock(){
		$("#stockStatus").text("无货");
	}

 	 //收藏
  	$("#collect").click(function(){
  		if($("#collectIcon").hasClass("icon-nav-fav")){return false;}
  		url = "/mobile/item/productCollect.html";
		($).getJSON(url,{
			productId : 12161,
			productName : '海尔 冰箱 BCD-216SDEGU1',
			imageUrl : 'http://cdn21.ehaier.com/file/5717590d58e114ec537dfdd1.png'
		}, function(data, status) {
			var json = data;
			if(json.success){
				var redirect = json.data.redirect;
				if(redirect == null){
					//收藏成功
					var count = 552 + 1
					$("#collectIcon").removeClass("icon-collect");
					$("#collectIcon").addClass("icon-nav-fav");
					$("#collectCount").text(count);
				}else{
					window.location.href=redirect;
				}
			}else{
				
			}
		});
  });*/
	/*//加入购物车
	$("#addCart").click(function(){
		var that = this;
		if($(that).hasClass("off")){
			return;
		}else{
			$(that).addClass("off");//add flag off
		}
		var regionId = $("#regionId").val();
		var number = $("#proCount").val();
		var productId = 12161;
		*//*var ckPrice = 0;*//*
		var ckCode = 0;
		var isCK = 0;
		if(regionId == "" || number == "" || productId == ""){
			alert("请选择配送区域！");
			return;
		}
		if(ckCode > 0 || isCK > 0){
			$.getJSON("/mobile/ckcart/addProduct.html?number="+number+"&productId="+productId, function(data, status) {
				var json = data;
				if(json.success){
					location.href ="/mobile/ckcart/myCart.html";
				}else{
					alert("购物车添加失败");
				}
			});
		}else{
			$.getJSON("/mobile/cart/addToCart.html?number="+number+"&productId="+productId, function(data, status) {
				var json = data;
				if(json.success){
					location.href ="/mobile/cart/myCart.html";
				}else{
					alert("购物车添加失败");
				}
			});
		}
	});*/
	
	/*//立即购买
	$("#buyImmediately").click(function(){
		var that = this;
		if($(that).hasClass("off")){
			return;
		}else{
			$(that).addClass("off");//add flag off
			//$(that).removeClass("off");
		}
		var number = $("#proCount").val();
		var productId = 12161;
		var ckPrice = 0;
		var productActivitiesPrice = 0;
		var flashsalesPrice = 0;
		var packageId = 0;
		var bcQrcodePrice = 0;
		*//*var ckPrice = 0;*//*
		var ckCode = 0;
		var isCK = 0;
		if(regionId == "" || number == "" || productId == ""){
			alert("请选择请选择区域！");
			return;
		}
		if(bcQrcodePrice > 0){
			location.href = "/mobile/order/toQuickOrderSubmit.html?productId="+productId+"&bcQrcodeId=${bcQrcodeId}";
		}else if((ckCode > 0 || isCK >0) && packageId == 0){
			location.href = "/mobile/ckcart/buyImmediately.html?number="+number+"&productId="+productId;
		}else if(productActivitiesPrice > 0 || flashsalesPrice > 0 || packageId > 0){
			location.href = "/mobile/order/toQuickOrderSubmit.html?productId="+productId;
		}else{
			location.href = "/mobile/item/buyImmediately.html?number="+number+"&productId="+productId;
		}
	});
	});

	//点赞
  	$("#praise").click(function(){
  		if($("#praiseIcon").hasClass("icon-praised")){return false;}
  		url = "/mobile/item/productPraise.html";
		($).getJSON(url,{
			productId : 12161
		}, function(data, status) {
			var json = data;
			if(json.success){
				var redirect = json.data.redirect;
				if(redirect == null){
					var count = 1033 + 1
					//点赞成功
					$("#praiseIcon").removeClass("icon-praise");
					$("#praiseIcon").addClass("icon-praised");
					$("#praiseCount").text(count);
				}else{
					window.location.href=redirect;
				}
			}else{
				
			}
		});
  });*/
  
  _cigPvUv();//CIG pv/uv单品监测 
  criteo_productMain("12161");//criteo广告投放
</script>
</body>
</html>