<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  include('function/function.php');
  include('001header.php');
  include('004navbar.php');

  $s = $_GET['s'];
?>



<!-- ----------------------sport-bar start--------------------- -->

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .carousel-item-next, .carousel-item-prev, .carousel-item.active {
    display: block;
}
.carousel-item {
    height: 32rem;
}
.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    height: 600px;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: -webkit-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out;
}
/*addias*/
.color-theme-white___3NDJn h2, .color-theme-white___3NDJn p {
    color: #fff;
}
.title___DZ13z {
    margin-bottom: 15px;
    font-size: 16px;
}
.gl-heading--s, h5 {
    font-size: 18px;
    line-height: 16px;
}
.gl-heading, h1, h2, h3, h4, h5, h6 {
    letter-
    spacing: 1.5px;
}
h2{
    font-style: normal;
    font-weight: 600;
    font-family: 'Abel', sans-serif;
}
h2 a{
    color: #fff;
}
h2 a:hover{
    color: #fff;
}
/*online shop*/
.add2_text{
    color: #000;
}
.img_feature{
    margin-right: 100px;
    margin-bottom: 10px;
}
.feature_cat{
    font-size: 24px;
}
h5{
    font-weight: bold;
    font-size: 20px;
    text-transform: uppercase;
}
.home_con{
    height: 170px;
    background-color: #ede734;
    color: #000;
}
h4{
    font-weight: bold;
    font-size: 22px;
    text-transform: uppercase;
    font-family: 'adiBlack',Arial,Helvetica,Verdana,sans-serif;
}

.caro3_3{
  margin-right: 70px;
  margin-left: 30px;
}
.caro3{
  margin: 10px;

}
.caro3_img{
  width: 470px;

}

/*Index Slide Responsive*/

@media (min-width: 992px){
  .wrap-side-menu {
    display: none;
  }
}

@media (max-width: 1024px) {
  .carousel-item .xl-text2 {
    font-size: 60px;
  }

   /*sport_store_add_1 section*/
  #sport_store_add_1 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 6px;
  }

    /*sport_store_add_2 section*/
  #sport_store_add_2 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 6px;
  }

   .caro3_3{
  margin-right: 0 !important;
  margin-left: 0 !important;
  }
.caro3{
  margin: 0 !important;


}
.caro3_img{
  height: 504px;
  width: 350px;
  padding: 4px;
}
}

@media (max-width: 768px) {
 
   .toy img{
    width: 100%;
    height: 100%;
  }

 
  /*.carousel-item img {
    height: 470px;
    width: 100%;
  }*/


}

@media (max-width: 576px) {

  .toy img{
    width: 100%;
    height: 100%;
  }

  .carousel-item  {
    font-size: 40px;
  }

  .carousel-item  {
    font-size: 16px;
  }

  .carousel-inner{
    height: 400px;
  }

  .carousel-item img {
    height: 370px;

  }

   .carousel-item h1 {
    font-size: 25px;
  }
  .carousel-item p {
    font-size: 12px !important;
  }

  .carousel-item p a{
    font-size: 12px !important;
    
  }
  .carousel-caption{
   margin-bottom: 130px !important;
  }

  /*sport_store_add_1 section*/
  #sport_store_add_1 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 12px;
  }

    /*sport_store_add_2 section*/
  #sport_store_add_2 img{
    width: 100%;
    height: 504px;
    margin-left: 0 !important;
    padding: 12px;
  }

  .caro3_3{
  margin-right: 0 !important;
  margin-left: 0 !important;
  }
.caro3{
  margin: 0 !important;


}
.caro3_img{
  width: 100%;
  height: 504px;
  padding: 4px;
}

/*feature_categories_add*/
#feature_categories_add{
   padding: 4px;
}

#feature_categories_add img{
    display: block;
    width: 100%;
    
}

.img_feature h2{
    padding: 20px;
}
  
  
  /*footer*/
  .foot_con{
    display: none;
  }


}
    </style>

    <?php if($s == '4sfi2pak20'){?>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

             <script type="text/javascript">
            
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'info',
  title: 'Logout successfully'
}).then(function() {
            window.location = "index.php";
        });
 </script>
<?php }elseif($s == 'gxio29ak'){ ?>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script type="text/javascript">
            
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'info',
  title: 'Login successfully'
}).then(function() {
            window.location = "index.php";
        });
 </script>
