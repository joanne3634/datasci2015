<?php
$title = '資料科學面面觀：理論、案例及企業導入方法';
$caption = array( '資料科學面面觀：', '<span style="font-size:0.8em;">理論、案例及企業導入方法</span>' );
$date = strtotime('2015-12-12 00:00:00');

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
            <?php include('../_template/menu.php'); ?>
            <section id="mainslider">
                <div class="container" style="padding-top:80px;">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="../_images/dsc_mainv.png" class="img-responsive logoInline">
                            <div class="mainTitle"><h2 class="mt"><?php echo $title ?></h2></div>
                            <h4 class="text-center maindate">
                                <i class="fa fa-calendar"></i> 日期: <?php echo date('%Y/%n/%j',$date) ?> (<?php echo $weekday; ?>) &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-map-marker"></i> 地點: 中央研究院人文社會科學館
                            </h4>
                            <a href="/" style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>