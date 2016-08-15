<?php
$title = '一天搞懂深度學習';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('一天搞懂深度學習');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-09-24 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 國際會議廳';

$kktix_link = 'deep_learning_one_day_0924';
$kktix_date = strtotime('2016-08-16 12:00:00');
$reg_date = strtotime('2016-08-16 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-08-22 12:00:00');
$price = 1980;
// $ticket_full = true;

$about = array(
    'title' => '一天搞懂深度學習',
    'content' => array(
    '深度學習 ( Deep Learning ) 是機器學習 ( Machine Learning ) 中近年來備受重視的一支，深度學習根源於類神經網路 ( Artificial Neural Network ) 模型，但今日深度學習的技術和它的前身已截然不同，目前最好的語音辨識和影像辨識系統都是以深度學習技術來完成，你可能在很多不同的場合聽過各種用深度學習做出的驚人應用 ( 例如：最近紅遍大街小巷的 AlphaGo )，聽完以後覺得心癢癢的，想要趕快使用這項強大的技術，卻不知要從何下手學習，那這門課就是你所需要的。',
    '這門課程將由臺大電機系李宏毅教授利用短短的一天議程簡介深度學習，包含什麼是深度學習、深度學習的各種小技巧、有記憶力的深度學習模型及深度學習應用與展望。本課程希望幫助大家不只能了解深度學習，也可以有效率地上手深度學習，用在手邊的問題上。無論是從未嘗試過深度學習的新手，還是已經有一點經驗想更深入學習，都可以在這門課中有所收穫。')
);

$content = array(
    '學員基本要求' => array(
        '本課程著重深度學習的理論與實作，有機器學習相關背景知識更能進入狀況，但沒有也沒關係。不需自備任何軟硬體與前置作業。',
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array('title' => '報到'),
    '9:30 - 10:30' => array('title' => '什麼是深度學習'),
    '10:30 - 10:50' => array('title' => '茶點時間'),
    '10:50 - 12:30' => array('title' => '深度學習的各種小技巧'),
    '12:30 - 13:50' => array('title' => '午餐'),
    '13:50 - 15:20' => array('title' => '有記憶力的深度學習模型'),
    '15:20 - 15:50' => array('title' => '茶點時間'),
    '15:50 - 17:20' => array('title' => '深度學習應用與展望')
);

$speakers = array(
    'helen' => array(
        'detail' => true,
        'image' => 'hylee.png',
        'name' => '李宏毅',
        'suffix' => '',
        'engn' => '( Hung-yi Lee )',
        'title' => array(
            '臺灣大學電機系 / 助理教授',
        ),
        'info' => array(
            '現為臺大電機系助理教授，他的研究方向與興趣是以機器學習技術讓機器辨識並理解語音訊號的內容。以深度學習技術為基石，他正致力於語音數位內容搜尋、語音數位內容之自動化組織以及從語音數位內容擷取關鍵資訊等前瞻性研究，這些技術有很多的應用，例如：人機互動、問答系統、智慧型線上教學平台等等。他曾在臺大開設和深度學習相關的課程「機器學習及其深層與結構化」。',
            '<a href="http://speech.ee.ntu.edu.tw/~tlkagk/index.html" target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;個人網頁</a>',
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
                            <p>&copy; Copyright <a href="/">2016 - 台灣資料科學年會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include '../_template/script.php';?>
    </body>
</html>