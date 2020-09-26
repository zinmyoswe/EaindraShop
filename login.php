<?php
	session_start();
	include('confs/config.php');
  include('001header.php');
  include('004navbar.php');

?>
<!-- font -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="loginscript.js"></script>
<!--  ==================login form ======================== -->

<style type="text/css">
      .spring-btn-black{
            clear:both; background: #000; border: none; color: #fff; font-size: 1em; padding: 10px; cursor: pointer; font-size: 17px;
      }
      
    a:hover{
        color: #fff;
        font-weight: bold;
      }
      h1{
        font-weight: bold;
        margin-bottom: 2rem;
      }
      .container{
        color: #000;
      }
      ul li {
        list-style: none;
        margin: 0.5rem;
      }

      #spring_col1{
        color: #000;
      }
      #spring_col1 a{
        color: #000;
        text-decoration: underline;
      }

      #spring_col1 a:hover{
        color: #fff;
        background-color: #000;

      }
      
      html, body{
    height: 100%;
    font-family: 'Lato', sans-serif;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Abel', sans-serif;
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

  .error{
    color: red;
    padding: 0px;
    margin-top: 5px;
    font-size: 16px;
  }
  </style>


<br><br>
 <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <section id="spring_col1">
                <h1>LOG IN</h1>
                    
                <a href="">Forgot Your Password?</a>
                
                <!-- /login?error=true -->

           

          <form class="form-horizontal" method="post"  id="login-form">
            
            
            <div id="error">
        <!-- error will be shown here ! -->
        </div>


                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="user_email" class="form-control" >
                    <span id="check-e"></span>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password"  class="form-control">
                  </div>
                
                 <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" > 
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                  </div>
               

               
                  <button type="submit" name="btn-login" id="btn-login" class="spring-btn-black">LOG IN <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></button>
                
              </form>

               <span class="error-message"></span>
                
                <br><br>
                
                 Not account ?<a href="ajax-registration-script-with-php-mysql-and-jquery/index.php">Register Here!</a>
                
                <br><br>

                By clicking 'Log In' you agree to our website <a href="">Creators Club Terms & Conditions </a>,  <a href="">Spring Privacy Notice</a> and  <a href="">Terms & Conditions</a>.

               <!--  ----------- form end -------------- -->


               </section>
               <br>

                <div style="text-align:left">
                OR<br><br>

                

               

                <div class="btn btn-outline-dark">FACEBOOK <img src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="25" height="25"></div><br><br>

                <div class="btn btn-outline-dark">GOOGLE <img src="https://img.icons8.com/color/480/google-logo.png" width="25" height="25"></div>

                
          
          
            </div>
            </div>
            
            <div class="col-lg-6 col-sm-4 col-xs-12">
                
                <h1>JOIN THE CLUB. GET REWARDED.</h1>
                    Join the adidas Creators Club membership program:
                  <ul >
                      <li ><i class="fas fa-check"></i> Get immediate access to all Challenger level rewards</li>
                      <li><i class="fas fa-check"></i> Earn access to shop limited edition products</li>
                      <li ><i class="fas fa-check"></i> Level up for exclusive access to sport, yoga and music events</li>
                      <li ><i class="fas fa-check"></i> Receive our best special offers and promotions</li>
                     
                    </ul>  

                    Join now and start earning points to access new levels and rewards. It's time to unlock the best of adidas.
                    <br><br>
                <a href=""  class="spring-btn-black" />JOIN THE CLUB <span class="fa fa-arrow-right" style="margin-left: 9px;"></span></a>

                <br><br>

                <img src="https://www.adidas.com/glass/react/850e7b4/assets/img/CC2.0_my_account_register.jpg" width="450px" height="200px">
            
                
            </div>
        </div>
    </div>
        

        <!-- ------------------------------Login page end---------------------------------- -->
      
    <br><br>


           
     
       
            
    

  <br><br>     
<?php include('002footer.php'); ?>

</body>
</html>

  
 
