<?php
$title = 'R 語言資料探勘實務';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('R 語言資料探勘實務');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-10-30 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 第一會議室';

$kktix_link = 'series-events-1030';
$kktix_date = strtotime('2016-10-03 16:00:00');
$reg_date = strtotime('2016-10-04 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-10-12 12:00:00');
$price = 2480;
// $ticket_full = true;

$about = array(
    'title' => 'R 語言資料探勘實務',
    'content' => array(
    '在這資料科學逐漸成為顯學的年代，無論面對的是資料的幾個 V，其中最重要的永遠都是 Value (價值) 這個 V，而資料探勘正是一種透過系統化的方式釐清資料的脈絡、找出其中有價值的特徵與相關性的技術。',
    '這門六小時的課程，將從最實務的角度切入，與大家分享如何將現實中極待解決的問題，轉換成可以利用資料探勘技術處理的問題，並且運用 R 語言中各種強大的工具，進行關聯性分析、迴歸分析以及叢聚分析，以達成將資料中隱藏的資訊挖掘出來的最終目標。',
    '本課程由四個部分組成：
        <ol>
        <li>
            資料探勘基石<br>
            簡介資料探勘的源流，以及各種相關技術與理論的基礎。
        </li><br>
        <li>
            顧客行為的資料探勘 - 利用關聯性分析串連價值<br>
            啤酒與尿布這個資料探勘領域的經點案例，正式藉由關聯性分析，從消費者的購買行為中，找到足以為營收帶來衝擊的隱藏資訊，本部分課程將介紹關聯性分析的理論基礎，並且帶領大家利用 R 語言實地操作關聯性分析。
        </li><br>
        <li>
            鑒往知來的資料探勘 - 藉由監督式學習找尋關鍵因素<br>
            利用線性模型、邏輯斯迴歸模型或者任何機器學習工具從現有的資料中學習既有模式，並且預測未來的趨勢，可說是各式資料分析演講中最常聽到的作法，然而預測是果，背後的原因往往才是價值所在，本部分課程將帶領大家藉由訓練與建構迴歸模型，尋找影響趨勢的背後因素。            
        </li><br>
        <li>
            從零開始的資料探勘 - 運用非監督式學習釐清潛在模式<br>
            在這個資料科學當道的時代，資料幾乎隨手可得，面對高維度的資料，是否感覺頭昏腦脹，不知該如何是好？本部分課程將介紹數種主流的非監督式學習工具，讓大家可以從亂麻一般糾纏不清的資料中，理出頭緒，進一步發掘其中的價值。        
        </ol>',
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
        '本課程屬於中階課程，適合已經初步瞭解 R 的語法、有一些使用 R 的經驗，但是想要更進一步利用 R 進行資料探勘的朋友。',
        '本課程的精神在於傳授同學們實務上利用 R 語言進行資料探勘的技巧，並且引領同學從實作中學習分析真實世界資料科學問題的方法，以實際操作為主，同學們需自備筆電，筆電為 Windows 作業系統的同學們，請使用純英數組成的使用者帳號進行課程，以避免由於中文目錄名稱造成的技術問題。',
        '已經報名的同學們請到 <a href="http://www.datascienceandr.org" target="_blank">http://www.datascienceandr.org</a> 網站，參照網站中的步驟以及教學影片在自己的筆電上安裝 Base R、R Studio、 swirl 以及 DataScienceAndR 課程，並且完成其中 RBasic01 - RBasic06 的課程。'
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array('title' => '報到'),
    '9:30 - 10:30' => array('title' => '資料探勘基石'),
    '10:30 - 10:50' => array('title' => '茶點時間'),
    '10:50 - 12:30' => array('title' => '顧客行為的資料探勘 - 利用關聯性分析串連價值'),
    '12:30 - 13:20' => array('title' => '午餐'),
    '13:20 - 15:00' => array('title' => '鑒往知來的資料探勘 – 藉由監督式學習找尋關鍵因素'),
    '15:00 - 15:20' => array('title' => '茶點時間'),
    '15:20 - 17:00' => array('title' => '從零開始的資料探勘 – 運用非監督式學習釐清潛在模式')
);

$speakers = array(
    'helen' => array(
        'detail' => true,
        'image' => 'hjhsu.png',
        'name' => '許懷中',
        'suffix' => '',
        'engn' => '(Hwai-jung Hsu)',
        'title' => array(
            '逢甲大學資訊工程學系 / 助理教授',
        ),
        'info' => array(
            '許懷中博士 2011 年於國立交通大學資訊科學與工程學系取得博士學位，現為逢甲大學資訊工程學系助理教授，許博士通曉資料科學相關之基礎理論並具備豐富的實務經驗，過去數年間，許博士與陳昇瑋博士所領導之資料科學團隊合作為遊戲產業、線上教育以及職業運動產業，進行多項資料科學專案，以其在資料科學領域獨特的知能與熱情，為台灣產業尋找埋藏於海量資料中的價值；此外，為了培養國內資料科學人才，許博士曾在資策會、外貿協會、宏達電以及台灣資料科學年會等場合講授以 R 語言進行資料工程與探勘的相關實務技術，其充滿熱情、以簡馭繁的教學方式，頗受上課學員之好評。',
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
                            <p>&copy; Copyright 2016 - <a href="http://foundation.datasci.tw/" target="_blank">台灣資料科學協會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include '../_template/script.php';?>
    </body>
</html>