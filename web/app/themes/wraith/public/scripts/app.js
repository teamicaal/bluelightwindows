(self.webpackChunk=self.webpackChunk||[]).push([[742],{585:function(e,i,n){"use strict";n(609);var a=n(59),s=n.n(a),t=(n(129),n(155),n(80)),o=n.n(t),l=n(609);l((function(){l("#menu-header-menu li.menu-item-has-children").append('<div class="toggle lg:hidden absolute z-20 top-0 right-0 px-2 py-1"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></div>');var e=200;(l("#menu-header-menu > li.menu-item-has-children > .toggle").click((function(){l(this).parent().hasClass("open")?(l(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),l(this).parent().parent().find(".sub-menu").slideUp(e)):(l(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),l(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(e),l(this).parent().toggleClass("open"),l(this).prev().slideToggle(e))})),l("#menu-header-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .toggle").click((function(){l(this).parent().hasClass("open")?(l(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),l(this).parent().parent().find(".sub-menu").slideUp(e)):(l(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),l(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(e),l(this).parent().toggleClass("open"),l(this).prev().slideToggle(e))})),l("#menu-header-menu > li > .sub-menu > li.menu-item-has-children").hover((function(){if(l(window).innerWidth()>991){var e=l(this).find("> ul.sub-menu"),i=l(e).outerWidth();l(window).innerWidth()>l(this).offset().left+l(this).outerWidth()+i?(l(e).css("transform","translateX(100%)"),l(e).css("right","0")):(l(e).css("transform","translateX(-100%)"),l(e).css("left","0"))}})),l(".slick-banner").on("init",(function(){var e=l(".slick-banner .hidden");e.length>1?l(".slick-banner .hidden").each((function(e,i){l(i).removeClass("hidden")})):e.removeClass("hidden")})),l(".slick-banner").slick({dots:!1,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),l(".slick-gallery-landing").slick({dots:!1,infinite:!1,slidesToShow:2,autoplay:!0,slidesToScroll:1,draggable:!0,centerMode:!1}),l(".slick-p").click((function(){l(this).parent().prev().slick("slickPrev")})),l(".slick-n").click((function(){l(this).parent().prev().slick("slickNext")})),l(".mix-container").length)&&(o()(".mix-container")&&console.log("mix"));l.fn.CookieNotice=function(){if(!localStorage.getItem("cookie-notice-dismissed")){var e=this;setTimeout((function(){e.addClass("active")}),1e3)}return this.addClass("cookie-notice"),this},l(document).on("click",".cookie-notice-dismiss",(function(){localStorage.setItem("cookie-notice-dismissed",!0),l(this).parents(".cookie-notice").removeClass("active")})),l("#cookie-notice").CookieNotice(),l(".page-share").click((function(){navigator.share?navigator.share({title:"Share This Page",url:window.location}).then((function(){console.log("Thanks for sharing!")})).catch((function(e){console.log("Couldnt share because of",e.message)})):(l("#panel-share").toggleClass("active"),console.log("navigator.share not supported!"))})),l(".panel-share-close").click((function(){l("#panel-share").removeClass("active")})),l("#nav-primary-toggle").click((function(){l(".nav-primary").toggleClass("open"),l(".nav-backdrop").toggleClass("show")}))})),l(".slick-gallery-landing").slick({dots:!1,infinite:!1,slidesToShow:2,autoplay:!0,slidesToScroll:1,draggable:!0,centerMode:!1}),l(".toggle").click((function(e){var i=l(this).parents(".checkout-step.active");i.removeClass("active"),i.next().addClass("active")}));var r=l(document);r.scroll((function(){r.scrollTop()>=800?(l("#fixed-sidebar").addClass(" block"),l("#fixed-sidebar").removeClass("hidden")):(l("#fixed-sidebar").removeClass("block"),l("#fixed-sidebar").addClass(" hidden"))})),l(".toggler").click((function(){l(this).parents("#fixed-sidebar").toggleClass("hide")}));n(429);var c=n(947),d=n(565),u=n(417);jQuery.event.special.touchstart={setup:function(e,i,n){this.addEventListener("touchstart",n,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.touchmove={setup:function(e,i,n){this.addEventListener("touchmove",n,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.wheel={setup:function(e,i,n){this.addEventListener("wheel",n,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,i,n){this.addEventListener("mousewheel",n,{passive:!0})}},s()().observe(),c.vc.searchPseudoElements=!0,c.vI.add(d.j1w,d.KNi,d.wf8,d.FU$,d.dwZ,d.FGq,d.xiG,u.neY,u.AYu,u.mdU,u.Zzi,u.opf,u.Xs4,u.D9H,u.hwn,d.ptq,d.Uu6,d.I4f,d.eFW,d.NBC,d.zBy,d.A35,d._tD,d.x_I,d.ILF,d.DD4),c.vz.i2svg()},429:function(e,i,n){var a=n(609);a((function(){a(".icaal-contact-form").submit((function(e){var i=a(this),n=i.attr("data-form"),s=i.find(".submit"),t=i.find(".response"),o=i.serializeArray(),l=new FormData,r=icaal_options.api_key_name_1,c=icaal_options.api_key_name_2,d=icaal_options.api_key_name_3,u=icaal_options.api_key_name_4,p=icaal_options.api_key_name_5,h="",f=!1;switch(n){case r:h=icaal_options.api_key_1,f=!0;break;case c:h=icaal_options.api_key_2,f=!0;break;case d:h=icaal_options.api_key_3,f=!0;break;case u:h=icaal_options.api_key_4,f=!0;break;case p:h=icaal_options.api_key_5,f=!0;break;default:f=!1}f?(s.addClass("btn-loading").prop("disabled",!0),t.empty(),a.each(o,(function(e,i){l.append(i.name,i.value)})),i.find('[type="file"]').length>0&&a.each(i.find('[type="file"]'),(function(e,i){var n=a(this).attr("name");a.each(a(this)[0].files,(function(e,i){l.append(n,i)}))})),l.append("security",nonce),a.ajax({url:"https://api.clients.icaal.co.uk/forms/"+h,method:"post",contentType:!1,processData:!1,data:l}).done((function(e){e.redirect_to?location.assign(e.redirect_to):e.message&&t.addAlert("success",e.message),i.find("input").addClass("is-valid").removeClass("is-invalid"),i.find(".invalid-feedback").empty(),i.trigger("reset"),i.trigger("success"),i.trigger("complete")})).fail((function(e){var n=e.responseJSON.errors,o=e.responseJSON.error;s.removeClass("btn-loading").prop("disabled",!1),n?(i.find("input").addClass("is-valid").removeClass("is-invalid"),i.find(".invalid-feedback").empty(),a.each(n,(function(e,i){a("[name="+e+"]").addClass("is-invalid").removeClass("is-valid"),a("[name="+e+"]").next(".invalid-feedback").text(i)})),i.trigger("complete")):o&&(t.addAlert("danger",o),i.trigger("complete"))}))):t.addAlert("danger","No / Incorrect API Key Name Set");return i.on("success",(function(){"function"==typeof ga&&ga("send","event","Enquiry","submit"),"function"==typeof gtag&&gtag("event","Enquiry",{event_category:"submit"}),"function"==typeof __gaTracker&&__gaTracker("send","event","Enquiry","submit")})),i.on("complete",(function(){var e=icaal_options.custom_html;t.append(e)})),!1})),a.fn.addAlert=function(e,i,n,s){var t="";if(n){var o=[];a.each(n,(function(e,i){"The g-recaptcha-response field is required."==i&&(i="reCAPTCHA needs to confirmed.");var n=i;"base"==(e=e.replace(/_/g," "))&&(n=i),o.push("<li>"+n+"</li>")})),i=n='<p style="font-size: 1.4em; font-weight: bold;">'+i+'</p><ul class="mb-0">'+(n=o.join(""))+"</ul>"}s&&(t='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'),this.append('<div class="alert alert-'+e+'">'+t+i+"</div>")}}))},500:function(){},698:function(){},609:function(e){"use strict";e.exports=window.jQuery}},function(e){"use strict";var i=function(i){return e(e.s=i)};e.O(0,[126,692,941],(function(){return i(585),i(500),i(698)}));e.O()}]);
//# sourceMappingURL=app.js.map