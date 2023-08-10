<!--================ PAGE-COVER ================-->
<section class="page-cover" id="cover-tour-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Tour Detail</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('Home/tour_homepage'); ?>">Tour</a></li>
                    <li class="breadcrumb-item">Tour Detail</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<!-- <?php 
            echo "<pre>";
            print_r ($data);
            echo "</pre>";
             ?> -->
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper" id="my-section">
    <div><button class="mt-5  btn-success text-small" onclick="myfun('my-section')">
            <h3>Print Details</h3>
        </button>

    </div>
    <div id="tour-details" class="mt-0 innerpage-section-padding" >
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9 col-xl-9 content-side">
                    <div class="detail-slider">
                        <div class="feature-slider">
                            <div><img src="<?= base_url($data->image_path ) ; ?>" style="width: 1000px; height:800px;"
                                    class="img-fluid" alt="feature-img" /></div>
                            <!-- <div><img src="<?= base_url('assets/images/t-feature-2.jpg'); ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?= base_url('assets/images/t-feature-3.jpg'); ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?= base_url('assets/images/t-feature-4.jpg'); ?>" class="img-fluid" alt="feature-img"/></div>
                                    <div><img src="<?= base_url('assets/images/t-feature-5.jpg'); ?>" class="img-fluid" alt="feature-img"/></div> -->
                        </div><!-- end feature-slider -->



                        <ul class="list-unstyled features tour-features">
                            <!-- <li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data">25</p></div></li> -->
                            <li>
                                <div class="f-icon"><i class="fa fa-calendar"></i></div>
                                <div class="f-text">
                                    <p class="f-heading">Duration</p>
                                    <p class="f-data">7 DAYS</p>
                                </div>
                            </li>
                            <li>
                                <div class="f-icon"><i class="fa fa-clock-o"></i></div>
                                <div class="f-text">
                                    <p class="f-heading">Discount</p>
                                    <p class="f-data">10% OFF</p>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end detail-slider -->

                    <div class="detail-tabs">
                        <div class="tab-content">
                            <div id="tour-information" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 tab-text">
                                        <h3><?= $data->tour_name ; ?></h3>
                                        <p><?= $data->description ; ?></p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end hotel-overview -->
                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->




                </div><!-- end columns -->

                <div class="col-12 col-md-12 col-lg-3 side-bar right-side-bar">

                    <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price text-center">&#8377;<?= $data->price ; ?><span>
                                <h3><?= $data->tour_name ; ?></h3>
                            </span></h2>


                    </div><!-- end side-bar-block -->
                    <!-- <button class="btn btn-block btn-orange" type="submit" id="submit" name="submit"><h3>Confirm Booking</h3></button> -->
                    <div class="grid-btn">
                        <form method="POST" action="<?= base_url('Home/tour_booking_right_sidebar')?>">
                            <input type="hidden" name="id" value="<?= $data->image_id ;?>">
                            <button class="btn btn-block btn-orange mb-5 mt-5" type="submit">
                                <h3>Book Now</h3>
                            </button>
                        </form>


                    </div>
                    <div class="row">


                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="side-bar-block support-block">
                                <h3>Need Help</h3>
                                <p></p>
                                <div class="support-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>+91 88744 21137</p>
                                </div><!-- end support-contact -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end tour-detail -->
</section><!-- end innerpage-wrapper -->