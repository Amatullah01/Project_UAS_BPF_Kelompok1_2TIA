<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Tabel Penjualan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tabel Penjualan</li>
                        </ol>
                    </div>
					<div class="col-md-7 align-self-center">
                        <a class="btn waves-effect waves-light btn btn-info pull-right btn btn-outline-primary"
						href="<?= base_url() ?>Penjualan/export"><i class="fa fa-file-pdf-o"></i> Laporan Penjualan</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Tabel Penjualan</h2>
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
										<?php foreach ($penjualan as $pu) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $pu['id']; ?></td>
												<td><?= $pu['total_bayar']; ?></td>
												<td><?= $pu['tanggal']; ?></td>
												<td><?= $pu['alamat']; ?></td>
												<td><?= $pu['pembayaran']; ?></td>
												<td><img src="<?= base_url('assets/img/checkout/') . $pu['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
												<td><?= $pu['keterangan']; ?></td>
												<td><?= $pu['status']; ?></td>
												<td>
													<a href="<?= base_url('Penjualan/edit/') . $pu['id']; ?>" class="mt-3 btn waves-effect waves-light btn btn-outline-success"><i class="fa fa-pencil"></i> Update</a><br>
													<a href="<?php echo base_url('Penjualan/detail_admin'); ?>?id=<?= $pu['id'] ?>" class="mt-3 btn waves-effect waves-light btn btn-outline-warning"><i class="fa fa-search"></i> Detail</a>
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
