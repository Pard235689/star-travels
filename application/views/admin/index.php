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
                                <a href="<?= base_url('AdminHome/index'); ?>" class="link">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>


            <!-- <div class="col-5 align-self-center text-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><i data-feather="refresh-cw"></i></li>
                            <li class="list-inline-item"><i data-feather="settings"></i></li>
                        </ul>
                    </div> -->


        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="card oh">
                    <div class="card-body">
                        <div class="d-flex">
                            <div>
                                <span class="text-dark font-medium op-7 d-block mb-2">Total Booking</span>
                                <h3 class="mb-0"><?php echo sizeof($data) ;?></h3>
                            </div>
                            <div class="ml-auto align-self-end mb-1">
                                <span class="text-success"><i class="fas fa-caret-up mr-1"></i> 2.41</span>
                            </div>
                        </div>
                    </div>
                    <div style="height: 300px;">
                        <canvas id="chart1" height="120"></canvas>
                    </div>
                </div>
            </div>
            

            <!-- ============================================================== -->
            <!-- Sales -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Product Sales & Blog -->
            <!-- ============================================================== -->

            <!-- column -->
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="card-title">Top 10 Booking</h4>
                                <h6 class="card-subtitle mb-0">Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis. </h6>
                            </div>
                            <div class="ml-auto">
                                <div class="dropdown title-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5" style="height: 150px;">
                            <canvas id="bar-chart" width="400" height="150"></canvas>
                        </div>
                        <div class="row mt-5 mb-3">
                            <div class="col-6 col-md-4">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <i class="text-primary" data-feather="target"></i>
                                    </div>
                                    <div class="ml-2">
                                        <h3 class="mb-0">5,67,056</h3>
                                        <span>Total Income</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <i class="text-primary" data-feather="trending-up"></i>
                                    </div>
                                    <div class="ml-2">
                                        <h3 class="mb-0">&#x20B9; 70000</h3>
                                        <span>Monthly Avg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 mt-3 mt-md-0">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <i class="text-primary" data-feather="shopping-bag"></i>
                                    </div>
                                    <div class="ml-2">
                                        <h3 class="mb-0">5489</h3>
                                        <span>Total Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
           
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <div class="container-fluid">
        <?php if ($error = $this->session->flashdata('msg')) :   ?>
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
                        <h3 class="card-title">Booking List Of Tour</h3>
                        <h4 class="card-subtitle">Booking List Of Tour</h4>
                        <div class="table-responsive mt-3">
                            <table id="file_export" class="table table-striped table-bordered display">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name</th>
                                        <th>Booking Id</th>
                                        <th>Tour Name</th>
                                        <th>Tour Price</th>
                                        <th>Booking Date</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data as $value) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $value->fname; ?> <?= $value->lname; ?></td>
                                            <td><?= $value->booking_id; ?></td>
                                            <td><?= $value->tour_name; ?></td>
                                            <td><?= $value->tour_price; ?></td>
                                            <td><?= $value->booking_date; ?></td>
                                            <td>
                                                <form method="POST" action="<?= base_url('AdminHome/view_single_booking') ?>">
                                                    <input type="hidden" name="id" value="<?= $value->booking_id; ?>">
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">View</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="POST" action="<?= base_url('AdminHome/delete_booking') ?>">
                                                    <input type="hidden" name="id" value="<?= $value->booking_id; ?>">
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>


                                    <?php $i++;
                                    endforeach; ?>
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