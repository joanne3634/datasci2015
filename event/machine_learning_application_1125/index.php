<?php


// $title = 'DSC × TAAI 2016 人工智慧與機器學習在推薦系統上的應用';
$title = '人工智慧與機器學習在推薦系統上的應用';
$main_title = '人工智慧與機器學習在推薦系統上的應用';
$title_rwd = array('<span style="font-size:0.6em;">DSC × TAAI 2016</span>','<span style="font-size:0.8em;">人工智慧與機器學習</span>','<span style="font-size:0.8em;">在推薦系統上的應用</span>');
$caption = array('DSC × TAAI 2016','<span class="caption-span">人工智慧與機器學習在推薦系統上的應用</span>');

// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
// $caption = array('人工智慧與機器學習在推薦系統上的應用');


date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-11-25 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '國立清華大學旺宏館 國際會議廳';

$kktix_link = 'series-events-1125-1126';
$kktix_date = strtotime('2016-10-31 16:00:00');
$reg_date = strtotime('2016-11-2 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-11-9 12:00:00');
$price = 1980;
// $ticket_full = true;

$about = array(
    'title' => '人工智慧與機器學習在推薦系統上的應用',
    'content' => array(
    '本課程將簡介人工智慧的歷史演進，以及其與機器學習的關聯。同時也會介紹在實務上如何訓練好的機器學習模型，及如何應用相關技術建立智慧推薦系統。',
    '本課程由三個部分組成：
        <ol>
        <li>
            綜觀人工智慧<br>
            在 AlphaGo 打敗人類棋王之後，人工智慧頓時成為膾炙人口的顯學。然而，智慧是什麼？人工智慧又是如何界定？人工智慧從 1950 年開始至今是如何演進？它能夠做到什麼，不能做到什麼？人工智慧跟近年來最紅的巨量資料、機器學習等領域的關係為何？人類在未來又應該如何與人工智慧共處。講者將在這段演講中一一闡述這些問題的答案。
        </li><br>
        <li>
            你所不知道的機器學習<br>
            很多人以為機器學習就是能夠從大量的「訓練資料」訓練出一個預測模型的技術 (classification)，或是對於資料做出分群 (clustering)。然而，分類與分群只是機器學習的兩個最常用的分析方式，近年來機器學習發展出更多擁有不同「能力」的模型。在這段演講中，講者將會介紹這些較不為人知的模型。也將從實務面探討如何訓練出一個有用的機器學習模型。
        </li><br>
        <li>
            推薦系統：人工智慧與機器學習最廣泛的應用<br>
            在 21 世紀，推薦系統相關的應用已經是無所不在。從網路購物如 AMAZON, PCHOME，到串流娛樂服務如 Netflix, KKBOX，甚至配對引擎如 Matchmaker, 104 等，背後都依賴著一套高精確度的推薦系統。在本課程中，講者將會介紹推薦系統的原理、不同方式的推薦機制，以及協同過濾推薦的技巧。       
        </ol>',
    )
);

