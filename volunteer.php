<?php
require_once("header.php");

?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>स्वयंसेवक बनें </h2>
                <div class="page_link">
                    <a href="#">होम </a>
                    <a href="donation.html">स्वयंसेवक बनें </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Denation Area =================-->
<section class="donation_f_area p_120">
    <div class="container">
        <div class="row donation_f_inner">
            <div class="col-lg-5">
                <div class="dn_left_text">
                    <div class="dn_item">

                        <div class="dn_item">
                            <h2>हमारी गतिविधियों को स्वयंसेवी बनाने के लिए फार्म भरें </h2>
                        </div>
                        <h2>स्वयंसेवी शिक्षक </h2>
                        <p>हमारे समाज में शिक्षा का खर्च उठाने में सक्षम नहीं होने वाले छात्रों के लिए, एक स्वयंसेवी शिक्षक बनें| लोगों की मदद करने वाले लोग</p>
                        <br>
                        <div class="causes_slider owl-carousel">
                            <div class="item">
                                <!--                                <div class="single_sidebar_widget author_widget">-->
                                <img class="author_img " style="border-radius: 50%" height="60px" width="60px" src="img/t1.jpg" alt=""> <br>
                                <h6>Charlie Barber, Sunbeam School</h6>

                            </div>
                        </div>

                    </div>
                    <div class="dn_item">


                        <h2>स्वयंसेवी ब्यूटिशियन </h2>
                        <p>भारत की महिलाओं के लिए मुफ्त ब्यूटीशियन कोर्स के लिए मददगार बनें</p>
                        <br>
                        <div class="causes_slider owl-carousel">
                            <div class="item">
                                <!--                                <div class="single_sidebar_widget author_widget">-->
                                <img class="author_img rounded-circle" height="60px" width="60px" src="img/t1.jpg" alt=""> <br>
                                <h6>Charlie Barber, Sunbeam School</h6>

                            </div>
                        </div>

                    </div>





                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <h3>स्वयं सेवा के लिए आवेदन करने के लिए भरें </h3>
                <br>
                <div class="dn_form_area">
                    <form class="donation_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">

                        <div class="form-group col-lg-8">
                            <p>अपनी फोटो अपलोड करें</p>
                            <input type="file" class="form-control" id="name" name="name" placeholder="पूरा नाम ">
                        </div>
                        <div class="form-group col-lg-8">

                            <input type="text" class="form-control" id="name" name="name" placeholder="पूरा नाम ">
                        </div>
                        <div class="form-group col-lg-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-8">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="
आप कैसे मदद कर सकते हैं">
                        </div>
                        <div class="form-group col-lg-8">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number">
                        </div>

                        <div class="form-group col-lg-8">
                            <button type="submit" value="submit" class="btn btn-warning form-control" style="font-size: 20px;">आवेदन करें</button> <br><br>

                        </div>
                    </form>

                </div>
                <a href="/contact.php" class="btn" style="font-size: 20px;">संपर्क करें</button>
            </div>
        </div>

    </div>
</section>
<!--================End Denation Area =================-->

<?php
require_once("footer.php");

?>