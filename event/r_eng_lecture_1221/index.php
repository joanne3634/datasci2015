<?php
$title = 'Data exploration with modern R';
// $title_rwd = array(  '視訊訊號處理與深度學習應用', '<span style="font-size:0.8em;">理論、賞析與實作</span>' );
$caption = array('Data exploration with modern R');
date_default_timezone_set('Asia/Taipei');
$event_date = strtotime('2016-12-21 17:00:00');
$weekdays = array('0' => '日', '1' => '一', '2' => '二', '3' => '三', '4' => '四', '5' => '五', '6' => '六');
$date_string = date('Y/n/j', $event_date) . ' (' . $weekdays[date('w', $event_date)] . ')';
$location_string = '中央研究院人文社會科學館 第二會議室';

$kktix_link = 'series-events-1221';
$kktix_date = strtotime('2016-12-11 16:00:00');
$reg_date = strtotime('2016-12-12 12:00:00');
$reg_time = '中午 12:00';
$deadline = strtotime('2016-12-16 12:00:00');
$price = 0;
// $ticket_full = true;

$about = array(
    'title' => 'Data exploration with modern R',
    'content' => array(
    'Exploratory data analysis is the process of quickly looking at data, formulating hypotheses, and testing those hypotheses. In practice, two of the most important components of this process are transforming data and visualizing it. We transform data because it rarely comes in exactly the right format for our analysis. We visualize the data so that we can use our built-in pattern recognition systems —— our eyes —— to efficiently look for patterns. This tutorial will be a hands-on, practical introduction to using R for data exploration, with an emphasis on data transformation and visualization. I will focus on using modern R packages like ggplot2, dplyr, and tidyr for this tutorial.',
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
        'Attendees should bring a laptop computer, and before arriving, should have installed the following:
        <ul class="about_ul">
            <li>R 3.2.0 or higher (<a href="https://cloud.r-project.org/" target="_blank">https://cloud.r-project.org/</a>)</li>
            <li>RStudio 1.0 or higher (<a href="https://www.rstudio.com/products/rstudio/download/" target="_blank">https://www.rstudio.com/products/rstudio/download/</a>). This is not stricly necessary, but it is highly recommended, especially for new users.</li>
            <li>The R packages ggplot2, dplyr, and tidyr. The easiest way to install all of these is to run the following in R: install.packages("tidyverse")</li>
        </ul>',
        'The tutorial will be delivered in English.',
    ),
    '退票須知' => array(
        '本活動委由 <a href="https://kktix.com/" target="_blank">KKTIX</a> 代為處理退票退款事宜。',
        '退票時將酌收 10% 手續費、且活動前十天內（不含活動日）不予退票。',
        '詳情請見 <a href="http://support.kktix.com/knowledgebase/articles/356418" target="_blank">KKTIX 代理退換票辦法</a>。'
    )
);

$schedule = array(
    '14:00 - 15:20' => array('title' => 'Introduction to data analysis with R'),
    '15:20 - 15:40' => array('title' => 'Tea Break'),
    '15:40 - 17:00' => array('title' => 'Exploring data with visualization'),
);

$speakers = array(
    'winston' => array(
        'detail' => true,
        'image' => 'winston.png',
        'name' => 'Winston Chang',
        'suffix' => '',
        'engn' => '',
        'title' => array(
            'RStudio / Software Engineer',
        ),
        'info' => array(
            'Winston Chang is a software engineer at RStudio and is the author of the R Graphics Cookbook, published by O’Reilly. He has a Ph.D. in Psychology from Northwestern University. He has developed and contributed to R packages such as R6, profvis, shiny, ggplot2, and devtools.
',
        ),
    ),

);
$team = array(
    '主辦單位' => array(
        array(
            'name' => '台灣資料科學協會',
            'href' => 'http://foundation.datasci.tw/',
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
                            <p>&copy; Copyright 2016 - <a href="http://foundation.datasci.tw/" target="_blank">台灣資料科學協會</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </div><!-- eof #box_wrapper -->
        <?php include '../_template/script.php';?>
    </body>
</html>