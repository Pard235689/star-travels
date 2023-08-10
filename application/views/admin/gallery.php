
<div class="page-wrapper">
    <div id="main-wrapper">

<!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url('AdminHome/index'); ?>" class="link">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                        </div>
                        <h4 class="page-title">Gallery</h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->


    <div class="container-fluid mt-5" >            
        <div class="row">
            <div class="col-sm-12 mb-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Upload Image to Gallery
                </button>
            </div>
            
            <!-- Modal -->
            <div class="modal fade"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content" style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                        <form  method="post" action="<?= base_url('AdminHome/add_gimage'); ?>" enctype="multipart/form-data">
                            <div class="modal-header">                   
                                <h5 class="modal-title" id="exampleModalCenterTitle">Upload Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body " >
                                <div class="form-group mt-5 row">
                                    <label for="example-text-input" class="col-2 col-form-label ml-5">Image Title</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="image_title" value="" placeholder="Enter Image Name" id="example-text-input">
                                    </div>
                                </div>
                                <!-- <div class="form-group mt-5 row">
                                    <label for="example-text-input" class="col-2 col-form-label ml-5"> Image Category</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" value="" placeholder="Enter Category" id="example-text-input">
                                    </div>
                                </div> -->
                                <div class="form-group mt-5 mb-5 row">
                                    <label for="example-text-input" class="col-2 col-form-label ml-5">Image Upload</label>
                                    <div class="col-8">
                                        <input class="form-control" type="file" name="image_path" value=""  id="example-text-input">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>            
    <?php if( $error=$this->session->flashdata('msg1')):   ?>
        <div class="alert alert-dismissible alert-success text-success" style="height:50px; padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px; margin-top:12px">&times;</button>
            <?= $error;  ?>
        </div>     
    <?php endif; ?>
    <?php if( $error=$this->session->flashdata('msg2')):   ?>
        <div class="alert alert-dismissible alert-success text-success" style="height:50px; padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px; margin-top:12px">&times;</button>
            <?= $error;  ?>
        </div>     
    <?php endif; ?>
    <?php if( $error=$this->session->flashdata('msg')):   ?>
        <div class="alert alert-dismissible alert-danger text-danger" style="height:50px; padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px; margin-top:12px">&times;</button>
            <?= $error;  ?>
        </div>     
    <?php endif; ?>
    <!-- upload end -->

    <!-- <?php 
    echo "<pre>";
    print_r ($data2);
    echo "</pre>";
    ?> -->

    <div class="container-fluid mt-5" >            
        <div class="row">
            <!-- <div class="col-sm-12 mb-5">
                
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
                  Update Image to Gallery
                </button>
            </div> -->
            
            <!-- Modal -->
            <div class="modal fade"  id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content" style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                        <div class="modal-header">                   
                            <h5 class="modal-title" id="exampleModalCenterTitle">Upload Image</h5>
                            <form  method="post" action="<?= base_url('AdminHome/update_gimage'); ?>" enctype="multipart/form-data">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        

                               
                            <div class="modal-body " >
                                <div class="form-group mt-5 row">
                                    <label for="example-text-input" class="col-2 col-form-label ml-5">Image name</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" name="image_title" value="<?= $data2[0]->image_title ;?>" placeholder="Enter Image Name" id="example-text-input">
                                    </div>
                                </div>
                                <!-- <div class="form-group mt-5 row">
                                    <label for="example-text-input" class="col-2 col-form-label ml-5"> Image Category</label>
                                    <div class="col-8">
                                        <input class="form-control" type="text" value="" placeholder="Enter Category" id="example-text-input">
                                    </div>
                                </div> -->
                                <div class="form-group mt-5 mb-5 row">
                                    <label for="example-text-input" class="col-2 col-form-label ml-5">Image Upload</label>
                                    <div class="col-8">
                                        <input class="form-control" type="file" name="image_path"   id="example-text-input">
                                        <img src="<?= base_url($data2[0]->image_path); ?>" alt="" style="height: 200px; width:400px;">

                                    </div>
                                </div>
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
    <!-- ============================================================== -->

    
    
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Booking Form Start -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <div class="container-fluid mt-5" >            
        <div class="row">
            <div class="col-sm-12 mb-5">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
                 Book Now
                </button>
            </div>
            
            <!-- Modal -->
            <div class="modal fade"  id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content" style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                        <form  method="post" action="<?= base_url(); ?>" enctype="multipart/form-data">
                            <div class="modal-header">                   
                                <h3 class="modal-title" id="exampleModalCenterTitle">Booking Form</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body " >
                                
                                <div class="form-group ">
                                    <input type="text" class="form-control border-secondary" placeholder="First Name" id="txt_first_name" name="txt_first_name"/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control border-secondary" placeholder="Last Name"  id="txt_last_name" name="txt_last_name"/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control border-secondary" placeholder="Email"  id="txt_email" name="txt_email"/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control border-secondary" placeholder="Phone"  id="txt_phone" name="txt_phone"/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control border-secondary" placeholder="Country"  id="txt_country" name="txt_country"/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control dpd3 border-secondary" placeholder="Booking Date" id="txt_booking_date" name="txt_booking_date"/>
                                </div>
                                
                                
                                <div class="form-group right-icon">
                                    <select class="form-control border-secondary" id="txt_adults" name="txt_adults">
                                        <option selected value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <!-- <i class="fa fa-angle-down"></i> -->
                                </div>
                                 
                                       
                                <div class="form-group right-icon">
                                    <select class="form-control border-secondary" id="txt_children" name="txt_children">
                                        <option selected value="">Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <!-- <i class="fa fa-angle-down"></i> -->
                                </div>
                                    
                                
                                
                                <div class="form-group right-icon ">
                                    <select class="form-control border-secondary" id="txt_pay_method" name="txt_pay_method">
                                        <option selected value="">Payment Method</option>
                                        <option value="Credit Card">Credit Card</option>
                                        <option value="Paypal">Paypal</option>
                                    </select>
                                    <!-- <i class="fa fa-angle-down"></i> -->
                                </div>
                                
                                <div class="checkbox custom-check m-4">
                                    <input type="checkbox" id="check01" name="checkbox"/>
                                    <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                </div>
                                <div class="col-md-12 text-center" id="result_msg"></div>
                               
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Confirm Booking</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    
<div class="datepicker dropdown-menu" style="display: block; top: 2718.33px; left: 74.5px;">
    <div class="datepicker-days" style="display: block;">
        <table class=" table-condensed">
            <thead>
                <tr>
                    <th class="prev">‹</th>
                    <th colspan="5" class="switch">July 2023</th>
                    <th class="next">›</th>
                </tr>
                <tr>
                    <th class="dow">Su</th>
                    <th class="dow">Mo</th>
                    <th class="dow">Tu</th>
                    <th class="dow">We</th>
                    <th class="dow">Th</th>
                    <th class="dow">Fr</th>
                    <th class="dow">Sa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="day  old">25</td>
                    <td class="day  old">26</td>
                    <td class="day  old">27</td>
                    <td class="day  old">28</td>
                    <td class="day  old">29</td>
                    <td class="day  old">30</td>
                    <td class="day ">1</td>
                </tr>
                <tr>
                    <td class="day ">2</td>
                    <td class="day ">3</td>
                    <td class="day ">4</td>
                    <td class="day ">5</td>
                    <td class="day ">6</td>
                    <td class="day ">7</td>
                    <td class="day ">8</td>
                </tr>
                <tr>
                    <td class="day ">9</td>
                    <td class="day ">10</td>
                    <td class="day ">11</td>
                    <td class="day ">12</td>
                    <td class="day ">13</td>
                    <td class="day ">14</td>
                    <td class="day ">15</td>
                </tr>
                <tr>
                    <td class="day ">16</td>
                    <td class="day ">17</td>
                    <td class="day ">18</td>
                    <td class="day ">19</td>
                    <td class="day ">20</td>
                    <td class="day ">21</td>
                    <td class="day ">22</td>
                </tr>
                <tr>
                    <td class="day ">23</td>
                    <td class="day ">24</td>
                    <td class="day ">25</td>
                    <td class="day ">26</td>
                    <td class="day ">27</td>
                    <td class="day ">28</td>
                    <td class="day ">29</td>
                </tr>
                <tr>
                    <td class="day ">30</td>
                    <td class="day  active">31</td>
                    <td class="day  new">1</td>
                    <td class="day  new">2</td>
                    <td class="day  new">3</td>
                    <td class="day  new">4</td>
                    <td class="day  new">5</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="datepicker-months" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th class="prev">‹</th>
                    <th colspan="5" class="switch">2023</th>
                    <th class="next">›</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7">
                        <span class="month">Jan</span>
                        <span class="month">Feb</span>
                        <span class="month">Mar</span>
                        <span class="month">Apr</span>
                        <span class="month">May</span>
                        <span class="month">Jun</span>
                        <span class="month active">Jul</span>
                        <span class="month">Aug</span>
                        <span class="month">Sep</span>
                        <span class="month">Oct</span>
                        <span class="month">Nov</span>
                        <span class="month">Dec</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="datepicker-years" style="display: none;">
        <table class="table-condensed">
            <thead>
                <tr>
                    <th class="prev">‹</th>
                    <th colspan="5" class="switch">2020-2029</th>
                    <th class="next">›</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7">
                        <span class="year old">2019</span>
                        <span class="year">2020</span>
                        <span class="year">2021</span>
                        <span class="year">2022</span>
                        <span class="year active">2023</span>
                        <span class="year">2024</span>
                        <span class="year">2025</span>
                        <span class="year">2026</span>
                        <span class="year">2027</span>
                        <span class="year">2028</span>
                        <span class="year">2029</span>
                        <span class="year old">2030</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Booking Form End -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!--                    table      start                  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Image Id</th>
                    <th scope="col">Image Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($data2 as $value): ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $value->image_id ;?></td>
                        <td><?= $value->image_title ; ?></td>
                        <td><img src="<?= base_url($value->image_path); ?>" style="width: 200px;height:200px;"></td>
                        
                            
                        <td class="d-flex-column  align-items-center" >
                            <!-- <form method="POST" action="<?= base_url('AdminHome/edit_gimage')?>"> -->
                            <!-- <input type="hidden" name="id" value="<?= $value->image_id ;?>"> -->
                            <button class="btn btn-info mb-5"  data-toggle="modal" data-target="#exampleModalCenter1">Edit</button>
                            <!-- </form> -->
                            <form method="POST" action="<?= base_url('AdminHome/delete_gimage')?>">
                            <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                            <button class="btn btn-danger" onclick="myFunction(e)">Delete</button>
                            </form>
                        </td>
                    
                    </tr>
                    
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
function myFunction(e) {
    e.preventDefault();
    var result = confirm("Are you sure you want to delete?");
    if (result==true) {
   return true;
  } else {
   return false;
  }
  
}
</script>