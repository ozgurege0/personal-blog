
  <!-- Header -->
  <header class="header fixed-top">
            <div class="header-main navbar-expand-xl">
            <div class="container-fluid">
                <div class="header-main">
                    <!-- logo -->
                    <div class="site-branding">
                        <a class="dark-logo" href="<?php echo $ayarlarcek['ayarlar_url'] ?>">
                            <img src="<?php echo $ayarlarcek['ayarlar_url'] ?><?php echo $ayarlarcek['ayarlar_logo'] ?>" width="200px">
                        </a>
                        <a class="light-logo" href="<?php echo $ayarlarcek['ayarlar_url'] ?>">
                            <img src="<?php echo $ayarlarcek['ayarlar_url'] ?><?php echo $ayarlarcek['ayarlar_logo'] ?>" width="200px">
                        </a>
                    </div><!--/-->
                    
                    <div class="main-menu header-navbar">
                        <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <!--Homes -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $ayarlarcek['ayarlar_url'] ?>"> Ana Sayfa </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $ayarlarcek['ayarlar_url'] ?>about"> Hakkımda </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $ayarlarcek['ayarlar_url'] ?>contact"> İletişim </a>
                                </li>
                          
                
                            </ul>
                        </div>
                        <!--/-->
                        </nav>
                    </div>

                    <!-- header actions -->
                    <div class="header-action-items">
                        <!--header-social--> 
                        <ul class="header-social list-inline">
                        <?php 
      while ($accountcek=$account->fetch(PDO::FETCH_ASSOC)) { ?>
                            <li><a href="<?php echo $accountcek['account_link'] ?>" target="_blank"><i class="<?php echo $accountcek['account_icon'] ?>"></i></a></li>                     
                                        <?php } ?>
                        </ul>
                                       
                        <!--theme-switch-->
                        <div class="theme-switch-wrapper switch-icon">
                            <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <span class="slider round ">
                                <i class="lar la-sun icon-light"></i>
                                <i class="lar la-moon icon-dark"></i>
                            </span>
                            </label>
                        </div>

                        <!--search-icon-->
                        <div class="search-icon"> <a href="#search">  <i class="fas fa-search"></i></a></div>

                        <!--navbar-toggler-->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>  
                </div>
            </div> 
            </div>
        </header><!--/-->