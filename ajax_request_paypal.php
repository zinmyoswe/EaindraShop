
<?php 
	
	session_start();
        include('confs/config.php');
        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);


	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{ ?>
                
		 <h3>Pay with <a href="https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3fcmd%3d_account"><img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-paypal.svg" width="100" height="35"></a></h3>
	    				<div class="panel-body">
                        
                <style type="text/css">
                    h3 a img:hover{

        border: 1px solid #000;
        background-color: white;
        border-radius: 4px;
        padding: 4px;
        
             }
                </style>        
                    
                  


                        <br>

                       
                        

                      
                        </div> <!-- panel-body -->
                        <br><br>
                       
		
<?php	}

?>





