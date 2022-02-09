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
<?php echo form_open("auth/login");?>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">
        <img src="<?php echo base_url('asset/logo/logo.png')?>" width="100" height="100"><br/>
        <h3>Login</h3>
        <div id="infoMessage"><?php echo $message;?></div>
      </div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input name="identity" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="Login">      
        </form>
        <div class="text-center">
            <br/>
          <a class="btn btn-primary btn-block fab fa-facebook-f" href="#" onclick="loginfb();"> Registration with Facebook </a>
          <a class="d-block small mt-3" href="<?php echo base_url('auth/register');?>">Registrasi Akun</a>
          <a class="d-block small" href="<?php echo base_url('auth/forgot_password');?>">Lupa Password?</a>
          <div id="fb-root"></div>
        </div>
      </div>
    </div>
  </div>

    <script type="text/javascript">

        function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
            console.log('statusChangeCallback');
            console.log(response);                   // The current login status of the person.
            if (response.status === 'connected') {   // Logged into your webpage and Facebook.
              testAPI();  
            } else {                                 // Not logged into your webpage or we are unable to tell.
              //document.getElementById('fb-root').innerHTML = 'Please log ' + 'into this webpage.';
            }
        }
    
    
      function checkLoginState() {               // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) {   // See the onlogin handler
          statusChangeCallback(response);
        });
      }
    
    function logoutfb(){
        FB.logout(function(response) {
            alert("Anda berhasil keluar dari aplikasi!");
        });
    }
    
    function loginfb(){
        FB.login(function(response) {
          if (response.status === 'connected') {
            //console.log(response);// Logged into your webpage and Facebook.
            //testAPI();
            //checkLoginState();
            getFbUserData();
          } else {
            console.log(response);// The person is not logged into your webpage or we are unable to tell. 
          }
        }, {scope: 'public_profile, email'});
    }
    
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '428404181510096',
          cookie     : true,                     // Enable cookies to allow the server to access the session.
          xfbml      : true,                     // Parse social plugins on this webpage.
          version    : 'v9.0'           // Use this Graph API version for this call.
        });
    
    
        FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
          statusChangeCallback(response);        // Returns the login status.
        });
      };
     
      function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          console.log(response);
          //document.getElementById('fb-root').innerHTML =
          //  'Thanks for logging in, ' + response.name + '!';
        });
      }
      
     function getFbUserData(){
        let callback = [];
        FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
        function (response) {
            //document.getElementById('fb-root').innerHTML = '<h2>Facebook Profile Details</h2><p><img src="'+response.picture.data.url+'"/></p><p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
            var xhr = new XMLHttpRequest();
            var url = "https://kebaikankita.com/Auth/loginfb";
            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onreadystatechange = function () {
                //console.log(response);
                /*if (xhr.readyState === 4 && xhr.status === 200) {
                    var json = JSON.parse(xhr.responseText);
                    //console.log(json.email + ", " + json.first_name + ", " + json.last_name);
                    console.log(json.pesan)
                    window.location = "https://kebaikankita.com/admin";
                }*/
                //console.log(json.pesan)
                    //var respon = JSON.parse(xhr.responseText);
                    /*if(respon.status == "sukses"){
                        alert("Login berhasil!");
                        window.location = "https://kebaikankita.com/admin";    
                    }*/
                let respon = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
                if (xhr.readyState === 4 && xhr.status === 200) {
                    if(respon.status == "sukses"){
                        alert("Login berhasil!");
                        window.location = "https://kebaikankita.com/admin";    
                    }
                }
            };
            var data = JSON.stringify({"email": response.email, "first_name": response.first_name, "last_name" : response.last_name});
            xhr.send(data);
            
        });
     }
     
        function sendData(callback=[]) {
            var xhr = new XMLHttpRequest();
            var url = "https://kebaikankita.com/Auth/loginfb";

            var data = JSON.stringify({
                email: callback[0],
                namadepan: callback[1],
                namabelakang: callback[2]
            });

            xhr.open("POST", url, true);
            xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhr.onload = function () {               
                console.log (this.responseText);
            };

            xhr.send(data);
            return false;
        }
    
    </script>

    <!-- Load the JS SDK asynchronously -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
  
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

</body>

</html>
