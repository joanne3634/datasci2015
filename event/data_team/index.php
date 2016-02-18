<?php
$title = '資料科學團隊培訓及導入經驗分享會';
$caption = array( '資料科學團隊培訓', '及導入經驗分享會' );

$event_date = strtotime('2015-09-05 00:00:00');
$weekdays = array( '0'=>'日', '1'=>'一', '2'=>'二', '3'=>'三', '4'=>'四', '5'=>'五', '6' => '六' );
$date_string = date('Y/n/j',$event_date) . ' (' . $weekdays[date('w',$event_date)] . ')';

$kktix_link = 'data-team';
$kktix_date = strtotime('2015-08-01 12:00:00');
$reg_date = strtotime('2015-08-08 12:00:00');
$reg_time = '中午 12:00';
$price = 1500;

$about = array(
    'title' => '讓資料科學專家引領您找出最佳答案',
    'subtitle' => '如何成功建立一個資料科學團隊？',
    'content' => array(
        '為迎接大數據的潮流，許多企業漸漸發覺到資料分析將是開啟企業創新或關鍵決策的一大契機，不少企業開始尋找資料科學家一同合作，甚至是在企業內建立資料科學團隊。但是，該去哪裡找到合適的資料科學家？資料科學家要具備什麼特質和能力？如何成功建立一個資料科學團隊？資料科學團隊與傳統的資料倉儲團隊有什麼差別？資料科學團隊在企業內扮演著什麼樣的角色？這都將是企業可能面臨到的一個又一個的問題。',
        '此系列活動將由資料科學愛好者年會總召陳昇瑋博士主講。他將與聽眾分享其協助多家企業培訓資料科學家及導入資料科學團隊的各種經驗，從企業如何跳脫既有框架，讓資料科學團隊盡情揮灑無限創意著手，進而能活用資料、挖掘出潛藏在資料中不為人知的秘密，最終打造高信任度及高效率的工作環境，展現資料分析的價值。誠摯地歡迎您的參與，讓資料科學專家引領您找出最佳答案。'
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
        'panels' => array( 'swc', 'wcchen', 'mikechi' ),
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
    'clkao' => array(
        'image' => 'info59.jpg',
        'name' => '高嘉良',
        'engn' => '(Chia-liang Kao)',
        'title' => array(
            'g0v.tw 台灣零時政府共同發起人'
        ),
        'info' => array(
            "clkao (高嘉良) - 喜歡寫程式、泡 ♨。參加 1997 年國際資訊奧林匹亞後，進入台大資訊系就讀，即活躍於國內外開放源碼社群，隨後旅居英國倫敦從事軟體開發及顧問工作。2012 年發起 g0v.tw 計畫，現為開放文化基金會董事。"
        )
    ),
    'wcchen' => array(
        'image' => 'info34.jpg',
        'name' => '陳維超',
        'engn' => '(Wei-Chao Chen)',
        'title' => array(
            'Skywatch 共同創辦人',
            '台灣大學兼任助理教授'
        ),
        'info' => array(
            "Wei-Chao Chen is a co-founder at Skywatch Innovation, a company that provides cloud-based video products and solutions. He is also an adjunct faculty member at the National Taiwan University. His research interests involve graphics hardware, computational photography, augmented reality, and user interfaces. Dr. Chen was a senior research scientist in Nokia Research Center at Palo Al to between 2007 - 2009, and a 3D Graphics Architect in NVIDIA between 2002 - 2006. Dr. Chen received his MS in Electrical Engineering from National Taiwan University (1996), and MS (2001) and PhD (2002) in Computer Science from the University of North Carolina at Chapel Hill."
        )
    ),
    'mikechi' => array(
        'image' => 'info101.jpg',
        'name' => 'Mike Chi',
        'engn' => '(吉慶)',
        'title' => array(
            'Manager of Data Insight Management Team - HTC'
        ),
        'info' => array(
            'Mike Chi is the founder and leader of HTC UTD- Data Insight Management team and the leader of Realistic Experience Management team. Mike is experienced in data analysis, data flow planning and system implementation, user experience data collection and study, internal startup and small business startup.',
            'Mike was the representative sales and project manager of Taiwan region from J.D Power & Associate Singapore who’s responsibility was to analyze Taiwan automotive industry and automotive purchase experience and provide consulting service to the client. He was also the co-founder of the first car sharing service in Taiwan.',
            'Mike received his MS in Technology Management from University of Illinois Urbana-Champaign in 2007.'
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
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="<?php echo $_SERVER['REQUEST_URI']; ?>" class="navbar-brand"><?php echo implode('<br/>',$caption); ?></a>
                            <nav class="navbar">
                                <div class="navbar-header">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".dsc-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="dsc-collapse collapse navbar-collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#about_us"><img src="../_images/icon01.png"/> 簡介</a></li>
                                        <li><a href="#schedule"><img src="../_images/icon04.png"/> 議程</a></li>
                                        <li><a href="#speaker"> <img src="../_images/icon03.png"/> 講者</a></li>
                                        <li><a href="#ticket">  <img src="../_images/icon06.png"/> 報名</a></li>
                                        <li><a href="#traffic"> <img src="../_images/icon05.png"/> 交通</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
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
            <section id="schedule" class="pic_section"><?php include('../_template/schedule.php'); ?></section>
            <section id="speaker"><?php include('../_template/speaker.php'); ?></section>
            <section id="ticket" class="grey_section"><?php include('../_template/ticket.php'); ?></section>
            <section id="traffic"><?php include('../_template/traffic.php'); ?></section>
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