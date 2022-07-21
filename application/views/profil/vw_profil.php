
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profil</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <center><div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="img-circle"
                                        width="150" />
                                    <h4 class="card-title mt-2"><?= $user['nama']; ?></h4>
                                    <h6 class="card-subtitle"><?= $user['email']; ?></h6>
                                    <div class="row text-center justify-content-md-center">
                                    <a href="<?= base_url('Profil/edit/') . $user['id']; ?>" class="btn waves-effect waves-light btn btn-outline-warning"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div></center>
                    <!-- Column -->
                </div>