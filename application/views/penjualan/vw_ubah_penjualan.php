<div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Form Ubah Penjualan</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Form Ubah Penjualan</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Ubah Penjualan</h4>
                  <h6 class="card-subtitle">Mengubah data dari Penjualan</h6>
                  <form class="mt-4" method="POST" enctype="multipart/form-data">
                  <?php foreach ($editpenjualan as $penjualan){?>
                    <input type="hidden" name="id" value="<?= $penjualan['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Total Bayar</label>
                            <input type="text" name="total_bayar" value="<?= $penjualan['total_bayar']; ?>" class="form-control" id="total_bayar" 
                            placeholder="Total Bayar" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" value="<?= $penjualan['tanggal']; ?>" class="form-control" id="tanggal" 
                            placeholder="Tanggal" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" value="<?= $penjualan['alamat']; ?>" class="form-control" id="alamat" 
                            placeholder="Alamat" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">pembayaran</label>
                            <input type="text" name="pembayaran" value="<?= $penjualan['pembayaran']; ?>" class="form-control" id="pembayaran" 
                            placeholder="Jenis Pembayaran" readonly>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/checkout/') . $penjualan['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= $penjualan['keterangan']; ?>" class="form-control" id="keterangan" 
                            placeholder="Keterangan" readonly>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="Pengemasan">Pengemasan</option>
                                <option value="Proses Pengiriman">Proses Pengiriman</option>
                                <option value="Dikirm">Dikirim</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url() ?>/Penjualan"></i> Cancel</a>
                        <button type="submit" name="tambah"  class="btn waves-effect waves-light btn btn-success btn btn-outline-success">Ubah Status Penjualan</button>
                    <?php } ?>
                    </form>
                </div>
            </div>
		</div>