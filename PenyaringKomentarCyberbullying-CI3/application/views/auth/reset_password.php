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

<body class="bg-dark">
<?php echo form_open('auth/reset_password/' . $code);?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">
        <img src="<?php echo base_url('asset/logo/logo.png')?>" width="100" height="100"><br/>
        <h3>Mereset Password</h3>
        <div id="infoMessage"><?php echo $message;?></div>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="new" value="" id="new" pattern="^.{8}.*$" class="form-control" placeholder="password baru..." required="required" autofocus="autofocus">
              <label for="inputEmail">Masukan password baru!</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="new_confirm" value="" id="new_confirm" pattern="^.{8}.*$" class="form-control" placeholder="Konfirmasi password..." required="required">
              <label for="inputPassword">Masukan konfirmasi password!</label>
            </div>
		  </div>
		  	<?php echo form_input($user_id);?>
			<?php echo form_hidden($csrf); ?>
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Simpan">      
		<?php echo form_close();?>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('auth/register');?>">Registrasi Akun</a>
          <a class="d-block small" href="<?php echo base_url('auth/forgot_password');?>">Lupa Password?</a>
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

