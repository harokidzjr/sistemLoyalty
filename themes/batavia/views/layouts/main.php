<!DOCTYPE html>
<!-- saved from url=(0055)http://localhost/elybin/elybin-admin/admin.php?mod=home -->
<html class="gt-ie8 gt-ie9 not-ie pxajs"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Favicons -->
    <?php // Yii::app()->clientScript->reset(); ?>
    <?php
    $baseUrl = Yii::app()->theme->baseUrl;
    $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>
    <!-- Open Sans font from Google CDN -->
    
    <?php
//    $cs->scriptMap['bootstrap.min.css'] = false;
//    $cs->registerCssFile($baseUrl . '/css/bootstrap.min.css');
    $cs->registerCssFile($baseUrl . '/css/pixel-admin.min.css');
    $cs->registerCssFile($baseUrl . '/css/widgets.min.css');
    $cs->registerCssFile($baseUrl . '/css/pages.min.css');
    $cs->registerCssFile($baseUrl . '/css/rtl.min.css');
    $cs->registerCssFile($baseUrl . '/css/themes.min.css');
    //$cs->registerCssFile($baseUrl.'/css/style-blue.css');
    $user = User::model()->findByPk(Yii::app()->user->getId());

    ?>
    <link rel="icon" href="<?php echo $baseUrl . '/images/favicon.png' ?>">


    <style type="text/css"></style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
  <body class="theme-frost main-menu-animated main-navbar-fixed animate-mm-sm animate-mm-md animate-mm-lg" style="">


    <script>
      var init = [];
    </script>
    <div id="main-wrapper">


      <!-- 2. $MAIN_NAVIGATION ===========================================================================
      
              Main navigation
      -->
      <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle">
          <i class="navbar-icon fa fa-bars icon"></i>
          <span class="hide-menu-text">SEMBUNYI MENU</span>
        </button>

        <div class="navbar-inner">
          <!-- Main navbar header -->
          <div class="navbar-header">

            <!-- Logo -->
            <a href="#" class="navbar-brand">
              <div><img alt="Pixel Admin" src="<?php echo $baseUrl . '/images/favicon.png' ?>"></div>
              Loyalty<em><strong></strong></em>
            </a>

            <!-- Main navbar toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

          </div> <!-- / .navbar-header -->

          <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
            <div>

              <ul class="nav navbar-nav">
                <!--                <li class="dropdown">
                                  <a href="http://localhost/elybin/elybin-admin/admin.php?mod=home#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home"></i>&nbsp;&nbsp;Coba Elybin</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="/jogja" target="_blank">Home</a></li>
                                  </ul>
                                </li>-->
                <li class="left">
                    <a href="http://System Loyalty" target="_blank"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Lihat Website</a>
                </li>
              </ul>  
              <div class="right clearfix">
                <ul class="nav navbar-nav pull-right right-navbar-nav">


                  <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================
                  
                                                                          Navbar Icon Buttons
                  
                                                                          NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.
                  
                                                                          Classes:
                                                                          * 'nav-icon-btn-info'
                                                                          * 'nav-icon-btn-success'
                                                                          * 'nav-icon-btn-warning'
                                                                          * 'nav-icon-btn-danger' 
                  -->	

                  <li class="nav-icon-btn nav-icon-btn-danger dropdown" id="notificon">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="label"></span>
                      <i class="nav-icon fa fa-bell"></i>
                      <span class="small-screen-text">Notifikasi</span>
                    </a>
                    <!-- NOTIFICATIONS -->
                    <div class="dropdown-menu widget-notifications no-padding" style="width: 300px; min-height: 70px;">
                      <div class="notifications-list" id="main-navbar-notifications">
                        <div class="form-group-margin" style="margin-top: 30px;"></div>
                        <div class="text-center text-muted panel-padding">
                          <i class="fa fa-5x fa-bell-o"></i>
                          <h3>Yay!</h3>
                          <p>Tidak ada notifikasi</p>
                        </div>

                      </div> <!-- / .notifications-list -->
                      <a href="#" class="notifications-link">LEBIH BANYAK NOTIFIKASI</a>
                    </div> <!-- / .dropdown-menu -->

                  </li>
                  <li class="pull-right nav dropdown">
                    <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                      <img src="<?php echo $baseUrl . '/images/medium-no-ava.png' ?>" alt="Foto Mini">
                      <span><?php echo $user->getFullName() ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-header text-center">Jalan Pintas</li>
                      <li class="divider"></li>
                      <li><a href="#" target="_blank"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Tampilan Awal</a></li>
                      <li><a href="#"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Pesan</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Akun</a></li>
                      <li><a href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;Pengaturan</a></li>
                      <li><a href="#"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;Tentang</a></li>
                      <li class="divider"></li>
                      <li><a data-toggle="modal" data-target="#logout-modal"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Keluar</a></li>
                    </ul>
                  </li>
                </ul> <!-- / .navbar-nav -->


              </div> <!-- / .right -->
            </div>
          </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
      </div> <!-- / #main-navbar -->
      <!-- /2. $END_MAIN_NAVIGATION -->

      <div id="main-menu" role="navigation">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div id="main-menu-inner" style="overflow: hidden; width: auto; height: 100%;">
            <div class="menu-content top animated fadeIn" id="menu-content-demo">
              <div>
                <div class="text-bg"><span class="text-slim">Halo,</span> <span class="text-semibold"><?php echo $user->nama ?></span></div>
                <img src="<?php echo $baseUrl . '/images/medium-no-ava.png' ?>" alt="Avatar">
                <div class="btn-group">	
                  <a href="" class="btn btn-xs btn-primary btn-outline dark" data-original-title="Home" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-desktop"></i></a>
                  <a href="" class="btn btn-xs btn-primary btn-outline dark" data-original-title="Profile" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-user"></i></a>
                  <a href="" class="btn btn-xs btn-primary btn-outline dark" data-original-title="Settings" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-cog"></i></a>
                  <!--<a href="<?php echo Yii::app()->createUrl('site/logout') ?>" class="btn btn-xs btn-danger btn-outline dark" data-original-title="Logout" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-power-off"></i></a>-->
                  <!--<a >-->
                  <a href="" class="btn btn-xs btn-danger btn-outline dark" data-toggle="modal" data-target="#logout-modal"><i class="fa fa-power-off"></i></a>
                </div>
              </div>
            </div>
            <?php
                include_once 'menu.php';
            ?>

          </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 503px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div> <!-- / #main-menu-inner -->
      </div> <!-- / #main-menu -->
      <!-- /4. $MAIN_MENU -->


      <div id="content-wrapper">
        <!-- 5. $CONTENT ===================================================================================

       Content
        -->
        <div class="page-header">
          <!--<h1>-->
          <?php if (isset($this->breadcrumbs)): ?>
            <?php
