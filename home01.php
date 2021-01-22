<!DOCTYPE html>
<html lang="en">
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<head runat="server">


<meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="home01.css" rel="stylesheet" type="text/css" />




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






<meta charset="UTF-8">
 
    <title>ระบบขอใช้บริการยานพาหนะ KU.CSC</title>



    </style>
    <script type='text/javascript' src='https://www.csc.ku.ac.th/th/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://www.csc.ku.ac.th/th/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.0' id='tp-tools-js'></script>
    <script type='text/javascript' src='https://www.csc.ku.ac.th/th/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.2.2' id='revmin-js'></script>
    <script type='text/javascript' src='https://www.csc.ku.ac.th/th/wp-content/themes/smm/js/jquery.prettyPhoto.js?ver=5.5.3' id='pretty-photo-smartmag-js'></script>
    <script type='text/javascript' src='https://www.csc.ku.ac.th/th/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="https://www.csc.ku.ac.th/th/index.php?rest_route=/" /><link rel="alternate" type="application/json" href="https://www.csc.ku.ac.th/th/index.php?rest_route=/wp/v2/pages/2832" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.csc.ku.ac.th/th/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.csc.ku.ac.th/th/wp-includes/wlwmanifest.xml" /> 
    <meta name="generator" content="WordPress 5.5.3" />
    <link rel="canonical" href="https://www.csc.ku.ac.th/th/" />
    <link rel='shortlink' href='https://www.csc.ku.ac.th/th/' />
    <link rel="alternate" type="application/json+oembed" href="https://www.csc.ku.ac.th/th/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fwww.csc.ku.ac.th%2Fth%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.csc.ku.ac.th/th/index.php?rest_route=%2Foembed%2F1.0%2Fembed&#038;url=https%3A%2F%2Fwww.csc.ku.ac.th%2Fth%2F&#038;format=xml" />
    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://www.csc.ku.ac.th/th/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="https://www.csc.ku.ac.th/th/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 6.2.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e){			
          try {								
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
              newh;
            pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
            e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
            if(e.layout==="fullscreen" || e.l==="fullscreen") 						
              newh = Math.max(e.mh,window.innerHeight);				
            else{					
              e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
              for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
              e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
              e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
              for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                        
              var nl = new Array(e.rl.length),
                ix = 0,						
                sl;					
              e.tabw = e.tabhide>=pw ? 0 : e.tabw;
              e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
              e.tabh = e.tabhide>=pw ? 0 : e.tabh;
              e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
              for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
              sl = nl[0];									
              for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
              var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
    
              newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
            }			
            
            if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
            document.getElementById(e.c).height = newh;
            window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
          } catch(e){
            console.log("Failure at Presize of Slider:" + e)
          }					   
          };</script>
    <noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	
    <!--[if lt IE 9]>
    <script src="https://www.csc.ku.ac.th/th/wp-content/themes/smm/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    
    
    <script>
    document.querySelector('head').innerHTML += '<style class="bunyad-img-effects-css">.main img, .main-footer img { opacity: 0; }</style>';
    </script>
      
    














</head>

<style> 



</style>
<body>






<?php require_once("../admin/body01.php");?>














<footer class="tablink03">

<div class="wrap">

    <ul class="widgets row cf">

<li class="widget col-4 bunyad-about">			<h3 class="widgettitle">ติดต่อ/สอบถาม</h3>		
<div class="about-widget">

            <img src="http://occ.csc.ku.ac.th/dcs/wp-content/uploads/sites/4/2020/09/logoku-occ-white4-DCS.svg" />			
        
<p>มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร 59 หมู่ 1 ถ.วปรอ 366 ต.เชียงเครือ อ.เมือง จ.สกลนคร 47000 โทรศัพท์ xxx-xxxxxx</p>

</div>

