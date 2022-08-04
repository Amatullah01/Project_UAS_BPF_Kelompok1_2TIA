<div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Form Tambah Admin</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Form Tambah Admin</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Admin</h4>
                  <h6 class="card-subtitle">Masukkan data baru dari Admin</h6>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" 
                            placeholder="Nama Admin">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control" id="email" 
                            placeholder="Email Admin">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" name="password1" value="<?= set_value('password1'); ?>" class="form-control" id="password1" 
                            placeholder="Password Admin">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password2">Repeat Password</label>
                            <input type="password" name="password2" value="<?= set_value('password2'); ?>" class="form-control" id="password2" 
                            placeholder="Repeat Password Admin">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url("/User") ?>">Cancel</a>
                        <button type="submit" name="tambah" class="btn waves-effect waves-light btn btn-success btn btn-outline-success">Tambah Admin</button>
                    </form>
                </div>
            </div>
		</div>
