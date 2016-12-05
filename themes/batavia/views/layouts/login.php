<!DOCTYPE html>
<!-- saved from url=(0065)http://localhost/elybin/elybin-admin/index.php?act=sessionexpired -->
<html class="gt-ie8 gt-ie9 not-ie pxajs"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

        <!-- Favicons -->
        <?php
        $baseUrl = Yii::app()->theme->baseUrl;
        $cs = Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');
        ?>
        <!-- Open Sans font from Google CDN -->
        <?php
        $cs->registerCssFile($baseUrl . '/css/bootstrap.min.css');
        $cs->registerCssFile($baseUrl . '/css/pixel-admin.min.css');
        $cs->registerCssFile($baseUrl . '/css/widgets.min.css');
        $cs->registerCssFile($baseUrl . '/css/pages.min.css');
        $cs->registerCssFile($baseUrl . '/css/rtl.min.css');
        $cs->registerCssFile($baseUrl . '/css/themes.min.css');
        //$cs->registerCssFile($baseUrl.'/css/style-blue.css');
        ?>
        <!--[if lt IE 9]>
                <script src="assets/javascripts/ie.min.js"></script>
        <![endif]-->
        <link rel="icon" href="<?php echo $baseUrl . '/images/favicon.png' ?>">
        <style type="text/css"></style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>


    <!-- 1. $BODY ======================================================================================
            
            Body
    
            Classes:
            * 'theme-{THEME NAME}'
            * 'right-to-left'     - Sets text direction to right-to-left
    -->
    <body class="theme-default page-signin-alt" style="">
    <!-- Demo script  <script src="assets/demo/demo.js"></script>  / Demo script -->



        <!-- 2. $MAIN_NAVIGATION ===========================================================================
        
                Main navigation
        -->
        <!--    <div class="signin-header">
              <a href="" class="logo">
                <div class="demo-logo bg-primary" style="background-color: rgba(0,0,0,0) !important"></div>&nbsp;
        
              </a>  / .logo 
            </div>  / .header -->
        <div id="content-wrapper" style="padding-top: 19px !important;"><div id="pa-page-alerts-box"></div></div>
        <h1 class="form-header" id="header-title">Loyalty System</h1>



        <?php echo $content; ?>
        <!-- / Form -->


<!--        <div class="signin-with">
            <div class="header">Ikuti Kami</div>
            <a href="http://facebook.com/elybincms" class="btn btn-lg btn-facebook rounded" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
            <a href="https://twitter.com/@elybincms" class="btn btn-lg btn-info rounded" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
            <a href="https://google/+elybincms" class="btn btn-lg btn-danger rounded" target="_blank"><i class="fa fa-google-plus"></i></a>
        </div>-->

        <!-- Get jQuery from Google CDN -->
        <!--[if !IE]> -->
        <!--	<script type="text/javascript"> window.jQuery || document.write('<script src="../ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script> -->
        <!-- <![endif]-->
        <!--[if lte IE 9]>
                <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
        <![endif]-->


        <!-- Pixel Admin's javascripts -->
        <?php
        $cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js');
        $cs->registerScriptFile($baseUrl . '/js/pixel-admin.min.js');
        ?>
        <script>
            $(document).ready(function () {
                setTimeout(function () {
                    options = {
                        type: 'warning',
                        auto_close: 3, // seconds
                        classes: 'alert-dark' // add custom classes
                    };
    //          PixelAdmin.plugins.alerts.add("<strong>Aduh!</strong> Sesi anda telah berakhir, tidak ada aktifitas selama 30 menit.", options);
                }, 800);
                // Show/Hide password reset form on click

                $('#forgot-password-link').click(function () {
                    $('#signin-form_id').hide();
                    $('#forgot_form_id').fadeIn(400);
                    $('#header-title').html("Atur ulang kata sandi");
                    return false;
                });
                $('#forgot_form_id .close').click(function () {
                    $('#forgot_form_id').hide();
                    $('#signin-form_id').fadeIn(400);
                    $('#header-title').html("Masuk ke Akun Anda");
                    return false;
                });
                window.PixelAdmin.start();
            });
        </script>


        <div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div></body></html>