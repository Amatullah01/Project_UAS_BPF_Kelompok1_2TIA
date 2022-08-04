<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">History Pembelian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">History Pembelian</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">History Pembelian</h2>
								<?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
										<tr>
                                            <td>No</td>
											<td>Id Pesanan</td>
											<td>Total Bayar</td>
											<td>Tanggal</td>
											<td>Alamat</td>
											<td>Pembayaran</td>
											<td>Gambar</td>
											<td>Keterangan</td>
											<td>Status</td>
											<td>Aksi</td>
										</tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1; ?>
										<?php foreach ($pembelian as $pe) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $pe['id']; ?></td>
												<td><?= $pe['total_bayar']; ?></td>
												<td><?= $pe['tanggal']; ?></td>
												<td><?= $pe['alamat']; ?></td>
												<td><?= $pe['pembayaran']; ?></td>
												<td><img src="<?= base_url('assets/img/checkout/') . $pe['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
												<td><?= $pe['keterangan']; ?></td>
												<td><?= $pe['status']; ?></td>
												<td>
													<a href="<?php echo base_url('Penjualan/detail'); ?>?id=<?= $pe['id'] ?>" class="btn waves-effect waves-light btn btn-outline-warning"><i class="fa fa-search"></i> Detail</a>
												</td>
											</tr>
										<?php $i++; ?>
										<?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
