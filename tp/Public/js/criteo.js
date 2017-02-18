	//criteo广告投放
	var criteo_q = criteo_q || [];
	//首页
	function criteo_index(){
		criteo_q.push(
			{ event: "setAccount", account: 19314 },
			{ event: "setSiteType", type: "m" },
			{ event: "viewHome" }
		);
	}
	//单品页面,参数列表为产品id、以及当前用户的登陆状态
	function criteo_productMain(id){
		criteo_q.push(
        	{ event: "setAccount", account: 19314 },
			{ event: "setSiteType", type: "m" },
			{ event: "viewItem", item: id }
		);
	}

	//购物车列表页面,参数列表为购物车列表以及当前用户的登陆状态
	function criteo_cartList(pl){
		criteo_q.push(
        	{ event: "setAccount", account: 19314 },
			{ event: "setSiteType", type: "m" },
			{event: "viewBasket",item:pl}
		);
	}
	
	
	//订单确认页面,参数列表为购物车列表以及当前用户的登陆状态
	function criteo_orderSubmitSuccess(pl,orderSn){
		criteo_q.push(
        	{ event: "setAccount", account: 19314 },
			{ event: "setSiteType", type: "m" },
			{event: "trackTransaction",id:orderSn,item:pl}
		);
	}
	//商品列表页
	function criteo_productList(pl){
		criteo_q.push(
        	{ event: "setAccount", account: 19314 },
			{ event: "setSiteType", type: "m" },
			{event: "viewList",item:pl}
		);
	}