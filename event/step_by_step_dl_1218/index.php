<?php
$title = '手把手的深度學習實務';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('手把手的深度學習實務');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-12-18 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 第一會議室';

$kktix_link = 'eries-events-1218';
$kktix_date = strtotime('2016-11-27 12:00:00');
$reg_date = strtotime('2016-11-28 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-12-06 12:00:00');
$price = 2480;
// $ticket_full = true;

$about = array(
	'title' => '手把手的深度學習實務',
	'content' => array(
    '深度學習 (Deep Learning) 是近年來備受重視的機器學習方法，現今許多語音與影像辨識的研究與應用，都基於深度學習的技術來完成。深度學習的工具不斷推陳出新，若你已經聽過這項技術，卻不知道該從何開始下手，這堂手把手的實務課程將會很適合你。',
    '本課程利用六個小時的時間，介紹 Keras 這個熱門的深度學習工具，從最簡單的前饋類神經網路 (Feedforward Neural Network) 開始，用 Keras 加入各種訓練技巧 (Regularization, Early Stopping, Dropout) 以得到好的預測模型。亦介紹深度學習模型的另一個變形：捲積式類神經網路 (Convolutional Neural Network, CNN)，以完整的實務操作，讓你邁出成為深度學習訓練大師的第一步。',
    )
);

$content = array(
	'學員基本要求' => array(
        '本課程屬於中階課程，適合已有 python 基礎的使用經驗，初次想要利用 Keras 進行深度學習的朋友。',
        '本課程著重於手把手地用 Keras 實做深度學習模型，並且學習模型訓練時的技巧。同學們需自備筆電，並且依照課前通知安裝好所需的環境與套件。',
	),
	'退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
	'9:00 - 9:30' => array('title' => '報到'),
	'9:30 - 10:30' => array('title' => '訓練家要懂的深度學習'),
	'10:30 - 10:50' => array('title' => '茶點時間'),
	'10:50 - 12:30' => array('title' => '第一個深度學習模型'),
	'12:30 - 13:20' => array('title' => '午餐'),
	'13:20 - 15:00' => array('title' => '邁向模型訓練大師之路'),
	'15:00 - 15:20' => array('title' => '茶點時間'),
	'15:20 - 17:00' => array('title' => '模型的進化與變形')
);

$speakers = array(
    'jimmy' => array(
        'detail' => true,
        'image' => 'jimmy.jpg',
        'name' => '張鈞閔',
        'suffix' => '',
        'engn' => '(Jimmy Chang)',
        'title' => array(
            '中央研究院資訊科學研究所 / 研究助理',
        ),
        'info' => array(
            '畢業於臺大電機系所，現為中央研究院資訊所研究助理。有天起床發現社會有許多的資源不均與粉飾太平，期許自己像世紀帝國裡剛開始的騎士能開拓地圖資源、解除戰爭迷霧，用以資料為燃料的火把，讓這個社會更公平透明。',
        ),
    ),
    'cf' => array(
        'detail' => true,
        'image' => 'cfhsu.png',
        'name' => '許之凡',
        'suffix' => '',
        'engn' => '(Chih-Fan Hsu)',
        'title' => array(
            '中央研究院資訊科學研究所 / 研究助理',
        ),
        'info' => array(
            '現就讀於臺大電機所博士班 & 中央研究院資訊所兼任研究助理，主要研究領域為多媒體系統及資料分析。接觸過的領域從早期的電腦視覺、模式識別 (pattern recognition) 至現今的研究題目，一路上都有機器學習相伴，對機器學習的發展充滿期待。從小就對前進未知感到興奮、喜歡觀察事物並從中發現有趣的議題，目前一頭鑽進資料科學領域，每天在機器學習與數據分析中不斷穿梭，期許自己的發現能對社會有所貢獻。'
        )
    )
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
        <link rel="stylesheet" href="../_css/engineer.css">
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