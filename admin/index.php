<?php
  session_start();
  include('confs/config.php');
  

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EaindraShop | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script type="text/javascript" src="validation.min.js"></script>


  <script type="text/javascript" src=""></script>
  <style type="text/css">
    .error{
      color: red;
      font-size: 12px;
    }

    label {
      margin-top: 50px;
    }

 label .error{
      display: block;
    }
  </style>
</head>
<body class="hold-transition login-page">
 
<!-- <script type="text/javascript" src="jquery-3.3.1.min.js"></script> -->

  <!-- <script type="text/javascript" src="jquery-2.2.3.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>




<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Admin</b>EaindraShop</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post" id="login-form" action="ad-loginprocess.php">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="user_email" />


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">

            <button type="submit" class="btn btn-primary btn-block" name="btn-login" id="btn-login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script type="text/javascript">
  $('document').ready(function()
{ 
     /* validation */
   $("#login-form").validate({
      rules:
    {
      password: {
      required: true,
      minlength: 8
      },
      email: {
            required: true,
            email: true
            },
     },
       messages:
     {
            password:{
                      required: "please enter your password",
                      minlength: "Minimum 8 characters are required."
                     },
            email: "please enter your email address",
       },
     submitHandler: submitForm  
       });  
     /* validation */
     
     /* login submit */
     function submitForm()
     {    
      var data = $("#login-form").serialize();
        
      $.ajax({
        
      type : 'POST',
      url  : 'ad-loginprocess.php',
      data : data,
      beforeSend: function()
      { 
        $("#error").fadeOut();
        $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
      },
      success :  function(response)
         {            
          if(response=="ok"){
                  
            $("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
            setTimeout(' window.location.href = "home2.php"; ',4000);
          }
          else{
                  
            $("#error").fadeIn(1000, function(){            
        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
                      $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                  });
          }
        }
      });
        return false;
    }
     /* login submit */
});
</script>


<!-- Bootstrap 4 -->
<!-- <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="https://adminlte.io/themes/v3/plugins/jquery-validation/jquery.validate.min.js"></script> -->
<script type="text/javascript" src="ad-loginscript.js"></script>
<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>

</body>
</html>
