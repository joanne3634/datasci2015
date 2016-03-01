<!DOCTYPE html> 
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--> 
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--> 
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--> 
<!--[if gt IE 8]><!--> 
<html class="no-js"> 
    <!--<![endif]-->     
    <head> 
        <title>2015台灣資料科學愛好者年會 — Exploring the Potentials of Real-world Data Analytics</title>         
        <meta charset="utf-8">         
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->         
        <meta name="description" content="台灣資料科學愛好者年會，主意在推動資料科學在台灣的認知及普及應用，期望能看到台灣的產業甚至政府部門能夠有效利用各自手上的各類型資料，經過適當的資料分析及／或預測技術，來為產業建立更大的價值，提供使用者／大眾更好的服務及生活品質">         
        <meta name="viewport" content="width=device-width, initial-scale=1">         
        <meta content="2015 台灣資料科學愛好者年會 — Exploring the Potentials of Real-world Data Analytics" property="og:title">         
        <meta content="website" property="og:type">         
        <meta content="台灣資料科學愛好者年會，主意在推動資料科學在台灣的認知及普及應用，期望能看到台灣的產業甚至政府部門能夠有效利用各自手上的各類型資料，經過適當的資料分析及／或預測技術，來為產業建立更大的價值，提供使用者／大眾更好的服務及生活品質。" property="og:description">         
        <meta content="http://datasci.tw/" property="og:url">
        <meta content="http://datasci.tw/images/dsc_2015_logo_fb.png" property="og:image">
        <meta content="image/png" property="og:image:type">
        <meta content="600" property="og:image:width">
        <meta content="400" property="og:image:height">
        <meta content="2015 台灣資料科學愛好者年會 Data Science in Taiwan Conference 2015" property="og:site_name">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->         
        <link rel="stylesheet" href="css/bootstrap.min.css">         
        <link rel="stylesheet" href="css/main.css">         
        <link rel="stylesheet" href="css/animations.css">         
        <link rel="stylesheet" href="css/fonts.css">         
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>         
        <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
        <style>
p
{
    margin-bottom: 8px;
}

h5 ~ p:first-of-type
{
    margin-top: 8px;
}

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
                            <a href="index.html" class="navbar-brand"> 
                                <img src="images/dsc_2015_logo.png" title="2015台灣資料科學愛好者年會">                                 
                            </a>                             
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
                                        <li> 
                                            <a href="about.html"> 
                                                <img src="images/icon01.png"/> 關於
                                            </a>                                             
                                        </li>                                         
                                        <li>
                                            <a href="speaker.php">
                                                <img src="images/icon03.png"/> 講者
                                            </a>
                                        </li>
                                        <li>
                                            <a href="agenda.php">
                                                <img src="images/icon04.png"/> 議程
                                            </a>
                                        </li>
                                        <li>
                                            <a href="traffic.html">
                                                <img src="images/icon05.png"/> 交通
                                            </a>
                                        </li>
                                        <li>
                                            <a href="signup.html">
                                                <img src="images/icon06.png"/> 報名
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sponsor.html">
                                                <img src="images/icon07.png"/> 贊助
                                            </a>
                                        </li>
                                        <li>
                                            <a href="recruit.html">
                                                <img src="images/icon08.png"/> 企業徵才
                                            </a>
                                        </li>
                                    </ul>
                                </div>                                 
                            </nav>                             
                        </div>                         
                    </div>                     
                </div>                 
            </header>             
            <section id="mainslider"> 
                <div class="container"> 
                    <div class="row"> 
</div>                     
                </div>                 
            </section>             
            <section class="speaker"> 
                <div class="container">
                    <div class="col-md-9" data-pg-collapsed> 
                        <h3>主議程講者一覽</h3> 
                        <hr/>                         
                    </div>
