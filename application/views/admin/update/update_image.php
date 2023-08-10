
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url('AdminHome/index')?>" class="link">Home</a>
                                    </li>
                                    <li class="breadcrumb-item ">
                                        <a href="<?= base_url('AdminHome/gallery_master')?>" class="link">Gallary Master</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Page</li>
                                </ol>
                            </nav>
                        </div>
                        <h4 class="page-title">Update Page</h4>
                    </div>
                    <div class="col-5 align-self-center text-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><i data-feather="refresh-cw"></i></li>
                            <li class="list-inline-item"><i data-feather="settings"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <!-- <?php  
            echo "<pre>";
            print_r ($data);
            echo "</pre>";
             ?> -->
            <div class="container-fluid">


                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gallery Update Form</h4>
                                <h5 class="card-subtitle"> Update all type of images </h5>
                                <form class="form" method="POST" action="<?= base_url('AdminHome/update_image') ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $data->image_id; ?>">
                                    <input type="hidden" name="image_name" value="<?= $data->image_name; ?>">
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class=" col-form-label text-dark">Image title :</label><br><br>
                                        <input class="form-control border-secondary" type="text" name="image_title" value="<?= $data->image_title ?>" id="example-text-input" placeholder="Enter image title">
                                        <br><br>
                                        <label class="ml-3 text-dark">Upload image file</label>
                                        <input type="file" name="image_name"  class="form-control border-secondary "><br><br><br>
                                        <img src="<?= base_url($data->image_name); ?>" alt="" style="height: 200px; width:400px;">
                                        <br><br>
                                        <!-- <button type="submit" class="btn btn-dark">Cancel</button> -->
                                        
                                    </div>
                                    <button onclick="history.back()" type="button" class="btn btn-danger" data-dismiss="modal">Go Back</button>
                                    <button type="submit" class="btn btn-success ">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->