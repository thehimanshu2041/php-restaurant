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

<div class="footer-news pad-top-100 pad-bottom-70 parallax bannernewsletter ">
<!-- Slider Wrapper -->
<div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1 class="block-title text-center">Contact Us</h1>
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

    <div "about"="" class="about-main">
            <div class="row" style="margin: 0px;background-color: #e75b1e">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 0px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="">
                            
							<img src="images/special_menu_bg.jpg" class="about-imagesin about-main-imgin">
                        </div>
                    </div>
                </div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding: 0px">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="padding: 30px; text-align: center; visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn; margin-top: 10%;">
                        
                        
                        <div class="contact_details">
                        <div class="contact_d_item">
						<h3 class="block-title text-center" style="color:white !important;"><i class="fa fa-map-signs" aria-hidden="true"></i>&nbsp;&nbsp;Address :</h3>
                            
                            <p style="color: black;">UNIT 25, 57a Croydon Rd, Croydon <br>CR0 4WQ, United Kingdom</p>
                        </div>
                        <div class="contact_d_item">
                            <h3 class="block-title text-center" style="color:white !important;"><i class="fa  fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;Phone : <a href="tel:+44 7930 608333">+44 7930 608333</a></h3>
							<h3 class="block-title text-center" style="color:white !important;"><i class="fa  fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Email : <a href="mailto:info@ohspice.co.uk">info@ohspice.co.uk</a></h3>							
                        </div>
                        <div class="contact_d_item">
						<h3 class="block-title text-center" style="color:white !important;"><i class="fa  fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Opening Hours :</h3>
							<p style="color: black;"><b>Tue - Sat : </b> 18:00 - 23:00</p>
							<p style="color: black;"><b>Sun : </b> 18:00 - 22:00</p>
							</div>
                    </div>
                    </div>
                </div>
                <!-- end col -->
                <!-- end col -->
            </div>
            <!-- end row -->
    </div>
    
	<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h4 class="form-title">Send your Queries</h4>    
                        </div>
                        <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                        <form id="aaaacontact-form" method="post" class="reservations-box">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_name" id="form_name" placeholder="Name"  data-error="Name is required." required="required">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail ID"  data-error="E-mail id is required." required="required">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
									<input type="text" pattern="\d{10}" size="10" maxlength="10" required="required" id="phone" name="phone" placeholder="Contact Number" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))">
                                </div>
                            </div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" required="required">
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-box">
                                    <textarea name="message" id="message" class="textareainput" placeholder="Message" required="required"></textarea>
                                </div>
                            </div>
                            <span class="errorwa" id="mfnamerequired"></span>
									<span class="errorwa" id="mfemailrequired"></span>
									<span class="errorwa" id="mfphonerequired"></span>
									<span class="errorwa" id="mfsubjectrequired"></span>
									<span class="errorwa" id="mfmessagerequired"></span>
									<span  class="errorwa" id="mfsubmitsuccessrequired"></span>

                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="mfsbtn">SEND</button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->
	<div id="reservation" class="about-main" style="margin: 0;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2491.0112170006796!2d-0.12563048423521558!3d51.36609047961221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487607eac2ac2171%3A0x68e8180e88f1103b!2sOh%20Spice!5e0!3m2!1sen!2sin!4v1614860855779!5m2!1sen!2sin" width="100%" height="399" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<!-- end row -->
	</div>
	<?php
    @include('footer.php');
	?>
</body>

</html>