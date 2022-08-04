			<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Tabel Pakaian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tabel Pakaian</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a class="btn waves-effect waves-light btn btn-info pull-right btn btn-outline-info"
						href="<?= base_url() ?>Pakaian/tambah"><i class="fa fa-plus"></i> Tambah Pakaian</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Tabel Pakaian</h2>
								<?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
										<tr>
											<td>No</td>
											<td>Nama Pakaian</td>
											<td>Stok</td>
											<td>Harga</td>
											<td>Size</td>
											<td>Detail</td>
											<td>Gambar</td>
											<td>Aksi</td>
										</tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1; ?>
										<?php foreach ($pakaian as $pa) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $pa['nama']; ?></td>
												<td><?= $pa['stok']; ?></td>
												<td><?= $pa['harga']; ?></td>
												<td><?= $pa['size']; ?></td>
												<td><?= $pa['detail']; ?></td>
												<td><img src="<?= base_url('assets/img/pakaian/') . $pa['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
												<td>
													<a href="<?= base_url('Pakaian/hapus/') . $pa['id']; ?>" class="btn waves-effect waves-light btn btn-outline-danger"><i class="fa fa-trash"></i> Hapus</a>
													<a href="<?= base_url('Pakaian/edit/') . $pa['id']; ?>" class="btn waves-effect waves-light btn btn-outline-warning"><i class="fa fa-pencil"></i> Edit</a>
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
