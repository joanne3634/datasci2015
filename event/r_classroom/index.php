<?php
$title = 'R 語言翻轉教室';
$caption = array(  'R 語言翻轉教室');

$event_date = array( strtotime('2016-04-23 17:00:00'), strtotime('2016-04-30 17:00:00') );

$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string .= date('Y/n/j',$event_date[0]).' (' . $weekdays[date('w',$event_date[0])] . ') 及 '.date('Y/n/j',$event_date[1]).' (' . $weekdays[date('w',$event_date[1])] . ')';

// 沒設定的話預設為 中央研究院人文社會科學館
$location_string = '中央研究院人文社會科學館 第二會議室'; 

$kktix_link = 'r-classroom';
$kktix_date = strtotime('2015-04-04 12:00:00');
$reg_date = strtotime('2016-04-07 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-04-14 12:00:00');
$price = 4480;

$about = array(
    'title' => 'R 語言翻轉教室',
    'content' => array(
        '面對撲面而來的資料浪潮，包含 Google、Facebook、Intel、Pfizer、Bank of America 等國際級企業，都已經採用 R 語言進行資料分析，許多全球一流大學如 Stanford、Johns Hopkins 和 UCLA 也將 R 視為資料分析課程的先修科目。R 語言具有免費、跨平台、佔有率高、可塑性高等優勢，各式各樣的 R 社群蓬勃發展。在國際知名的 KDnuggets 論壇統計當中，R 語言已經連續三年獲得資料科學家最常使用的資料分析語言第一名。',
        '本課程很榮幸邀請到 Taiwan R User Group 的共同創辦人吳齊軒 ( Wush Wu ) 擔任講者，利用一套用 R 學 R 的教案 -- R 語言翻轉教室，來引領無程式開發經驗的學員，從實作中瞭解 R 語言的基本操作以及初階資料分析。這樣的訓練將幫助學員學會如何掌握資料的脈絡，進而輔助決策，目標是改善同學們學 R 語言基礎知識的體驗。適合資訊科學、統計學、商學、傳播學、社會學及其他領域的學生。我們預期學員可至少學會以下內容：',
        '<ul class="about_ul">
            <li>R 語言的優缺點</li>
            <li>建立開發環境</li>
            <li>基礎語法</li>
            <li>開放資料的處理</li>
            <li>輸出統計圖表</li>
        </ul>'
    )
);

