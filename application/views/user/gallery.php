
        
        
        <!--============== PAGE-COVER ==============-->
        <section class="page-cover" id="cover-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-title">Gallery</h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Gallery</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
            <div id="gallery-page" class="innerpage-section-padding"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="page-heading">
                                <h2>Picture Gallery</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                
                            <div class="row">
                                
                            <?php $i=1; foreach($data as $value): ?>
                                    <div class="gallery-product col-12 col-md-6 col-lg-4 col-xl-3">
                                        <div class="gallery-block">
                                            <div class="gallery-img ">
                                                <img src="<?= base_url($value->image_name) ; ?>" style="width: 250px; height:200px;" class="img-fluid" alt="gallery-img" >
                                                <div class="gallery-mask">
                                                    <div class="gallery-title">
                                                            <h2><?= $value->image_title ; ?></h2>
                                                            <p><?= $value->image_id ; ?></p>
                                                        </div>  <!-- end gallery-title --> 
                                                    <a href="<?= base_url($value->image_name) ;?>" title="image-1" class="with-caption image-link"><span><i class="fa fa-arrows-v"></i></span></a>
                                                </div><!-- end gallery-mask -->
                                            </div><!-- end gallery-img -->
                                        </div><!-- end gallery-block -->
                                    </div><!-- end gallery-product -->
                                    <?php $i++; endforeach; ?>
                                    <!-- <?php 
                                    echo "<pre>";
                                    print_r ($data);
                                    echo "</pre>";
                                    ?> -->
                                    
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end gallery-page -->
        </section><!-- end innerpage-wrapper -->
        
        
        
