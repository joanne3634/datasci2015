<?php
$title = '電腦視覺一二三';
$caption = array( '電腦視覺一二三' );

$event_date = strtotime('2016-01-12 00:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'computer-vision-123';
$kktix_date = strtotime('2015-11-20 12:00:00');
$reg_date = strtotime('2015-12-15 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-01-02 12:00:00');
$price = 0;

$about = array(
    'title' => '電腦視覺一二三',
    'subtitle' => 'Computer Vision Crash Course',
    'content' => array(
        '電腦視覺旨在發展演算法使得電腦能理解影像的內容，近年來電腦視覺相關的技術已廣泛應用於我們生活中，舉凡物件偵測，識別，追蹤，三維重建，多媒體分析以及檢索，監控系統，醫療影像，以及電視電影中的許多視覺效果都可以看到電腦視覺技術的應用。',
        '這場演講的目的在於介紹電腦視覺中的基本觀念和核心技術，透過大量實際的範例幫助大家快速了解這些技術如何被應用在日常生活中，以期讓聽眾有效率地了解這個領域，最新的發展以及未來展望。'
    )
);

//$content = array();

$schedule = array(
    '9:00 - 10:30' => array(
        'title' => '淺談電腦視覺',
        'subtitle' => ' (Introduction to Computer Vision)'
    ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:20' => array(
        'title' => '電腦視覺技術應用',
        'subtitle' => ' (Fundamentals and Applications)'
    )/*,
    '12:20 - 13:10' => array( 'title' => '午餐' ),
    '13:10 - 14:40' => array( 'title' => '資料科學家的養成之路' ),
    '14:40 - 15:00' => array( 'title' => '茶點時間' ),
    '15:00 - 16:00' => array( 'title' => '企業文化以及資料科學團隊的建立' ),
    '16:00 - 17:00' => array(
        'title' => '互動論壇',
        'class' => 'success',
        'subtitle' => '與談人',
        'panels' => array( 'swc', 'chmpeng', 'birdman' ),
        'alias' => array(
            '台灣資料科學愛好者年會發起人' => '年會總召'
        )
    )*/
);

$speakers = array(
    'jbhuang' => array(
        'detail' => true,
        'image' => 'jbhuang.png',
        'name' => '黃嘉斌',
        //'engn' => '(Chi Ming Peng)',
        'title' => array(
            '伊利諾大學香檳分校電機與電腦工程博士候選人'
        ),
        'info' => array(
            '黃嘉斌為伊利諾大學香檳分校電機與電腦工程博士候選人, 研究主軸為電腦視覺以及計算攝影學。他的個人網頁為 <a href="http://www.jiabinhuang.com/" target="_blank">http://www.jiabinhuang.com/</a>'
        )
    )
);

$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學愛好者年會',
            'href' => 'http://datasci.tw/',
            'image' => 'dsc2016_logo_fb.png'
        ),
        /*array(
            'name' => '中華民國計算語言學學會',
            'href' => 'http://www.aclclp.org.tw/index_c.php',
            'image' => 'aclclp.png'
        ),*/
        array(
            'name' => '中央研究院資訊科學研究所',
            'href' => 'http://www.iis.sinica.edu.tw/',
            'image' => 'iis_s.png'
        )
    )/*,
    '協辦單位' => array(
        array(
            'name' => '國家發展委員會',
            'href' => 'https://www.ndc.gov.tw/',
            'image' => 'ndc.png'
        )
    )*/
);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
        <title><?php echo $title ?> - 2016 台灣資料科學愛好者年會系列活動</title>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
        <meta name="description" content="<?php echo $title ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="<?php echo $title ?> - 2016 台灣資料科學愛好者年會" property="og:title">
        <meta content="website" property="og:type">
        <meta content="<?php echo $title ?>" property="og:description">
        <meta content="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" property="og:url">
        <meta content="http://datasci.tw/event/_images/dsc2016_logo_fb.png" property="og:image">
        <meta content="image/png" property="og:image:type">
        <meta content="600" property="og:image:width">
        <meta content="400" property="og:image:height">
        <meta content="<?php echo $title ?> - 2016 台灣資料科學愛好者年會系列活動" property="og:site_name">
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
                            <a href="<?php echo $_SERVER['REQUEST_URI']; ?>" class="navbar-brand" style="line-height:50px;">電腦視覺一二三</a>
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
                            <img src="../_images/dsc2016-series_main.svg" class="img-responsive logoInline">
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
            <section id="about_us"><?php include('../_template/about.php'); ?></section>
            <section id="schedule"><div  class="pic_section" ><?php include('../_template/schedule.php'); ?></div></section>
            <section id="speaker"><?php include('../_template/speaker.php'); ?></section>
            <section id="ticket"><div class="grey_section"><?php include('../_template/ticket.php'); ?></div></section>
            <section id="traffic"><?php include('../_template/traffic.php'); ?></section>
            <section id="team"><?php include('../_template/team.php'); ?></section>
            <section id="copyright" class="color_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p> <a href="https://www.facebook.com/twdsconf" target="_blank" title="" data-toggle="tooltip" data-original-title="Facebook">find us on facebook</a></p>
                            <p>&copy; Copyright 2016 - 台灣資料科學愛好者年會 </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include('../_template/script.php'); ?>
    </body>
</html>