<?php
$title = '資料視覺化心法課程';
$caption = array( '資料視覺化心法課程' );

$event_date = strtotime('2016-03-26 00:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'data-visualization';
$kktix_date = strtotime('2015-02-26 12:00:00');
$reg_date = strtotime('2016-03-02 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-03-16 12:00:00');
$price = 1980;

$about = array(
    'title' => '讓資料科學專家引領您找出最佳答案',
    'subtitle' => '如何成功建立一個資料科學團隊？',
    'content' => array(
        '為迎接大數據的潮流，許多企業漸漸發覺到資料分析將是開啟企業創新或關鍵決策的一大契機，不少企業開始尋找資料科學家一同合作，甚至是在企業內建立資料科學團隊。但是，該去哪裡找到合適的資料科學家？資料科學家要具備什麼特質和能力？如何成功建立一個資料科學團隊？資料科學團隊與傳統的資料倉儲團隊有什麼差別？資料科學團隊在企業內扮演著什麼樣的角色？這都將是企業可能面臨到的一個又一個的問題。',
        '此系列活動將由資料科學愛好者年會總召陳昇瑋博士主講。他將與聽眾分享其協助多家企業培訓資料科學家及導入資料科學團隊的各種經驗，從企業如何跳脫既有框架，讓資料科學團隊盡情揮灑無限創意著手，進而能活用資料、挖掘出潛藏在資料中不為人知的秘密，最終打造高信任度及高效率的工作環境，展現資料分析的價值。誠摯地歡迎您的參與，讓資料科學專家引領您找出最佳答案。'
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
    '9:30 - 10:30' => array( 'title' => '資料科學簡介' ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:30' => array( 'title' => '資料分析實戰案例分享' ),
    '12:30 - 13:20' => array( 'title' => '午餐' ),
    '13:20 - 15:00' => array( 'title' => '資料科學家的養成之路' ),
    '15:00 - 15:20' => array( 'title' => '茶點時間' ),
    '15:20 - 16:40' => array( 'title' => '企業文化以及資料科學團隊的建立' ),
    '16:40 - 17:00' => array(
        'title' => '互動時間',
        'class' => 'success',
        /*'subtitle' => '與談人',
        'panels' => array( 'swc', 'chmpeng', 'birdman' ),
        'alias' => array(
            '台灣資料科學愛好者年會發起人' => '年會總召'
        )*/
    )
);

$speakers = array(
    'sckang' => array(
        'detail' => true,
        'image' => 'sckang.png',
        'name' => '康仕仲',
        'suffix' => '博士',
        'engn' => '(Prof. Shih-Chung Jessy Kang)',
        'title' => array(
            '<a href="http://sckang.caece.net/" target="_blank">臺大土木系教授兼任產學合作中心副主任</a>'
        ),
        'info' => array(
            '康士仲博士於美國史丹福大學取得土木與環境工程博士，現為臺大土木系教授、臺大產學合作總中心副主任，結構技師。康教授長期投入於工程視覺化、自動化機器人、工程教育以及防災資訊系統之研發。在臺大開設電腦繪圖、遊戲引擎、資料視覺化及機器人等課程，曾獲得優良教師獎。康教授曾擔任教學發展中心數位媒體組組長，負責開放式課程及數位化教育的推廣，他的工程圖學網路磨課師課程，有超過4萬人修習。現擔任國際期刊 Visualization in Engineering 之總編輯，編輯十餘本工程視覺化及機器人自動化主題之特刊和專書，發表超過50篇的期刊論文。'
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
            .no-bold { font-weight: normal; }
            td.time { vertical-align: middle !important; }
            
            #header .navbar-brand{
                padding-top: 20px;
            } 

            @media (max-width: 767px){
                .mainTitle h2 {
                    margin: 18px 0 10px 0;
                }
            }
            @media (max-width: 550px){
                .mainTitle h2 {
                    margin: 12px 0 10px 0;
                }
            }
            @media (max-width: 490px){
                .mainTitle h2 {
                    margin: 21px 0 10px 0;
                }
            }
            @media (max-width: 420px){
                .mainTitle h2 {
                    margin: 16px 0 10px 0;
                }
                .pic_section{
                    font-size: 14px;
                }
                .pic_section h3{
                    font-size: 15px;
                }
                .maindate {
                    padding-top: 60px;
                    line-height: 25px;
                    font-size: 16px;
                }
                .maindate h4{
                    line-height: 1.2;
                    font-size: 18px;
                }
            }
            @media (max-width: 375px){
                .mainTitle{
                    background: #8dd2c8;
                    top: 56%;
                    font-size: 2em;
                    width: 90%;
                    padding: 3px;
                }
            }
            @media (max-width: 320px){
                .mainTitle h2 {
                    margin: 5px 0 10px 0;
                } 
            }

            
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
                            <img src="../_images/dsc2016-series_main.png" class="img-responsive logoInline">
                            <div class="mainTitle"><h2 class="mt"><?php echo $title ?></h2></div>
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
    </body>
</html>