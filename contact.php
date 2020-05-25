<?php
require_once("header.php");

?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>संपर्क</h2>
                <div class="page_link">
                    <a href="#">Home</a>
                    <a href="contact.html">संपर्क</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <div class="container">
        >
        
<!--        <div id="mapBox" class="mapBox" data-lat="25.325411" data-lon="82.93924" data-zoom="13" data-info="C K - 63/147 Chhoti Pieri, Uttar Pradesh 221001" data-mlat="25.325411" data-mlon="82.93924">-->
<!--        </div>-->
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>सी के - 63/147 छोटी पियरी ,</h6>
                        <p>वाराणसी , यू.पी. 221001</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">+91-7499972644</a></h6>

                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="mailto:rajlaxmisevasansthan@gmail.com">rajlaxmisevasansthan@gmail.com</a></h6>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div id="mapBox" class="mapBox w-100" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115403.79362975573!2d82.9392399602966!3d25.32541104763716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2e13ffffffff%3A0x7ea31ed78feedd89!2sRajalakshmi%20Seva%20Sansthan!5e0!3m2!1sen!2sin!4v1590253497281!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
        </div>
    </div>
</section>
<!--================Contact Area =================-->

<?php
require_once("footer.php");

?>