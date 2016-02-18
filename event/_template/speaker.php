<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
            <h2 class="section_header text-center">
                講者簡介
            </h2>                   
        </div>
    </div>            

    <div class="row to_animate" data-animation="fadeInUp">
<?php
foreach ( $speakers as $id => $speaker )
{
    if( !isset($speaker['detail']) ) { continue; }
    $sp_name = $speaker['name'];
    if( isset($speaker['suffix']) ) { $sp_name .= $speaker['suffix']; }
?>
        <div class="col-md-3 text-center" >
            <img src="../_images/photo/<?php echo $speaker['image']; ?>" class="img-circle" width="160">
        </div>
        <div class="col-md-9" >
            <div>
                <div class="caption">
                    <h3><?php echo $sp_name; ?> <span class="no-bold"><?php echo $speaker['engn']; ?></span></h3>
                    <?php foreach( $speaker['title'] as $title ) { ?><h5><?php echo $title; ?></h5><?php } ?>
                    <?php foreach( $speaker['info'] as $line ) { ?><p><?php echo $line; ?></p><?php } ?>
                </div>
            </div>
        </div>
<?php
}
?>
    </div>
</div>