<?php
$contents = file_get_contents('speakers.txt');
$speakers = json_decode($contents,true);
foreach ( $speakers as $speaker )
{
    if( !isset($speaker['speaker']) ) { continue; }
    $links = array();
    foreach( $speaker['website'] as $type => $href )
    {
        $icon_suffix = ($type=='home') ? 'home' : 'user';
        $text = '個人網頁';
        switch($type)
        {
        case 'linkedin': $text = 'LinkedIn 網頁'; break;
        case 'facebook': $text = 'Facebook 網頁'; break;
        default: break;
        }
        $links[] = '<a href="' . $href . '" target="_blank"><span class="glyphicon glyphicon-' . $icon_suffix . '" aria-hidden="true"></span>&nbsp;' . $text . '</a>';
    }
?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <img src="images/speaker/<?php echo $speaker['speaker']; ?>.jpg" class="img-responsive img-thumbnail"/>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <h4><?php echo implode(' / ',$speaker['name']); ?></h4>
                            <h5><?php echo $speaker['title']; ?></h5>
                            <p><?php echo implode('</p><p>',$speaker['info']); ?></p>
                            <?php echo implode('&emsp;',$links); ?>
                        </div>
                    </div>
<?php
}
?>
                </div>                 
            </section>             
            <section id="services" class="about grey_section" data-pg-collapsed> 
                <div class="container" data-pg-collapsed> 
                    <div class="row grid"> 
                        <div class="col-md-4 col-sm-4"> 
                            <div class="row"> 
                                <div class="col-sm-12"> 
                                    <figure class="grid_about_us"> 
                                        <img alt="" src="images/fig1.png"/>                                         
                                        <figcaption> 
                                            <h2>講者就是你!</h2> 
                                            <a href="seek.html"></a> 
                                        </figcaption>                                         
                                    </figure>                                     
                                </div>                                 
                                <div class="clearfix"></div>                                 
                                <div class="col-sm-12"> 
                                    <h3>徵求講者、投稿</h3> 
                                    <p class="text-left">邀請各界在自己的工作場域中第一線進行資料分析的先進來與我們的聽眾分享資料科學的趣味、價值、以及心得...<br></p> 
                                </div>                                 
                            </div>                             
                        </div>                         
                        <div class="col-md-4 col-sm-4"> 
                            <div class="row"> 
                                <div class="col-sm-12"> 
                                    <figure class="grid_about_us"> 
                                        <img alt="" src="images/fig2.png"/>                                         
                                        <figcaption> 
                                            <h2>熱情志工招募!</h2> 
                                            <a href="seek.html#signup-volunteer"></a> 
                                        </figcaption>                                         
                                    </figure>                                     
                                </div>                                 
                                <div class="clearfix"></div>                                 
                                <div class="col-sm-12"> 
                                    <h3>徵求志工</h3>
                                    <p class="text-left">誠摯邀請具有熱情、喜愛學習、個性外向的您一起加入我們，讓我們共同舉辦今年嶄新且擴大規模至四天、預計與會人數超過 1500 人的大型會議...<br></p>
                                </div>                                 
                            </div>                             
                        </div>                         
                        <div class="col-md-4 col-sm-4"> 
                            <div class="row"> 
                                <div class="col-sm-12"> 
                                    <figure class="grid_about_us"> 
                                        <img alt="" src="images/fig3.png"/>                                         
                                        <figcaption> 
                                            <h2>7/7 起</h2> 
                                            <a href="signup.html"></a> 
                                        </figcaption>                                         
                                    </figure>                                     
                                </div>                                 
                                <div class="clearfix"></div>                                 
                                <div class="col-sm-12"> 
                                    <h3>報名年會</h3> 
                                    <p class="text-left">線上報名將於 2015/07/07 中午 12 點開始 至 2015/07/24 止。</p> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </section>             
            <section id="copyright" class="color_section"> 
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p><a href="about.html#organizer" data-toggle="tooltip" data-original-title="">籌辦單位</a> | <a href="#" data-toggle="tooltip" data-original-title="">媒體夥伴</a> | <a href="about.html#staff" data-toggle="tooltip" data-original-title="">工作人員</a> | <a href="http://datasci.tw/2014/" target="_blank">2014 DSC</a> | <a href="https://www.facebook.com/twdsconf" target="_blank" title="" data-toggle="tooltip" data-original-title="Facebook">find us on <i class="fa fa-facebook"></i></a></p>
                            <p>&copy; Copyright 2015 - 台灣資料科學愛好者年會</p>
                        </div>
                    </div>
                </div>                 
            </section>             
        </div>         
        <!-- eof #box_wrapper -->         
        <div class="preloader"> 
            <div class="preloader_image"></div>             
        </div>         
        <!-- libraries -->         
        <script src="js/vendor/jquery-1.11.1.min.js"></script>         
        <script src="js/vendor/bootstrap.min.js"></script>         
        <script src="js/vendor/jquery.appear.js"></script>         
        <!-- superfish menu  -->         
        <script src="js/vendor/jquery.hoverIntent.js"></script>         
        <script src="js/vendor/superfish.js"></script>         
        <!-- page scrolling -->         
        <script src="js/vendor/jquery.easing.1.3.js"></script>         
        <script src='js/vendor/jquery.nicescroll.min.js'></script>         
        <script src="js/vendor/jquery.ui.totop.js"></script>         
        <script src="js/vendor/jquery.localscroll-min.js"></script>         
        <script src="js/vendor/jquery.scrollTo-min.js"></script>         
        <!-- widgets -->         
        <script src="js/vendor/jquery.easypiechart.min.js"></script>         
        <!-- pie charts -->         
        <script src='js/vendor/jquery.countTo.js'></script>         
        <!-- digits counting -->         
        <script src="js/vendor/jquery.prettyPhoto.js"></script>         
        <!-- lightbox photos -->         
        <script src='js/vendor/jflickrfeed.min.js'></script>         
        <!-- sliders, filters, carousels -->         
        <script src="js/vendor/jquery.isotope.min.js"></script>         
        <script src='js/vendor/owl.carousel.min.js'></script>         
        <script src='js/vendor/jquery.flexslider-min.js'></script>         
        <!-- custom scripts -->         
        <script src="js/plugins.js"></script>         
        <script src="js/main.js"></script>
        <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-50828306-2', 'auto');
ga('send', 'pageview');
        </script>
    </body>     
</html>