
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
                                <li class="breadcrumb-item active" aria-current="page">Tour Master</li>
                            </ol>
                        </nav>
                    </div>
                    <h4 class="page-title">Tour Master</h4>
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
                    Upload Details Of Tour Master
                    </button>
                </div>
            
                <!-- Modal -->
                <div class="modal fade"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" >
                        <div class="modal-content" style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                            <form  method="post" action="<?= base_url('AdminHome/add_tour_image'); ?>" enctype="multipart/form-data">
                                <div class="modal-header">                   
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Upload Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body " >
                                    <div class="form-group mt-3 row">
                                        <label for="example-text-input" class="ml-4 text-dark">Destination Name : </label>
                                        <div class="col-12">
                                            <input class="form-control border-secondary" type="text" required name="tour_name" value="" placeholder="Enter Destination Name" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 row">
                                        <label for="example-text-input" class="ml-4 text-dark">Destination Long Description : </label>
                                        <div class="col-12">
                                            <!-- <input class="form-control" type="text" value="" placeholder="Enter Category" id="example-text-input"> -->
                                            <textarea class="form-control border-secondary" required type="text" rows="5" name="description" placeholder="Enter Long Description"></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 row">
                                        <label for="example-text-input" class="ml-4 text-dark">Destination Short Description : </label>
                                        <div class="col-12">
                                            <!-- <input class="form-control" type="text" value="" placeholder="Enter Category" id="example-text-input"> -->
                                            <textarea class="form-control border-secondary"  required type="text" rows="3" name="short_description" placeholder="Enter Short Description"></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 row">
                                        <label for="example-text-input" class="ml-4 text-dark">Destination Price : </label>
                                        <div class="col-12">
                                            <input class="form-control border-secondary" required type="number" value="" name="price" placeholder="Enter Destination Price" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group mt-2 mb-2 row">
                                        <label for="example-text-input" class="ml-4 text-dark">Destination Image : </label>
                                        <div class="col-12">
                                            <input class="form-control text-dark border-secondary" required type="file" name="image_path" value=""  id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="modal-footer ">
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

    <!-- upload end -->
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

     <!-- <?php  
            echo "<pre>";
            print_r ($data);
            echo "</pre>";
             ?> -->

    <div class="container-fluid mt-5" >
            
        <div class="row">
            <!-- <div class="col-sm-12 mb-5"> -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
                  Update Details Of Tour Master
                </button>
            </div> -->
            
            <!-- Modal -->
            <div class="modal fade"  id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content" style="border-radius:20px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <?php  
            echo "<pre>";
            print_r ($data1);
            echo "</pre>";
             ?>   
                        <form  method="post" action="<?= base_url('AdminHome/add_tour_image'); ?>" enctype="multipart/form-data">
                            <div class="modal-header">                   
                                <h5 class="modal-title" id="exampleModalCenterTitle">Update Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body " >
                                <div class="form-group mt-3 row">
                                    <label for="example-text-input" class="ml-4 text-dark">Destination Name : </label>
                                    <div class="col-12">
                                        <input class="form-control border-secondary" type="text" name="tour_name" value="" placeholder="Enter Destination Name" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group mt-2 row">
                                    <label for="example-text-input" class="ml-4 text-dark">Destination Long Description : </label>
                                    <div class="col-12">
                                        <!-- <input class="form-control" type="text" value="" placeholder="Enter Category" id="example-text-input"> -->
                                        <textarea class="form-control border-secondary"  type="text" rows="3" name="description" placeholder="Enter Long Description"></textarea> 
                                    </div>
                                </div>
                                <div class="form-group mt-2 row">
                                    <label for="example-text-input" class="ml-4 text-dark">Destination Short Description : </label>
                                    <div class="col-12">
                                        <!-- <input class="form-control" type="text" value="" placeholder="Enter Category" id="example-text-input"> -->
                                        <textarea class="form-control border-secondary"  type="text" rows="3" name="short_description" placeholder="Enter Short Description"></textarea> 
                                    </div>
                                </div>
                                <div class="form-group mt-2 row">
                                    <label for="example-text-input" class="ml-4 text-dark">Destination Price : </label>
                                    <div class="col-12">
                                        <input class="form-control border-secondary" type="number" value="" name="price" placeholder="Enter Destination Price" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group mt-2 mb-2 row">
                                    <label for="example-text-input" class="ml-4 text-dark">Destination Image : </label>
                                    <div class="col-12">
                                        <input class="form-control text-dark border-secondary" type="file" name="image_path" value=""  id="example-text-input">
                                    </div>
                                </div>
                                <div class="modal-footer ">
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
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!--                    table      start                  -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tour  Images Table</h4>
                    <h6 class="card-subtitle">All uploaded images with title</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered " >
                            <thead>
                                <tr>
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Image Id</th>
                                    <th scope="col">Destination Name</th>
                                    <th scope="col">Destination Long Description</th>
                                    <th scope="col">Destination Short Description</th>
                                    <th scope="col">Destination Price</th>
                                    <th scope="col">Destination Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($data as $value): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $value->image_id ;?></td>
                                        <td><?= $value->tour_name ; ?></td>
                                        <td><?= $value->description ; ?></td>
                                        <td><?= $value->short_description ; ?></td>
                                        <td><?= $value->price ; ?></td>
                                        <td><img src="<?= base_url($value->image_path); ?>" style="width: 200px; height:400px;"></td>
                                        
                                            
                                        <td class="d-flex-column  align-items-center" >
                                            <form method="POST" action="<?= base_url('AdminHome/edit_tour_image')?>">
                                            <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                            <input type="hidden" name="old_image" value="<?= $value->image_path ;?>">
                                            <button class="btn btn-info mb-5" data-toggle="modal1" data-target="#exampleModalCenter1">Edit</button>
                                            </form>
                                            <form method="POST" action="<?= base_url('AdminHome/delete_tour_image')?>">
                                            <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                            <input type="hidden" name="old_image" value="<?= $value->image_path ;?>">
                                            <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    
                                    </tr>
                                    
                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>