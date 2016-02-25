<div class="container">
<?php
if( !isset($schedules) ) { $schedules = array( '__None__' => $schedule ); }
foreach($schedules as $caption => $schedule)
{
    $title = '議程';
    if( $caption != '__None__' )
    {
        $title = $caption . $title;
    }
?>
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
            <h2 class="section_header text-center"><?php echo $title; ?></h2>
        </div>
    </div>            

    <div class="row about_desc">
        <div class="col-md-8 col-md-offset-2">
            <table width="100%" class="table table-bordered pagetb to_animate" data-animation="fadeInUp">
<?php
    $panelist = array();
    $count = 0;
    foreach ( $schedule as $t => $data )
    {
        $class = isset($data['class']) ? $data['class'] : (($count%2==0)?'warning':'');
        $tr_attr = empty($class) ? '' : (' class="'.$class.'"');
?>
                <tr<?php echo $tr_attr; ?>>
                    <td class="text-center time"><?php echo $t; ?></td>
                    <td style="width:70%;">
                        <h3 class="schedule-content"><?php echo $data['title']; ?></h3>
                        <?php if ( isset($data['subtitle']) ) { echo $data['subtitle']; } ?>
<?php
        if ( isset($data['panels']) )
        {
            foreach( $data['panels'] as $panel_key )
            {
                $panel = $speakers[$panel_key];
                $panel_title = array();
                foreach ( $panel['title'] as $pt )
                {
                    $ptt = isset($data['alias'][$pt]) ? $data['alias'][$pt] : $pt;
                    $panel_title[] = $ptt;
                }
                $panelist[] = $panel_key;
?>
                        <br/>
                        <span data-toggle="modal" data-target="#<?php echo $panel_key; ?>" class="text-primary speaker-info">
                            <?php echo $panel['name']; ?> / <?php echo implode(', ',$panel_title); ?>
                        </span>
<?php
            }
        }
?>
                    </td>
                </tr>
<?php
        $count++;
    }
?>
            </table>
        </div>
    </div>
<?php
}
?>
            <!--<div align="right">
                <a href="http://dsc.kktix.cc/events/data-team" target="_blank">
                    <span>立即報名 <i class="fa fa-arrow-circle-right"></i></span>
                    <span></span>
                </a>
            </div>-->
<?php
foreach ( $speakers as $id => $speaker )
{
    if( !in_array($id,$panelist) ) { continue; }
?>
    <div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="row">
                        <div class="col-md-3"><img src="../_images/photo/<?php echo $speaker['image']; ?>" class="img-circle"/></div>
                        <div class="col-md-9"> 
                            <h3 class="modal-title" id="myModalLabel">
                                <?php echo $speaker['name']; ?>
                                <span class="no-bold"><?php echo $speaker['engn']; ?></span>
                            </h3>
                            <?php foreach( $speaker['title'] as $spt ) { ?><h5><?php echo $spt; ?></h5><?php } ?>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <?php foreach( $speaker['info'] as $line ) { ?><p><?php echo $line; ?></p><?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</div>