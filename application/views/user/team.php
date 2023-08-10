
        <!--============= PAGE-COVER ============-->
        <section class="page-cover" id="cover-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Our Team</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Our Team</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="team-page" class="innerpage-section-padding">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-12">
                            <div class="page-heading">
                                <h2>Meet Our Team</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                                
                            <div class="row">
                                <?php $i=1; foreach($data as $value): ?>
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                        <div class="member-block-2 text-center">
                                            <div class="member-img-2">
                                                <img src="<?= base_url($value->image_path) ; ?>" style="width: 400px; height:350px;" class="img-fluid" alt="member-img" />
                                                <div class="member-name-2">
                                                    <h3><?= $value->name ; ?></h3>
                                                </div><!-- end member-name-2 -->
                                            </div><!-- end member-img-2 -->
                                            
                                            <div class="member-info-2">
                                                <h4><?= $value->designation ; ?></h4>
                                                <ul class="list-unstyled list-inline contact-links">
                                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-facebook-square"></i></span></a></li>
                                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-linkedin-square"></i></span></a></li>
                                                    <li class="list-inline-item"><a href="#"><span><i class="fa fa-twitter-square"></i></span></a></li>
                                                </ul> 
                                            </div><!-- end member-info-2 -->
                                        </div><!-- end member-block-2 -->
                                    </div><!-- end columns -->
                                <?php $i++; endforeach; ?>

                                <!-- <?php 
                                echo "<pre>";
                                print_r ($data);
                                echo "</pre>";
                                ?> -->    
                            </div><!-- end row -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end team-page -->
        </section><!-- end innerpage-wrapper -->
        