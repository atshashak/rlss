<div class="modal fade" id="beautician-apply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">ब्यूटिशियन टर्निंग क लिए आवेदन </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body bg-grey">


                <form class="donation_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="dn_form_area mx-auto">

                        <div class="form-group col-lg-12">

                            <input type="text" class="form-control" id="name" name="name" placeholder="पूरा नाम ">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="पिता या माता का नाम ">
                        </div>
                        <div class="form-group col-lg-12 ">
                            <div class="row">
                                <div class="col-lg-4 float-left align-item-center">
                                    <p>जन्म तिथि</p>
                                </div>
                                <div class="col-lg-8 float-right">
                                    <input type="date" class="form-control" id="subject" name="subject" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-12 ">
                            <div class="row">
                                <div class="col-lg-4 float-left align-item-center">
                                    <p>लिंग</p>
                                </div>
                                <div class="col-lg-8 float-right">
                                    <div class="form-group">
                                       
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Male</option>
                                            <option>Female</option>
                                            
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number">
                        </div>

                        <div class="col-lg-12">

                           <div style="font-size: 12px;"> <h6 style="font-size: 12px;">By clicking on Apply you agree to our <a href="privacy-policy.php">Privacy Policy</a></h6></div>

                        </div>






                    </div>
                </form>




            </div>
            <div class="modal-footer">
                <button type="button" class="genric-btn default radius text-dark" data-dismiss="modal">बंद करें </button>
                <button type="button" class="genric-btn danger radius text-white">आवेदन करें </button>
            </div>
        </div>
    </div>
</div>