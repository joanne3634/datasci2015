<?php
$title = '人類行為大數據分析：資料科學如何應用在教育及醫療領域';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('人類行為大數據分析：資料科學如何應用在教育及醫療領域');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-10-30 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 國際會議廳';

$kktix_link = '';
$kktix_date = strtotime('2016-10-03 16:00:00');
$reg_date = strtotime('2016-10-04 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-10-12 12:00:00');
$price = 1980;
// $ticket_full = true;

$about = array(
    'title' => '人類行為大數據分析：資料科學如何應用在教育及醫療領域',
    'content' => array(
    '人類本身具有透過觀察另一人的行為以做出高階層判斷，如情緒、個性、喜好、意圖…等訊息的高度整合能力。這種人類的主觀感知機制不僅發生在日常生活中，更早已廣泛在行為科學 (behavior science) 領域中被應用於專業主觀評量與行為分析。近年來，隨著工程訊號處理演算法的進步、學科領域界線的破除，加上大數據資料科學的發展，慢慢匯流出新興跨學科整合式「人類行為訊號處理」：建置高可信度 (reliability)、可複製性 (repeatable) 及可擴展性 (scalable) 的系統將人類的主觀感知機制自動化。',
    '本課程將以數個教育及醫療應用實例為主軸，包含教育演講自動評分建置、急診檢傷疼痛指數系統開發、至臨床自閉症類群症狀行為診斷分析等等，貫穿並拆解「人類行為訊號處理」四大簡易步驟。希望透過本課程提供的簡易上手指南後，學員可以開始將各自領域手邊目前依人類的「主觀」認知而形成的專業判斷依據，納入全新以資料角度而產生的「客觀」人類行為分析之決策工具。',
    '本課程由四個部分組成：
        <ol>
        <li>
            跨領域整合的開始：教育、醫療與訊號處理<br>
            簡介何謂跨領域「人類行為訊號處理」？在教育醫療領域中預期可被解決的問題有哪些？及過去數十年聲音影像訊號處理的科技進展如何提供這樣一個全新的契機。
        </li><br>
        <li>
            人類行為資料收集與處理<br>
            這堂課會講解針對教育醫療領域時收集聲音影像資料上的眉眉角角，介紹基本聲音影像預處理的工具，如人聲檢測和人臉偵測，最後提及控制專家主觀評量指標效度的經驗法則。
        </li><br>
        <li>
            電腦如何「聽」、「讀」及「看」懂人類行為？<br>
            這堂課會以深入淺出的方式介紹電腦如何透過結合訊號處理技術與機器學習來「聽」、「讀」及「看」懂人的行為，並提供相關適用的工具可以加速上手。            
        </li><br>
        <li>
            跨領域整合的延續：提供專家多一個全新面向決策工具<br>
            「人類行為訊號處理」是個新興領域，我們將針對在教育醫療應用過去經驗，提供確切落實驗證此類系統、形成新的決策工具的建議，並延續跨學科合作之良性循環。        
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
        '本課程著重介紹人類行為訊號處理的基本概念與運作模式，不要求有機器學習或訊號處理相關背景知識。',
        '沒有任何軟硬體與前置作業需求。',
        '本課程對具有醫療、教育相關背景人員會更有幫助。'
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array('title' => '報到'),
    '9:30 - 10:30' => array('title' => '跨領域整合的開始：教育、醫療與訊號處理'),
    '10:30 - 10:50' => array('title' => '茶點時間'),
    '10:50 - 12:30' => array('title' => '人類行為資料收集與處理'),
    '12:30 - 13:20' => array('title' => '午餐'),
    '13:20 - 15:00' => array('title' => '電腦如何「聽」、「讀」及「看」懂人類行為？'),
    '15:00 - 15:20' => array('title' => '茶點時間'),
    '15:20 - 17:00' => array('title' => '跨領域整合的延續：提供專家多一個全新面向決策工具')
);

$speakers = array(
    'helen' => array(
        'detail' => true,
        'image' => 'cclee2.png',
        'name' => '李祈均',
        'suffix' => '',
        'engn' => '(Chi-chun Lee)',
        'title' => array(
            '國立清華大學電機系 / 助理教授',
        ),
        'info' => array(
            '李祈均博士的研究專長在於運用及開發訊號處理及機器學習技術進行跨領域研究，尤其是在對人類行為進行分析、預測及統計建模。他長期著墨在運用不同種類的資料檔 (文字、聲音、影像等) 於醫療、教育、心理領域研發相關演算法。他曾是 ID Analytics 公司旗下 id:a lab 的資料科學家，透過分析客戶信用申請函資訊進行金融信用產品之研發與開發。目前與榮總、長庚醫院、臺大醫院、國家衛生研究院及國家教育研究院等機構合作研究，對人類情緒、教育演講及醫療臨床行為進行量化建模及客觀辨識。',
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
                            <p>&copy; Copyright <a href="/">2016 - 台灣資料科學年會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include '../_template/script.php';?>
    </body>
</html>