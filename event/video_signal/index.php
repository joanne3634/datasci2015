<?php
$title = '視訊訊號處理與深度學習應用';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array(  '視訊訊號處理與深度學習應用' );


$event_date = strtotime('2016-04-23 17:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'video_signal';
$kktix_date = strtotime('2015-03-27 12:00:00');
$reg_date = strtotime('2016-03-30 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-04-06 12:00:00');
$price = 1980;
// $ticket_full = true;


$about = array(
    'title' => '視訊訊號處理與深度學習應用',
    'content' => array(
        '自動車是怎麼樣理解周遭的環境的？谷歌到底是怎麼快速找出我要的照片？波士頓的警方是怎麼找到馬拉松爆炸嫌疑犯的？這些都是由分析大量的照片與影音資料而來的。而這些視訊資料，不但資料量大，由電腦判讀更是不易，因此需要的技術與工具也相當的廣泛，從一開始的資料清理與判讀、抽象化資料萃取，和後端的視訊資料庫索引建立與查找，每一項都是極大的研究課題。深度學習技術之演進，更將其與所需之運算能量推升到空前的境界。',
        '在這一天的課程裡，我們集合了電腦視覺的概念簡介、多媒體資料的分類與檢索方式、深度學習於視訊資料的應用與挑戰、與加速這些技術的 GPU 平行算運算平台等，期由分析單筆視訊資料開始，深入淺出地引領您進入視訊資料的抽象美麗世界。最後的實作課程，並將介紹實際的 IoT 應用例，與實作所需之程式工具等，為理論於實務並重的安排。'
    )
);

$content = array(
    '學員基本要求' => array( 
        '這門課是以觀念為主、技術為輔的課程。',
        '參與學員雖然不需為電腦科學之本科生，但建議至少有以下其中一樣背景為佳：
        <ul>
            <li>基本的程式能力</li>
            <li>修習過資料結構或演算法等基礎電腦科學課程</li>
            <li>具有對科普電腦科學之興趣與理解力者</li>
        </ul>',
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array( 'title' => '報到' ),
    '9:30 - 10:30' => array( 'title' => '【判讀】電腦視覺簡介' ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:30' => array( 'title' => '【索引】多媒體檢索' ),
    '12:30 - 13:20' => array( 'title' => '午餐' ),
    '13:20 - 15:00' => array( 'title' => '【加速】圖形處理器與深度學習' ),
    '15:00 - 15:20' => array( 'title' => '茶點時間' ),
    '15:20 - 17:00' => array( 'title' => '【駭客】深度學習 / 電腦視覺之實作演示' )
);

$speakers = array(
    'wcchen' => array(
        'detail' => true,
        'image' => 'wcchen.jpg',
        'name' => '陳維超',
        'suffix' => '博士',
        'engn' => '( Wei-Chao Chen, Ph.D. )',
        'title' => array(
            'Skywatch / 共同創辦人, 台灣大學 / 兼任助理教授'
        ),
        'info' => array(
            '陳維超博士為 Skywatch ( 行品股份有限公司 ) 的共同創辦人，也是台灣大學資訊系的兼任助理教授，開設圖形處理器程式設計、與 IoT 物聯網應用等課程。陳博士畢業於北卡羅萊納教堂山大學，其主要研究領域為電腦繪圖、電腦視覺與虛擬實境等。曾於美國加州之矽谷研發多年，於 Intel 任職時參與 OpenLF 與 OpenCV 初始開發計劃，於 NVIDIA 開發繪圖晶片如 Sony Playstation 3 RSX、NVIDIDA Telsa、Fermi 等，並在 Nokia 柏拉圖研究中心，與史丹佛大學合作視訊資料檢索、增強實境 ( AR ) 與計算攝影學等研究計劃。陳博士曾於多個 IEEE 與 ACM 之期刊與學術會議中發表與擔任評審，著有數十篇期刊論文與專利，具有豐富的學術與業界之經驗。',
            '<a href="http://www.skywatch24.com" target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;個人網頁</a>&nbsp;&nbsp;<a href="https://www.facebook.com/weichao.chen.tw" target="_blank"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Facebook 網頁</a>'
        )
    ),
    'yslin' => array(
        'detail' => true,
        'image' => '', //yslin.png
        'name' => '林裕盛',
        'suffix' => '',
        'engn' => '( Yu-Sheng Lin )',
        'title' => array(
            '台灣大學電機所 / 博士生'
        ),
        'info' => array(
            '現為台大電機系博士班學生，其研究專長與興趣為計算機結構、圖形處理器、平行處理、電腦視覺、與相關之積體電路設計等。其研究成果曾於 IEEE 會議中發表，其電路設計並曾獲得教育部 IC 設計競賽之首獎。'
        )
            
    )
);

$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學愛好者年會',
            'href' => 'http://datasci.tw/',
            'image' => 'dsc2016_logo_fb.png'
        ),array(
            'name' => '中華民國計算語言學學會',
            'href' => 'http://www.aclclp.org.tw/index_c.php',
            'image' => 'aclclp.png'
        ),
        array(
            'name' => '中央研究院資訊科學研究所',
            'href' => 'http://www.iis.sinica.edu.tw/',
            'image' => 'iis_s.png'
        )
    )
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
        <link rel="stylesheet" href="../_css/video_signal.css">
        <link rel="stylesheet" href="../_css/animations.css">
        <link rel="stylesheet" href="../_css/fonts.css">
        <script src="../_js/vendor/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
            <script src="../_js/vendor/html5shiv.min.js"></script>
            <script src="../_js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="box_wrapper">
            <?php include('../_template/menu.php'); ?>
            <section id="mainslider">
                <div class="container" style="padding-top:80px;" ><!-- style="padding-top:80px;" -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="../_images/dsc2016-series_main.png" class="img-responsive logoInline">
                            <div class="mainTitle">
                                <h2 class="mt"><?php echo $title ?></h2>
                            </div>
                            <div class="maindate">
                                <h4 class="text-center">
                                    <i class="fa fa-calendar"></i> 日期: <?php echo $date_string; ?> &nbsp; &nbsp;
                                    <div class="fb-share-button" style="margin-top:15px;"
                                        data-href="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" 
                                        data-layout="button_count">
                                    </div>
                                </h4>
                                <h4 class="text-center">
                                    <i class="fa fa-map-marker"></i> 地點: 中央研究院人文社會科學館
                                </h4>
                            </div>
                            <a href="/"style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about_us"><?php include('../_template/about.php'); ?></section>
            <section id="schedule"><div  class="pic_section" ><?php include('../_template/schedule.php'); ?></div></section>
            <section id="speaker"><?php include('../_template/speaker.php'); ?></section>
            <section id="content" ><div class="grey_section" ><?php include('../_template/content.php'); ?></div></section>
            <section id="ticket"><?php include('../_template/ticket.php'); ?></section>
            <section id="traffic" ><div class="grey_section" ><?php include('../_template/traffic.php'); ?></div></section>
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