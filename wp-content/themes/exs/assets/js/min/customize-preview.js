"use strict";!function(o){o.bind("preview-ready",function(){var v=document,b=window,u=document.getElementById.bind(document);o.selectiveRefresh.bind("partial-content-rendered",function(l){switch(l.partial.params.selector){case"#to-top-wrap":var s=u("to-top");s&&(s.addEventListener("click",function(e){e.preventDefault(),b.scroll({top:0,left:0,behavior:"smooth"})}),b.addEventListener("scroll",function(e){60<b.pageYOffset?s.classList.add("visible"):s.classList.remove("visible")}),b.dispatchEvent(new Event("scroll")));break;case"#top-wrap":u("header-affix-wrap")&&(n=u("header"),f=(a=n).offsetTop,n=a.id,p=v.getElementById("header-absolute-wrap"),r=a.getAttribute("data-bg"),c=[],(d="header"===n&&p&&r&&a.classList.contains("transparent"))&&(c=r.split(" ")),b.onscroll=function(e){b.pageYOffset>=f?a.classList.contains("affix")||(d&&o(a,c,!0),a.classList.add("affix")):a.classList.contains("affix")&&(d&&o(a,c,!1),a.classList.remove("affix")),0===b.pageYOffset&&a.classList.contains("affix")&&(d&&o(a,c,!1),a.classList.remove("affix")),this.oldScroll>this.scrollY?(a.classList.add("scrolling-up"),a.classList.remove("scrolling-down")):(a.classList.remove("scrolling-up"),a.classList.add("scrolling-down")),this.oldScroll=this.scrollY}),b.dispatchEvent(new Event("scroll"));n=u("nav_close");n&&n.addEventListener("click",function(){b.dispatchEvent(new Event("scroll"))});break;case"#preloader-wrap":var e=u("preloader");e&&setTimeout(function(){e.classList.add("loaded")},1500);break;case"#layout":if("undefined"!=typeof Masonry&&"undefined"!=typeof imagesLoaded){var i=v.querySelectorAll(".masonry");if(i.length)for(var t=0;t<i.length;t++)imagesLoaded(i[t],function(e){new Masonry(e.elements[0],{itemSelector:".grid-item",columnWidth:".grid-sizer",percentPosition:!0})})}break;case"head":jQuery("body").animate({opacity:1},1e3)}function o(s,e,i){i?s.classList.contains("affix")||(s.classList.remove("i"),e.forEach(function(e){s.classList.add(e)})):s.classList.contains("affix")&&(e.forEach(function(e){s.classList.remove(e)}),s.classList.add("i"))}var a,f,n,p,r,c,d});[{controlId:"blog_single_sidebar_position",view:"post"},{controlId:"blog_sidebar_position",view:"archive"},{controlId:"search_sidebar_position",view:"search"},{controlId:"shop_sidebar_position",view:"shop"},{controlId:"product_sidebar_position",view:"product"},{controlId:"bbpress_sidebar_position",view:"bbpress"},{controlId:"buddypress_sidebar_position",view:"buddypress"},{controlId:"events_sidebar_position",view:"events"},{controlId:"event_sidebar_position",view:"event"},{controlId:"wpjm_sidebar_position",view:"wpjm"}].forEach(function(e,s){var i,t;i=e.controlId,t=e.view,o(i,function(e){e.bind(function(e){if(t===b.exsPreviewObject.viewGlobal)switch(v.body.classList.remove("with-sidebar","sidebar-left"),e){case"left":v.body.classList.add("with-sidebar","sidebar-left");break;case"right":v.body.classList.add("with-sidebar")}})})})})}(wp.customize);