<?php }else{ ?>

<?php } ?>
    <!-- Custom styles for this template -->
   <main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
    </ol>
    <div class="carousel-inner">
       
      <div class="carousel-item active">

        <div class="toy" style="background-color: whitesmoke;">
        <img src="https://ae01.alicdn.com/kf/H078158aba57d4ed2afff01d6868841d88/Brown-Bear-and-Cony-rabbit-Plush-toys-Wearing-Sweatshirt-Stuffed-toy-cute-animals-School-bag-pendant.jpg" alt="" width="50%" height="100%" fill="#777">

        </div>


        <div class="container">
          <div class="carousel-caption text-left">
            <h1 style="color: #fff; font-weight: 600;">For Your Loved One,<br>Give Love & Gifts</h1>
                
            <p style="color: #fff;">Light up the night in new Nite Jogger colorways. Photo by Cole Younger.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="margin-bottom: 120px">CONTACT US NOW <i class="fa fa-arrow-right"></i></a></p>
        
          </div>
        </div>
      </div>

      <div class="carousel-item">

        <img src="https://surprisesgiftshop.com/files/2020/03/bride.jpg?&a=t" alt="" width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 style="color: #fff; font-weight: 600;" >Show Your Loved Ones How Much You Care</h1>
            <p style="color: #fff;">Shop for a special occasion at Surprises Gift Shop.<br></p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="margin-bottom: 160px">SHOPPING NOW<i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
      </div>


      <div class="carousel-item">
      
        <img src="image/eain_caro.png" alt="" width="100%" height="100%" fill="#777">
      

      <div class="carousel-caption text-left">
            <h1>HEY WORLD!</h1>
            <p>Earth Day is Every Day, the new collection that respects and celebrates our planet.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="margin-bottom: 160px">SHOP COLLECTION <i class="fa fa-arrow-right"></i></a></p>
          </div>
      </div>

 <!--      <div class="carousel-item">
        <img src="https://content.nike.com/content/dam/one-nike/en_lu/SU19/Mens/W_20190516_EMEA_NSW_MLP_P3A_SHOX/W_20190516_EMEA_NSW_MLP_P3A_SHOX_DT_1600x600_visual.jpg.transform/full-screen/W_20190516_EMEA_NSW_MLP_P3A_SHOX_DT_1600x600_visual.jpg" alt="" width="100%" height="100%" fill="#777">

        <div class="container">
          <div class="carousel-caption text-left">
            <h1>KICK UP A STORM IN SHOX</h1>
            <p>The subversive Nike Shox R4 is making<br>
waves in clean monochrome colourways.</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="margin-bottom: 130px">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
      </div> -->

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<br><br>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
 <!--  {{-- ======================= start of addias ==================== --}} -->
 <section id="sport_store_add_1">
<div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
            <img src="https://media.gettingpersonal.co.uk/387688/images/products/12/45512/rwf/multi-photo-upload-framed-print---photos-with-message_a.jpg?width=700" width="700px" height="500px" style="margin-left: 50px">

              <div class="container">
          <div class="carousel-caption">
            <h2>GIVE GIFTS FOR SOMEONE IMPORTANT</h2>
            <p>Multi Photo Upload Framed Print</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>

        </div>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
            <img src="https://ae01.alicdn.com/kf/H1eb9dd9eb15a47c8a65ba6e984c1471f1/Brown-bear-bunny-rabbit-plush-toy-kawaii-bear-bunny-plush-doll-cute-soft-animal-toy-gift.jpg_Q90.jpg_.webp" width="700px" height="500px">

              <div class="container">
          <div class="carousel-caption"">
            <h2>lovely Teddy bear plush toy anime panda</h2>
  <p>Cute Birthday Age Range Gift Surprise Gift for Girls Filling</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
        </div>
    </div>
    </section>
    <br><br>
   <!--  {{-- ======================= end of addias ==================== --}} -->
   <!--  {{-- ======================= start of FEATURED CATEGORIES ==================== --}} -->
   <section id="feature_categories_add">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="feature_cat">FEATURED CATEGORIES</h2><br>
                <div class="row">
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://typo.com/dw/image/v2/BBDS_PRD/on/demandware.static/-/Sites-catalog-master-typo/default/dwd0014fe2/1683683/1683683-31-2.jpg?sw=566&sh=849&sm=fit" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">CUP&Drinking</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://www.loveourshopsuk.com/wp-content/uploads/2018/12/Joanne-Hawker-courage-pin.jpg" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">ACCESSORIES</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://ae01.alicdn.com/kf/He9d8b7bd80274e4bb4898335c504bd25o.jpg_640x640Q90.jpg_.webp" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">TOYS</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://i.pinimg.com/originals/b1/e3/13/b1e313eaa2a6a18c8a065bf5e56b8921.jpg" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">FLOWERS</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://typo.com/on/demandware.static/-/Sites/default/dw7a2478b9/typo/FY21/Week%2013/Cat%20Tiles/03_BP_CAT-TILES_STATIONERY.jpg" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">STATIONERY</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://typo.com/dw/image/v2/BBDS_PRD/on/demandware.static/-/Sites-catalog-master-typo/default/dweeced7ca/1683623/1683623-03-2.jpg?sw=566&sh=849&sm=fit" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">TECH</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://typo.com/dw/image/v2/BBDS_PRD/on/demandware.static/-/Sites-catalog-master-typo/default/dw713c2c16/1683715/1683715-10-2.jpg?sw=566&sh=849&sm=fit" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">GIFTS</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://typo.com/dw/image/v2/BBDS_PRD/on/demandware.static/-/Sites-catalog-master-typo/default/dwc9cee56c/1683702/1683702-02-2.jpg?sw=566&sh=849&sm=fit" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">BAGS</a></h2>

                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>
    <br>
   <!--  {{-- ======================= end of FEATURED CATEGORIES ==================== --}} -->
    <!-- {{-- ======================= start of addias 2 ==================== --}} -->

    <section id="sport_store_add_2">
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
            <img src="https://ae01.alicdn.com/kf/H01d1dbd61f9f46268cf66d81519defb8h/15cm-Brown-Bear-Cony-Rabbit-plush-Keychain-Toys-Sweater-bear-Gift-Doll-Bag-Pendant-stuffed-cute.jpg_Q90.jpg_.webp" width="700px" height="500px" style="margin-left: 50px">
              <div class="container">
          <div class="carousel-caption">
            <h2>BROWN BEAR CONY RABBIT</h2>
            <p>Three support levels, for any activity in and around the water.</p>
            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12">
            <img src="https://media.gettingpersonal.co.uk/348439/images/products/04/50104/rwf/personalised-large-white-wooden-keepsake-box---bunny-_a.jpg?width=700" width="700px" height="500px">
              <div class="container">
          <div class="carousel-caption"">
            <h2 style="color: black">PERSONALIZED GIFT BOX</h2>
            <p style="color: black">Get inspired to bootcamp equipment-free in high support tights.</p>

            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">PREVIEW NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
        </div>
    </div>
    </section>

    <br><br>
    <!-- {{-- ======================= end of addias 2 ==================== --}} -->

    <!-- {{-- ======================= start of caro ==================== --}} -->
   <!--  <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/ptBR/Images/HEADER2-GLP_Nemeziz_Desktop_Masthead-Small_tcm194-347942.jpg" alt="" width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-left" style="margin-bottom: 140px;">
            <h1>UNLOCK AGILITY</h1>
            <p>New Nemeziz 19 is exclusively available through adidas and selected retailers.</p>
            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">EXCLUSIVELY HERE <i class="fa fa-arrow-right"></i></a></p>
             <p><a class="btn btn-lg btn-dark" href="product.php" role="button">EXPLORE <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
      </div>

    </div>
    <br><br> -->
  <!-- {{-- ======================= end of caro ==================== --}} -->

  <!-- {{-- ======================= start of caro2 ==================== --}} -->
    <!-- <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="https://content.nike.com/content/dam/one-nike/en_lu/SU19/Mens/W_20190606_EMEA_RUN_MLP_P3A_PEG36/MLP_P3_desktop.png.transform/full-screen/MLP_P3_desktop.png" alt="" width="100%" height="100%" fill="#777">
        <div class="container">
          <div class="carousel-caption text-left" style="margin-bottom: 140px; color: #000;">
            <h1 style="font-weight: bold;">DREAM FAST: THE NEW PEGASUS 36</h1>
            <p>Our most runner-approved shoe goes a step further to help you achieve your goals.<br>
