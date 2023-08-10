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
                            <li class="breadcrumb-item " aria-current="page">
                            <a href="<?= base_url('AdminHome/book_master')?>" class="link">Book Master</a></li>
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
    ?> -->
    <div class="container-fluid">
        <!-- File export -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center" >Tour Information</h2>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped display table-hover" id="file_export" >
                                
                                
                            
                                <thead>
                                    <tr>
                                        <th><h3>Data</h3></th>
                                        <th><h3>Description</h3></th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark" >
                                    <tr>
                                        <th>Booking Id</th>
                                        <td><?= $data->booking_id ;?></td>
                                    </tr>
                                    <tr> 
                                        <th>Name</th>
                                        <td><?= $data->fname ; ?> <?= $data->lname ; ?></td>
                                    </tr>
                                    <tr> 
                                        <th>Date Of Birth</th>
                                        <td><?= $data->dob ; ?> </td>
                                    </tr>
                                    <tr> 
                                        <th>Phone Number</th>
                                        <td><?= $data->phone ; ?> </td>
                                    </tr>
                                    <tr> 
                                        <th>Email Address</th>
                                        <td><?= $data->email ; ?> </td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Tour Name</th>
                                        <td><?= $data->tour_name ; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tour Price</th>
                                        <td><?= $data->tour_price ; ?></td>
                                    </tr>
                                    <tr>    
                                        <th>Booking Date</th>
                                        <td><?= $data->booking_date ; ?></td>   
                                    </tr>
                                    <tr>    
                                        <th>Address</th>
                                        <td><?= $data->address ; ?></td>   
                                    </tr>

                                    
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