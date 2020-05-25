<?php
require_once("header.php");

?>
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>डोनेट करें </h2>
						<div class="page_link">
							<a href="#">होम </a>
							<a href="donation.html">डोनेट करें </a>
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
        						<h2>#EmpowerWomen #SelfReliantIndia </h2>
        						
        					</div>
        						<h4>मुफ्त ब्यूटिशियन कोर्स आत्मनिर्भर भारतीय नारियों के लिए </h4>
        						<p>राजलक्ष्मी सेवा संस्थान की तरफ से मुफ्त ब्यूटिशियन ट्रेनिंग क्लास का संचालन किया जाता है ! जिसमे जरूरत मंद लड़कियों एवं महिलाओ बिना किसी खर्च के ट्रेनिगं के साथ किट भी दिया जाता है, जिसकी सहायता से प्रैक्टिकल किया जाता है !</p>
        					</div>
        					<div class="dn_item">
        						<h4>भारत में महिलाओं के कल्याण की दिशा में एक कदम</h4>
        						<p>समाज में उत्कृष्ट योगदान देकर अपनी अलग पहचान बनाने वाली बनारस की पांच विशिष्ट महिलाओं को सम्मानित किया गया. मैदागिन स्थित पराड़कर स्मृति भवन में रविवार को राजलक्ष्मी सेवा संस्थान के तत्वावधान में आयोजित प्रामण पत्र वितरण समारोह के अवसर पर कृष्ण प्रिया, डॉ. रितु गर्ग, श्रेष्ठा सिंह (संपादक ‘गूंज उठी रणभेरी’), निधी गोस्वामी एवं लता सिंह को स्मृति चिह्न भेट कर महिलाओं को उनसे प्रेरित होने की सीख दी गयी.</p>
        					</div>
        					
        				</div>
        			</div>
        			<div class="col-lg-6 offset-lg-1">
                        <h3>फॉर्म भर के डोनेट करें  </h3>
                        <br>
        				<div class="dn_form_area">
        					<form class="donation_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                               	
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="पूरा नाम ">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="दान की राशि (INR-₹)">
                                </div> 
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message (Optional)"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn submit_btn form-control" style="font-size: 20px;">डोनेट करें</button>
                                </div>
                            </form>
        				</div>
        			</div>
        		</div>
        		<div class="master_card">
        			<span>We Accept:</span>
        			<img src="img/master-card.png" alt="">
        		</div>
        	</div>
        </section>
        <!--================End Denation Area =================-->
        
  <?php
require_once("footer.php");

?>