<?php  if (!defined("IS_INITPHP")) exit("Access Denied!");  /* INITPHP Version 1.0 ,Create on 2016-12-22 03:14:03, compiled from ../app/web/template/guest/broadcast.htm */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($title)){ echo $title;} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name='apple-mobile-web-app-capable' content='yes' />
    <meta name='apple-mobile-web-app-status-bar-style' content='black' />
    <meta name="format-detection" content="telephone=no"/>
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'core/zx-main.css?v=20150225'; ?>" />
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'core/zx-video.css?v=20150225'; ?>" />
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'bootstrap/css/bootstrap.min.css'; ?>" />
    <script src="<?php echo JS_PATH . 'jquery-1.8.3.min.js'; ?>"></script>
    <script src="<?php echo CSS_PATH . 'ui/video.js'; ?>"></script>
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'core/video-js.css'; ?>" />
    <script>
        videojs.options.flash.swf = "<?php echo CSS_PATH . 'ui/video-js.swf'; ?>";
    </script>
</head>
<body>
<div id="wrapper">

    <!--top-->
    <div id="top" class="navbar navbar-inverse">
            <div class="navbar-header navbar-icon">
                <a href="javascript:history.back(-1)">
                    <i class="glyphicon glyphicon-chevron-left"></i><?php echo $videoseq; ?>
                </a>
            </div>
    </div>
    <!--top-->

    <div id="main" style="padding:0px;margin:0px;">
        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" autoplay width="100%" height="100%">
            <source src="<?php echo $url; ?>" type='video/mp4' />
            <source src="<?php echo $url; ?>" type='video/webm' />
            <source src="<?php echo $url; ?>" type='video/ogg' />
        </video>
    </div>
    <?php if  (isset($pc) && !empty($pc)) { ?>
    <div id="announce" style="width: 100%;
            height: auto;
            text-align: center;
            padding: 0;
            margin: 0;">
        <div class="announce-title" style="height: 30px;
            width: auto;
            font-size: 1.6em;
            background: #8A8B8D;
            vertical-align: middle;
            padding-top: 15px;
            color: #ffffff;
            cursor:pointer;">
            PC不能播放点我查看
        </div>
        <center><div class="announce-content">
            <img src="<?php echo IMAGE_PATH . 'announce.png'; ?>" class="announce-img" style="height: auto;
            width: 100%;
            max-width: 1440px;
            display: block;">
        </div></center>
        <img src="<?php echo IMAGE_PATH . 'icon-up.png'; ?>" class="go-top" style="animation: 1.5s ease 0s normal both infinite running moveToBottom;
            margin-top: 30px;
            margin-bottom: 30px;
            cursor:pointer;">
    </div>
    <?php } ?>
</div>
<script type="text/javascript">
$(function($) {
    $.action.goAnnounce();
    $.action.goTop();
});

$.action = {
    goAnnounce: function () {
        $(".announce-title").click(function () {
            $("html,body").animate({scrollTop: $(".announce-content").offset().top}, 600);
        });
    },
    goTop: function () {
        $(".go-top").click(function () {
            $("html,body").animate({scrollTop: $("#announce").offset().top}, 1000);
        });
    }
}
</script>
</body>
</html>