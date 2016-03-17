<?php
$title = '實戰 D3.js — 最熱門的互動資料視覺化技術';
$title_rwd = array(  '實戰 D3.js', '<span style="font-size:0.8em;">熱門的互動資料視覺化技術</span>' );
$caption = array(  '實戰 D3.js'
    , '<span style="font-size:0.8em;">最熱門的互動資料視覺化技術</span>' 
    );


$event_date = strtotime('2016-04-30 17:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'd3_js';
$kktix_date = strtotime('2015-03-20 12:00:00');
$reg_date = strtotime('2016-03-30 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-04-07 12:00:00');
$price = 1980;
// $ticket_full = true;


$about = array(
    'title' => '實戰 D3.js — 最熱門的互動資料視覺化技術',
    'content' => array(
        '視覺化一直都是人類溝通的一種重要的方式，而隨著科技的進步，資料視覺化也不斷的在演化。電腦與網路的發明讓資訊的傳遞越來越 便捷，而知識也不再只由靜態的方式包裝，動畫、互動、虛擬實境等資訊科技不僅打破了傳統知識表現的挶限，也逐漸開始顛覆內容產業；越來越多的訊息透過圖表、解釋性探索與互動視覺化的方式來傳遞。',
        'D3.js 立基於網頁技術、並從設計的核心納入互動、即時等概念，可說是當代最先近的一組視覺化工具。這個課程將從 D3.js 最基本的資料模型開始到各種複雜的布局，以穿插實作的方式帶領學員實際做出各種圖表，包含從基本的長條圖、圓餅圖、到 Bubble Chart、 Sun Burst 、Choropleth 等，同時也將完整說明使用 D3.js 時常見的陷阱與不易理解的部份。在這堂課中，你可以學到：',
        '* D3.js 資料模型的完整概念<br>
         * 製作動畫與變形圖表<br>
         * 使用 D3.js 重新解譯資料<br>
         * 製作熱度地圖、Circular Treemap 等進階圖表'
    )
);

$content = array(
    '學員基本要求' => array( '這門課為技術課程，可以讓學員完整的理解並學會 D3.js 的設計邏輯並使用 D3.js 自由的製作各種視覺化。','學員必須具備基本網頁設計知識 ( HTML / CSS ) 並會使用 JavaScript ，並需自備電腦、預先安裝最新版本的網頁瀏覽器 ( 建議使用 Chrome ) 與個人慣用的文字編輯器。
' ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array( 'title' => '報到' ),
    '9:30 - 10:30' => array( 'title' => '踏出 D3.js 資料視覺化的第一步' ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:30' => array( 'title' => 'D3.js 核心完全解析' ),
    '12:30 - 13:20' => array( 'title' => '午餐' ),
    '13:20 - 15:00' => array( 'title' => '動畫與變形 - 活用 D3.js 的工具函式' ),
    '15:00 - 15:20' => array( 'title' => '茶點時間' ),
    '15:20 - 17:00' => array( 'title' => '進階佈局與資料處理' )
);

$speakers = array(
    'sckang' => array(
        'detail' => true,
        'image' => 'kirby.jpg',
        'name' => '吳泰輝',
        'suffix' => '',
        'engn' => '/ Kirby Wufoundi',
        'title' => array(
            '房地資訊站 / 共同創辦人'
        ),
        'info' => array(
            '<a href="http://infographics.tw" target="_blank">infographics.tw</a> 與 <a href="http://g0v.tw" target="_blank">g0v.tw</a> 共同發起人，亦為資料視覺化領域與網頁技術專家。曾擔任 Google Taiwan DigiCamp 2014 技術顧問以及籌辦 2015 年資料新聞實戰營 ( dBootcamp Taipei )，亦曾受邀至台大、交大、世新、政大、輔大、文化等大學之新聞與傳播相關課程演講及授課。',
            '<a href="http://tkirby.org/" target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 個人網頁</a>'
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
                /*line-height: 40px;*/
                padding-top: 24px;
                font-size: 24px;
                max-width: none;
            } 
            @media (max-width: 953px){
                #header .navbar-brand{
                    padding-top: 15px;
                    padding-bottom: 5px;
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
                    padding: 15px 0px 5px 0px;
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
            
            #header{
                position: fixed;
            }
            .pic_section, .grey_section{
                padding-top: 30px;
                padding-bottom: 30px;
            }
            .color_section{
                margin-top: 0px !important;
                padding-top: 0px !important;
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
                <div class="container" style="padding-top:80px;" ><!-- style="padding-top:80px;" -->
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