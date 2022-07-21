    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" style="background-image: url('<?php echo base_url() ?>assets/img/background2.jpg');"></div>
                <div class="card-body">
                    <center><h2 class="title">Sign In</h2></center>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?= base_url('auth'); ?>">
                        <div class="input-group">
                            <input class="input--style-3" value="<?= set_value('email'); ?>" id='email' 
                            type="text" placeholder="Email" name="email" aria-describedby="emailHelp">
                            <?= form_error('email', '<small class="title" style="font-size: 15px;">', '</small>'); ?>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" value="<?= set_value('password'); ?>" id='password'
                            type="password" placeholder="Password" name="password">
                            <?= form_error('password', '<small class="title" style="font-size: 15px;">', '</small>'); ?>
                        </div>
                        <div class="p-t-10">
                            <center><button class="btn btn--pill btn--green" type="submit">Submit</button></center>
                        </div>
                    </form>
                    <div class="p-t-10">
                        <br>
                        <center><a href="<?= base_url('auth/registrasi')?>">Belum Punya Akun? Sign Up!</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>