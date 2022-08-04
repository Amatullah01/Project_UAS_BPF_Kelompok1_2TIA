
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Detail Pembelian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Detail Pembelian</li>
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
                    <div class="col-xl-12 col-md-12 mb-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= base_url('assets/img/checkout/') . $penjualan['gambar']; ?>" style="width:400px" class="img-thumbnail">
                                        </div>
                                        <div class="col mr-2">
                                            <div class="card-body">
                                                <form action="" method="POST">
                                                    <div class="form-group">
                                                        <label for="no_penjualan">No Penjualan</label>
                                                        <input name="no_penjualan" type="text" value="<?= $penjualan['id'];?>" readonly class="form-control" id="no_penjualan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pelanggan">Pelanggan</label>
                                                        <?php foreach ($detail as $us) : ?>
                                                        <input name="pelanggan" value="<?= $us['nama']; ?>" type="text" readonly class="form-control" id="pelanggan">
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <input name="alamat" value="<?= $penjualan['alamat']; ?>" type="text" readonly class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total_bayar">Total Pembayaran</label>
                                                        <input name="total_bayar" value="<?= $penjualan['total_bayar']; ?>" type="text" readonly class="form-control" id="harga">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total_bayar">Jenis Pembayaran</label>
                                                        <input name="total_bayar" value="<?= $penjualan['pembayaran']; ?>" type="text" readonly class="form-control" id="harga">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total_bayar">Keterangan</label>
                                                        <input name="total_bayar" value="<?= $penjualan['keterangan']; ?>" type="text" readonly class="form-control" id="harga">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <input name="total_bayar" value="<?= $penjualan['status']; ?>" type="text" readonly class="form-control" id="harga">
                                                    </div>
                                                    <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url() ?>/Penjualan"></i> Cancel</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Column -->
                </div>
                <div class="row ">
                    <div class="col-md-12 col-md-12 mb-6">
                        <div class="card-body">
                            <div class="card">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>No</td>
                                            <td>ID Pesanan</td>
                                            <td>Nama Customer</td>
                                            <td>Nama Pakaian</td>
                                            <td>Jumlah</td>
                                            <td>Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($detail as $us) : ?>
                                            <tr>
                                                <td> <?= $i; ?>.</td>
                                                <td><?= $us['id']; ?></td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['pakaian']; ?> </td>
                                                <td><?= $us['jumlah']; ?></td>
                                                <td><?= $us['total']; ?></td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>