<!--================== PAGE-COVER ================-->
<section class="page-cover" id="cover-tour-booking">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Tour Booking Form</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('Home/tour_homepage'); ?>">Tour</a></li>
                    <li class="breadcrumb-item"><a href="#">Tour Details</a></li>
                    <li class="breadcrumb-item">Tour Booking Form</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<!-- <?php
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        ?> -->
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="flight-booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-5 col-xl-4 side-bar left-side-bar">
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="side-bar-block detail-block style2 text-center">
                                <div class="detail-img text-center">
                                    <a href="#"><img src="<?= base_url($data->image_path); ?>" class="img-fluid" alt="detail-img" /></a>
                                    <div class="detail-title">
                                        <h4><a href="#"><?= $data->tour_name; ?></a></h4>

                                    </div><!-- end detail-title -->

                                    <!-- <span class="detail-price"><h4>$230 <span>/ night</span></h4></span> -->
                                </div><!-- end detail-img -->

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Rating</td>
                                                <td>
                                                    <div class="rating">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star-o"></i></span>
                                                    </div><!-- end rating -->
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>Totel Price</td>
                                                <td>&#8377;<?= $data->price; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- end table-responsive -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="side-bar-block support-block">
                                <h2>Need Help</h2>

                                <div class="support-contact">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <p>117/708 Q-Block Sharda <br>Nagar, Kanpur Nagar, <br>Uttar Pradesh,India,
                                        <br>208025
                                    </p>
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>+91 88744 21137 </p>
                                    <span><i class="fa fa-envelope"></i></span>
                                    <p>pard235689@gmail.com</p>
                                </div><!-- end support-contact -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->

                </div><!-- end columns -->


                <div class="col-12 col-md-12 col-lg-7 col-xl-8 content-side">
                    <form class="lg-booking-form" id="frm_booking" name="frm_booking" method="post" action="<?= base_url('Home/add_booking_details') ?>">
                        <div class="lg-booking-form-heading">
                            <span>1</span>
                            <h3>Booking Form</h3>
                        </div><!-- end lg-bform-heading -->

                        <div class="personal-info">

                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <label>Tour Name</label>
                                        <input type="text" class="form-control" id="txt_name" value="<?= $data->tour_name; ?>" name="tour_name" required />
                                    </div>
                                </div><!-- end columns -->

                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <label>Tour Price (in &#8377;Rupee )</label>
                                        <input type="text" class="form-control" id="txt_last_name" value="&#8377; <?= $data->price; ?>" name="tour_price" required />
                                    </div>
                                </div><!-- end columns -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="txt_name" name="fname" required />
                                    </div>
                                </div><!-- end columns -->

                                <div class="col-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="txt_last_name" name="lname" required />
                                    </div>
                                </div><!-- end columns -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control " id="txt_dob" name="dob" required />
                                    </div>
                                </div><!-- end columns -->


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Booking Date</label>
                                        <input type="date" class="form-control" id="txt_phone" name="booking_date" required />
                                    </div>
                                </div><!-- end columns -->
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" id="txt_email" name="email" required />
                                    </div>
                                </div><!-- end columns -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="number" class="form-control" id="txt_phone" name="phone" required />
                                    </div>
                                </div><!-- end columns -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" class="form-control" id="txt_country" name="district" required />
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" id="txt_country" name="state" required />
                                    </div>
                                </div><!-- end columns -->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" id="txt_country" name="country" required />
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pin Code</label>
                                        <input type="number" class="form-control" id="txt_country" name="pincode" required />
                                    </div>
                                </div><!-- end columns -->
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <label>Permanent Address</label>
                                    <textarea type="text" class="form-control" rows="2" cols="50" id="txt_address" name="address" required></textarea>
                                </div>
                            </div><!-- end columns -->
                        </div><!-- end personal-info -->



                        <div class="checkbox">
                            <label><input type="checkbox" id="chk_agree" required> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                        </div><!-- end checkbox -->
                        <div class="col-md-12 text-center" id="result_msg"></div>
                        <button type="submit" class="btn btn-orange" id="submit">Confirm Booking</button>
                    </form>

                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end flight-booking -->
</section><!-- end innerpage-wrapper -->