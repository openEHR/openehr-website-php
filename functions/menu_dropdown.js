var MENU={};

function T$(i) {return document.getElementById(i)}
function T$$(e,p){return p.getElementsByTagName(e)}

MENU.dropdown=function() {
	var p={fade:1,slide:1,active:0,timeout:200}, init=function(n,o){
		for(s in o){p[s]=o[s]} 		
		p.n=n; 
		this.build()
		};
	init.prototype.build=function(){
		this.h=[]; this.c=[]; this.z=1000;
		var s=T$$('ul',T$(p.id)), l=s.length, i=0; p.speed=p.speed?p.speed*.1:.5;
		for(i;i<l;i++){
			var h=s[i].parentNode; this.h[i]=h; this.c[i]=s[i];
			h.onmouseover=new Function(p.n+'.show('+i+',1)');
			h.onmouseout=new Function(p.n+'.show('+i+')')
			}
		};
	init.prototype.show=function(x,d){
		var c=this.c[x], h=this.h[x];
		clearInterval(c.t); clearInterval(c.i); c.style.overflow='hidden';
		if(d){
			if(p.active&&h.className.indexOf(p.active)==-1){h.className+=' '+p.active}
			if(p.fade||p.slide){c.style.display='block';
				if(!c.m){
					if(p.slide){c.style.visibility='hidden'; c.m=c.offsetHeight; c.style.height='0'; c.style.visibility=''}
					else{c.m=100; c.style.opacity=0; c.style.filter='alpha(opacity=0)'}
					c.v=0
					}
				if(p.slide){
					if(c.m==c.v){c.style.overflow='visible'}
					else{c.style.zIndex=this.z; this.z++; c.i=setInterval(function(){slide(c,c.m,1)},20)}
					}
				else{c.style.zIndex=this.z; this.z++; c.i=setInterval(function(){slide(c,c.m,1)},20)}
				}
			else{c.style.zIndex=this.z; c.style.display='block'}
			}
		else{c.t=setTimeout(function(){hide(c,p.fade||p.slide?1:0,h,p.active)},p.timeout)}
		};
	function hide(c,t,h,s){
		if(s){h.className=h.className.replace(s,'')}
		if(t){c.i=setInterval(function(){slide(c,0,-1)},20)}
		else{c.style.display='none'}
		}
	function slide(c,t,d){
		if(c.v==t){
			clearInterval(c.i); c.i=0;
			if(d==1){
				if(p.fade){c.style.filter=''; c.style.opacity=1}
				c.style.overflow='visible'
				}
			}
			else{
				c.v=(t-Math.floor(Math.abs(t-c.v)*p.speed)*d);
				if(p.slide){c.style.height=c.v+'px'}
				if(p.fade){var o=c.v/c.m; c.style.opacity=o; c.style.filter='alpha(opacity='+(o*100)+')'}
				}
			}
			return{init:init}
		}();