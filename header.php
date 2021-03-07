<header id="header" class="header-block-top">
<div id="site-header" style="background: #06070a;border-bottom: 1px solid #1d242a;">
	<div class="container" style="padding-top:7px">
            <div class="line">
               <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
				<p>Contact Us: <strong><a href="tel:+44 7930 608333" style="color: #e75b1e;">+44 7930 608333</a> </strong>&nbsp;|&nbsp;<strong><a href="mailto:info@ohspice.co.uk" style="color: #e75b1e;">info@ohspice.co.uk</a></strong></p>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                  <div class="social right">
                     <a href="https://www.facebook.com/Oh-Spice-Indian-106009531534167"><i class="fa  fa-facebook"></i></a>
					 <!-- a href="#"><i class="fa  fa-twitter"></i></a-->
					 <!-- a href="#"><i class="fa  fa-linkedin"></i></a-->
					 <a href="https://www.instagram.com/ohspiceindian/"><i class="fa  fa-instagram"></i></a>
                  </div>
               </div>
            </div>
        </div>
    </div>
	
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="index.php">
                                        <img src="images/alogo.png" alt="" style="max-width: 80px;">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
								<li class="<?php
								if(strpos($_SERVER["REQUEST_URI"],"index.php") > 0 || $_SERVER["REQUEST_URI"] == "/ohspice" || $_SERVER["REQUEST_URI"] == "/ohspice/"){
									echo 'active';
								}
								?>"><a href="index.php">Home</a></li>
                                    <li class="<?php
								if(strpos($_SERVER["REQUEST_URI"],"about.php") > 0){
									echo 'active';
								}
								?>"><a href="about.php">About us</a></li>
                                    <li class="<?php
								if(strpos($_SERVER["REQUEST_URI"],"menu.php") > 0){
									echo 'active';
								}
								?>"><a href="menu.php">Menu</a></li>
                                    <li class="<?php
								if(strpos($_SERVER["REQUEST_URI"],"gallery.php") > 0){
									echo 'active';
								}
								?>"><a href="gallery.php">Gallery</a></li>
                                    <li class="<?php
								if(strpos($_SERVER["REQUEST_URI"],"contactus.php") > 0){
									echo 'active';
								}
								?>"><a href="contactus.php">Contact us</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->