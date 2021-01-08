<?php
   session_start();
   error_reporting(0);
   include('confs/config.php');
   include('function/function.php');
   $s = $_GET['s'];
?>
<?php  include('001header.php'); ?>
<?php  include('004navbar.php'); ?>
<?php
   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row = mysqli_fetch_assoc($result);
   $product_id = $row['id'];
   $product_name = $row['product_name'];
   $categories = $row['categories'];
   $qty = $row['qty'];
   // print_r($_SESSION);

            //getting User
        $customer = $_SESSION['email'];

        $get_customer = "SELECT * FROM customer WHERE email ='$customer'";

        $run_customer = mysqli_query($mysqli,$get_customer);

        $row_customer = mysqli_fetch_assoc($run_customer);

        $customer_id = $row_customer['id'];
        $customer_name = $row_customer['name'];
        $customer_img = $row_customer['customer_img'];



        // echo "$customer_id";
        // echo "$customer_name";
        // echo "<img src='image/$customer_img'>";

                  //   // User rating
                  //   // $query = "SELECT * FROM rating WHERE product_id=".$id." and user_id=".$user_id;
                  //   // $userresult = mysqli_query($mysqli,$query) or die(mysqli_error());
                  //   // $fetchRating = mysqli_fetch_array($userresult);
                  //   // $rating = $fetchRating['rating'];

                  //   // // get average
                  //   // $query = "SELECT ROUND(AVG(rating),1) as averageRating FROM rating WHERE product_id=".$id;
                  //   // $avgresult = mysqli_query($mysqli,$query) or die(mysqli_error());
                  //   // $fetchAverage = mysqli_fetch_array($avgresult);
                  //   // $averageRating = $fetchAverage['averageRating'];

                  //   // if($averageRating <= 0){
                  //   //     $averageRating = "No rating yet.";
                  //   // }
                  // }

?>

<?php if($s == 's52810gy9'){ ?>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

             <script type="text/javascript">
            
            Swal.fire({
  icon: 'success',
  title: 'Success',

  text: 'SUCCESSFULLY ADDED TO BAG!',
  confirmButtonText: 'VIEW BAG',
  confirmButtonColor: 'black',
  
}).then(function() {
            window.location = "cart.php";
        });
              
          </script>
<?php }?>
    
    



<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel="stylesheet" type="text/css" href="css/detail.css">




<!-- <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nav.css"> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script type="text/javascript">

</script>


  <style>
 /*  .swal2-styled.swal2-confirm {
    border: 0;
    border-radius: .25em;
    background: #000;
    background-color: #000;
    color: #fff;
    font-size: 1.0625em;
}*/
/*.swal2-confirm:hover{
    background-color: #000000 !important;
    border-color: 4px solid black !important;
    color: white;
}
*/
  html,body{
  font-family: 'Lato', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Abel', sans-serif;
}


    .input-hidden {
  position: absolute;
  left: -9999px;
}

input[type=radio]:checked + label>img {
  border: 1px solid #FFC107;
  box-shadow: 0 0 2px 0px #FFC107;
}

/* Stuff after this is only to make things more pretty */
input[type=radio] + label>img {
  border: 1px solid whitesmoke;
  width: 80px;
  height: 80px;
  background-size: cover;
  border-radius: 50%;
/*  transition: 500ms all;*/
}



</style>

<script type="text/javascript">
      $("a").click(function() {
    $(this).next().prop("checked", "checked");
});

  $('a').click(function() {
        $('li:has(input:radio:checked)').addClass('active');
        $('li:has(input:radio:not(:checked))').removeClass('active');
    });
    </script>
<style class="cp-pen-styles">
</style>

<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Abel|Lato|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<style type="text/css">
  .product-details .product-images img {

    display: block;
    width: 500px;

}

