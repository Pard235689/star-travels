<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-thank-you">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">Thank You</h1>
                <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('Home/tour_homepage'); ?>">Tour</a></li>
                    <li class="breadcrumb-item"><a href="#">Tour Details</a></li>
                    <li class="breadcrumb-item"><a href="#">Tour Booking</a></li>
                    <li class="breadcrumb-item">Thank You</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<?php
$x = sizeof($data1);
// echo "<pre>";
// print_r ($data1);
// echo "</pre>";
?>
<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper" id='my-section'>
    <div id="thank-you" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 col-xl-8 content-side">
                    <div class="space-right">
                        <div class="thank-you-note">
                            <h3 class="mb-5">Your Booking is confirmed now. Thank You!</h3>
                            <button class="  btn btn-orange text-small" onclick="myfun('my-section')">
                                <h3>Print Details</h3>
                            </button>
                            <!-- <a href="#" class="btn btn-orange">Print Details</a> -->
                        </div><!-- end thank-you-note -->

                        <div class="traveler-info">
                            <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Traveler
                                Information</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Booking Number :</td>
                                            <td><?= $data1[$x - 1]->booking_id; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Booking Date :</td>
                                            <td><?= $data1[$x - 1]->booking_date; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tour Name :</td>
                                            <td><?= $data1[$x - 1]->tour_name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tour Price :</td>
                                            <td><?= $data1[$x - 1]->tour_price; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Full Name:</td>
                                            <td><?= $data1[$x - 1]->fname; ?> <?= $data1[$x - 1]->lname; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td><?= $data1[$x - 1]->dob; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number:</td>
                                            <td><?= $data1[$x - 1]->phone; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email Address:</td>
                                            <td><?= $data1[$x - 1]->email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>District:</td>
                                            <td><?= $data1[$x - 1]->district; ?></td>
                                        </tr>
                                        <tr>
                                            <td>State:</td>
                                            <td><?= $data1[$x - 1]->state; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pincode Code:</td>
                                            <td><?= $data1[$x - 1]->pincode; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Country:</td>
                                            <td><?= $data1[$x - 1]->country; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Permanent Address:</td>
                                            <td>
                                                <?= $data1[$x - 1]->address; ?><br>
                                                <?= $data1[$x - 1]->district; ?>
                                                <?= $data1[$x - 1]->state; ?><br>
                                                <?= $data1[$x - 1]->country; ?>
                                                <?= $data1[$x - 1]->pincode; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- end table-responsive -->



                        </div><!-- end traveler-info -->
                    </div><!-- end space-right -->
                </div><!-- end columns -->

                <div class="col-12 col-md-12 col-lg-4 col-xl-4 side-bar blog-sidebar right-side-bar">

                    <div class="row  ">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="side-bar-block support-block">
                            <h2 class="side-bar-heading ">Need Help</h2>
                                        <div class="support-contact">
                                        <span><i class="fa fa-map-marker"></i></span>
                                        <p>117/708 Q-Block Sharda <br>Nagar, Kanpur Nagar, <br>Uttar Pradesh,India,
                                            <br>208025
                                        </p>
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+91 88744 21137 </p>
                                            <span><i class="fa fa-envelope"></i></span><p>pard235689@gmail.com</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="side-bar-block follow-us support-block">
                                <h2 class="side-bar-heading">Follow Us</h2>
                                <div class="support-contact">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                </ul>
                            </div><!-- end side-bar-block -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end thank-you -->
</section><!-- end innerpage-wrapper -->