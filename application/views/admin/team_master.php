
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
                                    <li class="breadcrumb-item active" aria-current="page">Team Master</li>
                                </ol>
                            </nav>
                        </div>
                        <h4 class="page-title">Team Master</h4>
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
            <div class="container-fluid">


                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team Image Upload Form</h4>
                                <h5 class="card-subtitle"> Upload all type of images </h5>
                                <form class="form" method="POST" action="<?= base_url('AdminHome/add_team_image') ?>" enctype="multipart/form-data">
                                    <div class="form-group mt-5 row">
                                        <label for="example-text-input" class=" col-form-label text-dark">Name :</label><br><br>
                                        <input class="form-control border-secondary" required type="text" name="name" value="" id="example-text-input" placeholder="Enter Member Name">
                                        <br><br>
                                        <label for="example-text-input" class=" col-form-label text-dark">Designation :</label><br><br>
                                        <input class="form-control border-secondary" required type="text" name="designation" value="" id="example-text-input" placeholder="Enter Designation">
                                        
                                        
                                        <br><br>
                                        <label class=" col-form-label text-dark">Upload image file</label>
                                        <input type="file" required name="image_path" class="form-control border-secondary"><br><br><br>

                                        <button type="submit" class="btn btn-success ml-2">Upload</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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
                <!-- ============================================================== -->

                <!-- table Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team  Images Table</h4>
                                <h6 class="card-subtitle">All uploaded images with title</h6>
                                <div class="table-responsive mt-3" >

                                    <table class="table" >

                                        <thead>
                                            <tr >
                                                <th>Sr no.</th>
                                                <th>Image id</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i=1; foreach($data as $value): ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $value->image_id ;?></td>
                                                <td><?= $value->name; ?></td>
                                                <td><?= $value->designation; ?></td>
                                                <td><img src="<?= base_url($value->image_path); ?>" style="width: 200px;height:200px;"></td>
                                                

                                                <td>
                                                    <form method="POST" action="<?= base_url('AdminHome/edit_team_image')?>">
                                                    <input type="hidden" name="id" value="<?= $value->image_id ;?>">
                                                    <input type="hidden" name="old_image" value="<?= $value->image_path ;?>">
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                                                </form>

                                                </td>

                                                <td>
                                                    <form method="POST" action="<?= base_url('AdminHome/delete_team_image')?>">
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
                            


                
