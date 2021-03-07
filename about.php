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

    <div class="footer-news pad-top-100 pad-bottom-70 parallax bannernewsletter ">
        <!-- Slider Wrapper -->
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1 class="block-title" style="text-align: center;"> About Us </h1>

                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
    </div>

    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images about-main-img"
                            style="border-radius: 0;perspective: 1px;perspective-origin: 0;animation: auto;">
                            <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h3>IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                        <p> We have come together as a family and have opened our local kitchen. It specializes in
                            Indian cuisine. Since we are passionate about our food, we think we must share it with you.
                            Keeping this in mind at 'Oh! Spice' we have introduced specialties based on domestic rather
                            than commercial cookery using recipes that have been handed down from one generation to
                            another.
                            We look forward to introducing you through our sincere attempt to the infinite variety and
                            the complex taste of India...
                        </p>
                    </div>
                </div>
                <!-- end col -->
                <!-- end col -->
            </div>
            <!-- <br>
			<br>
			<br>
			<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h3>IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco. </p>

                        <p> Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, Aenean commodo ligula eget dolor penatibu set magnis is parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, pellentesque eu, pretium quis, sem. quat massa quis enim. Donec vitae sapien ut libero venenatis fauci Nullam quis ante. Etiam sit amet rci eget eros. </p>

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco. </p>
                    </div>
			</div>
			</div> -->
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <!-- end reservations-main -->
    <?php
    @include('footer.php');
	?>
</body>

</html>