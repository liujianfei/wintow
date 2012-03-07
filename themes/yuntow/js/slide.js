function $(id){
	return typeof id === "string" ? document.getElementById(id) : id;
}
function $$(oParent, elem){
	return (oParent || document).getElementsByTagName(elem);
}
function $$$(oParent, sClass){
	var aElem = $$(oParent, '*');
	var aClass = [];
	var i = 0;
	for(i=0;i<aElem.length;i++)if(aElem[i].className == sClass)aClass.push(aElem[i]);
	return aClass;
}
function Slide(){
	this.initialize.apply(this, arguments);
}
Object.extend = function(destination, source){
    for (var property in source) {
        destination[property] = source[property];
    }
    return destination;
};
Slide.prototype = {
	initialize : function(obj, list, but, hove, onEnd){
		if($(obj)){
			this.obj = $(obj);
			this.oList = $$$(this.obj, list)[0];
			this.oUl = $$(this.oList, 'ul')[0];
			this.aList = $$(this.oList, 'li');
			this.aListH = this.aList[0].offsetHeight;
			this.aListW = this.aList[0].offsetWidth;
			this.oBut = $$$(this.obj, but)[0];
			this.aBut = $$(this.oBut, 'li');
			this.oEve(onEnd);
			this.oAction = this.onEnd.action;
			this.onEnd.method == 'mouseover' ? this.method = "mouseover" : this.method = "click";
			this.onEnd.autoplay == 'stop' ? this.autoplay = "stop" : this.autoplay = "play";
			if(this.oAction == 'top'){
				this.oUl.style.height = this.aListH * this.aList.length +'px';
			}else if(this.oAction == 'left'){
				this.oUl.style.width = this.aListW * this.aList.length +'px';
			}else if(this.oAction == 'opacity'){
				this.oUl.style.height = this.aListH +'px';
				var i = 0;
				for(i=0;i<this.aList.length;i++){
					this.aList[i].style.position = 'absolute';
					this.aList[i].className = 'opacity';
				}
				this.aList[0].className = '';
			}else{
				this.oUl.style.height = this.aListH * this.aList.length +'px';
			}
			this.getEvent(hove);
		}
	},
	oEve: function(onEnd){
        this.onEnd = {
			method : 'click',
			autoplay: 'stop'
		};
        Object.extend(this.onEnd, onEnd || {});
    },
	addEvent : function(oElm, strEvent, fuc) {
		window.addEventListener ? oElm.addEventListener(strEvent, fuc, false) : oElm.attachEvent('on' + strEvent, fuc);
	},
	getEvent : function(hove) {
		var _this = this;
		var i = iNow = 0;
		for(i=0;i<this.aBut.length;i++){
			(function(){
				var j = i;
				_this.addEvent(_this.aBut[j], _this.method, function(){
					_this.fnClick(j, hove);
					_this.autoPlayTab(j, hove);
				});
			})();
		}
		this.autoPlayTab(i, hove);
	},
	autoPlayTab : function(iNow, hove){
		if(this.autoplay == 'play'){
			var _this = this;
			this.iNow = iNow;
			this.obj.onmouseover = function(){
				clearInterval(_this.timer);
			};
			this.obj.onmouseout = function(){
				clearInterval(_this.timer);
				_this.timer = setInterval(playTab,3000);
			};
			clearInterval(_this.timer);
			_this.timer = setInterval(playTab,3000);
			function playTab(){
				if(_this.iNow == _this.aBut.length)_this.iNow = 0;
				_this.fnClick(_this.iNow, hove);
				_this.iNow++;
			}
		}
	},
	fnClick : function(oBut, hove){
		var i = 0;
		for(i=0;i<this.aBut.length;i++)this.aBut[i].className = '';
		this.aBut[oBut].className = hove;
		if(this.oAction == 'top'){
			this.sMove(this.oUl, {top:-(this.aListH * oBut)});
		}else if(this.oAction == 'left'){
			this.sMove(this.oUl, {left:-(this.aListW * oBut)});
		}else if(this.oAction == 'opacity'){
			var i = 0;
			for(i=0;i<this.aList.length;i++){
				this.sMove(this.aList[i], {opacity:0});
			}
			this.sMove(this.aList[oBut], {opacity:100});
		}else{
			this.sMove(this.oUl, {top:-(this.aListH * oBut)});
		}
	},
	getStyle : function(obj, attr)
	{
		return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj, false)[attr];
	},
	sMove : function(obj, json, onEnd){
		var _this = this;
		clearInterval(obj.timer);
		obj.timer = setInterval(function(){
			_this.dMove(obj, json, onEnd);
		},30);
	},
	dMove : function(obj, json, onEnd){
		this.attr = '';
		this.bStop = true;
		
		for(this.attr in json){
			this.iCur = 0;			
			this.attr == 'opacity' ? this.iCur = parseInt(parseFloat(this.getStyle(obj, this.attr))*100) : this.iCur = parseInt(this.getStyle(obj, this.attr));
			this.iSpeed = (json[this.attr] - this.iCur) / 7;
			this.iSpeed = this.iSpeed > 0 ? Math.ceil(this.iSpeed) : Math.floor(this.iSpeed);			
			if(json[this.attr] != this.iCur)this.bStop = false;
			if(this.attr == 'opacity'){
				obj.style.filter = 'alpha(opacity:' + (this.iCur + this.iSpeed) +')';
				obj.style.opacity = (this.iCur + this.iSpeed ) / 100;
			}else{
				obj.style[this.attr] = this.iCur + this.iSpeed + 'px';
			}
		}
		if(this.bStop){
			clearInterval(obj.timer);			
			if(onEnd)onEnd();
		}
	}
};