$content = array(
    'DSC × <a href="http://www.cs.nthu.edu.tw/~taai2016/" target="_blank">TAAI 2016</a> 特別福利' => array(
        '報名此場次的與會者可以參加當天早上 <a href="http://www.cs.nthu.edu.tw/~taai2016/" target="_blank">TAAI 2016</a> 的 <a href="http://www.cs.nthu.edu.tw/~taai2016/keynote.html" target="_blank">Keynote Speech</a> —— 廖弘源老師主講的 It is all about AI。',
        '<a href="http://www.cs.nthu.edu.tw/~taai2016/" target="_blank">TAAI</a> 為全台灣一年一度的人工智慧學者聚集的場合，與會者們等同於擁有與所有 AI 學者交流的機會！',
        '當天 <a href="http://www.cs.nthu.edu.tw/~taai2016/" target="_blank">TAAI 2016</a> 會安排 AI 研究成果的海報展示，可讓與會者們進一步深入了解 AI 學者的研究成果。',
    ),
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
    '8:00 - 8:30' => array('title' => '報到'),
    '8:30 - 9:00' => array('title' => '<a href="http://www.cs.nthu.edu.tw/~taai2016/" target="_blank">TAAI</a> 開幕式'),
    '9:00 - 9:50' => array('title' => 'Keynote Speech I: It is all about AI'),
    '9:50 - 10:10' => array('title' => '茶點時間'),
    '10:10 - 12:10' => array('title' => '綜觀人工智慧'),
    '12:10 - 13:00' => array('title' => '午餐'),
    '13:00 - 15:00' => array('title' => '你所不知道的機器學習'),
    '15:00 - 15:30' => array('title' => '茶點時間'),
    '15:30 - 17:30' => array('title' => '推薦系統：人工智慧與機器學習最廣泛的應用')
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
            'Prof. Shou-de Lin is currently a full professor in the CSIE department of National Taiwan University. He holds a BS in EE department from National Taiwan University, an MS-EE from the University of Michigan, and an MS in Computational Linguistics and PhD in Computer Science both from the University of Southern California. He leads the Machine Discovery and Social Network Mining Lab in NTU. Before joining NTU, he was a post-doctoral research fellow at the Los Alamos National Lab. Prof. Lin’s research includes the areas of machine learning and data mining, social network analysis, and natural language processing. His international recognition includes the best paper award in IEEE Web Intelligent conference 2003, Google Research Award in 2007, Microsoft research award in 2008, merit paper award in TAAI 2010, best paper award in ASONAM 2011, US Aerospace AFOSR/AOARD research award winner for 5 years. He is the all-time winners in ACM KDD Cup, leading or co-leading the NTU team to win 5 championships. He also leads an NTU research team to win WSDM Cup 2016. He has served as the senior PC for SIGKDD and area chair for ACL. He is currently the associate editor for International Journal on Social Network Mining, Journal of Information Science and Engineering, and International Journal of Computational Linguistics and Chinese Language Processing.',
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
        <link rel="stylesheet" href="../_css/ml_1125.css">
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
            <section id="mainslider"><div class="container" style="padding-top:80px;" ><!-- style="padding-top:80px;" -->
    <div class="row">
        <div class="col-md-12">
            <img src="../_images/dsc2016-series_main.svg" class="img-responsive logoInline">
            <div class="mainTitle">
                <h2 class="small-title"><?php echo implode('<br/>',$title_rwd); ?></h2>
                <h2 class="mt"><?php echo $main_title ?></h2>
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
                    <i class="fa fa-map-marker"></i> 地點: <?php echo $location_string;?>
                </h4>
                <?php
                $today = time();
                $reg_end = ( isset($deadline) AND $today > $deadline );
                if ( isset($kktix_date) AND $today > $kktix_date )
                {
                    // $end_string = '已開放報名！';
                    echo '<div class="ticket-container">';
                    if ( $today > $event_date )
                    {
                        echo '<h4><i class="fa fa-check"></i> 活動已結束，請期待下一場系列活動！</h4>';
                    }
                    else if( $reg_end )
                    {
                        echo '<h4><i class="fa fa-check"></i> 報名已經截止，感謝大家的支持！</h4>';
                    }else if( isset($ticket_full) ) 
                    {
                        echo '<h4><i class="fa fa-check"></i> 報名名額已額滿，感謝大家的支持！</h4>';
                    }
                    else
                    {
                        $prefix = ( $today > $reg_date ) ? '立即報名' : '預覽報名頁面';
                ?>
                    
                        <a class="type-15" href="http://dsc.kktix.cc/events/<?php echo $kktix_link; ?>" target="_blank">
                            <span><?php echo $prefix; ?> <i class="fa fa-arrow-circle-right"></i></span>
                            <span></span>
                        </a>
                    
                <?php
                    }
                    echo '</div>';
                }else{
                    
                    $register_string = date('Y/n/j',$reg_date). ' (' . $weekdays[date('w', $reg_date)] . ')';
                    if( isset($reg_time) ) { $register_string .= ' ' . $reg_time; }
                    $register_string .= ' 開放報名！';
                    echo '<div class="ticket-container"><h4><i class="fa fa-check"></i> '. $register_string .'</h4></div>';
                }
                ?>
            </div>
            <a href="/event/" style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
        </div>
    </div>
</div>  
    

            </section>
            <section id="about_us"><?php include '../_template/about.php';?></section>
            <section id="schedule"><div  class="pic_section" ><?php include '../_template/schedule.php';?></div></section>
            <section id="speaker"><?php include '../_template/speaker.php';?></section>
            <section id="content" ><div class="grey_section" ><?php include '../_template/content.php';?></div></section>
            <section id="ticket"><?php include '../_template/ticket.php';?></section>
            <section id="traffic" >

            <div class="grey_section" ><?php include '../_template/traffic_taai.php';?></div></section>
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