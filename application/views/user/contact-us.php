
    
                        
    
 <?php if( $error=$this->session->flashdata('msg1')):   ?>
        <div class="alert alert-dismissible alert-success text-success" style="height:50px; padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 0px 15px; margin-top:8px">&times;</button>
            <?= $error;  ?>
        </div>     
    <?php endif; ?>
    <!--=============== CONTACT-FORM ===============-->
    <section id="contact-form" class="section-padding"> 
   
            <div class="container">
                <div class="row">
                	<div class="col-12 col-md-12 col-lg-12 col-xl-12 text-center">
						<div class="page-heading white-heading">
                        	<h2>Contact Us</h2>
                            <hr class="heading-line"  />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                        	<div class="col-12 col-md-12 col-lg-8">
                        		<form method="post" action="<?= base_url('Home/add_contact_details')?>">
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
                                        <textarea class="form-control" rows="7" placeholder="Your Message" name="your_msg"></textarea>
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
        
        <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="contact-us-2">
    
            <div class="map m-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6005.643021345417!2d80.28412414239854!3d26.488694876908067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c39cfd8ca2667%3A0xcb4ceabcafce3183!2sFabHotel%20KS%20Grand%20-%20Hotel%20in%20Kakadeo%2C%20Kanpur!5e0!3m2!1sen!2sin!4v1690020269050!5m2!1sen!2sin"  style="width:100%; height:300px;border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- end map -->
    
               
        </div><!-- end contact-us -->
    </section><!-- end innerpage-wrapper -->
    
    
    
    
    