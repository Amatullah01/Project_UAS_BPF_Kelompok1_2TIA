<div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Form Ubah Profil</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Form Ubah Profil</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Ubah Profil</h4>
                  <h6 class="card-subtitle">Mengubah data dari Profil</h6>
                  <form class="mt-4" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $user['nama']; ?>" class="form-control" id="nama" 
                            placeholder="Nama profil">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control" id="email" 
                            placeholder="Email profil"  readonly>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url() ?>/profil"></i> Cancel</a>
                        <button type="submit" name="tambah"  class="btn waves-effect waves-light btn btn-success btn btn-outline-success">Ubah profil</button>
                    </form>
                </div>
            </div>
		</div>