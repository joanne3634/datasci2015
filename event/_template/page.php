<?php
$sections = array( 'about_us', 'schedule', 'speaker', 'content', 'ticket', 'traffic' )
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
        <title><?php echo $title ?> - 2015台灣資料科學愛好者年會系列活動</title>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
        <meta name="description" content="<?php echo $title ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="<?php echo $title ?> - 2015 台灣資料科學愛好者年會" property="og:title">
        <meta content="website" property="og:type">
        <meta content="<?php echo $title ?>" property="og:description">
        <meta content="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" property="og:url">
        <meta content="http://datasci.tw/event/_images/dsc_2015_logo_o.png" property="og:image">
        <meta content="image/png" property="og:image:type">
        <meta content="500" property="og:image:width">
        <meta content="472" property="og:image:height">
        <meta content="<?php echo $title ?> - 2015台灣資料科學愛好者年會系列活動" property="og:site_name">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../_css/bootstrap.min.css">
        <link rel="stylesheet" href="../_css/main.css">
        <link rel="stylesheet" href="../_css/animations.css">
        <link rel="stylesheet" href="../_css/fonts.css">
        <script src="../_js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
        <script src="../_js/vendor/html5shiv.min.js"></script>
        <script src="../_js/vendor/respond.min.js"></script>
    <![endif]-->
        <style>
            .no-bold { font-weight: normal; }
            td.time { vertical-align: middle !important; }
            /*.table > tbody > tr.success > td { background-color: #f7ebaa; color: #C36918; }*/
        </style>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="box_wrapper">
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="<?php echo $_SERVER['REQUEST_URI']; ?>" class="navbar-brand"><?php echo implode('<br/>',$caption); ?></a>
                            <nav class="navbar">
                                <div class="navbar-header">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".dsc-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="dsc-collapse collapse navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#about_us"><img src="../_images/icon01.png"/> 簡介</a></li>
                                        <li><a href="#schedule"><img src="../_images/icon04.png"/> 議程</a></li>
                                        <li><a href="#speaker"> <img src="../_images/icon03.png"/> 講者</a></li>
       <?php if ( isset($content) ) { ?><li><a href="#content"> <img src="../_images/icon08.png"/> 須知</a></li><?php } ?>
                                        <li><a href="#ticket">  <img src="../_images/icon06.png"/> 報名</a></li>
                                        <li><a href="#traffic"> <img src="../_images/icon05.png"/> 交通</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <section id="mainslider">
                <div class="container" style="padding-top:80px;">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="../_images/dsc_mainv.png" class="img-responsive logoInline">
                            <div class="mainTitle"><h2 class="mt"><?php echo $title ?></h2></div>
                            <h4 class="text-center maindate">
                                <i class="fa fa-calendar"></i> 日期: <?php echo $date_string; ?> &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-map-marker"></i> 地點: 中央研究院人文社會科學館
                            </h4>
                            <a href="/" style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about_us"><?php include('../_template/about_us.php'); ?></section>
            <section id="schedule" class="pic_section"><?php include('../_template/schedule.php'); ?></section>
            <section id="speaker"><?php include('../_template/speaker.php'); ?></section>
            <section id="content" class="grey_section"><?php include('../_template/content.php'); ?></section>
            <section id="ticket"><?php include('../_template/ticket.php'); ?></section>
            <section id="traffic" class="grey_section"><?php include('../_template/traffic.php'); ?></section>
            <section id="team"><?php include('../_template/team.php'); ?></section>
            <section id="copyright" class="color_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p> <a href="https://www.facebook.com/twdsconf" target="_blank" title="" data-toggle="tooltip" data-original-title="Facebook">find us on facebook</a></p>
                            <p>&copy; Copyright 2015 - 台灣資料科學愛好者年會 </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include('../_template/script.php'); ?>
    </body>
</html>