</li>		
<li class="widget col-4 widget_text"><h3 class="widgettitle">หน่วยงานภายใน</h3>			<div class="textwidget">งาน ...........................................<br/>
งาน ...........................................<br/>
งาน ...........................................<br/></div>
</li><li class="widget col-4 widget_text"><h3 class="widgettitle">ลิงค์ที่เกี่ยวข้อง</h3>			<div class="textwidget">.....................................................
.....................................................
.....................................................

<div 
class="elfsight-widget-facebook-chat elfsight-widget" 
data-elfsight-facebook-chat-options="%7B%22facebookSubgoup%22%3Anull%2C%22whatsappSubgoup%22%3Anull%2C%22telegramSubgoup%22%3Anull%2C%22viberSubgoup%22%3Anull%2C%22rumbletalkSubgoup%22%3Anull%2C%22divider-1%22%3Anull%2C%22userAccessToken%22%3A%22EAADQZAoJZBZBH0BANJGSCD3rZA8Wtih64P3xIRGw32Se7Nat5w90XgikqlxZAtgtNMUPoYyl56SC90pEN49DHL767xbwvzeAZAdrRZCGssZCpmVMlmhNc8Q2CtGN2XibyT6ZAE7kGqSXAFJ3IZASGuOcQrs8NQEKlL7nXnx9inQr7ITQZDZD%22%2C%22page%22%3A%7B%22name%22%3A%22%5Cu0e01%5Cu0e2d%5Cu0e07%5Cu0e1a%5Cu0e23%5Cu0e34%5Cu0e01%5Cu0e32%5Cu0e23%5Cu0e01%5Cu0e25%5Cu0e32%5Cu0e07%20%5Cu0e21%5Cu0e01.%5Cu0e09%5Cu0e01%5Cu0e2a.%22%2C%22value%22%3A%22116429313538572%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fwww.facebook.com%5C%2F116429313538572%22%2C%22picture%22%3A%7B%22data%22%3A%7B%22height%22%3A50%2C%22is_silhouette%22%3Afalse%2C%22url%22%3A%22https%3A%5C%2F%5C%2Fscontent.fkkc2-1.fna.fbcdn.net%5C%2Fv%5C%2Ft1.0-1%5C%2Fcp0%5C%2Fp50x50%5C%2F119613382_116485250199645_7546888147876500217_n.jpg%3F_nc_cat%3D102%26_nc_sid%3Ddbb9e7%26_nc_eui2%3DAeF8EhxwzFseN7xkV9QzIoBupWRNRSKKMoulZE1FIooyi0VJw-UOi-nlMbmOem-z9V5lToXlKby4D748jWrinZX_%26_nc_ohc%3Dkf65DrePJPkAX8APGny%26_nc_ht%3Dscontent.fkkc2-1.fna%26oh%3D3db72479e51d38cb940a8b71bfb819da%26oe%3D5F89BC11%22%2C%22width%22%3A50%7D%7D%7D%2C%22phone%22%3Anull%2C%22link%22%3Anull%2C%22userAccessTokenBubbleSubgroup%22%3Anull%2C%22bubbleIcon%22%3A%22fb-chat%22%2C%22bubbleText%22%3A%22%22%2C%22picture%22%3A%22facebook%22%2C%22pictureLibrary%22%3A%7B%22photo%22%3A%22%22%7D%2C%22pictureCustom%22%3A%22%22%2C%22name%22%3A%22%22%2C%22nameCaptionType%22%3A%22replyTime%22%2C%22nameCaptionReplyTime%22%3A%22Typically%20replies%20within%20a%20day%22%2C%22nameCaptionCustom%22%3A%22%22%2C%22welcomeMessage%22%3A%22Hi%20there%20%5Cud83d%5Cudc4b%3Cbr%3EHow%20can%20I%20help%20you%3F%22%2C%22buttonText%22%3A%22Start%20Chat%22%2C%22buttonIconVisible%22%3Atrue%2C%22position%22%3A%22floating%22%2C%22align%22%3A%22right%22%2C%22whereToDisplayChat%22%3A%22allPages%22%2C%22excludedPages%22%3A%5B%5D%2C%22specificPages%22%3A%5B%5D%2C%22devicesToDisplay%22%3A%5B%22mobile%22%2C%22desktop%22%5D%2C%22showChatTo%22%3A%22allVisitors%22%2C%22displayDays%22%3A%5B0%2C1%2C2%2C3%2C4%2C5%2C6%5D%2C%22timeSchedule%22%3Afalse%2C%22displayStartTime%22%3A%2200%3A00%22%2C%22displayEndTime%22%3A%2200%3A00%22%2C%22timeZone%22%3A0%2C%22timeOnPage%22%3A0%2C%22timeOnSite%22%3A0%2C%22scrollPosition%22%3A0%2C%22exiIntent%22%3Afalse%2C%22notifications%22%3A%5B%22bubbleBadge%22%2C%22tabTitle%22%5D%2C%22headerBackgroundColor%22%3A%22rgb%28250%2C%20250%2C%20250%29%22%2C%22buttonColor%22%3A%22rgb%280%2C%20132%2C%20255%29%22%2C%22bubbleBackgroundColor%22%3A%22rgb%28255%2C%20255%2C%20255%29%22%2C%22bubbleIconColor%22%3A%22rgb%280%2C%20132%2C%20255%29%22%2C%22buttonBorderRadius%22%3A8%2C%22widgetId%22%3A%221%22%7D" 
data-elfsight-facebook-chat-version="1.2.0"
data-elfsight-widget-id="elfsight-facebook-chat-1">
</div>
</div>
</li>			</ul>

