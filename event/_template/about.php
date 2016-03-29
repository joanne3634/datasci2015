<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
            <h2 class="section_header text-center">活動簡介</h2>
        </div>
    </div>
    <div class="row about_desc">
        <div class="hidden-xs col-sm-4">
            <img src="../_images/about.svg" alt="">  
        </div>
        <div class="col-sm-8">
            <?php if ( isset($about['subtitle']) ) { ?><h4><?php echo $about['subtitle']; ?></h4><?php } ?>
            <h2><?php echo $about['title']; ?></h2>
            <?php foreach ( $about['content'] as $line ) { ?><p><?php echo $line ?></p><?php } ?>
        </div>
    </div>
    <!--  -->
</div>