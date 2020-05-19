<?php  if (!defined("IS_INITPHP")) exit("Access Denied!");  /* INITPHP Version 1.0 ,Create on 2016-12-22 03:14:02, compiled from ../app/web/template/guest/video.htm */ ?>
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
    <div id="top" class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header navbar-icon">
                <a href="javascript:history.back(-1)">
                    <i class="glyphicon glyphicon-chevron-left"></i><?php echo $name; ?>
                </a>
            </div>
        </div>
    </div>
    <!--top-->

    <div id="mainCate" >
        <!--container-->
        <div class="container" >

            <div class="row">
                <?php if  (is_array($list) && !empty($list)) { ?>
                <?php foreach  ($list as $k => $v) { ?>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                    <a href="<?php echo $v['url'] ?>">


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

                                    <?php if  ($v['duration']!='00:00') { ?>
                                    <div class="thumstate statecircle statenover text-white"><i class="glyphicon glyphicon-time"></i><span class="font-size10"><?php echo $v['duration']; ?></span></div>
                                    <?php } ?>

                                    <div class="thumstate statecircle statendone text-white"><i class="glyphicon glyphicon-export"></i><span class="font-size10"><?php echo $v['size']*1>0 ? $v['size'] : ''; ?></span></div>

                                    <div class="limg lazy" data-original="<?php echo $v['pic']; ?>"></div>

                                </div>
                                <div class="box11 shadow"></div>
                                <img class="back-img" src="<?php echo IMAGE_PATH .'img.png' ?>">
                            </div>

                            <div class="caption">
                                <div class="po-relative vname">

                                    <?php if  ($v['playlistid']==6000000) { ?>
                                    <div class="filencate"><label class="label label-primary">我的</label></div>
                                    <div class="filename font-size14 text-gray"><div class="cateName"><?php echo $v['name']; ?></div></div>

                                    <?php } else { ?>
                                    <div class="filencate"><label class="label label-success"><?php echo $v['cate']; ?></label></div>
                                    <div class="filename font-size14 text-gray"><div class="cateName">第<?php echo $v['videoseq']; ?>集</div></div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                    </a>
                </div>

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

    });



</script>
</body>
</html>