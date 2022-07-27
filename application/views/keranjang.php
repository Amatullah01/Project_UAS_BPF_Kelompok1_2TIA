
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h3 class="text-themecolor">Keranjang Anda</h3>
            
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active">Keranjang</li>
                
			</ol>       
		</div>
        <div class="row">
            <div class="col">
            <a class="btn btn-primary" href="<?php echo base_url('pemesanan/checkout');?>" style = "float:right" >Checkout</a>
            </div>
        </div>
	</div>
	<?php $i = 1; ?>

	<div class="row ">
    <?php foreach ($keranjang as $pa) : ?>
      
		<div class="col-xl-4 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="col mr-2">
					<div class="card-body">
						<div class="up-img"
							style="background-image:url(<?= base_url('assets/img/pakaian/') . $pa['gambar']; ?>)"
							style="width:100px"></div>
						<br>
						<h5 class=" card-title"><?= $pa['nama']; ?></h5>
					
					
						<p class="mb-0 mt-3">Rp. <?= $pa['harga']; ?></p>
						<p class="mb-0 mt-3"><?= $pa['detail']; ?></p>
						<div class="d-flex mt-3">
						
							<div class="ms-auto align-self-center">
								
								<a href="<?php echo base_url('pemesanan/hapus/').$pa['id']?>" ><i class="fa fa-trash"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

      
        <?php endforeach; ?>
	</div>

</div>