//              $this->widget('zii.widgets.CBreadcrumbs', array(
//                  'links' => $this->breadcrumbs,
//                  'homeLink' => CHtml::link('Dashboard'),
//                  'htmlOptions' => array('class' => 'breadcrumb')
//              ));
            $this->widget(
                    'booster.widgets.TbBreadcrumbs', array(
                'links' => $this->breadcrumbs,
                'homeLink' => CHtml::link('Dashboard'),
                'htmlOptions' => array('class' => 'breadcrumb')
                    )
            );
            ?><!-- breadcrumbs -->
          <?php endif ?>
          <!--</h1>-->
        </div> <!-- / .page-header -->
        <!-- Content here -->
        <div class="row">
          <!-- Widget Pos 1 -->
          <div class="col-lg-12 col-sm-12">
            <!-- Welcome -->


            <?php echo $content; ?>

          </div><!-- ./col-sm-8 -->



        </div><!-- /.row -->

        <!-- Javascript -->
        <script>
          //          init.push(function() {
          //            $('#tooltip a, #tooltip-ck, #tooltip-foto').tooltip();
          //          });
          //          ElybinView();
          //          ElybinEditModal();
        </script>
        <!-- / Javascript -->	

        <hr class="no-grid-gutter-h">
        <div class="text-right text-light-gray">
          <a href="http://www.System Loyalty/" alt="Jogja">System Loyalty</a> 2015
        </div>
      </div> <!-- / #content-wrapper -->
      <div id="main-menu-bg"></div>
    </div> <!-- / #main-wrapper -->

    <!-- Logout Modal -->

    <div id="logout-modal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <h4 class="modal-title"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Keluar</h4>
          </div>
          <div class="modal-body">Apakah anda yakin ingin keluar? Data session anda akan terhapus dengan aman.					<hr>
            <a href="<?php echo $this->createUrl('site/logout'); ?>" class="btn btn-danger"><i class="fa fa-power-off"></i>&nbsp;Ya, Keluar</a>
            <button class="btn pull-right" data-dismiss="modal"><i class="fa fa-share"></i>&nbsp;Kembali</button>
          </div>
        </div> <!-- / .modal-content -->
      </div> <!-- / .modal-dialog -->
    </div> 
    <!-- / Logout Modal -->

    <!-- Get jQuery from Google CDN -->
    <!--[if !IE]> -->
    <script type="text/javascript"> window.jQuery || document.write('<script src="assets/javascripts/jquery.min.js">' + "<" + "/script>");</script>
    <!-- <![endif]-->
    <!--[if lte IE 9]>
            <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
    <![endif]-->
    <?php
//    $cs->registerScriptFile($baseUrl . '/js/jquery.min.js');
//    $cs->registerScriptFile($baseUrl . '/js/jquery.transit.js');
//    $cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js');
    $cs->registerScriptFile($baseUrl . '/js/pixel-admin.min.js');
    ?>
<!--    <script src="./ElybinCMS_files/jquery.transit.js"></script>

     Pixel Admin's javascripts 
    <script src="./ElybinCMS_files/bootstrap.min.js"></script>
    <script src="./ElybinCMS_files/pixel-admin.min.js"></script>-->
    <script type="text/javascript">
      init.push(function() {
        // Javascript code here
        $("#notif .notification-description i").hide();
        $('#notificon').click(function() {
          $('#notificon a .label').html("");
          $.ajax({
            type: 'POST',
            url: "app/notification/proses.php",
            data: "mod=notification&act=read",
            success: function(data) {
              if (data == "ok") {
                $("#notif").css("background", "#efefef");
              }
            }
          })
        });
      });
      window.PixelAdmin.start(init);
    </script>




    <div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div><div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;">

    </div>
  </body>
</html>