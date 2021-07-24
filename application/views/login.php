<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layouts/head'); ?>
</head>
<body class="bg-light">

    <div class="container pt-5"> 
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-white text-center">         
              <a href="<?= base_url('home') ?>">  
                <img src="<?=base_url('assets/logo.png')?>" class="mb-2" style="height: 100px;" alt="">
              </a>
              <h4>LOGIN</h4>
              <h6>SMPN 24 Banjarmasin</h6>
            </div>
            <div class="card-body">

            <?= alert(); ?>

              <form action="<?=base_url('login/ceklogin')?>" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <hr>
                <button class="btn btn-primary btn-block">Login</button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('layouts/foot'); ?>
</body>
</html>
