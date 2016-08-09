<?php
$title = '給工程師的統計學及資料分析 123';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('給工程師的統計學及資料分析 123');

date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-09-04 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 國際會議廳';

$kktix_link = 'engineer-statistics';
$kktix_date = strtotime('2016-08-14 12:00:00');
$reg_date = strtotime('2016-08-16 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-08-22 12:00:00');
$price = 1980;
// $ticket_full = true;

$about = array(
	'title' => '給工程師的統計學及資料分析 123',
	'content' => array(
        '「統計學」，是一個大家都熟悉卻可能又陌生的名詞。做為傳統上最接近資料科學、藉由分析資料去探索事實真相的一門學問，統計學遍佈在大專院校的各個系所中，在以往是許多學生最大的惡夢之一，現在卻又在大數據的時代，被許多人宣稱統計學已死。到底什麼是統計學？統計學包含資料分析，還是資料分析包含統計學？統計學能做到什麼，又不能做到什麼？會算平均數跟標準差之後，如果懂機率學，還能多做些什麼？',
        '這門課程將由臺大資管系孔令傑助理教授主講，用一天的時間對統計學與資料分析做一個入門的介紹。時間雖短，內容雖淺，相信仍可以幫大家釐清一些概念，也讓初學者學到一些可以實戰的技術。更重要的是，這門課希望能給大家在未來繼續學習進階知識的動機與基礎。本課程由四個模組組成：',
        '<ul class="about_ul">
            <li>貓都嫌簡單的資料摘要與視覺化：面對著大量數據，資料分析的第一步當然是用少量數字來摘要全體數字，以及用圖表來做視覺化呈現。課程將由此切入，介紹基本的母體與樣本的概念、常用的統計量與統計圖表，以及容易犯的錯誤。</li>
            <li>假設檢定與一點都不神秘的 p 值：科學的精神體現在「建立假說、實驗、檢驗假說」的過程中，統計學也不例外。以機率學為基礎，課程將介紹統計學的核心觀念「假設檢定」，也就是如何對未知的母體建立假說、如何以樣本資料同意或推翻假說，以及最重要地，如何估計自己的結論犯錯的機率。我們也會介紹在假設檢定中扮演關鍵角色的「p 值」、它如何被使用，又如何被誤用。</li>
            <li>讓你一秒看起來像專家的迴歸分析：當你想知道一堆變數如何合起來影響一個變數時，迴歸分析是你最好的朋友（之一）。課程將介紹迴歸分析的基本原理與各種變化，協助你釐清變數間錯綜複雜的關係，並且理解模型的解釋力與意涵。雖然不能讓你一秒變專家，但是可以讓你一秒看起來像專家，有時候還可以一秒戳破看起來像專家的人的錯誤。</li>
            <li>想當然爾的綜合應用與案例研討：這種課最後當然要來一點綜合應用與案例研討，相信大家應該知道這個時段要做什麼吧！</li>
        </ul>'
    )
);

$content = array(
	'學員基本要求' => array(
		'這門課主要的對象是「工程師」，或者更貼切一點講，是想要用科學思維與工程精神去分析與解決問題的各行各業的人們。我們會假設「工程師們」學過基本的機率學，例如在大學時代修過一學期或半學期的機率課，但對統計學和資料分析只有粗淺的概念。',
        '在課堂上演算範例時，我們會用 R，所以對 R 有基本概念的話更好，不過這不是一門教大家寫 R 的課，所以想學 R 的朋友得要找別門課，而不會 R 的朋友只要專注在我們討論的概念就可以了。'
	),
	'退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
	'9:00 - 9:30' => array('title' => '報到'),
	'9:30 - 10:30' => array('title' => '貓都嫌簡單的資料摘要與視覺化'),
	'10:30 - 10:50' => array('title' => '茶點時間'),
	'10:50 - 12:30' => array('title' => '假設檢定與一點都不神秘的 p 值'),
	'12:30 - 13:20' => array('title' => '午餐'),
	'13:20 - 15:00' => array('title' => '讓你一秒看起來像專家的迴歸分析'),
	'15:00 - 15:20' => array('title' => '茶點時間'),
	'15:20 - 17:00' => array('title' => '想當然爾的綜合應用與案例研討'),
);

$speakers = array(
	'helen' => array(
		'detail' => true,
		'image' => 'lckung.png',
		'name' => '孔令傑',
		'suffix' => '',
		'engn' => '( Ling-Chieh Kung )',
		'title' => array(
			'國立臺灣大學資訊管理學系 / 助理教授',
		),
		'info' => array(
			'孔令傑於美國加州大學柏克萊分校取得工業工程與作業研究博士後，任教於國立臺灣大學資訊管理學系，現職為助理教授。他的研究興趣是用賽局理論與最佳化方法探討供應鍊管理、電子商務、共享經濟等領域的策略與作業議題，相信分析模型、數量方法、科學化管理與資訊科技可以輔助企業經營、創造企業價值，甚至創新商業模式。在統計學與資料分析方面，他雖然不是專家也不是大師，卻喜歡推廣這門學問。他在國立臺灣大學教授的課程有統計與資料分析、資訊經濟、作業研究、程式設計等。',
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
        <link rel="stylesheet" href="../_css/engineer.css">
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