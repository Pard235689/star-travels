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
                            <li class="breadcrumb-item active" aria-current="page">Contact Master</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">Contact Master</h4>
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
    <?php if( $error=$this->session->flashdata('msg')):   ?>
        <div class="alert alert-dismissible alert-danger text-danger" style="height:50px; padding: 14px 22px;">
            <button type="button" class="close" data-dismiss="alert" style="padding: 2px 15px; margin-top:12px">&times;</button>
            <?= $error;  ?>
        </div>     
    <?php endif; ?>
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Contact  List </h3>
                        <h4 class="card-subtitle">Contact  List </h4>
                        <div class="table-responsive mt-3">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Reference Id</th>
                                        <th>Name</th>
                                        <!-- <th>Last Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th> -->
                                        <th style="width: 200px;">Subject</th>
                                        <!-- <th style="width: 200px;">Your Message</th> -->
                                        <th>View</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach($data as $value): ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $value->reference_id ;?></td>
                                        <td><?= $value->fname ; ?> <?= $value->lname ; ?></td>
                                        <!-- <td><?= $value->email ; ?></td>
                                        <td><?= $value->phone ; ?></td> -->
                                        <td><?= $value->subject ; ?></td>
                                        <!-- <td><?= $value->your_msg ; ?></td> -->
                                        <td>
                                            <form method="POST" action="<?= base_url('AdminHome/view_single_contact_details')?>">
                                                <input type="hidden" name="id" value="<?= $value->reference_id  ;?>">
                                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">View</button>
                                            </form> 
                                        </td>
                                        <td>
                                            <form method="POST" action="<?= base_url('AdminHome/delete_contact_details')?>">
                                                <input type="hidden" name="id" value="<?= $value->reference_id  ;?>">
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
</div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->