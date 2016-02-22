<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="<?php echo $_SERVER['REQUEST_URI']; ?>" class="navbar-brand -tal"><?php echo implode('<br/>',$caption); ?></a>
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
                                <a href="#about_us">
                                    <img src="../_images/icon01.png"/> 簡介
                                </a>
                            </li>
                            <li>
                                <a href="#schedule">
                                    <img src="../_images/icon04.png"/> 議程
                                </a>
                            </li>
                            <li>
                                <a href="#speaker">
                                    <img src="../_images/icon03.png"/> 講者
                                </a>
                            </li>
                            <li>
                                <a href="#content">
                                    <img src="../_images/icon08.png" /> 須知
                                </a>
                            </li>
                            <li>
                                <a href="#ticket">
                                    <img src="../_images/icon06.png"/> 報名
                                </a>
                            </li>
                            <li>
                                <a href="#traffic">
                                    <img src="../_images/icon05.png"/> 交通
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>