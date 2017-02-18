	//品众
	
	var _fxcmd = _fxcmd || [];	
	_fxcmd.sid = 'f79b954c3d78f2cea5ec9b74429f658b';	
	(function () {	
	var _pzfx = document['createElement']('script');	
	_pzfx.type = 'text/javascript';	
	_pzfx.async = true;
	_pzfx.src = '//static.w3t.cn/fx/1/1/fx.js';	
	var sc = document.getElementsByTagName('script')[0];	
	sc.parentNode.insertBefore(_pzfx, sc);
	})();
		
	function _pzRegistMonitoring(){
		_fxcmd.push(['trackEvent','event','reg','reg','1']);
	}

	function _pzOrderMonitoring(orderSn, orderAmount){
		_fxcmd.push(['trackOrder', {
		    oid: orderSn,// 订单ID*
			otp : orderAmount,// 订单总费用*
		    un : '',// 用户名*
		    unid : ''// 用户ID*
		}]);
	}