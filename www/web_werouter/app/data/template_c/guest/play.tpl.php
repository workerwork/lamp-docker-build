<?php  if (!defined("IS_INITPHP")) exit("Access Denied!");  /* INITPHP Version 1.0 ,Create on 2016-12-22 03:14:01, compiled from ../app/web/template/guest/play.htm */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php if(isset($title)){ echo $title;} ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="expires" content=0>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name='apple-mobile-web-app-capable' content='yes' />
    <meta name='apple-mobile-web-app-status-bar-style' content='black' />
    <meta name="format-detection" content="telephone=no"/>
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'core/zx-main.css?v=20150225'; ?>" />
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'core/zx-video.css?v=20150225'; ?>" />
    <link rel='stylesheet' href="<?php echo CSS_PATH . 'bootstrap/css/bootstrap.min.css'; ?>" />
</head>
<body>
<div id="wrapper">
    <!--top-->
    <div id="top"  class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand hidden-sm"><?php echo $settings['name']; ?></a>
                <?php if  ($settings['showDownload']) { ?>
                    <?php if  (isset($sta) && !empty($sta) && $app==0) { ?>
                    <a href="http://wefi.com.cn" class="status_btn online-ios" target="_blank"></a>
                    <?php } elseif  (isset($sta) && !empty($sta) && $app==1) { ?>
                    <a href="http://wefi.com.cn" class="status_btn online" target="_blank"></a>
                    <?php } elseif  (!isset($sta) && $app==0) { ?>
                    <span class="status_btn offline-ios"></span>
                    <?php } else { ?>
                    <span class="status_btn offline"></span>
                    <?php } ?>
                    <?php if  (isset($app) && !empty($app)) { ?>
                    <a href="<?php echo LOCAL; ?>static/zhuijushenqi.apk" class="status_btn app" target="_blank"></a>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>

    </div>
    <!--top-->

    <div id="mainCate">
        <!--container-->
        <div class="container">
            <div class="row">
                <?php if  (is_array($names) && isset($names)) { ?>
                <?php foreach  ($names as $k => $v) { ?>
                <?php if  ($v['playlistid']!=8000000) { ?>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="<?php echo $v['url'] ?>"    >
                        <div class="thumbnailc">
                            <div class="thumbtop">
                                <div class="thumbimg">

                                    <?php if  ($v['videocnt']>0 && $v['totalcount']==$v['videocnt']) { ?>
                                    <div class="iconNew text-center">
                                        <div class="thumcircle back-red text-white"><?php echo $v['videocnt']; ?>集全</div>
                                        <div class="thumquare back-red"></div>
                                    </div>
                                    <?php } ?>
                                    <div class="thumfilter"></div>

                                    <?php if  ($v['videocnt']) { ?>
                                    <div class="thumstate statecircle statedone text-white"><i class="glyphicon glyphicon-import"></i><span class="font-size10">缓存<?php echo $v['videocnt']; ?>集</span></div>

                                    <?php } else { ?>
                                    <div class="thumstate statecircle statendone text-white"><i class="glyphicon glyphicon-export"></i><span class="font-size10">未缓存</span></div>

                                    <?php } ?>

                                    <div class="limg lazy" data-original="<?php echo $v['pic']; ?>"></div>

                                </div>
                                <div class="box11 shadow"></div>
                                <img class="back-img" src="<?php echo IMAGE_PATH .'img.png' ?>">
                            </div>
                            <div class="caption">
                                <div class="po-relative vname">
                                    <div class="filencate">
                                        <?php if  ($v['playlistid']==6000000) { ?>
                                        <label class="label label-primary"><?php echo $v['cate']; ?></label>
                                        <?php } else { ?>
                                        <label class="label label-success"><?php echo $v['cate']; ?></label>
                                        <?php } ?>
                                    </div>
                                    <div class="filename font-size14 text-gray">
                                        <div class="cateName"><?php echo $v['name']; ?></div>
                                    </div>

                                </div>
                                <!--<div class="thuminfo font-size12 text-dgray">搜狐视频全网独播的《金星脱口秀》由灿星制作的大型时尚-->
                                <!--</div>-->
                            </div>

                        </div>

                    </a>
                </div>
                <?php } ?>
                <?php } ?>
                <?php } else { ?>
            <span style='margin-top: 100px; text-align: center;display: block' id="bad">
            <img src="<?php echo IMAGE_PATH .'no_source.png' ?>">
            </span>
                <?php } ?>
            </div>
        </div>
        <!--container-->
    </div>

</div>
<script src="<?php echo JS_PATH . 'jquery-1.8.3.min.js'; ?>"></script>
<script src="<?php echo CSS_PATH . 'bootstrap/js/bootstrap.min.js'; ?>"></script>

<script src="<?php echo JS_PATH . 'jll.js'; ?>"></script>
<script type="text/javascript">
$(function($) {
    $("div.lazy").lazyload({});
    setTimeout(request, 1000);

    var root_path = "http://wefi.guest:9800/guestIntercept.php";
    function request() {
        var param = {
            url: root_path + '?wxb_request=www.baidu.com'
        };
        $.ajax({
            type: "GET",
            url: param.url,
            success: function(msg) {
                console.log('ok')
            }
        })
    }


});


</script>
</body>
</html>
