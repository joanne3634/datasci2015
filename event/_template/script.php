
<!-- TODO 開發階段先關掉 -->
<!-- <div class="preloader"> 
    <div class="preloader_image"></div>             
</div>          -->

<!-- libraries -->
<script src="../_js/vendor/jquery-1.11.1.min.js"></script>
<script src="../_js/vendor/bootstrap.min.js"></script>
<script src="../_js/vendor/jquery.appear.js"></script>

<!-- superfish menu -->
<script src="../_js/vendor/jquery.hoverIntent.js"></script>
<script src="../_js/vendor/superfish.js"></script>

<!-- page scrolling -->
<script src="../_js/vendor/jquery.easing.1.3.js"></script>
<script src="../_js/vendor/jquery.nicescroll.min.js"></script>
<script src="../_js/vendor/jquery.ui.totop.js"></script>
<script src="../_js/vendor/jquery.localscroll-min.js"></script>
<script src="../_js/vendor/jquery.scrollTo-min.js"></script>

<!-- widgets -->
<script src="../_js/vendor/jquery.easypiechart.min.js"></script>

<!-- pie charts -->
<script src="../_js/vendor/jquery.countTo.js"></script>

<!-- digits counting -->
<script src="../_js/vendor/jquery.prettyPhoto.js"></script>

<!-- lightbox photos -->
<script src="../_js/vendor/jflickrfeed.min.js"></script>

<!-- sliders, filters, carousels -->
<script src="../_js/vendor/jquery.isotope.min.js"></script>
<script src="../_js/vendor/owl.carousel.min.js"></script>
<script src="../_js/vendor/jquery.flexslider-min.js"></script>

<!-- custom scripts -->
<script src="../_js/plugins.js"></script>
<script src="../_js/main.js"></script>

<script>
$(window).on("resize",function() {
    var rate = $("#mainslider img.logoInline").width() / 1100;
    var c = 165 * rate;
    $("header#header a.navbar-brand").css("marginLeft",null);
    if( $(document.body).width() > 767 ) {
        var brand = $("header#header a.navbar-brand");
        var left = ( c - 15 ) - (brand.width()/2);
        brand.css("marginLeft",left);
    }
});
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-50828306-2', 'auto');
ga('send', 'pageview');
</script>

<div id="fb-root"></div>
<script>
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>