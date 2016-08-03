<?php
$title = '手把手教你 R 語言資料分析實務';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('手把手教你 R 語言資料分析實務');

$event_date = strtotime('2016-09-04 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 第二會議室';

$kktix_link = 'step-by-step-r';
$kktix_date = strtotime('2015-08-15 12:00:00');
$reg_date = strtotime('2016-08-17 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-08-25 12:00:00');
$price = 2480;
// $ticket_full = true;

$about = array(
	'title' => '手把手教你 R 語言資料分析實務',
	'content' => array(
    '在此課程中，兩位老師將帶領對資料分析稍微有點陌生卻又充滿興趣的您，完整地學會運用 R 語言從自己寫爬蟲蒐集資料、進行探索性分析解讀資料，到真正建構解釋與預測模型，發現那些肉眼看不見隱藏在資料底下的意義。',
    '此課程主要設計給對於 R 語言有基本認識，想要進一步熟悉實作分析的朋友們，希望在課程結束後，您能夠更熟悉 R 語言這個豐富分析工具：了解如何解析網頁、熟悉 xpath 語法，撰寫爬蟲自動化收集資訊 ( RCurl, xml )；取得資料後靈活使用熱門的套件 ( data.table, dplyr )，提高資料清洗及整合的效率；利用現成的套件進行文字探勘、文本解析 ( jiebaR, text2vec )；更重要的是最終能夠從資料中找出不分析就不會輕易發現的意義。我們透過蘋果日報慈善捐款的公開資料，帶著大家實際走一回資料分析的歷程，一步步處理、觀察、解構資料，試著看看究竟是什麼原因在不經意中影響了人們在做捐款的決策過程，以及這些結果又是如何從資料中挖掘而出的呢？')
);

$content = array(
	'學員基本要求' => array(
		'本課程針對對 R 語言有基本認識但想更進一步擁有實務經驗的夥伴們。我們將一步一步帶領著您寫出程式。但若對 R 為零經驗的朋友們，也可以先透過 R 語言基礎自學教材 <a href="http://swirlstats.com/">swirl</a> 練習基本操作，再來參加我們的分析實務教學。',
        '因為是會手把手地教您寫出實用的程式，當然需要帶筆記型電腦來參加囉！請先將 <a href="https://cran.r-project.org/">R 3.2</a> 以上的版本安裝起來。'
	),
	'退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
	'9:00 - 9:30' => array('title' => '報到'),
	'9:30 - 11:00' => array('title' => '爬蟲是什麼？好吃嗎？','subtitle' => '自製網路爬蟲蒐集資料'),
	'11:00 - 11:20' => array('title' => '茶點時間'),
	'11:20 - 12:50' => array('title' => '資料礦工的一天：','subtitle' => '探索式資料解析'),
	'12:50 - 13:40' => array('title' => '午餐'),
	'13:40 - 15:10' => array('title' => '名模生死鬥：','subtitle' => '建構解釋與預測模型'),
	'15:10 - 15:30' => array('title' => '茶點時間'),
	'15:30 - 17:00' => array('title' => '那些資料告訴我們 ( 與沒告訴我們 ) 的事'),
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
			'清大材料所畢，學生時期受的是微觀層級的訓練，後來到傳統產業當 PM，做的卻都是巨型產品；每天都比昨天更明白資源的有限，想盡辦法維持動態平衡。現栽入資料海裡載浮載沉，學著觀測人類行為的同時，也藉以修剪自己的偏見謬誤。覺得一切事物都關乎設計，希望世界的冗餘或浪費降到最低。推理迷，不喜歡沒有謎題的故事，也很愛玩拼圖；唯一不可或缺的是音樂，最近都在聽山形瑞秋的歌。',
		),
	),
);

$team = array(
	'主辦單位' => array(
		array(
			'name' => '台灣資料科學年會',
			'href' => 'http://datasci.tw/',
			'image' => 'dsc2016_logo_fb.png',
		), array(
			'name' => '中華民國計算語言學學會',
			'href' => 'http://www.aclclp.org.tw/index_c.php',
			'image' => 'aclclp.png',
		),
		array(
			'name' => '中央研究院資訊科學研究所',
			'href' => 'http://www.iis.sinica.edu.tw/',
			'image' => 'iis_s.png',
		),
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
        <title><?php echo $title ?> - 2016 台灣資料科學年會系列活動</title>
        <meta charset="utf-8">
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="description" content="<?php echo $title ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="<?php echo $title ?> - 2016 台灣資料科學年會" property="og:title">
        <meta content="website" property="og:type">
        <meta content="<?php echo $title ?>" property="og:description">
        <meta content="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" property="og:url">
        <meta content="http://datasci.tw/event/_images/dsc2016_logo_fb.png" property="og:image">
        <meta content="image/png" property="og:image:type">
        <meta content="600" property="og:image:width">
        <meta content="400" property="og:image:height">
        <meta content="<?php echo $title ?> - 2016 台灣資料科學年會系列活動" property="og:site_name">
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
                                    <i class="fa fa-map-marker"></i> 地點: 中央研究院人文社會科學館 第二會議室
                                </h4>
                            </div>
                            <a href="/"style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
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