/* 2019 Nov Update*/
#ava_one{
   
 
  font-weight: 600;
  color: #000;
}
#ava{
  font-family: 'Lato', sans-serif;
  font-family: 'Open Sans', sans-serif;
  font-family: 'Abel', sans-serif;
  color: #000;

}
.ava_title{
  font-size: 23px;
  font-weight: 700;
}
.ava_price{
  font-size: 19px;
  font-family: 'Abel', sans-serif;
}
.ava_color{
  
  font-size: 20px;
  font-weight: 600;
}
.map_a{
  margin-right: 0.5rem;
  font-weight: 600;
  margin-left: 0.5rem;
  color: #000;
}

/*main .section .section-content {
    width: 90%;
    max-width: 1054px;
    margin: 0 auto;
    position: relative;
}

.product-details .product-images {
    width: 50%;
}

.product-details .product-info {
    width: 45%;
    margin-left: 5%;
}*/

</style>



<?php
include('confs/config.php');

   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product LEFT JOIN categories 
                                   ON categories.cat_id = product.categories WHERE product.id=$id");
   $row2 = mysqli_fetch_assoc($result);
   $cat_id = $row2['cat_id'];
   $cat_name = $row2['cat_name'];
?>


<br><br><br>
<section id="ava">
<main>

  <div class="">
    
    <div class="section section-gray" style="margin-top: 0 !important; padding: 0 !important">
        <div class="section-content">
         
          <a href="product.php">Home</a> / <a href="product.php">Shop</a> /<a href=""><?php echo $cat_name ?></a>

          <br><br>
          
            <div class="product-details">
                <ul class="product-images">
                  
                    <li class="preview"><img src="admin/cover/<?php echo $row2['cover'] ?> " alt=""></li>
                    <li class="javascript:void(0)"><img src="admin/cover/<?php echo $row2['cover'] ?> " alt="" ></li>
                    <!-- Don't show small pictures if there's only 1 -->
                    <?php
                      $sql2 = "SELECT * FROM image_attributes
                              WHERE product_id = $id";
                      $run = mysqli_query($mysqli,$sql2);
                    while($row2 = mysqli_fetch_assoc($run)):
                    ?>
                    
                    <li>
                        <a href="javascript:void(0)"><img src="admin/uploads/<?php echo $row2['image'] ?> " alt="" ></a>
                    </li>
                    <?php endwhile; ?> 
                    
                </ul>
                <?php
include('confs/config.php');

   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row3 = mysqli_fetch_assoc($result);
?>              

                <ul class="product-info">
                   <!-- --------------------- star rating start -------------------------------- -->
                
                  <p style="font-size: 12px;">

                    <a href="">Read all 194 reviews</a></p>
                    <li><p class="ava_title"><?php echo $row3['product_name']?></p>
                  <p class="ava_price">$<?php echo $row3['price']?>
                  </p></li>

                  
                  <!-- available color start -->
                 
              <div class="row">  
                <div class="col-md-6 mb-3">
                  <p class="ava_color">AVAILABLE COLORS</p>
       <div class="form-group">

       <form method="post" action="detail_add.php" enctype="multipart/form-data">
       
       <input type="hidden" name="id" value="<?php echo $id?>">
            <?php 

              $sql = "select cp.*, p.cover, p.id
              from color_product cp 
              LEFT JOIN product p
              ON cp.color_id = p.id
              WHERE cp.product_id = '$id'
              ";
              $result =mysqli_query($mysqli,$sql);
              while($row = mysqli_fetch_assoc($result)):
                
            ?>

             <a href="detail2.php?id=<?php echo $row['id']; ?>"><img src="admin/cover/<?php echo $row['cover'] ?>" style="width: 60px; height: 70px;"></a> 
           <?php endwhile ?>
                          </div>
                            </div>
                          </div>  
                          <!-- Image check box start -->

              <br><br><br><br><br>
     <!-- size option start -->
      <div class="row">

          <?php 
            $result = "SELECT * FROM product_attribute where product_id = $id";
            $sql = mysqli_query($mysqli,$result);
            $row = mysqli_fetch_assoc($sql);             
          ?>

           <div class="col-md-6 mb-3">
         
         
                
                
              </div>

               
                          <br><br>

                          <div class="col-md-8">

                     
