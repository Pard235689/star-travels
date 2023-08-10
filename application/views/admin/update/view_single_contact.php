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
                                <a href="<?= base_url('AdminHome/contact_master')?>" class="link">Contact Master</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">View</h4>
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
    ?>
    exit; -->
    <div class="container-fluid">
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-5" >Detailed View</h2>
                        <div class="table-responsive mt-3">
                            <table  class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>Reference Id</th>
                                        <td><?= $data->reference_id ;?></td>    
                                    </tr>
                                    <tr>
                                        <th>Full Name</th>
                                        <td><?= $data->fname ; ?> <?= $data->lname ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email Address</th>
                                        <td><?= $data->email ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td><?= $data->phone ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td><?= $data->subject ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Your Message</th>
                                        <td><?= $data->your_msg ; ?></td>
                                    </tr>
                                </thead>
                                
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