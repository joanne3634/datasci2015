<?php
$title = '手把手教你 R 語言資料分析實務';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('手把手教你 R 語言資料分析實務');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-09-04 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 第二會議室';

$kktix_link = 'step-by-step-r';
$kktix_date = strtotime('2016-08-14 12:00:00');
$reg_date = strtotime('2016-08-16 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-08-22 12:00:00');
$price = 2480;
// $ticket_full = true;

$about = array(
	'title' => '手把手教你 R 語言資料分析實務',
	'content' => array(
    '在此課程中將帶領對資料分析感到陌生卻又充滿興趣的您，完整地學會運用 R 語言從最初的蒐集資料、探索性分析解讀資料，並進行文字探勘，發現那些肉眼看不見、隱藏在資料底下的意義。',
    '此課程主要設計給對於 R 語言有基本認識，想要進一步熟悉實作分析的朋友們，希望在課程結束後，您能夠更熟悉 R 語言這個豐富的分析工具。透過蘋果日報慈善捐款的資料集，了解如何從頭解析網頁、熟悉 xpath 語法，撰寫爬蟲自動化收集資訊；取得資料後，能夠靈活處理資料，做清洗、整合及探索；並利用現成的套件進行文字探勘、文本解析；我們將一步步實際走一回資料分析的歷程，處理、觀察、解構資料，試著看看人們在捐款的決策過程中，究竟是什麼因素產生了影響，以及這些結果又是如何從資料中挖掘而出的呢？')
);

$content = array(
	'學員基本要求' => array(
        '本課程針對對 R 語言有基本認識但想更進一步擁有實務經驗的夥伴們。若您 <a href="http://datascienceandr.org/">R 語言翻轉教室</a> 的內容都熟悉了，卻苦無實戰機會，最適合來和我們一起實作練習。',
        '請先將 <a href="https://cran.r-project.org/">R 3.2</a> 以上的版本安裝起來，課堂上會在 RStudio 的環境下講解，建議也可先安裝好，但非必須。',
        '因為會是手把手地實際操作，當然需要帶筆記型電腦來參加囉！'
	),
	'退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
	'9:00 - 9:30' => array('title' => '報到'),
	'9:30 - 10:30' => array('title' => '自製網路爬蟲蒐集資料'),
	'10:30 - 10:50' => array('title' => '茶點時間'),
	'10:50 - 12:30' => array('title' => '探索式資料解析'),
	'12:30 - 13:20' => array('title' => '午餐'),
	'13:20 - 15:00' => array('title' => '文字探勘與文本解析'),
	'15:00 - 15:20' => array('title' => '茶點時間'),
	'15:20 - 17:00' => array('title' => '建構解釋與預測模型')
);

$speakers = array(
	'helen' => array(
		'detail' => true,
		'image' => 'helen.jpg',
		'name' => '張毓倫',
		'suffix' => '',
		'engn' => '( Helen Chang )',
		'title' => array(
			'中央研究院資訊科學研究所 / 研究助理',
		),
		'info' => array(
			'清大材料所畢，學生時期受的是微觀層級的訓練，後來到傳統產業當 PM，做的卻都是巨型產品；每天都比昨天更明白資源的有限，想盡辦法維持動態平衡。現栽入資料海裡載浮載沉，學著觀測人類行為的同時，也藉以修剪自己的偏見謬誤。覺得一切事物都關乎設計，希望世界的冗餘或浪費降到最低。推理迷，不喜歡沒有謎題的故事，也很愛玩拼圖；唯一不可或缺的是音樂，最近都在聽 Brett Dennen 的歌。',
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
        <link rel="stylesheet" href="../_css/deep_learning_one_day.css">
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
            <section id="mainslider">
                <div class="container" style="padding-top:80px;" ><!-- style="padding-top:80px;" -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="../_images/dsc2016-series_main.svg" class="img-responsive logoInline">
                            <div class="mainTitle">
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
                                    <i class="fa fa-map-marker"></i> 地點: <?php echo $location_string;?>
                                </h4>
                            </div>
                            <a href="/event/"style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
                        </div>
                    </div>
                </div>
            </section>
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