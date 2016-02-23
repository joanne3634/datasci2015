<?php
$today = time();
$reg_end = ( isset($deadline) AND $today > $deadline );
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center to_animate" data-animation="pullDown">
            <h2 class="section_header text-center">
                報名活動
            </h2>
        </div>
    </div>

    <div class="row about_desc">
        <div class="col-xs-offset-2 col-xs-8 col-sm-4 col-sm-offset-2">
            <img src="../_images/ticket.png" alt="">
        </div>
        <div class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-0">
<?php
if ( isset($reg_date) )
{
    if( $today < $reg_date )
    {
        $register_string = date('Y/n/j',$reg_date);
        if( isset($reg_time) ) { $register_string .= ' ' . $reg_time; }
        $register_string .= ' 開放報名！';
    }
    else
    {
        $register_string = '已開放報名！';
        if ( $today > $event_date )
        {
            $register_string = '活動完滿結束！';
        }
        else if( $reg_end )
        {
            $register_string = '報名已截止！';
        }
        else if ( isset($ticket_full) )
        {
            $register_string = '報名名額已額滿';
        }
    }
    echo '<h2>' . $register_string . '</h2>';
}
?>
            <ul class="list2">
                <li><span class="badge bg-orange">日期</span> <?php echo $date_string; ?></li>
                <li><span class="badge bg-orange">地點</span> 中央研究院人文社會科學館</li>
                <li>
                    <span class="badge bg-orange">票價</span>
<?php
if ( $price == 0 )
{
?>
                    <span class="text-danger">免費參加！</span>
<?php
}
else
{
?>
                    <span class="text-danger">$<?php echo $price; ?></span> 元
<?php
}
?>
                </li>
            </ul>
<?php
if ( isset($kktix_date) AND $today > $kktix_date )
{
    // $end_string = '已開放報名！';

    if ( $today > $event_date )
    {
        echo '<div>活動已結束，請期待下一場系列活動！</div>';
    }
    else if( $reg_end )
    {
        echo '<div>報名已經截止，感謝大家的支持！</div>';
    }else if( isset($ticket_full) ) 
    {
        echo '<div>報名名額已額滿，感謝大家的支持！</div>';
    }
    else
    {
        $prefix = ( $today > $reg_date ) ? '立即' : '預覽';
?>
            <div>
                <a class="type-15" href="http://dsc.kktix.cc/events/<?php echo $kktix_link; ?>" target="_blank">
                    <span><?php echo $prefix; ?>報名 <i class="fa fa-arrow-circle-right"></i></span>
                    <span></span>
                </a>
            </div>
<?php
    }
}
?>
        </div>
    </div>
</div>