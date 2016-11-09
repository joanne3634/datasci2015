<?php
$title = '人工智慧與機器學習在推薦系統上的應用';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('人工智慧與機器學習在推薦系統上的應用');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-12-18 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 國際會議廳';

$kktix_link = '';
$kktix_date = strtotime('2016-11-21 16:00:00');
$reg_date = strtotime('2016-11-22 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-11-30 12:00:00');
$price = 1980;
// $ticket_full = true;

$about = array(
    'title' => '人工智慧與機器學習在推薦系統上的應用',
    'content' => array(
    '本課程特別邀請到臺大資工系林守德教授，利用六小時的課程簡介人工智慧的歷史演進以及其與機器學習的關聯，同時也會介紹在實務上如何訓練好的機器學習模型，及如何應用相關技術建立智慧推薦系統。',
    '本課程由四個部分組成：
        <ol>
        <li>
            人工智慧的演進<br>
            人工智慧的歷史脈絡演進，主要的方法與應用。
        </li><br>
        <li>
            機器學習簡介<br>
            從「廣義」的面相探討機器學習可以達成的目標，並討論建構出一個完善的機器學習系統的要素。
        </li><br>
        <li>
            推薦系統的分類與原理<br>
            介紹推薦系統的主要分類及背後原理，包括基於內容推薦、協同過濾、關聯性規則推薦、組合推薦等。
        </li><br>
        <li>
            協同過濾推薦方法<br>
            介紹目前效能最佳的推薦系統：基於矩陣分解的推薦方法與進階應用
        </ol>',
    )
);

$content = array(
    '學員基本要求' => array(
        '本課程無需人工智慧或機器學習相關背景。',
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array('title' => '報到'),
    '9:30 - 10:30' => array('title' => '人工智慧的演進'),
    '10:30 - 10:50' => array('title' => '茶點時間'),
    '10:50 - 12:30' => array('title' => '機器學習簡介'),
    '12:30 - 13:20' => array('title' => '午餐'),
    '13:20 - 15:00' => array('title' => '推薦系統的分類與原理'),
    '15:00 - 15:20' => array('title' => '茶點時間'),
    '15:20 - 17:00' => array('title' => '協同過濾推薦方法')
);

$speakers = array(
    'helen' => array(
        'detail' => true,
        'image' => 'sdlin.png',
        'name' => '林守德',
        'suffix' => '',
        'engn' => '(Shou-de Lin)',
        'title' => array(
            '臺灣大學資訊工程系 / 教授',
        ),
        'info' => array(
            '林守德老師擁有台灣大學電機工程學士學位、密西根大學電機學士學位、南加州大學計算語言學碩士學位和計算機科學博士學位，目前為國立臺灣大學資訊工程學系的教授暨台大的機器發明與社群網路探勘實驗室主持人，在加入台大之前，他是洛斯阿拉莫斯國家實驗室的博士後研究員。林教授的研究包括機器學習和資料探勘、社會網絡分析和自然語言處理等領域，他的國際認可包括2003 年 IEEE 網路智能會議最佳論文獎、2007 年 Google 研究獎、2008 年微軟研究獎、2010 年 TAAI 優秀論文獎、2011 年 ASONAM 最佳論文獎，以及連續5年獲得美國航空航天 AFOSR / AOARD 研究獎。他亦是 ACM KDD Cup 的常勝軍，領導或共同領導台大團隊贏得5次冠軍，今年也帶領一個台大的研究團隊贏得 2016 年 WSDM 盃。他曾擔任 SIGKDD 的高級程序委員及 ACL 的區域主席，目前是國際社會網絡探勘雜誌、資訊科學與工程學報和中文計算語言學期刊的副主編。',
        ),
    ),
);
$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學協會',
            'href' => 'http://foundation.datasci.tw/',
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
        <link rel="stylesheet" href="../_css/deep_learning_one_day_0924.css">
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
                            <p>&copy; Copyright 2016 - <a href="http://foundation.datasci.tw/" target="_blank">台灣資料科學協會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include '../_template/script.php';?>
    </body>
</html>