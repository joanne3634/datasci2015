<?php
$title = '玩轉交易 (Be a Trade"R")！';
$caption = array( '玩轉交易 (Be a Trade"R")！', '使用 R 語言進行金融資料分析' );

$event_date = strtotime('2015-11-14 00:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6' => '六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'serial2015';
$kktix_date = strtotime('2015-10-10 12:00:00');
$reg_date = strtotime('2015-10-20 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2015-11-04 12:00:00');
$price = 1500;

$about = array(
    'title' => '使用 R 語言進行金融資料分析',
    'subtitle' => '玩轉交易 (Be a Trade"R")！',
    'content' => array(
        '你想在幾歲達到財務自由？你曾經想靠投資交易致富嗎？YES！隨著科技進步，金融交易模式也跟著改變。而大數據時代的興起，更讓許多從事金融相關工作者，發展成為 “金融資料科學家”。',
        '然而，分析金融資料，研發 “有利可圖” 的交易策略，並不是一件簡單的任務。眾人總在市場尋找交易聖盃，驀然回首，才發現最重要的燈火闌珊處──資金控管。複雜的理論我們不講，我們用R語言實作方式，帶您一窺資金控管的奧妙：模擬體驗暴富的快感，或是瞬間破產的不可置信。',
        '本活動將由 幣圖誌專欄作家 牧清華 與 Taiwan R User Group 創辦人 張家齊 共同主講。課程開始由博弈角度切入，藉由模擬輪盤賭局，建立資金控管概念。我們接著實作凱利賭徒，說明博弈與交易的相同與不同。在下半場，我們開始把玩金融資料，除了介紹R語言相當好用的金融套件：Quantmod，我們進而探勘金融資料：猜漲跌、預測波動率、尋找相似行情。期望學員於課程結束後，擁有分析金融資料，研發交易策略…等能力。',
        '這次一場對金融交易具有嚴重癡迷程度的朋友，絕對不可錯過的盛會！誠摯 歡迎您的參加！'
    )
);

$content = array(
    '學員基本要求' => array( '本課程尤其適合金融交易初學者，對交易具有高度熱忱，無程式經驗，但邏輯清晰者尤佳。' ),
    '課程規定' => array( '請自備筆電，並安裝好最新版本R語言軟體 (3.2.2)，下載位置為 <a href="http://cran.csie.ntu.edu.tw/" target="_blank">http://cran.csie.ntu.edu.tw/</a>' ),
    '退票須知' => array(
        '活動開始一週 (2015/11/07) 凌晨 12:00 前進行退票，退還購票費用 75%',
        '活動前 3 到 7 天(2015/11/07 ~ 2015/11/10) 內進行退票，退還購票費用 25%',
        '活動開始前 3 天 (2015/11/11 凌晨 12:00 之後) 內不予退票'
    )
);

$schedule = array(
    '9:00 - 10:30' => array( 'title' => '馬丁格爾 (Martingale) 的聖盃' ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:20' => array( 'title' => '凱利賭徒: 模擬與分析' ),
    '12:20 - 13:10' => array( 'title' => '午餐' ),
    '13:10 - 14:40' => array( 'title' => '輕鬆把玩金融資料: Quantmod Basic' ),
    '14:40 - 15:00' => array( 'title' => '茶點時間' ),
    '15:00 - 16:00' => array( 'title' => '金融資料探勘' ),
    '16:00 - 17:00' => array(
        'title' => '互動論壇',
        'class' => 'success'
    )
);

$speakers = array(
    'swc' => array(
        'image' => 'info58.jpg',
        'name' => '陳昇瑋',
        'suffix' => '博士',
        'engn' => '(Dr. Sheng-Wei Chen)',
        'title' => array(
            '台灣資料科學愛好者年會發起人',
            '中央研究院資訊科學研究所研究員'
        ),
        'info' => array(
            '陳昇瑋博士目前為中央研究院資訊科學研究所研究員，同時是多媒體網路與系統實驗室主持人。他的研究焦點著重在使用者滿意度、多媒體系統、社群計算及計算社會學等領域，在多媒體系統及使用者經驗的量測及管理方面持續有代表性的研究創見。',
            '陳博士堅信資料及資料分析的價值，長期推廣資料科學及其在各領域的應用，除本身研究皆基於資料來解決實際生活中的問題，2014 年開始主辦「台灣資料科學愛好者年會」，期能將對於資料科學的熱情傳達給大眾，一起來探索資料科學的潛力，將資料科學引入每個人的專業領域之中。他十分期待能夠讓資料分析在台灣不再是口號，而是大家手邊隨時可用來解決問題及創造價值的工具。',
            '欲瞭解陳博士的研究及心得分享，請至他的<a href="http://www.iis.sinica.edu.tw/~swc/index_c.html" target="_blank">個人網頁</a>一探究竟。'
        )
    ),
    'mnwu' => array(
        'detail' => true,
        'image' => 'mnwu.png',
        'name' => '吳牧恩',
        'engn' => '',
        'title' => array(
            '<a href="http://myweb.scu.edu.tw/~mn/" target="_blank">東吳大學數學系 助理教授</a>',
            '<a href="http://www.bituzi.com/search/label/%E8%AC%80%E6%AC%8A%E5%A5%AA%E5%88%A9%E7%9C%9F%E8%8B%B1%E9%9B%84-%E7%89%A7%E6%B8%85%E8%8F%AF" target="_blank">幣圖誌專欄作家 牧清華</a>'
        ),
        'info' => array(
            '從數理專業轉向資訊工程，近年著重於金融資料分析、交易模型建構。喜歡從博弈觀點切入金融交易，分析機率、賠率、策略穩定度。除了沉醉於金融交易知識的探討外，也熱衷操練鐵人三項。另一身份為幣圖誌專欄〈謀權奪利真英雄〉作家－牧清華。'
        )
    ),
    'jcchang' => array(
        'detail' => true,
        'image' => 'info12.jpg',
        'name' => '張家齊',
        'engn' => '',
        'title' => array(
            '木刻思股份有限公司伴讀書僮',
            '<a href="http://www.meetup.com/Taiwan-R" target="_blank">Taiwan R User Group & MLDM Monday 共同創辦人</a>',
            'PyData Taiwan 共同創辦人'
        ),
        'info' => array(
            '長期於國內推廣使用 R & Python 做資料分析。此外，也常常在國內推廣 quantmod 和 quantstrat 來做金融資料分析與策略回測！'
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
                            <div class="mainTitle"><h2 class="mt"><?php echo $title ?></h2></div>
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