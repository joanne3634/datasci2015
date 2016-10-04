<div class="container" style="padding-top:80px;" ><!-- style="padding-top:80px;" -->
    <div class="row">
        <div class="col-md-12">
            <img src="../_images/dsc2016-series_main.svg" class="img-responsive logoInline">
            <div class="mainTitle">
                <h2 class="mt"><?php echo $title ?></h2>
            </div>
            <div class="maindate">
                <h4 class="text-center">
                    <i class="fa fa-calendar"></i> 日期: <?php echo $date_string; ?> &nbsp; &nbsp;
                    <div class="fb-share-button" style="margin-top:15px;"
                        data-href="http://datasci.tw<?php echo $_SERVER['REQUEST_URI']; ?>"
                        data-layout="button_count">
                    </div>
                </h4>
                <h4 class="text-center">
                    <i class="fa fa-map-marker"></i> 地點: <?php echo $location_string;?>
                </h4>
                <?php
                $today = time();
                $reg_end = ( isset($deadline) AND $today > $deadline );
                if ( isset($kktix_date) AND $today > $kktix_date )
                {
                    // $end_string = '已開放報名！';
                    echo '<div class="ticket-container">';
                    if ( $today > $event_date )
                    {
                        echo '<h4><i class="fa fa-check"></i> 活動已結束，請期待下一場系列活動！</h4>';
                    }
                    else if( $reg_end )
                    {
                        echo '<h4><i class="fa fa-check"></i> 報名已經截止，感謝大家的支持！</h4>';
                    }else if( isset($ticket_full) ) 
                    {
                        echo '<h4><i class="fa fa-check"></i> 報名名額已額滿，感謝大家的支持！</h4>';
                    }
                    else
                    {
                        $prefix = ( $today > $reg_date ) ? '立即報名' : '預覽報名頁面';
                ?>
                    
                        <a class="type-15" href="http://dsc.kktix.cc/events/<?php echo $kktix_link; ?>" target="_blank">
                            <span><?php echo $prefix; ?> <i class="fa fa-arrow-circle-right"></i></span>
                            <span></span>
                        </a>
                    
                <?php
                    }
                    echo '</div>';
                }else{
                    
                    $register_string = date('Y/n/j',$reg_date). ' (' . $weekdays[date('w', $reg_date)] . ')';
                    if( isset($reg_time) ) { $register_string .= ' ' . $reg_time; }
                    $register_string .= ' 開放報名！';
                    echo '<div class="ticket-container"><h4><i class="fa fa-check"></i> '. $register_string .'</h4></div>';
                }
                ?>
            </div>
            <a href="/event/"style="position:absolute;top:0px;left:4%;display:block;width:24%;height:50%;background-color:transparent;"></a>
        </div>
    </div>
</div>  