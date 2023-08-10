
        
        <!--=============== PAGE-COVER ==============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Tour</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Tour</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-4">
            
            <div class="flexslider slider tour-slider" id="slider-4">
                <ul class="slides">
                    
                    <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(<?= base_url($data2[0]->image_path); ?>) 50% 15%; background-size:cover; height:100%;">
                        <div class="meta">         
                            <div class="container">
                                <span class="highlight-price highlight-2">STARTING FROM &#8377;<?= $data2[0]->price ; ?> ONLY</span>
                                <h2><?= $data2[0]->tour_name ; ?></h2>
                                <p><?= $data2[0]->short_description ; ?></p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2 back-size" style="background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(<?= base_url($data2[1]->image_path); ?>) 50% 15%; background-size:cover; height:100%;">
                        <div class=" meta">         
                            <div class="container">
                                <span class="highlight-price highlight-2">STARTING FROM &#8377;<?= $data2[1]->price ; ?> ONLY</span>
                                <h2><?= $data2[1]->tour_name ; ?></h2>
                                <p><?= $data2[1]->short_description ; ?></p>
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
            
            <div class="search-tabs" id="search-tabs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        
                            <ul class="nav nav-tabs justify-content-center">
                                <li class="nav-item"><a class="nav-link" href="#tours" data-toggle="tab"><span><i class="fa fa-suitcase"></i></span><span class="d-md-inline-flex d-none st-text">Tours</span></a></li>
                            </ul>
        
                            <div class="tab-content">
                                <div id="tours" class="tab-pane in active">
                                    <form>
                                        <div class="row">
                                        
                                            <div class="col-12 col-md-12 col-lg-3 col-xl-4">
                                                <div class="form-group left-icon">
                                                    <input type="text" class="form-control" placeholder="City,Country" />
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-3 col-xl-3">
                                                <div class="form-group right-icon">
                                                    <select class="form-control">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-6 col-xl-3">
                                                <div class="row">
            
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Adults</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group right-icon">
                                                            <select class="form-control">
                                                                <option selected>Kids</option>
                                                                <option>0</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                            <i class="fa fa-angle-down"></i>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                            </div><!-- end columns -->
                                            
                                            <div class="col-12 col-md-12 col-lg-12 col-xl-2 search-btn">
                                                <button class="btn btn-orange">Search</button>
                                            </div><!-- end columns -->
                                            
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end tours -->

                            </div><!-- end tab-content -->
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end search-tabs -->
            
        </section><!-- end flexslider-container -->
        <!-- <?php 
            echo "<pre>";
            print_r ($data2);
            echo "</pre>";
             ?> -->
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="tour-grid" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">            
                        
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 content-side">
                            <div class="row">
                                <?php $i=1; foreach($data2 as $value): ?>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <div class="grid-block main-block t-grid-block">
                                            <div class="main-img t-grid-img">
                                                    <form method="POST" action="<?= base_url('Home/tour_detail_right_sidebar')?>">
                                                        <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                                        <button class="border-0" data-toggle="modal1" data-target="#exampleModalCenter1"><img src="<?= base_url($value->image_path); ?>" style="width: 300px; height:300px;" class="img-fluid" alt="hotel-img" /></button>
                                                    </form>
                                                    
                                               
                                                <div class="main-mask">
                                                    <ul class="list-unstyled list-inline offer-price-1">
                                                        <li class="price">&#8377;<?= $value->price ; ?><span class="divider">|</span><span class="pkg">7 Days Tour</span></li>
                                                    </ul>
                                                </div><!-- end main-mask -->
                                            </div><!-- end t-grid-img -->
                                            
                                            <div class="block-info t-grid-info">
                                                <div class="rating">
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star orange"></i></span>
                                                    <span><i class="fa fa-star lightgrey"></i></span>
                                                </div><!-- end rating -->
                                                
                                                <h3 class="block-title"><a href="<?= base_url(); ?>"><?= $value->tour_name ; ?></a></h3>
                                                <p class="block-minor">2 Adults, 02 Kids</p>
                                                <p><?= $value->short_description ; ?></p>
                                                <div class="grid-btn">
                                                    <form method="POST" action="<?= base_url('Home/tour_detail_right_sidebar')?>">
                                                        <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                                        <button class="btn btn-info mb-5" data-toggle="modal1" data-target="#exampleModalCenter1">View More</button>
                                                    </form>
                                                    <!-- <a href="<?= base_url('Home/tour_detail_right_sidebar/'); ?>" class="btn btn-orange btn-block btn-lg">View More</a> -->
                                                </div><!-- end grid-btn -->
                                            </div><!-- end t-grid-info -->
                                        </div><!-- end t-grid-block -->
                                    </div><!-- end columns -->
                                <?php $i++; endforeach; ?> 
                            </div><!-- end row -->
                            
                            <!-- <div class="pages">
                                <ol class="pagination justify-content-center">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                </ol> -->
                            <!-- </div>end pages -->
                        </div><!-- end columns -->

                        
        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end tour-grid -->
        </section><!-- end innerpage-wrapper -->
        
        
      
        
        
        
                
        
        
        
        
        <!--=============== TESTIMONIALS ===============-->
        <section id="testimonials" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading white-heading">
                            <h2>Testimonials</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">
                                <?php $i=1; foreach($data1 as $value): ?>
                                    <?php if($i==1)
                                    { ?>
                                <div class="carousel-item active">
                                    <blockquote><?= $value->description ; ?></blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                    
                                    <small><?= $value->name ; ?></small>
                                </div><!-- end item -->
                                <?php } else {?>
                                    <div class="carousel-item">
                                    <blockquote><?= $value->description ; ?></blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div><!-- end rating -->
                                            
                                    <small><?= $value->name ; ?></small>
                                </div><!-- end item -->
                                <?php } ?>

                                <?php $i++; endforeach; ?> 
                            </div><!-- end carousel-inner -->
                            
                            <ol class="carousel-indicators mx-auto ">
                            <?php $i=0; foreach($data1 as $value): ?>
                                <li data-target="#quote-carousel" data-slide-to="<?= $i; ?>"><img src="<?= base_url($value->image_path) ; ?>" class="img-fluid d-block"  alt="client-img">
                                </li>
                                <?php $i++; endforeach; ?> 
                            </ol>
                
                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials --> 
        
        
        <!--============== HIGHLIGHTS =============-->
        <section id="highlights" class="highlights-2"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-plane"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text">
                                        <span class="numbers">2496</span>
                                        <p>Outstanding Tours</p>
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-ship"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text cruise">
                                        <span class="numbers">1906</span>
                                        <p>Worldwide Cruise</p> 
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 d-flex justify-content-center">
                                <div class="highlight-box">
                                    <div class="h-icon">
                                        <span><i class="fa fa-taxi"></i></span>
                                    </div><!-- end h-icon -->
                                    
                                    <div class="h-text taxi">
                                        <span class="numbers">2033</span>
                                        <p>Luxury Car Booking</p>   
                                    </div><!-- end h-text -->                           
                                </div><!-- end highlight-box -->                       
                            </div><!-- end columns -->
                                
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end highlights -->
        
        
      