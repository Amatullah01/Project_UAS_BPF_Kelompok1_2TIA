        <div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Form Tambah Pakaian</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Form Tambah Pakaian</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tambah Pakaian</h4>
                  <h6 class="card-subtitle">Masukkan data baru dari pakaian</h6>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" id="nama" 
                            placeholder="Nama Pakaian">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" value="<?= set_value('stok'); ?>" class="form-control" id="stok" 
                            placeholder="Stok Pakaian">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control" id="harga" 
                            placeholder="Harga Pakaian">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" value="<?= set_value('size'); ?>" class="form-control" id="size" 
                            placeholder="Size Pakaian">
                            <?= form_error('size', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <input type="text" name="detail" value="<?= set_value('detail'); ?>" class="form-control" id="detail" 
                            placeholder="Detail Pakaian">
                            <?= form_error('detail', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url("/Pakaian") ?>">Cancel</a>
                        <button type="submit" name="tambah" class="btn waves-effect waves-light btn btn-success btn btn-outline-success">Tambah Pakaian</button>
                    </form>
                </div>
            </div>
		</div>
