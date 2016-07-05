<?php
$title = '機器學習速遊 (Quick Tour of Machine Learning)';
$caption = array( '機器學習速遊', '<span style="font-size:12px;">Quick Tour of Machine Learning</span>' );

$event_date = strtotime('2015-12-12 00:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6' => '六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'serial2015';
$kktix_date = strtotime('2015-10-10 12:00:00');
$reg_date = strtotime('2015-10-20 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2015-12-03 12:00:00');
//$ticket_full = true;
$price = 1980;

$about = array(
    'title' => '機器學習速遊 (Quick Tour of Machine Learning)',
    'content' => array(
        '機器學習旨在讓電腦能由資料中累積的經驗來自我進步，近年來已廣泛應用於資料探勘、計算機視覺、自然語言處理、生物特徵識別、搜尋引擎、醫學診斷、檢測信用卡欺詐、證券市場分析、DNA序列測序、語音和手寫識別、戰略遊戲和機器人等領域。它已成為資料科學的基礎學科之一，為任何資料科學家必備的工具。',
        '這門課程將由臺大資訊工程系林軒田教授利用短短的六個小時，快速地帶大家探索機器學習的基石、介紹核心的模型及一些熱門的技法，希望幫助大家有效率而紮實地了解這個領域，以妥善地使用各式機器學習的工具。此課程適合所有希望開始運用資料的資料分析者，推薦給所有有志於資料分析領域的資料科學愛好者。'
    )
);

$content = array(
    '學員基本要求' => array( '適合所有希望開始運用資料的資料分析者' ),
    '課程規定' => array( '無' ),
    '退票須知' => array(
        '活動開始一週 (2015/12/05) 凌晨 12:00 前進行退票，退還購票費用 75%',
        '活動前 3 到 7 天(2015/12/05 ~ 2015/12/08) 內進行退票，退還購票費用 25%',
        '活動開始前 3 天 (2015/12/09 凌晨 12:00 之後) 內不予退票'
    )
);

$schedule = array(
    '9:00 - 10:30' => array(
        'title' => '從資料中學習',
        'subtitle' => ' (Learning from Data)'
    ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:20' => array(
        'title' => '基礎機器學習模型',
        'subtitle' => ' (Fundamental Machine Learning Models)'
    ),
    '12:20 - 13:10' => array( 'title' => '午餐' ),
    '13:10 - 14:40' => array(
        'title' => '惱人的過度調適',
        'subtitle' => ' (Hazard of Overfitting)'
    ),
    '14:40 - 15:00' => array( 'title' => '茶點時間' ),
    '15:00 - 16:30' => array(
        'title' => '現代機器學習模型',
        'subtitle' => ' (Modern Machine Learning Models)'
    )
);

$speakers = array(
        'hstlin' => array(
        'detail' => true,
        'image' => 'info26.jpg',
        'name' => '林軒田',
        'engn' => '(Hsuan-Tien Lin)',
        'title' => array(
            '<a href="https://www.csie.ntu.edu.tw/people/bio.php?PID=77" target="_blank">臺灣大學資訊工程系 副教授</a>'
        ),
        'info' => array(
            '林軒田在美國加州理工學院取得博士學位，現於臺灣大學資訊工程系任教，並在沛星科技兼任技術顧問。林教授的研究方向為「機器學習的理論基礎與演算法設計」，他合著了在亞馬遜線上書店暢銷的機器學習入門教科書「Learning From Data」，並依此書在 Coursera 平台上開設了「機器學習基石」與「機器學習技法」兩門熱門的大型公開線上課程。林教授曾獲得 2011 年臺灣大學「教學傑出教師獎」，2013 年臺灣大學「優良導師獎」，2012 年 ACM Taipei Chapter「李國鼎青年研究獎」與 2013 年國科會「吳大猷先生紀念獎」。林教授另共同帶領了臺灣大學的團隊，在 2010 至 2013 年，連續獲得了四年 (六座) 的 KDDCup 世界冠軍。'
        )
    )

);

$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學愛好者年會',
            'href' => 'http://datasci.tw/',
            'image' => 'dsc_2015_logo_fb.png'
        ),
        array(
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
        <meta content="http://datasci.tw/event/_images/dsc_2015_logo_fb.png" property="og:image">
        <meta content="image/png" property="og:image:type">
        <meta content="600" property="og:image:width">
        <meta content="400" property="og:image:height">
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
                            <div class="mainTitle"><h2 class="mt">機器學習速遊</h2></div>
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
            <section id="content" ><div class="grey_section" ><?php include('../_template/content.php'); ?></div></section>
            <section id="ticket"><?php include('../_template/ticket.php'); ?></section>
            <section id="traffic" ><div class="grey_section" ><?php include('../_template/traffic.php'); ?></div></section>
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