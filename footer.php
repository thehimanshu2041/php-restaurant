<div id="footer" class="footer-main ">

    <!-- end footer-news -->
    <div class="footer-box pad-top-70 ">
        <div class="container">
            <div class="row">
                <div class="footer-in-main">
                    <div class="footer-logo">
                        <div class="text-center">
                            <img src="images/alogo.png" alt="" style="max-width: 120px;;" />
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box-a">
                            <h3>About Us</h3>
                            <p>We have come together as a family and have opened our local kitchen. It specializes in
                                Indian cuisine. Since we are passionate about our food, we think... <a
                                    class="hvr-underline-from-center" href="about.php" style="color: #e75b1e;">Read
                                    More</a></p>
                        </div>
                    </div> -->
                    <!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-box-b">
                            <h3>Follow Us</h3>
                            <ul class="socials-box footer-socials pull-left">
                                <li>
                                    <a href="https://www.facebook.com/Oh-Spice-Indian-106009531534167">
                                        <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ohspiceindian/">
                                        <div class="social-circle-border"><i class="fa  fa-instagram"></i></div>
                                    </a>
                                </li>

                                <!-- li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li-->
                            </ul>
                        </div>
                        <!-- end footer-box-b -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-box-c">
                            <h3>Contact Us</h3>
                            <p>
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                <span><a target="_blank"
                                        href="https://www.google.com/maps/place/Oh+Spice/@51.36609,-0.123442,16z/data=!4m5!3m4!1s0x0:0x68e8180e88f1103b!8m2!3d51.3660905!4d-0.1234418?hl=en">
                                        UNIT 25, 57a Croydon Rd, Croydon <br>CR0 4WQ, United Kingdom</a></span>
                            </p>
                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span>
                                    <a href="tel:+44 7983630124">+44 7983630124</a>
                                </span>
                            </p>
                            <p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span><a href="mailto:info@ohspice.co.uk">info@ohspice.co.uk</a></span>
                            </p>
                        </div>
                        <!-- end footer-box-c -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-box-d">
                            <h3>Opening Hours</h3>

                            <ul>
                                <li>
                                    <p>Tuesday - Saturday </p>
                                    <span> 18:00 - 23:00</span>
                                </li>
                                <li>
                                    <p>Sunday </p>
                                    <span>18:00 - 22:00</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end footer-box-d -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end footer-in-main -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div id="copyright" class="copyright-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p style="color: black;">Copyright ©2021 All rights reserved | Developed with <i
                                class="fa fa-heart" aria-hidden="true" style="color: greenyellow;"></i> by <a
                                href="https://itobsoftwares.com" target="_blank">iTOb Softwares</a></p>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end copyright-main -->
    </div>
    <!-- end footer-box -->
</div>
<!-- end footer-main -->
<a href="#" class="scrollup" style="display: none;">Scroll</a>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
<script>
$(document).ready(function() {
    $("#aaaacontact-form").submit(function(e) {
        e.preventDefault();
        //Disable button and start loader
        $('#mfsbtn').prop("disabled", true);
        //Get the vars
        var mfname = $("#form_name").val();
        var mfemail = $("#email").val();
        var mfphone = $("#phone").val();
        var mfsubject = $("#subject").val();
        var mfmessage = document.getElementById("message").value;
        if (mfname == '') {
            $("#mfnamerequired").text("Name is missing.");
            $('#mfsbtn').prop("disabled", false);
            return false;
        } else if (mfemail == '') {
            $("#mfemailrequired").text("Email is missing.");
            $('#mfsbtn').prop("disabled", false);
        } else if (mfphone == '') {
            $("#mfphonerequired").text("Phone is missing.");
            $('#mfsbtn').prop("disabled", false);
        } else if (mfsubject == '') {
            $("#mfsubjectrequired").text("Subject is missing.");
            $('#mfsbtn').prop("disabled", false);
        } else if (mfmessage == '') {
            $("#mfmessagerequired").text("Message is missing.");
            $('#mfsbtn').prop("disabled", false);
        } else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: {
                    mfname: mfname,
                    mfemail: mfemail,
                    mfphone: mfphone,
                    mfmessage: mfmessage,
                    mfsubject: mfsubject
                },
                success: function(data) {
                    $("#mfsubmitsuccessrequired").text(mfname +
                        ", Your message has been received!!");
                    $("#mfsbtn").removeClass("disabled");
                    document.getElementById("aaaacontact-form").reset();
                    setTimeout(function() {
                        $('#mfsubmitsuccessrequired').hide();
                    }, 4000);


                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }

            });
        }
    });
});
</script>