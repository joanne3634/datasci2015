<div class="container">
<?php
$alignment = array( 
    array( 0, 0 ),
    array( 4, 4 ),
    array( 3, 3 ),
    array( 0, 4 ),
    array( 0, 3 ),
    array( 1, 2 ),
    array( 0, 2 ),
);

foreach( $team as $t_title => $units )
{
?>
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
             <h2 class="section_header"><?php echo $t_title; ?></h2>
        </div>
    </div>

    <div class="row to_animate_child_blocks">
<?php
    $align = $alignment[count($units)];
    if ( $align[0] > 0 )
    {
        $empty_style = 'col-sm-' . $align[0] . ' col-md-' . $align[0];
        echo '<div class="block ' . $empty_style . '"></div>';
    }
    foreach( $units as $u )
    {
        $style = 'col-sm-' . $align[1] . ' col-md-' . $align[1];
?>        
        <div class="block <?php echo $style; ?> text-center to_animate" data-animation="fadeInUp">
            <div>
                <a href="<?php echo $u['href']; ?>" target="_blank"><img src="../_images/<?php echo $u['image']; ?>" /></a>
                <div class="caption">
                    <h4><a href="<?php echo $u['href']; ?>" target="_blank"><?php echo $u['name']; ?></a></h4>
                </div>
            </div>
        </div>
<?php
    }
?>
    </div>
<?php
}
?>
</div>