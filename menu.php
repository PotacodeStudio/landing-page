<?php include "fb_messenger_plugin.php" ?>

 <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a <?php echo $is_active == 'home' ? 'class="active"' : ''; ?> href="index.php">home</a></li>
                                        <li><a href="https://potacode.com/blog">Blog</a></li>
                                        <!-- <li><a <?php echo $is_active == 'contact' ? 'class="active"' : ''; ?> href="contact.php">Contact</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <!-- <a href="#test-form" class="login popup-with-form">
                                    <i class="flaticon-user"></i>
                                    <span>log in</span>
                                </a> -->
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="tel:+6282217544947">
                                        <i class="fa fa-phone"></i>
                                        <span>+62-822-1754-4947</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->