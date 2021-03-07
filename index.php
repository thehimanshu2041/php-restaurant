<?php
    @include('head.php')
?>
<body>

    <div id="loader">
        <div id="status"></div>
    </div>
	
    <?php
    @include('header.php');
	?>
	<!-- end site-header -->
<style>
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.vidclassss:before {
  content: '';
  position: absolute;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 5px;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

</style>

<div id="banner" class="banner full-screen-mode parallax backIMG">
<div class="vidclassss">
	<video autoplay muted loop id="myVideo">
		<source src="vid/background.mp4" type="video/mp4">
		Your browser does not support HTML5 video.
	</video>
	</div>
	<div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>The taste that takes you back  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Underneath:Homestyle Cooking" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <div class="book-btn" style="margin-top:15px">
                                <a href="menu.php" class="table-btn hvr-underline-from-center">Check Our Menu</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    
<style>
.wave {
  float: left;
  margin: 30px;
  animation: wave  ease-in-out 0.5s infinite alternate;
  transform-origin: center -20px;
}

.wave:hover {
  animation-play-state: paused;
}

.wave img {
  border: 5px solid #f8f8f8;
  display: block;
  width: 200px;
  height: 250px;
}

.wave figcaption {
  text-align: center;
}

.wave:after{
  content: '';
  position: absolute;
  width: 20px; 
  height: 20px;
  border: 1.5px solid #ffffff;
  top: -10px; 
  left: 50%;
  z-index: 0;
  border-bottom: none;
  border-right: none;
  transform: rotate(45deg);
}
       
.wave:before{
  content: '';
  position: absolute;
  top: -23px;
  left: 50%;
  display: block;
  height: 44px;
  width: 47px;
  background-image: url(https://cdn.hashnode.com/res/hashnode/image/upload/v1602040503586/FW6g79WBY.png);
  background-size: 20px 20px;
  background-repeat: no-repeat;
  z-index: 16;
}
        
@keyframes wave {
  0% { transform: rotate(3deg); }
  100% { transform: rotate(-3deg); }
}

</style>
<div id="about" class="about-main">
            <div class="row" style="margin: 0px;background-color: #e75b1e">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding: 0px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="padding: 30px;text-align: center;visibility: visible;animation-duration: 1s;animation-delay: 0.1s;animation-name: fadeIn;margin-top: 15%;">
                        <h1 class="block-title text-center" style="color:white !important;">Visit Us</h1>
                        
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="">
                            
							<img src="images/flame-5000x3333.jpeg" class="about-imagesin about-main-imgin"/>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
    </div>
<div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Today's Special </h2>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom wave">
                                <a href="menu.php" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            SALMON STEAK
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/food-2.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom wave">
                                <a href="menu.php" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            ITALIAN PIZZA
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/food-3.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom wave">
                                <a href="menu.php" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            VEG. ROLL
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/food-4.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <div class="item item-type-zoom wave">
                                <a href="menu.php" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            SALMON STEAK
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/food-5.jpg" alt="sp-menu">
                                </div>
                            </div>
                            <!-- <div class="item item-type-zoom wave">
                                <a href="menu.php" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            VEG. ROLL
                                            <div class="line"></div>
                                            <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="images/food-1" alt="sp-menu">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
	<div "about" class="about-main">
            <div class="row" style="margin: 0px;background-color: #e75b1e">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="">
                            
							<img src="images/food-6.jpg" class="about-imagesin about-main-imgin"/>
                        </div>
                    </div>
                </div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding: 0px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="padding: 30px;text-align: center;visibility: visible;animation-duration: 1s;animation-delay: 0.1s;animation-name: fadeIn;margin-top: 15%;">
                        <h1 class="block-title text-center" style="color:white !important;">Best in Town</h1>
                    </div>
                </div>
                <!-- end col -->
                <!-- end col -->
            </div>
            <!-- end row -->
    </div>
    <!-- end special-menu -->

	<?php
    @include('footer.php');
	?>
</body>

</html>