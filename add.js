

;(function () {
    /* 
    * addition   在数据源上附加数据
    * dataSrc   数据源
    * position  为top时在窗口顶部显示,默认是窗口底部显示
    * defaultCity   回显的默认城市
    * grade         显示列数 如:省,省市,省市区
    * poster        获取到需要触发该事件的input元素，并且点击确定之后的结果要写入这个的value里面
    * shade         阴影class
    * callback      点击确定后的回调函数
    * */
    var region = function (options) {
        var poster= options.poster || '';
        var shade= options.shade || '';
        if (poster=='shen' | poster=='city' | poster=='area') {
            throw new Error(' Please do not use the id name = shen,city,area');
        }
        if (!shade) {
            throw new Error(' Please add a div container for carrying the shadows ');
        }
        this.addition=options.addition;
        this.dataSrc=options.dataSrc;
        this.position=options.position;
        this.deflaultCityIndex='';
        this.deflaultShenIndex='';
        this.callback = options.callback;
        this.deflaultCity=options.defaultCity;
        this.grade= options.grade || '';


        //判断有多少列li，设置显示列数
        var shenH='',cityH='',quH='';
        var hidden='"display: none"';
        if(this.grade=='1'){
            quH=cityH=hidden;
        }else if(this.grade=='2'){
            quH=hidden;
        }else if(this.grade=='3'){
        }else{
            console.log('无效数据 '+this.grade);
        }

        var self = this;
        this.dom =
            '<div class="box_btn">' +
                '<span href="javascript:void(0);" id="close">取消</span>' +
                '<span class="current-city">选择城市</span>' +
                '<span id="determine">确定</span>' +
            '</div>' +
            '<div id="box">' +
                '<div class="box_info">' +
                    '<div id="shen-div">' +
                        '<ul id="shen" style='+shenH+'></ul>' +
                            '<div class="border"></div>' +
                    '</div>' +
                    '<div id="city-div">' +
                        '<ul id="city" style='+cityH+'></ul>' +
                        '<div class="border"></div>' +
                    '</div>' +
                    '<div id="area-div" >' +
                        '<ul id="area" style='+quH+'></ul>' +
                        '<div class="border"></div>' +
                    '</div>' +
                '</div>' +
            '</div>';		//先定义要加到html里面的dom结构
        this.body = document.body;		//获取到body
        this.index = 0;					//初始化index默认值
        this.addInp = document.getElementById(poster);    //获取到需要触发该事件的input元素，并且点击确定之后的结果要写入这个的value里面
        this.shade =document.getElementById(shade) ;
        this.addInp.addEventListener('touchstart', function (event) {
            self.inputClick();

            //todo
            //判断显示的位置
            var dataAdd=document.getElementsByClassName('dataAdd');
            if(self.position=='top' && dataAdd){
               dataAdd[0].style.bottom=null;
               dataAdd[0].style.top='0px';
            }

            if(self.grade=='1'){
                document.getElementById('shen-div').style.width ="99.33%";
            }else if(self.grade=='2'){
                document.getElementById('shen-div').style.width ="49.33%";
                document.getElementById('city-div').style.width ="49.33%";
            }else if(self.grade=='3'){

            }else{
                console.log('非法数据 '+this.grade);
            }
            //removeClass
            self.toggleClass(self.shade,'hidden');
        }, false);
    }
    region.prototype = {
        toggleClass :function (obj,cls){
            var t= obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
            if(t){
                if (obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'))) {
                    var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
                    obj.className = obj.className.replace(reg, ' ');
                }
            }else{
                if (!obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'))) obj.className += " " + cls;
            }
        },
        inputClick: function () {
            var className = document.getElementsByClassName('dataAdd');
            if (className.length <= 0) {
                var self = this;
                var div = document.createElement('div');
                div.className = 'dataAdd';
                div.innerHTML = this.dom;
                this.body.appendChild(div);			//新建div元素为这个元素添加class并且把dom添加进去然后再添加到body里面
                this.shen = document.getElementById('shen');
                this.city = document.getElementById('city');
                this.qu = document.getElementById('area');			//添加进去之后就可以获取到省、市、区的ul结构
                this.shen.index = 0;
                this.city.index = 0;
                this.qu.index = 0;
                this.shen.style.marginTop = 0;//aaaaaa
                this.city.style.marginTop = 0;
                this.qu.style.marginTop = 0;
                this.box = document.getElementById('box');
                this.boxHeight = box.offsetHeight;
                this.close = document.getElementById('close');
                this.determine = document.getElementById('determine');
                this.borderTop = document.getElementsByClassName('border')[0].offsetTop;
                this.shenStart = this.borderTop;
                this.shenResult = this.borderTop;
                this.cityStart = this.borderTop;
                this.cityResult = this.borderTop;
                this.quStart = this.borderTop;
                this.quResult = this.borderTop;				//分别设置省、市、区鼠标移上和离开的值以便下次再移动的时候不会出错
                this.cityArr = null;
                this.box.parentNode.style.marginBottom = 0 + 'px';
                self.close.addEventListener('touchstart', function (event) {
                    this.parentNode.parentNode.style.marginBottom = -self.boxHeight + 'px';
                    var $this = this.parentNode.parentNode;
                    event.preventDefault();
                    setTimeout(function () {
                        $this.remove();
                    }, 150);
                    self.toggleClass(self.shade,'hidden');
                });

                self.determine.addEventListener('touchstart', function () {
                    var shenIndex = self.shen.index;
                    var shiIndex = self.city.index;
                    var quIndex = self.qu.index;
                    var shenTxt = self.shen.getElementsByTagName('li')[shenIndex].innerHTML;
                    var shiTxt = self.city.getElementsByTagName('li')[shiIndex].innerHTML;
                    var quTxt = self.qu.getElementsByTagName('li')[quIndex].innerHTML;
                    var add = shenTxt + '-' + shiTxt + '-' + quTxt;
                    self.addInp.value = add;
                    if (typeof self.callback==='function') {
                        self.callback(add);
                    }

                    this.parentNode.parentNode.style.marginBottom = -self.boxHeight + 'px';
                    var $this = this.parentNode.parentNode;
                    event.preventDefault();
                    setTimeout(function () {
                        $this.remove();
                    }, 150);
                    self.toggleClass(self.shade,'hidden');
                });
                //发送ajax请求  请求成功后回调处理
                this.ajaxFun(self.dataSrc, function (data) {
                    self.buildIndex(data);
                    for (var i = 0; i < data.length; i++) {
                        var dom = document.createElement('li');
                        dom.innerHTML = data[i].name;
                        dom.index = i;
                        self.shen.appendChild(dom);
                    }
                    self.cityFun(0, data[0].city);
                    self.shen.style.transform = 'translate3d(0,' + self.borderTop + 'px,0)';
                    self.city.style.transform = 'translate3d(0,' + self.borderTop + 'px,0)';
                    self.qu.style.transform = 'translate3d(0,' + self.borderTop + 'px,0)';
                    self.shen.style.webkitTransform = 'translate3d(0,' + self.borderTop + 'px,0)';
                    self.city.style.webkitTransform = 'translate3d(0,' + self.borderTop + 'px,0)';
                    self.qu.style.webkitTransform = 'translate3d(0,' + self.borderTop + 'px,0)';
                    /*self.qu.style.webkitTransform = 'translate3d(0,' + self.borderTop + 'px,0)';*/

                    self.shen.addEventListener('touchstart', function (e) {
                        self.shenStart = self.touchStart(this, self.shenStart, e);
                    });

                    self.shen.addEventListener('touchmove', function (e) {
                        e.preventDefault();
                        var callBack = self.touchMove(this, self.shenResult, self.shenStart, e);
                        self.shenStart = callBack.start;
                        self.shenResult = callBack.result;
                    });

                    self.shen.addEventListener('touchend', function () {
                        self.shenResult = self.touchEnd(this, self.shenResult, data, 'shen');
                    });

                    self.shen.addEventListener('touchcancel', function () {
                        self.shenResult = self.touchEnd(this, self.shenResult, data, 'shen');
                    });

                    self.qu.addEventListener('touchstart', function (e) {
                        self.quStart = self.touchStart(this, self.quStart, e);
                    });

                    self.qu.addEventListener('touchmove', function (e) {
                        e.preventDefault();
                        var callBack = self.touchMove(this, self.quResult, self.quStart, e);
                        self.quStart = callBack.start;
                        self.quResult = callBack.result;
                    });

                    self.qu.addEventListener('touchend', function () {
                        self.quResult = self.touchEnd(this, self.quResult, data, 'qu');
                    });
                    self.qu.addEventListener('touchcancel', function () {
                        self.quResult = self.touchEnd(this, self.quResult, data, 'qu');
                    });

                    self.city.addEventListener('touchstart', function (e) {
                        self.cityStart = self.touchStart(this, self.cityStart, e);
                    });

                    self.city.addEventListener('touchmove', function (e) {
                        e.preventDefault();
                        var callBack = self.touchMove(this, self.cityResult, self.cityStart, e);
                        self.cityStart = callBack.start;
                        self.cityResult = callBack.result;
                    });

                    self.city.addEventListener('touchend', function () {
                        self.cityResult = self.touchEnd(this, self.cityResult, data, 'city');
                    });
                    self.city.addEventListener('touchcancel', function () {
                        self.cityResult = self.touchEnd(this, self.cityResult, data, 'city');
                    });

                    // 设置回显默认值
                    self.touchEnd(self.shen, -(self.deflaultShenIndex*30-100), data, 'shen');
                    self.touchEnd(self.city, -(self.deflaultCityIndex*30-100), data, 'city');
                    self.touchEnd(self.qu, self.borderTop, data, 'qu');
                });
            }

        },

        ajaxFun: function (path, callBack) {		//新建ajax请求 请求成功返回data
            var data = null;
            var self = this;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', path);
            xhr.onreadystatechange = function () {
                if (xhr.status == 200 && xhr.readyState == 4) {
                    data = JSON.parse(xhr.response);
                    callBack(data);
                }
            }
            xhr.send(null);
        },

        touchStart: function (self, start, e) {			//手指按下移除过渡效果获取到手指当前位置并返回start值
            self.style.transition = '';
            self.style.webkitTransition = '';
            start = e.changedTouches[0].pageY;
            return start
        },

        touchMove: function (self, result, start, e) {
            var height = self.offsetHeight;
            result = result + e.changedTouches[0].pageY - start;
            start = e.changedTouches[0].pageY;
            if (result >= this.borderTop) {
                result--;
            } else if (result <= -(height - this.borderTop * 2)) {
                result++;
            }
            self.style.transform = 'translate3d(0,' + result + 'px,0)';
            self.style.webkitTransform = 'translate3d(0,' + result + 'px,0)';
            return {
                result: result,
                start: start
            };
        },

        touchEnd: function (self, result, data, type) {
            // result 表示touchEnd事件后第一个li的top与box的top之间的距离.
            var height = self.offsetHeight;			//获取到当前ul的高度
            var listHeight = self.getElementsByTagName('li')[0].offsetHeight;//获取ul中li的高度

            if (result >= this.borderTop) {//第一个li在选择框边界下方
                result = this.borderTop;
                this.index=0;
            } else if (result <= -(height - this.boxHeight / 2)) {//最后一个li在选择框边界上方
                result = -(height - this.boxHeight / 2);
                this.index = self.getElementsByTagName('li').length - 1;
            } else {//li在选择框中
                //计算选中的li在arr中的位置
                this.index = Math.round(Math.abs(result - this.boxHeight / 2 + listHeight) / listHeight);
                if (this.index > self.getElementsByTagName('li').length) {
                    this.index = self.getElementsByTagName('li').length - 1;
                }
                result = -this.index * 30 + this.borderTop;
            }
            self.index = this.index;
            self.style.transition = 'all .2s';
            self.style.transform = 'translate3d(0,' + result + 'px,0)';
            self.style.webkitTransition = 'all .2s';
            self.style.webkitTransform = 'translate3d(0,' + result + 'px,0)';
            if (type == 'shen') {
                this.cityArr = data[this.index].city;
                this.cityFun(this.index, this.cityArr);
                this.city.style.transform = 'translate3d(0,' + this.borderTop + 'px,0)';
                this.qu.style.transform = 'translate3d(0,' + this.borderTop + 'px,0)';
                this.city.style.webkitTransform = 'translate3d(0,' + this.borderTop + 'px,0)';
                this.qu.style.webkitTransform = 'translate3d(0,' + this.borderTop + 'px,0)';

                this.touchEnd(this.city, this.borderTop, data, 'city');//重新计算city的index

            } else if (type == 'city') {
                if (this.cityArr == null) {
                    this.cityArr = data[0].city;
                }
                this.quFun(this.cityArr[this.index].area);
                this.qu.style.transform = 'translate3d(0,' + this.borderTop + 'px,0)';
                this.qu.style.webkitTransform = 'translate3d(0,' + this.borderTop + 'px,0)';

                this.touchEnd(this.qu, this.borderTop, data, 'qu');//重新计算qu的index
            }
            return result;
        },

        cityFun: function (index, data) {
            this.city.innerHTML = '';
            for (var i = 0; i < data.length; i++) {
                var dom = document.createElement('li');
                dom.innerHTML = data[i].name;
                dom.index = i;
                this.city.appendChild(dom);
            }
            this.quFun(data[0].area);
        },

        quFun: function (data) {
            this.qu.innerHTML = '';
            for (var i = 0; i < data.length; i++) {
                var dom = document.createElement('li');
                dom.innerHTML = data[i];
                dom.index = i;
                this.qu.appendChild(dom);
            }
        },
        buildIndex: function (data) {
            if (this.addition=='全国') {
                var cn={
                    "name": '全国',
                    "city":[{"name": '全国', "area":['全国']}]
                };
                data.unshift(cn);
            }
            //对所有省市编码
            for (var i = 0,shenInd=0,shenLen=data.length; i < shenLen; i++) {
                data[i].tc=(++shenInd)*10000;//省级  thisCode 当前的code
                var _cityArr=data[i].city;
                for (var j = 0,cityInd=0,cityLen=_cityArr.length; j <cityLen ; j++) {
                    _cityArr[j].tc=(++cityInd)*100+data[i].tc;//市级  thisCode 当前的code
                    _cityArr[j].pc=data[i].tc;//  preCode 上一级的code
                    if(this.deflaultCity==_cityArr[j].name){
                        this.deflaultCityIndex=j+1;
                        this.deflaultShenIndex=i+1;
                    }
                }
            }
        }

    }
    window.region = region;
})();