</div>



<div class="lower-foot">
<div class="wrap">

        
<div class="widgets">
            <div class="textwidget">Development by Department of Information Technology, Kasetsart University Chalermphrakiat Sakonnakhon Province Campus. | Call : 042-725042 Ext 5503</div>
    </div>

    
</div>



</div>		




</footer>

</div> <!-- .main-wrap -->

<style type="text/css">
#arcontactus-message-callback-phone-submit{
font-weight: normal;
}
.arcontactus-widget .arcontactus-message-button .pulsation{
-webkit-animation-duration:0s;
animation-duration: 0s;
}
#ar-zalo-chat-widget{
display: none;
}
#ar-zalo-chat-widget.active{
display: block;
}
.arcontactus-widget .messangers-block,
.arcontactus-widget .arcu-popup{
width: auto;
}
.messangers-block .messanger p, .messangers-block .messanger .arcu-item-label{
white-space: nowrap;
}

.arcontactus-widget.no-bg .messanger .arcu-item-label{
background: #;
}
.arcontactus-widget.no-bg .messanger:hover .arcu-item-label{
background: #;
}
.arcontactus-widget.no-bg .messanger .arcu-item-label:before,
.arcontactus-widget.no-bg .messanger:hover .arcu-item-label:before{
border-left-color: #;
}
.arcontactus-widget.left.no-bg .messanger:hover .arcu-item-label:before{
border-right-color: #;
border-left-color: transparent;
}


