<?php
$title = '星火燎原 - Spark 機器學習初探';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('星火燎原 - Spark 機器學習初探');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-10-30 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 遠距會議室';

$kktix_link = 'series-events-1030';
$kktix_date = strtotime('2016-10-03 16:00:00');
$reg_date = strtotime('2016-10-04 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-10-12 12:00:00');
$price = 2480;
// $ticket_full = true;

$about = array(
    'title' => '星火燎原 - Spark 機器學習初探',
    'content' => array(
    '此課程專為 Spark 入門者設計，在六小時帶您從無到有建置 Spark 開發環境，並以實作方式帶領您了解 Spark 機器學習函式庫 (MLlib) 的應用及開發。課程實作將以 Spark 核心之實作語言 - Scala 為主，搭配 Scala IDE eclipse 及相關 Library 建置本機開發環境，透過 IDE 強大的開發及偵錯功能加速開發流程；並介紹如何佈置至 Spark 平台，透過 Spark-submit 執行資料分析工作。',
    '本課程涵蓋機器學習中最常使用之分類、迴歸及分群方法，在本課程中您將會了解到如何操作 Spark 核心資料集 - Resilient Distributed Dataset (RDD) 取得資料的概括統計量 (summary statistics)；並了解決策樹演算法 (Decision Tree)、最小平方法 (Linear least squares) 及 K-Means 演算法如何應用於租借量分析預測及網頁分類等情境。',
    '歡迎對 Spark 感興趣，卻不知從何下手；或想快速的對 Spark 機器學習有初步的了解的您參與！',
    )
);

$content = array(
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$content = array(
    '學員基本要求' => array(
        '本課程針對對 Apache Spark 平台有興趣之初學者。有撰寫 Java、C# 或 python 等物件導向或函式型程式語⾔經驗者尤佳。',
        '因課程搭配實作，會有 Spark 開發環境的建置，請學員⾃備筆記型電腦 (記憶體建議 4GB 以上，8GB 以上者尤佳)。'
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array('title' => '報到'),
    '9:30 - 10:30' => array('title' => '入門及暖身 - Spark 介紹及環境建置'),
    '10:30 - 10:50' => array('title' => '茶點時間'),
    '10:50 - 12:30' => array('title' => '開始蹲馬步 - RDD (Resilient Distributed Dataset) 操作及 Scala 程式開發佈署'),
    '12:30 - 13:20' => array('title' => '午餐'),
    '13:20 - 15:00' => array('title' => '練功及實戰 - Spark MLlib 分群及分類演算法案例實作'),
    '15:00 - 15:20' => array('title' => '茶點時間'),
    '15:20 - 17:00' => array('title' => '練功及實戰 - Spark MLlib 迴歸演算法案例實作、實戰經驗分享')
);

$speakers = array(
    'helen' => array(
        'detail' => true,
        'image' => 'yclee.png',
        'name' => '李泳泉',
        'suffix' => '',
        'engn' => '(Yung-chuan Lee)',
        'title' => array(
            '鋼鐵產業龍頭資訊處 / ⼯程師',
        ),
        'info' => array(
            '畢業於國立台灣師範大學資教所，受過完整師資訓練，一個轉念進入程式猿領域至今即將邁入第十六年。菜鳥時期常被指派救火，學習領域跨足 JAVA、.NET，對 Web 程式開發及 Code Security 亦是略懂略懂。兩年前因緣際會接觸大數據領域；身為資深技術人員理所當然先學習了 Hadoop 及 Spark，Spark 的高效能及簡易性成為個人開發首選，倚重 Spark 提供的強大運算能力及內建機器學習玩轉數據，今年 7 月也有幸得到 EHC Hadoop 佈署大賽季軍；目前仍在持續的深入學習 Spark 中。',
        ),
    ),    
);
$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學協會',
            'href' => 'http://datasci.tw/',
            'image' => '台灣資料科學協會.png'
        ),
        array(
            'name' => '中央研究院資訊科學研究所',
            'href' => 'http://www.iis.sinica.edu.tw/',
            'image' => 'iis_s.png'
        )
    ),
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
        <title><?php echo $title ?> - 台灣資料科學年會系列活動</title>
        <meta charset="utf-8">
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="<?php echo $title ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="<?php echo $title ?> - 台灣資料科學年會系列活動" property="og:title">
        <meta content="website" property="og:type">
        <meta content="<?php echo $title ?>" property="og:description">
        <meta content="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" property="og:url">
        <meta content="http://datasci.tw/event/_images/dsc2016_logo_fb.png" property="og:image">
        <meta content="image/png" property="og:image:type">
        <meta content="600" property="og:image:width">
        <meta content="400" property="og:image:height">
        <meta content="2016 台灣資料科學年會" property="og:site_name">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../_css/bootstrap.min.css">
        <link rel="stylesheet" href="../_css/main.css">
        <link rel="stylesheet" href="../_css/r_0924.css">
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
            <?php include '../_template/menu.php';?>
            <section id="mainslider"><?php include '../_template/slide.php';?></section>
            <section id="about_us"><?php include '../_template/about.php';?></section>
            <section id="schedule"><div  class="pic_section" ><?php include '../_template/schedule.php';?></div></section>
            <section id="speaker"><?php include '../_template/speaker.php';?></section>
            <section id="content" ><div class="grey_section" ><?php include '../_template/content.php';?></div></section>
            <section id="ticket"><?php include '../_template/ticket.php';?></section>
            <section id="traffic" ><div class="grey_section" ><?php include '../_template/traffic.php';?></div></section>
            <section id="team"><?php include '../_template/team.php';?></section>
            <section id="copyright" class="color_section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p> <a href="https://www.facebook.com/twdsconf" target="_blank" title="" data-toggle="tooltip" data-original-title="Facebook">find us on facebook</a></p>
                            <p>&copy; Copyright <a href="/">2016 - 台灣資料科學年會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include '../_template/script.php';?>
    </body>
</html>