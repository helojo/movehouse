<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"/www/wwwroot/www.58hongtu.com/htmove/public/../application/index/view/index/orderok.html";i:1596624258;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0048)https://huoyun.daojia.com/move-house/#/goods/6/0 -->
<html lang="zh-CN" class="webp" style="font-size: 20px;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="minimal-ui,width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover,minimal-ui" />
    <meta name="format-detection" content="telephone=no" />
    <meta content="email=no" name="format-detection" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="screen-orientation" content="portrait" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <meta name="360-fullscreen" content="true" />
    <meta name="browsermode" content="application" />
    <link rel="shortcut icon" href="/assets/img/favicon.png" />
    <title>私密信息</title>
    <!--<script type="text/javascript" async="" src="/assets/move/gio.js"></script>-->
    <script type="text/javascript" async="" src="/assets/move/raven.min.js"></script>
    <script>; (function (unit) { function reset() { window.HTML = { el: document.documentElement, width: document.documentElement.clientWidth || window.innerWidth, height: document.documentElement.clientHeight || window.innerHeight }; window.HTML.el.style.fontSize = HTML.width * unit / 375 + "px" } reset(); document.addEventListener("DOMContentLoaded", function () { reset() }); document.addEventListener("WeixinJSBridgeReady", function () { reset() }, false); window.addEventListener("pageshow", function () { reset() }); window.addEventListener("load", function () { reset() }); window.addEventListener("resize", function () { setTimeout(function () { reset() }, 30) }) })(20);</script>
    <script>;function check_support_webp() {
        var img = document.createElement('canvas').toDataURL('image/webp')
        return img &&img.indexOf('data:image/webp') == 0;
    }
    if(check_support_webp()) {
        document.getElementsByTagName('html')[0].classList.add("webp")
    }</script>
    <link href="/assets/move/app.5b5c129f.css" rel="preload" as="style" crossorigin="" />
    <link href="/assets/move/chunk-vendors.3448aadb.css" rel="preload" as="style" crossorigin="" />

    <link href="/assets/move/chunk-vendors.3448aadb.css" rel="stylesheet" crossorigin="" />
    <link href="/assets/move/app.5b5c129f.css" rel="stylesheet" crossorigin="" />

    <!-- <link href="./goods_files/app.3c38d8da.js.下载" rel="modulepreload" as="script" crossorigin="" />
    <link href="./goods_files/chunk-vendors.e6902bb7.js.下载" rel="modulepreload" as="script" crossorigin="" />
    <link href="./goods_files/manifest.63cef80c.js.下载" rel="modulepreload" as="script" crossorigin="" />
    <script charset="utf-8" src="./goods_files/chunk-2d21aac0.55323fc7.js.下载"></script>-->
</head>
<body>
<noscript>
    <strong>We're sorry but move-house doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
</noscript>
<div class="app">
    <!---->
    <div data-v-02cc06cb="" class="goods">
        <div data-v-02cc06cb="" class="item item-des syt-row syt-row--flex syt-row--align-center" id="goodPartBraserId53">
            <div data-v-02cc06cb="" class="syt-col syt-col--24">
                <div data-v-02cc06cb="" class="desc">
                    <font color="#FF0000"><?php echo $info; ?></font>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>

<script>
    $(".item-nav").on('click',function(s) {
        $("#itemContentId").animate({scrollTop: 40}, 0);
        var d1 ="#goodPartId"+$(this).attr('data-id');
        h = $(d1).offset().top
        $("#itemContentId").animate({scrollTop: h}, 1000);
        console.log(d1+"-----"+h)
    })
</script>
</body>
</html>