Lace up some all new innovations for everyday speed.</p>
            <p><a class="btn btn-lg btn-link" href="product.php" role="button" style="color: #000;">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>

          </div>
        </div>
      </div>

    </div>
    <br><br> -->
 <!--  {{-- ======================= end of caro2 ==================== --}} -->

 <!--  {{-- ======================= start of caro3 ==================== --}} -->

   <div class="caro3_3">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-xs-12 mb-3">
         <div class="caro3">
           <img src="https:////media.gettingpersonal.co.uk/386144/images/products/51/58151/rwf/gift-for-him-hamper_a.jpg?width=700" class="caro3_img">
           <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="border-radius: 20px; margin-right: 40px; margin-bottom: 25px;">GIVE FOR HIM </a></p>
          </div>
        </div>
         </div>
      </div>

       <div class="col-lg-4 col-sm-12 col-xs-12 mb-3">
         <div class="caro3">
           <img src="https://media.gettingpersonal.co.uk/394872/images/products/83/55283/rwf/multi-photo-upload-cushion---heart-shape_a.jpg?width=700" class="caro3_img">
             <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="border-radius: 20px; margin-right: 40px; margin-bottom: 25px;">GIVE FOR HER </a></p>
          </div>
        </div>
         </div>
      </div>

       <div class="col-lg-4 col-sm-12 col-xs-12 mb-3">
         <div class="caro3">
           <img src="https://media.gettingpersonal.co.uk/388070/images/products/47/55347/rwf/personalised-comic---me-comic-_a.jpg?width=700" class="caro3_img">
             <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="border-radius: 20px; margin-right: 40px; margin-bottom: 25px;">GIVE FOR Kids' </a></p>
          </div>
        </div>
         </div>
      </div>

    </div>
    </div>

    <!-- {{-- ======================= end of caro3 ==================== --}} -->

    <!-- {{-- ======================= start of bestseller ==================== --}} -->
        
    <!-- {{-- Bestseller code here --}} -->
    

    <!-- {{-- ======================= end of bestseller ==================== --}} -->

 

     

  </div><!-- /.container -->

    </main><!-- {{--  main end --}} -->
 
<!-- ----------------------sport-bar end--------------------- -->

      <!-- -----------------------------------uni end -------------------- -->


<?php include('003latest_product.php'); ?>

<br><br>     
<?php include('002footer.php'); ?>

</body>
</html>

 

 
        
