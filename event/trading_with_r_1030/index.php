<?php
$title = '用 R 輕鬆做交易策略分析及自動下單';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('用 R 輕鬆做交易策略分析及自動下單');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-10-30 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 第二會議室';

$kktix_link = '';
$kktix_date = strtotime('2016-10-03 16:00:00');
$reg_date = strtotime('2016-10-04 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-10-12 12:00:00');
$price = 2480;
// $ticket_full = true;

$about = array(
    'title' => '用 R 輕鬆做交易策略分析及自動下單',
    'content' => array(
    '金融交易博大精深，少數人能夠在這市場獲利，大部分人卻總是賠錢。許多有趣的現象也伴隨科技的進步跟著演變。過去股市名嘴喊盤，現在資料科學說話。這就是為何我們要辦這場講座的原因。舉凡交易策略建構、資金管裡的理論與實務，甚至老師最愛說的技術分析，K 線型態，高手最愛強調的盤感、盤感、盤感，說穿了這些都是資料科學的應用。',
    '我們希望藉由近幾年資料科學的興起，推廣正確的金融交易知識，教導大家如何分析金融資料。自己的策略自己做，自己的風險自己控，自己的部位自己顧，自己的 $$ 自己賺。在本課程裡，1 就是 1，2 就是 2，40 就是 40 (事實)。沒有怪力亂神，沒有定義不清，一切的一切，統計說話，數據說話！',
    '本課程由四個部分組成：
        <ol>
        <li>
            第一次使用 R 語言做回測就上手<br>
            R 語言為統計類的程式語言，尤其適合於金融交易策略的研發與回測上。第一堂課我們直接安裝好 R 語言，立即開始第一個策略回測，讓學員立刻有感！
        </li><br>
        <li>
            如何研發好的交易策略<br>
            然而研發好的交易策略並不是一件簡單的事，不然這世界會有很多大富翁。到底一個好的策略需要具備哪些條件？我們可以用什麼方法去挖掘這些策略？停損停利該如何設計？為什麼大部分的策略加碼都失敗，我們希望用實際的資料驗證，回答這些問題。
        </li><br>
        <li>
            交易的聖盃：資金管理的理論與實務<br>
            如果要說金融交易有聖盃，那便是資金管理了。資金管理不一定能讓你大賺錢，但可以讓一個爛策略少賠一些，讓一個好策略發揮效益。更重要的是，它保護你長期下來在這市場上活著！活著，比什麼重要。本堂課我們將從資金控管的理論開始介紹，漸漸的帶進實務，套用進交易策略。            
        </li><br>
        <li>
            用 R 語言串接 API 下單<br>
            R 是做回測研究的好工具，然而最後還是要實際下單。課程最後我們展示 R 的計量套件與如何透過 C# 串接 API & R 做下單，並做 Demo 展示。期望 R 語言成為新一代全面的回測、分析、下單的金融交易工具！          
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
        '本課程建議學員於課前自行安裝好 R 語言 (3.2 以上版本)，課程會在 RStudio 的環境下講解。(建議也可先自行安裝 RStudio)',
        '講師會於課堂上進行 API 實作展示，但由於上課時間限制，visual studio 與 R 相關套件之安裝請先行準備，課程期間不負責處理學員個人電腦環境等問題。',
        '本課程雖為 R 語言的策略回測實作課程，但課程設計上儘量以簡單為訴求，對 R 語言不熟悉的學員亦歡迎報名。程式碼原則上會於上課中直接 share 給大家，課堂上只需聽講或修改簡單參數、條件指令即可進行回測。',
        '當然，亦歡迎對 R 語言有基本認識但想更進一步擁有實務經驗的學員。',
        '最後記得，請自行攜帶您的筆記型電腦參加！'
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '9:00 - 9:30' => array('title' => '報到'),
    '9:30 - 10:30' => array('title' => '第一次使用 R 語言做回測就上手'),
    '10:30 - 10:50' => array('title' => '茶點時間'),
    '10:50 - 12:30' => array('title' => '如何研發好的交易策略'),
    '12:30 - 13:20' => array('title' => '午餐'),
    '13:20 - 15:00' => array('title' => '交易的聖盃：資金管理的理論與實務'),
    '15:00 - 15:20' => array('title' => '茶點時間'),
    '15:20 - 17:00' => array('title' => '用 R 語言串接 API 下單')
);

$speakers = array(
    'helen' => array(
        'detail' => true,
        'image' => 'mewu.png',
        'name' => '吳牧恩',
        'suffix' => '',
        'engn' => '(Mu-en Wu)',
        'title' => array(
            '東吳大學數學系 / 助理教授',
        ),
        'info' => array(
            '吳牧恩教授為數理背景出身、資工博士畢業，其研究領域包括資訊理論與金融資料分析。現為東吳大學數學系助理教授，致力於推廣資金管理的數學與使用 R 語言研發金融交易策略，期望破除市場上大眾追求穩賺聖盃的迷思。其亦為知名財金部落格幣圖誌 (Bituzi) 專欄作家 -- 牧清華。',
        ),
    ),    
    'blabla' => array(
        'detail' => true,
        'image' => 'cwlin.png',
        'name' => '林佳緯',
        'suffix' => '',
        'engn' => '(Chia-wei Lin)',
        'title' => array(
            '新創公司 Fintech 團隊 / 系統顧問',
        ),
        'info' => array(
            '林佳緯先生為資訊背景出身，但轉個彎拿的是財務金融學歷，興趣為計算金融相關研究。曾任職於四大事務所企管顧問管理公司，負責上市櫃公司財務績效管理系統導入諮詢服務。現為新創公司 Fintech 團隊系統顧問與獨立交易人，自行開發交易系統與計量交易策略。',
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