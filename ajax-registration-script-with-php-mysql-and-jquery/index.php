<?php 

include_once("db_connect.php");
include('../001header.php');

?>
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/register.js"></script>
<!-- font -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!--  ==================login form ======================== -->

<!--  ==================login form ======================== -->
<style type="text/css">
  .card{
    padding: 20px;
    border-radius: 0;
  }
  a{
    color: black;
   
  }
  a:hover{
    color: black;
    text-decoration: underline;
  }

  .btn-outline-dark{
    border-radius: 0;
    width: 150px;
  }
  .btn-outline-dark:hover{
    background: white;
    color: black;
    cursor: pointer;
  }
  .btn-dark{
    border-radius: 0;
  }
  .spring-btn-black{
            clear:both; background: #000; border: none; color: #fff; font-size: 1em; padding: 10px; cursor: pointer; font-size: 17px;
      }
  .error{
    color: red;
    padding: 0px;
    margin-top: 5px;
    font-size: 16px;
  }
</style>

<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-12 col-xs-12 offset-4">
          <div class="card">
            <h2 style="text-align: center"> SPORT STORE</h2>
            <br>

            


	<form class="form-signin" method="post" id="register-form">
	
	    <div id="error">
        <!-- error will be shown here ! -->
        </div>

        <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name">
              </div>

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email">
              </div>

              <div class="form-group">
                 <input type="password" class="form-control" placeholder="Password" name="password" id="password">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword"> 
                   
              </div>
              
              <button type="submit" class="spring-btn-black " name="btn-save" id="btn-submit">REGISTER <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></button>
            </form>
           <br>

<div class="btn btn-outline-dark">FACEBOOK <img src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="25" height="25"></div><br>

                <div class="btn btn-outline-dark">GOOGLE <img src="https://img.icons8.com/color/480/google-logo.png" width="25" height="25"></div>
               <br>
            <p style="text-align: center; color: grey;">
                Already a member?
                <a href="../login.php" style="color: black; text-decoration: underline;">Sign in.</a>
            </p>

            <p>By clicking 'Submit' you agree to the <a href=""> Creators Club Terms & Conditions</a>, <a href=""> adidas Terms & Conditions </a>and the adidas Privacy Policy</p>
             </div>
        </div>
    </div>
</div>

<div style="height: 230px;"></div>


<br><br>     
<?php include('../002footer.php'); ?>

</body>
</html>
    