<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?=$judul;?></title>
  <link rel="icon" href="<?=base_url('assets/img/logo.png');?>">
  <link href="<?=base_url('assets/sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css');?>">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?=base_url('assets/sb/css/sb-admin-2.min.css');?>" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 my-5">
          <div class="card-body p-5">
            <div class="text-center">
              <p class="mb-2 text-danger"><?php echo $this->session->userdata('failedLogin');?></p>
            </div>
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Perpustakaan BPTP</h1>
                    <p class="mb-4">Login untuk mengelolah halaman Administrator</p>
                  </div>
                  <form class="user" action="<?php echo site_url('login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" name="username" aria-describedby="usernameHelp" placeholder="Enter Username..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" aria-describedby="passwordlHelp" placeholder="Enter Password..." required>
                    </div>
                    <input type="submit" class="btn btn-success btn-user btn-block" value="Login" />
                  </form>
                  <hr>    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="container">
  </div>
	<div class="copyright text-center my-auto">
        <span>Copyright &copy; <a href="http://jatim.litbang.pertanian.go.id" target="_blank">BPTP Jawa Timur</a> 2020</span>
    </div>
  </div>
  <script src="<?=base_url('assets/sb/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('assets/sb/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('assets/sb/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
  <script src="<?=base_url('assets/sb/js/sb-admin-2.min.js');?>"></script>
</body>
</html>