<!--      ----------------------------------- In stock & sold out ------------------------ -->
                          <?php if($qty == 0){
                            echo "<span class='badge badge-light'>SOLD OUT</span>";
                          }
                          else{
                            echo "<b>In Stock</b>";
                          }

                          ?>
<!--      ----------------------------------- In stock & sold out end------------------------ -->
                     <br><br>
 
                            

              

                           

         <?php
              $sql ="SELECT distinct a.*,p.color,p.product_id FROM product_attribute p
                     LEFT JOIN attribute a
                     ON p.size = a.attr_id
                     WHERE p.product_id = '$id'";

             $result = mysqli_query($mysqli,$sql);

             while($row = mysqli_fetch_assoc($result)){

        ?>
   

         <?php } ?>

          
          <?php 
      $s = "SELECT * FROM product WHERE id = '$id'";
      $r = mysqli_query($mysqli,$s);
      $row_r = mysqli_fetch_assoc($r);
        $product_id = $row_r['id'];
        $customer = $_SESSION['email'];

    
      $sql5 = "SELECT * FROM customer WHERE email = '$customer'";
      $run5 = mysqli_query($mysqli,$sql5);
      $row5 =mysqli_fetch_assoc($run5);
      $customer_id = $row5['id'];
      $customer_name = $row5['name'];
      
      
      $sql_fav = "SELECT * FROM add_to_favourite WHERE customer_id ='$customer_id' AND product_id = '$product_id'";
      $run_fav = mysqli_query($mysqli,$sql_fav);
      $row_fav = mysqli_fetch_assoc($run_fav);
        $fav = $row_fav['fav_id'];
       
        ?>
       
       
      
 
<!--      ----------------------------------- Add To cart Button------------------------ -->
      <?php if($qty > 0){ ?>
              <input type="submit" name="submit" value="ADD TO BAG" class="btn btn-dark btn-lg btn-block" /> 
              </form>
      <?php }else{ ?>
     
<!--      ----------------------------------- Add To cart Button end ------------------------ -->

<!--      ----------------------------------- SOLD OUT MODAL DIALOG ------------------------ -->
      <?php

   include('confs/config.php');
   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
   $row = mysqli_fetch_assoc($result);
   
   ?>
     <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['id']; ?>" id="getUser" class="btn btn-dark btn-lg btn-block">ADD TO BAG</button>
     <?php } ?>

       <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
             <div class="modal-dialog"> 
                  <div class="modal-content"> 
                  
                       <div class="modal-header"> 
                        <h4 class="modal-title">
                             
                            </h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            
                       </div> 
                       <div class="modal-body"> 
                       
                           <div id="modal-loader" style="display: none; text-align: center;">
                            <img src="ajax-loader.gif">
                           </div>
                            
                           <!-- content will be load here -->                          
                           <div id="dynamic-content">
                           
                           </div>
                             
                        </div> 
                        
                        
                 </div> 
              </div>
       </div><!-- /.modal --> 
<!--      ----------------------------------- SOLD OUT MODAL DIALOG End------------------------ -->

       


<script>
$(document).ready(function(){
  
  $(document).on('click', '#getUser', function(e){
    
    e.preventDefault();
    
    var uid = $(this).data('id');   // it will get id of clicked row
    
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    
    $.ajax({
      url: 'getemail.php',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);  
      $('#dynamic-content').html('');    
      $('#dynamic-content').html(data); // load response 
      $('#modal-loader').hide();      // hide ajax loader 
    })
    .fail(function(){
      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      $('#modal-loader').hide();
    });
    
  });
  
});

</script>

