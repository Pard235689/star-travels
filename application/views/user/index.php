
        
        
        <?php if( $error=$this->session->flashdata('msg')):   ?>
                    <div class="alert alert-dismissible alert-danger text-danger" style="height:50px; padding: 14px 22px;">
                    <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px; margin-top:12px">&times;
                    </button>
                    <?= $error;  ?>
                    </div>     
                    <?php endif; ?>
                <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-1">
        
            <div class="flexslider slider" id="slider-1">
                <ul class="slides">
                    
                    <li class="item-1" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(<?= base_url($data2[1]->image_path); ?>) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta">         
                            <div class="container " style='margin-top: 15%; '>
                                
                                <h1>Varansi</h1>
                                <!-- <a href="#" class="btn btn-default">View More</a> -->
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-1 -->
                    
                    <li class="item-2" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(<?= base_url($data2[0]->image_path); ?>) 50% 0%;background-size:cover;
                        height:100%;">
                        <div class=" meta" style='margin-top: 15%; '>         
                            <div class="container">
                                
                                <h1>Agra</h1>
                                <!-- <a href="#" class="btn btn-default">View More</a> -->
                            </div><!-- end container -->  
                        </div><!-- end meta -->
                    </li><!-- end item-2 -->
                   
                </ul>
            </div><!-- end slider -->
            
            
            
        </section><!-- end flexslider-container -->
        
       
       
        
        
                
       
        <!--=============== TOUR OFFERS ===============-->
        <section id="tour-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Tour Offers</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                        <?php $i=1; foreach($data2 as $value): ?>
                            <?php if ($i == 1 || $i == 3 || $i == 4 || $i == 6) {?>
                            <div class="item">
                                <div class="main-block tour-block">
                                    <div class="main-img">
                                        <form method="POST" action="<?= base_url('Home/tour_detail_right_sidebar')?>">
                                            <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                            <button class="border-0" data-toggle="modal1" data-target="#exampleModalCenter1"><img src="<?= base_url($value->image_path); ?>" style="width: 400px; height:300px;" class="img-fluid" alt="hotel-img" /></button>
                                        </form>
                                    </div><!-- end offer-img -->
                                    
                                    <div class="offer-price-2">
                                        <ul class="list-unstyled text-center">  
                                            <li class="price">&#8377;<?= $value->price ; ?></li>    
                                        </ul>
                                    </div><!-- end offer-price-2 -->
                                        
                                    <div class="main-info tour-info">
                                        <div class="main-title tour-title">
                                        <form method="POST" action="<?= base_url('Home/tour_detail_right_sidebar')?>">
                                            <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                            <button class="border-0 btn-lg font-weight-bold" style="font-size: 1.4rem;" data-toggle="modal1" data-target="#exampleModalCenter1"><?= $value->tour_name ; ?></button>
                                        </form>
                                            <!-- <a href="<?= base_url('Home/tour_detail_right_sidebar'); ?>">China Temple Tour</a> -->
                                            <!-- <p>From: China</p> -->
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div>
                                        </div><!-- end tour-title -->
                                    </div><!-- end tour-info -->
                                </div><!-- end tour-block -->
                            </div><!-- end item -->
                            <?php }?>

                        <?php $i++; endforeach; ?>    
                            
                            
                        </div><!-- end owl-tour-offers -->
                        
                        
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end tour-offers -->
        

        <!--==================== VIDEO BANNER ===================-->
        <section id="video-banner" class="banner-padding back-size"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h2>Take a Video Tour</h2>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                        <div class="margin-small py-5 mt-5 m-sm-0 "></div>
                                                                
                           <!-- Button trigger modal -->
                        <button type="button" class="btn video-btn" id="play-button" data-toggle="modal" data-src="https://www.youtube.com/embed/xyYmEugvcyE" data-target="#myModal"><span><i class="fa fa-play mt-0 m-sm-0"></i></span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">

                              <div class="modal-body">

                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>        
                                <!-- 16:9 aspect ratio -->

                                <div class="embed-responsive embed-responsive-16by9">
                                  <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=xWEC030knfo" id="video"  allowscriptaccess="always">></iframe>
                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end video-banner -->
        
                             
        
        <!--==================== HIGHLIGHTS ====================-->
        <section id="highlights" class="section-padding back-size"> 
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
                                <?php $i=1; foreach($data as $value): ?>
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
                            
                            <ol class="carousel-indicators mx-auto">
                            <?php $i=0; foreach($data as $value): ?>
                                <li data-target="#quote-carousel" data-slide-to="<?= $i; ?>"><img src="<?= base_url($value->image_path) ; ?>" class="img-fluid d-block"  alt="client-img">
                                </li>
                                <?php $i++; endforeach; ?> 
                            </ol>
                
                        </div><!-- end quote-carousel -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end testimonials --> 

        
        <!--=============== CONTACT-FORM ===============-->
        <section id="contact-form" class="section-padding" > 
    <?php if( $error=$this->session->flashdata('msg1')):   ?>
    <div class="alert alert-dismissible alert-success text-success" style="height:50px; padding: 14px 22px;">
        <button type="button" class="close" data-dismiss="alert" style="padding: 0px 15px; margin-top:8px">&times;</button>
        <?= $error;  ?>
    </div>     
    <?php endif; ?>
            <div class="container" >
                <div class="row">
                	<div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
						<div class="page-heading white-heading">
                        	<h2>Contact Us</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                        	<div class="col-12 col-md-12 col-lg-8">
                                <form method="post" action="<?= base_url('Home/add_index_contact_details')?>">
                                	<div class="row"> 
                                    	<div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="First Name" name="fname" required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
        								</div>
                                       
                                        <div class="col-12 col-md-6"> 
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="Last Name" name="lname" required/>
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
        								</div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Phone" name="phone" required/>
                                                <span><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                                <span><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Subject" name="subject" required/>
                                         <span><i class="fa fa-info-circle"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                        <textarea class="form-control" rows="7" placeholder="Your Message" name="your_msg" ></textarea>
                                        <span><i class="fa fa-pencil"></i></span>
                                    </div>
    								
                                    <button type="submit" class="btn btn-orange btn-block">Send</button>
                                </form>
                            </div><!-- end columns -->
                            
                            <div class="col-12 col-md-12 col-lg-4">
                            	<div class="contact-block">
                            		<span><i class="fa fa-map-marker"></i></span>
                                    <p>117/708 Q-Block Sharda Nagar, <br>Kanpur Nagar, Uttar Pradesh,<br>India, 208025</p>   
                                    <span class="border-shape"></span>                            
                                </div><!-- end address-block -->
                                
                                <div class="contact-block">
                            		<span><i class="fa fa-phone"></i></span>
                                    <p>+91 88744 21137</p>               
                                    <span class="border-shape"></span>                 
                                </div><!-- end address-block -->
                                
                                <div class="contact-block">
                            		<span><i class="fa fa-envelope"></i></span>
                                    <p>pard235689@gmail.com</p>      
                                    <span class="border-shape"></span>                          
                                </div><!-- end address-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end contact-form -->       
        
        
        
        
        
       