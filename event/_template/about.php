<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
            <h2 class="section_header text-center">活動簡介</h2>
        </div>
    </div>
    <div class="row about_desc">
        <div class="col-sm-4">
            <img src="../_images/about.png" alt="">  
        </div>
        <div class="col-sm-8">
            <?php if ( isset($about['subtitle']) ) { ?><h4><?php echo $about['subtitle']; ?></h4><?php } ?>
            <h2><?php echo $about['title']; ?></h2>
            <?php foreach ( $about['content'] as $line ) { ?><p><?php echo $line ?></p><?php } ?>
            <div class="fb-share-button" 
                data-href="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>" 
                data-layout="button_count">
            </div>
        </div>
    </div>
    <!--  -->
</div>