<!--      -----------------------------------Add To Whilist ------------------------ -->
       <br><br>

          <?php  if($fav == 0){ ?>
         
            <a href="add_fav.php?id=<?php echo $row_r['id']; ?>"  style="margin-bottom: 3px;" class="btn btn-outline-dark btn-lg btn-block">  ADD TO FAVOURITE</a>

        <?php }else{ ?>
            <a href="dashboard.php" class="btn btn-outline-dark btn-lg btn-block"> In whilist</a>
        
        <?php } ?>



         
     
      </div>

      <!--      -----------------------------------Add To Whilist  end------------------------ -->


          
    </div><!-- col8 -->
                    <li class="product-description">
                       
                    </li>
                </ul>
            </div>
        </div>
    </div>








   
</main>


<div class="container ">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
include('confs/config.php');

   $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product p WHERE p.id=$id");
   $row3 = mysqli_fetch_assoc($result);

?>
<style type="text/css">
  .deto{
    font-size: 18px;
  }
  .deto .btn{
    background-color: #fff;
  }
  .btn-link{
    color :black;
  }
  .btn-link:hover{
    color: black;
  }
  .card{
    border: 1px solid #fff;
  }

  .card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid #fff;
}
</style>
<!-- =========================product description start ============================== -->
        <div class="accordion deto" id="accordionExample" style="width: 600px;">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5>Product Description  <i class="fas fa-caret-down" style="margin-left: 20px"></i></h5>
        </button>


      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <?php echo $row3['description'] ?>
      </div>
    </div>
  </div>
  <!-- <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Product Detail  <i class="fas fa-caret-down"></i>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> -->
 
</div>
    <!-- =========================product description end ============================== -->
       
    </div><!--  col-md-6 end -->

  </div> <!-- row end -->
</div><!--  container end -->

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script >var Chef = {
    init: function() {
        this.productImagePreview();
        this.menuToggle();
        this.misc();
    },
    
    productImagePreview: function() {
        $(document).on('click', '.product-images li', function() {
            if (!$(this).hasClass('preview')) {
                var src = $(this).find('img').attr('src');
                $('.product-images .preview img').attr('src', src);
            }
        });
    },
    
    menuToggle: function() {
        $(document).on('click', '#menu .trigger', function() {
            // Toggle open and close icons
            $(this).find('img').each(function() {
                if ($(this).hasClass('hidden')) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });
            
            // Toggle menu links
            $(this).siblings('.links').stop(true, true).slideToggle(200);
            
            // Toggle open class
            $('#menu').toggleClass('open');
       });
    },
    
    misc: function() {
        // Misc stuff
        
        for (var i = 1; i <= 3; i++) {if (window.CP.shouldStopExecution(1)){break;}
            $('.product').parent().eq(0).clone().appendTo('.product-list');
        }
window.CP.exitedLoop(1);

    }
};