$content = array(
    '適合對象' => array( '想從事資料分析工作，卻無程式開發經驗',
        '想學習免費、跨平台且開源的資料分析工具',
        '想學習如何處理台灣的開放資料',
        '想在兩天入門 R 語言，並將 R 用於自己的工作中',
        '了解「 R 語言翻轉教室」是一套自學教材，但是在學習中需要導引，以及導師的協助的同學'
    ),
    '學員要求' => array( '自備符合「 R 語言翻轉教室」需求的筆電（ 請見後續說明 ）','一定的英文打字水準' ),
    '筆電要求' => array( 
        '學員須自備可以無線上網的筆記型電腦，建議使用以下作業系統：
        <ul>
            <li>Windows 7 或以上，帳號不得包含中文</li>
            <li>Mac OS X 10.9 或以上</li>
            <li>Ubuntu 14.04 或以上</li>
        </ul>',
        '建議課程開始前先自行安裝以下工具，講師也會在課堂上說明安裝注意事項。
        <ul>
            <li><a href="http://cran.rstudio.com/" target="_blank">R </a> ( R-3.1.2 以上版本 )</li>
            <li><a href="http://wush978.github.io/DataScienceAndR/#%E6%B1%82%E5%8A%A9%E5%B0%88%E5%8D%80" target="_blank">RStudio ID E</a> ( 98.1091 以上版本 )</li>
        </ul>',
        '同學請參考以下的上手影片：<br>
        <iframe style="padding-top:10px;" width="560" height="315" src="https://www.youtube.com/embed/fcd6zSk0yd8" frameborder="0" allowfullscreen></iframe>',
        '或是依照以下的動作快速設定學習環境：
        <ul>
            <li>安裝 R</li>
            <li>安裝 RStudio ( Windows 使用者請安裝 RStudio 或自備能夠編輯 UTF-8 編碼的編輯器，OS X 與 Linux 使用者可依據自己喜好決定是否使用 RStudio )</li>
            <li>打開 R，執行：source("http://wush978.github.io/R/init-swirl.R")</li>
            <li>輸入 library(swirl); swirl() 後即進入教學環境。</li>
            <li>進入 00-Hello-DataScienceAndR 課程檢查你的電腦能不能執行本教材的所有功能，並瞭解本教材所提供的功能。</li>
        </ul>',
        '有興趣了解安裝細節的同學，請參考：
        <ul>
            <li><a href="https://github.com/wush978/DataScienceAndR/wiki/Windows-%E8%A8%AD%E5%AE%9A%E6%8C%87%E5%8D%97" target="_blank">Windows</a></li>
            <li><a href="https://github.com/wush978/DataScienceAndR/wiki/Mac-OS-X-%E8%A8%AD%E5%AE%9A%E6%8C%87%E5%8D%97" target="_blank">Mac OS X</a></li>
            <li><a href="https://github.com/wush978/DataScienceAndR/wiki/Ubuntu-%E8%A8%AD%E5%AE%9A%E6%8C%87%E5%8D%97" target="_blank">Ubuntu</a></li>
        </ul>',
        '安裝上有問題，或是在執行 00-Hello-DataScienceAndR 不順利的同學請到 <a href="http://wush978.github.io/DataScienceAndR/#%E6%B1%82%E5%8A%A9%E5%B0%88%E5%8D%80" target="_blank">求助專區</a> 取得協助'
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedules = array(
    '4 / 23 ' => array(
        '9:00 - 9:30' => array( 'title' => '報到' ),
        '9:30 - 10:30' => array( 'title' => 'R 語言概論', 'subtitle' => '資料科學的完整解決方案' ),
        '10:30 - 10:50' => array( 'title' => '茶點時間' ),
        '10:50 - 12:30' => array( 'title' => '統計尺度與 R 語言的資料處理基礎' ),
        '12:30 - 13:20' => array( 'title' => '午餐' ),
        '13:20 - 15:00' => array( 'title' => '矩陣與結構化的資料物件簡介' ),
        '15:00 - 15:20' => array( 'title' => '茶點時間' ),
        '15:20 - 17:00' => array( 'title' => '讀取結構化資料與作業說明' )
    ),
    '4 / 30 ' => array(
        '9:00 - 9:30' => array( 'title' => '報到' ),
        '9:30 - 10:30' => array( 'title' => '資料科學團隊的 Hello World' ),
        '10:30 - 10:50' => array( 'title' => '茶點時間' ),
        '10:50 - 12:30' => array( 'title' => '結構化的資料處理'),
        '12:30 - 13:20' => array( 'title' => '午餐' ),
        '13:20 - 15:00' => array( 'title' => '創造價值的捷徑，結構化的資料比對'),
        '15:00 - 15:20' => array( 'title' => '茶點時間' ),
        '15:20 - 17:00' => array( 'title' => '資料視覺化與資料探勘' )
    )
);

$speakers = array(
    'wush' => array(
        'detail' => true,
        'image' => 'wush.jpg',
        'name' => '吳齊軒',
        'suffix' => '',
        'engn' => ' / Wush',
        'title' => array(
            '台灣大學電機所博士生'
        ),
        'info' => array(
            '國立台灣大學電機所博士生，平時致力於推廣 R 語言，曾主辦多場 R 語言推廣講座，並經常於 Taiwan R User Group 分享 R 的使用心得。有豐富的 R 語言實務經驗，包含資料的收集、整理、分析到報告製作。擅長根據專案需求，量身打造 R 的資料分析系統，以及運用 R 和 C++ 撰寫高效能演算法。'
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
        <link rel="stylesheet" href="../_css/r_c.css">
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
                            <img src="../_images/dsc2016-series_main.svg" class="img-responsive logoInline">
                            <div class="mainTitle">
                                <h2 class="mt"><?php echo $title ?> 
                                    </div></h2>
                            </div>
                            <div class="maindate">
                                <h4 class="text-center date">
                                    <i class="fa fa-calendar"></i> 日期: <?php echo $date_string; ?> &nbsp; &nbsp;
                                   
                                </h4>
                                <h4 class="text-center location">
                                    <i class="fa fa-map-marker"></i> 地點:  <?php echo isset($location_string) ? $location_string :'中央研究院人文社會科學館' ?> 
                                </h4><h4 class="text-center">
                                    <div class="fb-share-button" 
                                        data-href="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" 
                                        data-layout="button_count"></div>
                                </h4>


                            </div>
                            <a href="/"style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about_us"><?php include('../_template/about.php'); ?></section>
            <section id="schedule"><div  class="pic_section" >


            <div class="container">
            <?php
            if( !isset($schedules) ) { $schedules = array( '__None__' => $schedule ); }
            foreach($schedules as $caption => $schedule)
            {
               
                $title = $caption .'課程';
                
            ?>
                <div class="row">
                    <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
                        <h2 class="section_header text-center"><?php echo $title; ?></h2>
                    </div>
                </div>            

                <div class="row about_desc">
                    <div class="col-md-10 col-md-offset-1">
                        <table width="100%" class="table table-bordered pagetb to_animate" data-animation="fadeInUp">
            <?php
                $panelist = array();
                $count = 0;
                foreach ( $schedule as $t => $data )
                {
                    $class = isset($data['class']) ? $data['class'] : (($count%2==0)?'warning':'');
                    $tr_attr = empty($class) ? '' : (' class="'.$class.'"');
            ?>
                            <tr<?php echo $tr_attr; ?>>
                                <td class="text-center time"><?php echo $t; ?></td>
                                <td style="width:70%;">
                                    <h3 class="schedule-content"><?php echo $data['title']; ?></h3>
                                    <?php if ( isset($data['subtitle']) ) { echo $data['subtitle']; } ?>
            <?php
                    if ( isset($data['panels']) )
                    {
                        foreach( $data['panels'] as $panel_key )
                        {
                            $panel = $speakers[$panel_key];
                            $panel_title = array();
                            foreach ( $panel['title'] as $pt )
                            {
                                $ptt = isset($data['alias'][$pt]) ? $data['alias'][$pt] : $pt;
                                $panel_title[] = $ptt;
                            }
                            $panelist[] = $panel_key;
            ?>
                                    <br/>
                                    <span data-toggle="modal" data-target="#<?php echo $panel_key; ?>" class="text-primary speaker-info">
                                        <?php echo $panel['name']; ?> / <?php echo implode(', ',$panel_title); ?>
                                    </span>
            <?php
                        }
                    }
            ?>
                                </td>
                            </tr>
            <?php
                    $count++;
                }
            ?>
                        </table>
                    </div>
                </div>
            <?php
            }
            ?>

    
            </div>
            </div></section>
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
                            <p>&copy; Copyright <a href="/">2016 - 台灣資料科學愛好者年會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include('../_template/script.php'); ?>
    </body>
    <style type="text/css">
        .fb_iframe_widget_fluid{
            display: block !important;
        }        
    </style>
</html>