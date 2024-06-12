			<div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Tabel User</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tabel User</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a class="btn waves-effect waves-light btn btn-info pull-right btn btn-outline-info"
						href="<?= base_url() ?>User/tambah"><i class="fa fa-plus"></i> Tambah Admin</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Tabel User</h2>
								<?= $this->session->flashdata('message'); ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
										<tr>
											<td>No</td>
                                            <td>ID</td>
											<td>Nama User</td>
											<td>Email</td>
											<td>Role</td>
											<td>Gambar</td>
											<td>Aksi</td>
										</tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1; ?>
										<?php foreach ($user1 as $u1) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $u1['id']; ?></td>
												<td><?= $u1['nama']; ?></td>
												<td><?= $u1['email']; ?></td>
												<td><?= $u1['role']; ?></td>
												<td><img src="<?= base_url('assets/img/profil/') . $u1['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
												<td>
													<a href="<?php echo base_url('User/detail'); ?>?id=<?= $u1['id'] ?>" class="btn waves-effect waves-light btn btn-outline-warning"><i class="fa fa-search"></i> Detail</a>
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