$(function() {
    Chef.init();
});
//# sourceURL=pen.js
</script>

    <div class="comment-form-container">
      <?php 
      $customer = $_SESSION['email'];
      if($customer == null){ ?>
      <div class="container">
          <div class="container">
          <div class="row">
            <div class="col-md-12">
        <form>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" class="form-control"/> 

                    <input class="input-field"
                    type="hidden" name="name" id="name" value="<?php echo $customer_name ?>" class="form-control"/>

                    <input class="input-field"
                    type="hidden" name="product_id" id="product_id" value="<?php echo $product_id ?>" class="form-control"/>
            </div>
            <div class="form-group mb-8">
                <input type="text" name="comment" placeholder="Write a message..." class="form-control">
            </div>

            
            <div class="form-group mb-8">
             

                <a href="checkout.php" class="btn btn-dark">Write a review <span class="fa fa-paper-plane fa-1x"></span></a>
            </div>

        </form>
        </div>
          
          </div>
        </div>

           
      <?php }else{ ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
        <form id="frm-comment" class="" method="post">
            <div class="form-group">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" class="form-control"/> 

                    <input class="input-field"
                    type="hidden" name="name" id="name" value="<?php echo $customer_name ?>" class="form-control"/>

                    <input class="input-field"
                    type="hidden" name="product_id" id="product_id" value="<?php echo $product_id ?>" class="form-control"/>
            </div>
            <div class="form-group mb-8">
                <input type="text" name="comment" placeholder="Write a message..." class="form-control">
            </div>

            
            <div class="form-group mb-8">
             

                <button class="btn btn-dark pull-right" type="submit" class="btn btn-primary pull-right" id="submitButton" >Write a review <span class="fa fa-paper-plane fa-1x"></span></button>
            </div>

        </form>
        </div>
            <div class="col-md-6"></div>
          </div>
        </div>
        <?php } ?>
    </div>
    <style type="text/css">
      .rat_box{
        background-color: lightgrey;
        padding: 20px;
        width: 150px;

      }
      .rat_box2{
        background-color: white;
        padding: 20px;
        width: 150px;
        margin-top: 12px;
      }
    </style>

    <br><br><br><br><br>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3 >RATINGS & REVIEWS</h3>
            <div class="row">
              <div class="col-sm-6">
            
            <div class="rat_box">
              <h2 style="font-size: 36px;">4.6</h2>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
               <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <p>150 Reviews</p>
            </div>
            </div>
            <div class="col-sm-6">
          
           
            <div class="rat_box2">
              <h2 style="font-size: 36px;">94%</h2>
              <p>of customers recommend this product</p>
       
         </div>
         </div>
         </div>
          </div> <!-- col-sm-4 end -->
          <div class="col-sm-4">
                 
          <?php
            include('confs/config.php');
             $list = "SELECT * FROM comment WHERE product_id = '$product_id' 
             ORDER BY comment_id desc";
             $run_l = mysqli_query($mysqli,$list);
             while($row_l = mysqli_fetch_assoc($run_l)):
              $date = $row_l['date'];
              $time = strtotime($date);
              $myFormatForView = date("F j, Y g:i A", $time);
          ?>
              <!-- Nested media object -->    
    <div class="media">
      <div class="media-left">
        <img src="image/default2.png" class="rounded-circle" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading"> <?php echo $row_l['sender_name'] ?>  <small><i> Posted on <span class="fas fa-clock"></span> <?php echo $myFormatForView ?></i></small></h4>
        <p><?php echo $row_l['comment'] ?></p>
      </div>
    </div>
    <a href="" style="margin-left: 43px; color: #007BFF;">Reply</a>
        <?php endwhile ?>
       
          <br><br>
         <a href="" style="text-align: center; color: #000;">Load More &raquo;</a>
          <hr>
          </div> <!-- col-sm-4 end -->
          <style type="text/css">
            .table td, .table th {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #fff;
    margin-bottom: 0px;
}
.progress-bar {
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #FFF;
    text-align: center;
    white-space: nowrap;
    background-color: #000;
    transition: width 0.6s ease 0s;
}
          </style>
          <div class="col-sm-4">
          
             <h3>RATING BREAKDOWN</h3>
             <table class="table">
              <tr>
                 <td>
                  5STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  4STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  3STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  2STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">4%</div>
          </div>
                </td> 
              </tr>
                  <tr>
                 <td>
                  1STARS
                </td>
                <td style="width: 300px">
                  <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
          </div>
                </td> 
              </tr>
               
             </table>
          
          </div> <!-- col-sm-4 end -->
        </div>
   
      </div>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                 $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response == 1)
                        {
                          location.reload();
                          $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                         listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
                 listComment();
            });

           

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
     


<!-- -------------------- similar product ---------------------------------- -->
<br><br>
<?php include('similar-product.php'); ?>
<br><br>
</section>


</div>
<?php include('002footer.php'); ?>

</body>
</html>



    
     





   









    


