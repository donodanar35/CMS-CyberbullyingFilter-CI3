<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Template by Bootstrap4, modified by Danar Dono (2019)">
  <meta name="title" content="" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="<?php echo base_url('asset/logo/logo.png');?>" rel="shortcut icon">
  <meta name="robots" content="noindex, nofollow" />
  <meta name="language" content="id" />
  <meta name="language" content="id" />
  <meta name="geo.country" content="id" />
  <meta http-equiv="content-language" content="In-Id" />
  <meta name="geo.placename" content="Indonesia" />
  <meta http-equiv="Cache-Control" content="no-store" />

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/admin/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/admin/css/sb-admin.css');?>" rel="stylesheet">

</head>
<body>
      <body class="bg-dark">
      <div class="container">
            <div class="card card-login mx-auto mt-5">
                  <div class="card-header text-center">
                        <img src="<?php echo base_url('asset/logo/logo.png')?>" width="100" height="100"><br/>
                        <h3>Lupa Password?</h3>
                        <div id="infoMessage"><?php echo $message;?></div>
                  </div>
                  <div class="card-body">
                  <div class="text-center mb-4">
                  <p>Silahkan masukan akun e-mail Anda!</p>
                  </div>
                  <?php echo form_open("auth/forgot_password");?>
                  <div class="form-group">
                        <div class="form-label-group">
                        <input type="email" name="identity" value="" id="identity" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                        <label for="inputEmail">Enter email address</label>
                        </div>
                  </div>
                  <input type="submit" name="submit" value="Reset" class="btn btn-primary btn-block" >
                  <?php echo form_close();?>
                  <div class="text-center">
                  <a class="d-block small mt-3" href="<?php echo base_url('auth/register');?>">Registrasi Akun</a>
                  <a class="d-block small" href="<?php echo base_url('auth/login');?>">Login</a>
                  </div>
                  </div>
            </div>
      </div>


      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url('asset/admin/vendor/jquery/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

</body>
</html>

