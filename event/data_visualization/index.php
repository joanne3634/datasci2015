<?php
$title = '資料視覺化之理論、賞析與實作';
$title_rwd = array(  '資料視覺化', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array(  '資料視覺化之理論、賞析與實作'
    // , '<span style="font-size:0.8em;">理論、賞析與實作</span>' 
    );


$event_date = strtotime('2016-03-26 17:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'data-vis';
$kktix_date = strtotime('2015-02-26 12:00:00');
$reg_date = strtotime('2016-03-08 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-03-16 23:59:59');
$price = 1980;
//$ticket_full = true;


$about = array(
    'title' => '資料視覺化之理論、賞析與實作',
    'content' => array(
        '資料視覺化是資料科學中重要的領域，尤其在現代資料巨量化的浪潮下，透過各種視覺化的呈現，能讓專業人員，快速從資料中快速判讀，發現關鍵問題。也幫助跨領域的溝通，以圖像式的方式，說明、探索與分析資料背後的意義，提昇決策的效率與品質。',
        '這個課程濃縮了康教授在台大所開設的『資料視覺化』課程的精華，總共包含賞析、理論、設計與實作四節課程。在賞析課程中，他將解析十大經典的案例，從案例中培養出資料視覺設計師的眼光，懂得看到設計下面的精妙。第二節課是理論課，他將介紹心理學中相關的研究發現，解釋人類的視覺系統是怎麼接受資訊，怎麼理解資訊，這些心理學理論，都是資料視覺化的設計時，必須符合的基礎。第三節課將說明設計方法，他會具體說明如何從資料到視覺化的設計步驟，包含了解資料的維度，使用者的需求，資料的形態。並說明如何以步驟化的方式，發展好資料視覺化方法，達到解決問題的目的。課程最後，康教授將介紹他使用各類資料視覺化的工具的經驗，包含 Tableau, Processing, D3.js 等，也將展示他和他的學生所開發的實務案例。'
    )
);

$content = array(
    '學員基本要求' => array( '這門課不是技術課程，是建立觀念，培養眼光，了解資料視覺化這個新興領域發展的課程。','學員不需要預備電腦、不需程式背景、不需安裝軟體；歡迎大家帶著開放的心，銳利的眼睛，以及敏捷的頭腦一起來學習這門有趣的學問。' ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array( 'title' => '報到' ),
    '9:30 - 10:30' => array( 'title' => '【賞析】認識經典案例' ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:30' => array( 'title' => '【理論】認識我們視覺的腦' ),
    '12:30 - 13:20' => array( 'title' => '午餐' ),
    '13:20 - 15:00' => array( 'title' => '【設計】從維度開始的設計手法' ),
    '15:00 - 15:20' => array( 'title' => '茶點時間' ),
    '15:20 - 17:00' => array( 'title' => '【實作】開發工具與開發實例' )
);

$speakers = array(
    'sckang' => array(
        'detail' => true,
        'image' => 'sckang.png',
        'name' => '康仕仲',
        'suffix' => '博士',
        'engn' => '(Prof. Shih-Chung Jessy Kang)',
        'title' => array(
            '<a href="http://sckang.caece.net/" target="_blank">臺大土木系教授兼任副教務長</a>'
        ),
        'info' => array(
            '康仕仲教授是臺大土木系教授兼任副教務長、美國史丹福大學博士。康教授長期投入於工程視覺化、自動化機器人、工程教育以及防災資訊系統之研發。在臺大開設電腦繪圖、遊戲引擎、資料視覺化及機器人等課程，曾獲得優良教師獎。康教授曾擔任教學發展中心數位媒體組組長，負責開放式課程及數位化教育的推廣，他在 Coursera 上開設的工程圖學系列課程，共有超過 5 萬人修習。現擔任國際期刊 Visualization in Engineering 總編輯，編輯十餘本工程視覺化及機器人自動化主題之特刊和專書，發表超過 50 篇的期刊論文。欲瞭解康博士的研究及心得分享，請至他的<a href="http://sckang.caece.net/" target="_blank">個人網頁</a>一探究竟。'
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
        <link rel="stylesheet" href="../_css/animations.css">
        <link rel="stylesheet" href="../_css/fonts.css">
        <script src="../_js/vendor/modernizr-2.6.2.min.js"></script>


        <!--[if lt IE 9]>
        <script src="../_js/vendor/html5shiv.min.js"></script>
        <script src="../_js/vendor/respond.min.js"></script>
    <![endif]-->
        <style>             
            /* header 的 標題文字 只有一行的時候改 line-height */
            #header .navbar-brand{
                line-height: 40px;
                padding-top: 24px;
                font-size: 24px;
                max-width: none;
            } 
            @media (max-width: 953px){
                #header .navbar-brand{
                    padding-top: 15px;
                    font-size: 21px;
                    max-width: 320px;

                } 
            }
            @media (min-width: 768px)  and ( max-width: 800px){
                #header .navbar-brand{
                    font-size: 18px;
                }
            }
            @media (max-width: 767px){
                .mainTitle h2 {
                    margin: 18px 0 10px 0;
                }
            }
            @media (min-width: 550px){
                .maindate > h4 {
                    font-size: 1.1em;
                }
            }
            @media (max-width: 550px){
                .mainTitle h2 {
                    margin: 12px 0 10px 0;
                }
            }
            @media (min-width: 490px){
                .mainTitle > .small-title{
                    display: none;
                }
                .mainTitle > .mt{
                    display: block;
                }
            }
            @media (max-width: 490px){
                .mainTitle{
                    background: #8dd2c8;
                    top: 58%;
                    font-size: 1.7em;
                    width: 85%;
                    left: 7.5%;
                }
                .mainTitle h2 {
                    margin: 5px 0 10px 0;
                }
                .mainTitle > .small-title{
                    display: block;
                }
                .mainTitle > .mt{
                    display: none;
                }
                .maindate{
                    padding-top: 40px;
                }

            }
            @media (max-width: 420px){
                /* 議程文字大小 */
                .pic_section{
                    font-size: 14px;
                }
                .pic_section h3{
                    font-size: 15px;
                }
                .maindate {
                    padding-top: 60px;
                }
                .maindate h4{
                    line-height: 1.2;
                    font-size: 18px;
                }
            }
            
            @media (max-width: 375px){
                .mainTitle{
                    top: 55%;             
                }
                #header .navbar-brand{
                    font-size: 18px;
                    padding: 15px 0px 15px 0px;
                }
            }
            @media (max-width: 320px){
                .mainTitle{
                    top: 50%;
                }      
                #header .navbar-brand{
                    font-size: 16px;
                }      
            }

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
                            <img src="../_images/dsc2016-series_main.png" class="img-responsive logoInline">
                            <div class="mainTitle">
                                <h2 class="small-title"><?php echo implode('<br/>',$title_rwd); ?></h2>
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
            <section id="schedule" class="pic_section"><?php include('../_template/schedule.php'); ?></section>
            <section id="speaker"><?php include('../_template/speaker.php'); ?></section>
            <section id="content" class="grey_section"><?php include('../_template/content.php'); ?></section>
            <section id="ticket"><?php include('../_template/ticket.php'); ?></section>
            <section id="traffic" class="grey_section"><?php include('../_template/traffic.php'); ?></section>
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
        <!-- TODO 測試用 上線要拿掉 -->
       <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </body>
</html>