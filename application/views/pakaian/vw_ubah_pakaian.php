        <div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Form Ubah Pakaian</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Form Ubah Pakaian</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Ubah Pakaian</h4>
                  <h6 class="card-subtitle">Mengubah data dari pakaian</h6>
                  <form class="mt-4" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $pakaian['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $pakaian['nama']; ?>" class="form-control" id="nama" 
                            placeholder="Nama Pakaian">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" value="<?= $pakaian['stok']; ?>" class="form-control" id="stok" 
                            placeholder="Stok Pakaian">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= $pakaian['harga']; ?>" class="form-control" id="harga" 
                            placeholder="Harga Pakaian">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" value="<?= $pakaian['size']; ?>" class="form-control" id="size" 
                            placeholder="Size Pakaian">
                            <?= form_error('size', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <input type="text" name="detail" value="<?= $pakaian['detail']; ?>" class="form-control" id="detail" 
                            placeholder="Detail Pakaian">
                            <?= form_error('detail', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/pakaian/') . $pakaian['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url() ?>/Pakaian"></i> Cancel</a>
                        <button type="submit" name="tambah"  class="btn waves-effect waves-light btn btn-success btn btn-outline-success">Ubah Pakaian</button>
                    </form>
                </div>
            </div>
		</div>