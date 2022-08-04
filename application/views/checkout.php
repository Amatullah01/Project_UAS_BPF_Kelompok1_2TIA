<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="mt-3">Checkout</h1>
			<table class="table">
				<tr>
					<th>Nama</th>
					<th>Harga</th>
					<th>Gambar</th>
				</tr>
				<?php 
                $harga = null;
                foreach($keranjang as $a): ?>
				<tr>
					<td><?php echo $a['nama'] ?></td>
					<td><?php echo $a['harga'] ?></td>
					<td>
						<img src=" <?= base_url('assets/img/pakaian/') . $a['gambar']; ?>" width="50px" />
					</td>
				</tr>
				<?php  $harga += $a['harga'] ?>
				<?php endforeach; ?>

			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-8">
			<form action="<?php echo base_url('pemesanan/konfirmasi')?>" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					<label class="form-label">Total Bayar</label>
					<input name="bayar" type="text" class="form-control" value="<?php echo $harga ?>" readonly>
					<label class="form-label mt-3">Tanggal</label>
					<input name="tanggal" type="date" class="form-control">
					<label class="form-label mt-3">Alamat</label>
					<textarea class="form-control" id="floatingTextarea" name="alamat"></textarea>
					<label class="form-label mt-3">Pembayaran</label>
					<select class="form-select" aria-label="Default select example" name="pembayaran">
						<option value="BNI - 2545235784">BNI - 2545235784</option>
						<option value="BCA - 5423342282">BCA - 5423342282</option>
						<option value="BRI - 4422301250">BRI - 4422301250</option>
                        <option value="BANK RIAU - 102124512">BANK RIAU - 102124512</option>
                        <option value="BSI - 4221035686">BSI - 4221035686</option>
                        <option value="BTN - 1024852355">BTN - 1024852355</option>
					</select>
                    <br>
                    <label for="gambar">Bukti Pembayaran</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                    </div>
					<label class="form-label mt-3">Keterangan</label>
					<textarea class="form-control" id="floatingTextarea" name="keterangan"></textarea>
                    <button class="mt-3 btn btn-warning">Checkout Now</button>
				</div>
			</form>
            <a class="btn waves-effect waves-light btn btn-secondary btn btn-outline-secondary" href="<?= base_url("/Pemesanan") ?>">Cancel</a>
		</div>
	</div>
</div>
