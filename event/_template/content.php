<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
            <h2 class="section_header text-center">報名須知</h2>
        </div>
    </div>
    <div class="row about_desc">
        <div class="col-md-12">
            <div class="widget widget_trafic">
                <ul>
<?php
$c_count = 0;
foreach ( $content as $it_title => $item )
{
    if( $c_count > 0 ) { echo '<br/>'; }
?>
                    <li class="h4"><?php echo $it_title; ?></li>
                    <ul><?php foreach ( $item as $line ) { echo '<li>' . $line . '</li>'; } ?></ul>
<?php
    $c_count++;
}
?>
                </ul>
            </div>
        </div>
    </div>
</div>