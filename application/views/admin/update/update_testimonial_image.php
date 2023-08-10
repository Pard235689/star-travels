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
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url('AdminHome/testimonial_master')?>" class="link">Testimonial Master</a>
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
                            <div class="card-body ">
                                <h4 class="card-title">Testimonial Image Update Form</h4>
                                <h5 class="card-subtitle"> Upload all type of images </h5>
                                <form class="form" method="POST" action="<?= base_url('AdminHome/update_testimonial_image') ?>" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $data->image_id; ?>">
                                    <input type="hidden" name="image_path" value="<?= $data->image_path; ?>"> 
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class=" col-form-label text-dark">Name :</label><br><br>
                                        <input class="form-control border-secondary" type="text" name="name" value="<?= $data->name; ?>" id="example-text-input" placeholder="Enter Member Name">
                                        <br>
                                        <!-- <label for="example-text-input" class=" col-form-label">Description :</label><br><br>
                                        <textarea class="form-control" type="text" name="description" value="" id="example-text-input" placeholder="Enter Designation">
                                        </textarea>  -->
                                        <br>
                                        <label class=" col-form-label text-dark">Description :</label>
                                        <textarea class="form-control border-secondary" rows="3" name="description"><?= $data->description; ?></textarea>
                                        <br><br>
                                        <label class=" col-form-label text-dark">Upload image file</label>
                                        <input type="file" name="image_path" class="form-control border-secondary"><br><br><br>
                                        <img src="<?= base_url($data->image_path); ?>" style="height: 300px; width:300px;" alt="">  
                                    </div>
                                    <button onclick="history.back()" type="button" class="btn btn-danger" data-dismiss="modal">Go Back</button>
                                    <button type="submit" class="btn btn-success ml-2">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->