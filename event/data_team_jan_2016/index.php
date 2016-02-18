<?php
$title = '資料科學面面觀：理論、案例及企業導入方法';
$caption = array( '資料科學面面觀：', '<span style="font-size:0.8em;">理論、案例及企業導入方法</span>' );

$event_date = strtotime('2016-01-23 00:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6'=>'六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'data-team-jan2016';
$kktix_date = strtotime('2015-11-20 12:00:00');
$reg_date = strtotime('2015-12-15 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-01-11 12:00:00');
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
    '提醒' => array(
        '本次演講內容與 2015/9/5 資料科學團隊培訓及導入經驗分享會大致相同'
    ),
    '學習時數' => array(
        '公務人員詳實登錄資料且全程參與者（如實簽到及簽退），可獲終身學習時數六小時。'
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 10:30' => array( 'title' => '資料科學簡介' ),
    '10:30 - 10:50' => array( 'title' => '茶點時間' ),
    '10:50 - 12:20' => array( 'title' => '資料分析實戰案例分享' ),
    '12:20 - 13:10' => array( 'title' => '午餐' ),
    '13:10 - 14:40' => array( 'title' => '資料科學家的養成之路' ),
    '14:40 - 15:00' => array( 'title' => '茶點時間' ),
    '15:00 - 16:00' => array( 'title' => '企業文化以及資料科學團隊的建立' ),
    '16:00 - 17:00' => array(
        'title' => '互動論壇',
        'class' => 'success',
        'subtitle' => '與談人',
        'panels' => array( 'swc', 'chmpeng', 'birdman' ),
        'alias' => array(
            '台灣資料科學愛好者年會發起人' => '年會總召'
        )
    )
);

$speakers = array(
    'swc' => array(
        'detail' => true,
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
    'chmpeng' => array(
        'image' => 'chmpeng.jpg',
        'name' => '彭啟明',
        'engn' => '(Chi Ming Peng)',
        'title' => array(
            '天氣風險管理開發公司總經理'
        ),
        'info' => array(
            '全台第一間民間氣象公司「天氣風險管理開發股份有限公司」擔任總經理，任職大愛新聞氣象主播、中廣氣象達人節目主持人、中央、文化大學兼任教授、環境保護學會秘書長、OPEN DATA 聯盟會長。學術專長有天氣風險管理、大氣化學、氣象數位媒體製作行銷與環境教育。'
        )
    ),
    'birdman' => array(
        'image' => 'birdman.jpg',
        'name' => '邱銘彰',
        'engn' => '(Birdman)',
        'title' => array(
            '台灣威瑞特公司技術長'
        ),
        'info' => array(
            '目前任職於台灣威瑞特公司技術長，超過 15 年的資安技術研究專家，也是台灣駭客年會顧問，從台灣 HITCON 到美國 Black Hat，常在國內外重要駭客大會發表研究，擅長透過詼諧生動的演講，傳授資安知識。同時也是台灣資安界著名的創業家，從 2005 年開始兩次創業都幸運地被國外企業直接併購，並於 2011 年創立了台灣第一家專門研發 APT 防禦產品的 Xecure Lab 公司，更於 2014 年被美國上市科技公司併購後，專注於分析駭客活動、資安鑑識技術及開發自動化分析系統。'
        )
    )
);

$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學愛好者年會',
            'href' => 'http://datasci.tw/',
            'image' => 'dsc2016_logo_fb.png'
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
    ),
    '協辦單位' => array(
        array(
            'name' => '國家發展委員會',
            'href' => 'https://www.ndc.gov.tw/',
            'image' => 'ndc.png'
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
        <meta content="http://datasci.tw/event/_images/dsc_2015_logo_fb.png" property="og:image">
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