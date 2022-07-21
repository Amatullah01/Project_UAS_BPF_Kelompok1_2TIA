<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message');
            ?>
        </div>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $pa) : ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div><?= $pa['nama'] ?></div>
                                <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $pa['harga'] ?></div>
                                <div>Stok <a class="badge badge-info"><?= $pa['stok'] ?></a></div>
                            </div>
                            <div class="col-auto">
                                <img src="<?= base_url('assets/img/profil/') . $pa['gambar']; ?>" style="width:100px" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="align-items-center">
                            <a href="<?= base_url('Profil/keranjang/') . $pa['id'] ?>" class="badge badge-warning badge-block">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Tabel Pakaian</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tabel Pakaian</li>
                        </ol>
                    </div>
                </div>
                <?php $i = 1; ?>
                <?php foreach ($pakaian as $pa) : ?>
                <div class="row">
                    <div class="col-xl-4 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="col mr-2">
                                <div class="card-body">
                                    <div class="up-img" style="background-image:url(<?= base_url('assets/img/pakaian/') . $pa['gambar']; ?>)" style="width:100px"></div>
                                        <br><h5 class=" card-title"><?= $pa['nama']; ?></h5>
                                            <p class="mb-0 mt-3">Stok <span class="label label-info label-rounded"><?= $pa['stok']; ?></span></p>
                                            <p class="mb-0 mt-3">Rp. <?= $pa['harga']; ?></p>
                                            <p class="mb-0 mt-3"><?= $pa['detail']; ?></p>
                                        <div class="d-flex mt-3">
                                            <a class="link" href="javascript:void(0)">Read more</a>
                                            <div class="ms-auto align-self-center">
                                                <a href="javascript:void(0)" class="link me-2"><i class="fa fa-shopping-basket"></i></a>
                                                <a href="javascript:void(0)" class="link me-2"><i class="fa fa-share-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>