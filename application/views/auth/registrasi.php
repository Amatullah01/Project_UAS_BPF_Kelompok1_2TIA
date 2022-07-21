<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" style="background-image: url('<?php echo base_url() ?>assets/img/background2.jpg');"></div>
                <div class="card-body">
                    <center><h2 class="title">Sign Up</h2></center>
                    <form method="POST" action="<?= base_url('auth/registrasi'); ?>">
                        <div class="input-group">
                            <input class="input--style-3" value="<?= set_value('nama'); ?>" 
                            type="text" placeholder="Name" name="nama">
                            <?= form_error('nama', '<small  class="title" style="font-size: 15px;">', '</small>'); ?>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" value="<?= set_value('email'); ?>" 
                            type="text" placeholder="Email" name="email">
                            <?= form_error('email', '<small  class="title" style="font-size: 15px;">', '</small>'); ?>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" value="<?= set_value('password1'); ?>" 
                            type="password" placeholder="Password" name="password1">
                            <?= form_error('password1', '<small  class="title" style="font-size: 15px;">', '</small>'); ?>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" value="<?= set_value('password2'); ?>" 
                            type="password" placeholder="Repeat Password" name="password2">
                            <?= form_error('password2', '<small  class="title" style="font-size: 15px;">', '</small>'); ?>
                        </div>
                        <div class="p-t-10">
                            <center><button class="btn btn--pill btn--green" type="submit">Submit</button></center>
                        </div>
                    </form>
                    <div class="p-t-10">
                        <br>
                        <center><a class="small" href="<?= base_url('Auth')?>">Sudah Punya Akun? Sign In!</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>