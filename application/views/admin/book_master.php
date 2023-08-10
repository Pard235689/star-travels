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
                                <a href="<?= base_url('AdminHome/index') ?>" class="link">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Book Master</li>
                        </ol>
                    </nav>
                </div>
                <h4 class="page-title">Book Master</h4>
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
            print_r($data);
            echo "</pre>";
            ?> -->

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