@media(max-width: 428px){
.arcontactus-widget..arcontactus-message.opened,
.arcontactus-widget..arcontactus-message.open,
.arcontactus-widget..arcontactus-message.popup-opened{
left: 0;
right: 0;
bottom: 0;
}
}</style>
<div id="arcontactus"></div>
<script src="https://occ.csc.ku.ac.th/dcs/wp-content/plugins/ar-contactus/res/js/jquery.contactus.min.js?version=1.9.7"></script>
<script type="text/javascript">
var zaloWidgetInterval;
var tawkToInterval;
var tawkToHideInterval;
var skypeWidgetInterval;
var lcpWidgetInterval;
var closePopupTimeout;
var lzWidgetInterval;
var paldeskInterval;
var arcuOptions;
var arcItems = [];
window.addEventListener('load', function(){
jQuery('#arcontactus').remove();
var $arcuWidget = jQuery('<div>', {
id: 'arcontactus'
});
jQuery('body').append($arcuWidget);
    arCuClosedCookie = arCuGetCookie('arcu-closed');
jQuery('#arcontactus').on('arcontactus.init', function(){
jQuery('#arcontactus').addClass('arcuAnimated').addClass('');
jQuery('#arcu-callback-form').append('<input type="hidden" id="_wpnonce" name="_wpnonce" value="851b0acf63" /><input type="hidden" name="_wp_http_referer" value="/dcs/" />');
setTimeout(function(){
jQuery('#arcontactus').removeClass('');
}, 1000);
                                        });
jQuery('#arcontactus').on('arcontactus.closeMenu', function(){
arCuCreateCookie('arcumenu-closed', 1, 1);
});
                arcuOptions = {
wordpressPluginVersion: '1.9.7',
        drag: false,
mode: 'regular',
buttonIconUrl: 'https://occ.csc.ku.ac.th/dcs/wp-content/plugins/ar-contactus/res/img/msg.svg',
showMenuHeader: false,
            menuHeaderText: "",
        showHeaderCloseBtn: false,
                                itemsIconType: '',
align: '',
reCaptcha: false,
reCaptchaKey: '',
countdown: 0,
theme: '#',
            buttonText: false,
        buttonSize: '',
        menuSize: '',
            phonePlaceholder: '',
callbackSubmitText: '',
errorMessage: '',
callProcessText: '',
callSuccessText: '',
callbackFormText: '',
        iconsAnimationSpeed: 0,
iconsAnimationPause: 0,
items: arcItems,
ajaxUrl: 'https://occ.csc.ku.ac.th/dcs/wp-admin/admin-ajax.php',
                                        style: '',
                    callbackFormFields: {
                                phone: {
    name: 'phone',
    enabled: true,
    required: true,
    type: 'tel',
    label: '',
                            placeholder: ""
                    },
            },
action: 'arcontactus_request_callback'
};
                    jQuery('#arcontactus').contactUs(arcuOptions);
                                                        });
                                                    </script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css" >

<script type="text/javascript">
if(typeof revslider_showDoubleJqueryError === "undefined") {
function revslider_showDoubleJqueryError(sliderID) {
var err = "<div class='rs_error_message_box'>";
err += "<div class='rs_error_message_oops'>Oops...</div>";
err += "<div class='rs_error_message_content'>";
err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
err += "</div>";
err += "</div>";
jQuery(sliderID).show().html(err);
}
}



</script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/plugins/embed-any-document/js/pdfobject.min.js?ver=2.6.1' id='awsm-ead-pdf-object-js'></script>
<script type='text/javascript' id='awsm-ead-public-js-extra'>
/* <![CDATA[ */
var eadPublic = [];
/* ]]> */
</script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/plugins/embed-any-document/js/embed-public.min.js?ver=2.6.1' id='awsm-ead-public-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/occ.csc.ku.ac.th\/dcs\/index.php?rest_route=\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.2.1' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/plugins/drawit/js/drawit-iframe.js?ver=1.1.3' id='drawit-iframe-js-js'></script>
<script type='text/javascript' id='bunyad-theme-js-extra'>
/* <![CDATA[ */
var Bunyad = {"ajaxurl":"https:\/\/occ.csc.ku.ac.th\/dcs\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/themes/smm/js/bunyad-theme.js?ver=3.3.1' id='bunyad-theme-js'></script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/themes/smm/js/jquery.flexslider-min.js?ver=3.3.1' id='flex-slider-js'></script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/themes/smm/js/jquery.sticky-sidebar.min.js?ver=3.3.1' id='sticky-sidebar-js'></script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
<script type='text/javascript' src='https://occ.csc.ku.ac.th/dcs/wp-content/plugins/elfsight-facebook-chat-cc/assets/elfsight-facebook-chat.js?ver=1.2.0' id='elfsight-facebook-chat-js'></script>













</body>
</html>