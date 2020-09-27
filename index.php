<?php
  session_start();
  include('confs/config.php');
  include('function/function.php');
  include('001header.php');
  include('004navbar.php');
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
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/MOVED_OVER_tcm221-363900.jpg" width="700px" height="500px" style="margin-left: 50px">

              <div class="container">
          <div class="carousel-caption">
            <h2>ULTRABOOST 19</h2>
            <p>Reboosted</p>
            <p><a class="btn btn-lg btn-light" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>

        </div>
        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enUS/Images/originals-fw19-hoc-drop1-tease-hp-teaser-large-2up-ee5790-m-t_v2_tcm221-364940.jpg" width="700px" height="500px">

              <div class="container">
          <div class="carousel-caption"">
            <h2>HOME OF CLASSICS</h2>

            <p><a class="btn btn-lg btn-light" href="product.php" role="button">PREVIEW NOW <i class="fa fa-arrow-right"></i></a></p>
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
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_pg_m_05?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">Casual Shirts</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_042419_j09_polo?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">Polo Shirts</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_042419_j10_shirt_m?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">T-Shirts</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_042419_j11_Chino?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">Pants</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_042419_j12_ezy?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">Jeans</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_042419_j13_active?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">Activewear</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_cat_042419_j14_shorts_m?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">Shorts</a></h2>

                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-sm-6">
                        <img src="https://uniqlo.scene7.com/is/image/UNIQLO/us_sp_ar_030719_v2_01?$jpgMQ$&wid=319" width="280" height="380" class="img_feature">
                          <div class="container">
                          <div class="carousel-caption">
                            <h2 style="margin-bottom: 130px;"><a href="product.php">AIRism Innerwear</a></h2>

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
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/teaser-c-Adidas_Swim_Amphi-mobile_background_image_tcm143-341615.jpg" width="700px" height="500px" style="margin-left: 50px">
              <div class="container">
          <div class="carousel-caption">
            <h2>MAXIMUM VERSATILITY</h2>
            <p>Three support levels, for any activity in and around the water.</p>
            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">SHOP NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12">
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enGB/Images/HP_Teaser_Tights_Small_tcm143-315446.jpg" width="700px" height="500px">
              <div class="container">
          <div class="carousel-caption"">
            <h2>WORK IT OUTSIDE</h2>
            <p>Get inspired to bootcamp equipment-free in high support tights.</p>

            <p><a class="btn btn-lg btn-dark" href="product.php" role="button">PREVIEW NOW <i class="fa fa-arrow-right"></i></a></p>
          </div>
        </div>
        </div>
    </div>
    </section>

    <br><br>
    <!-- {{-- ======================= end of addias 2 ==================== --}} -->

    <!-- {{-- ======================= start of caro ==================== --}} -->
    <div class="carousel-inner">
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
    <br><br>
  <!-- {{-- ======================= end of caro ==================== --}} -->

  <!-- {{-- ======================= start of caro2 ==================== --}} -->
    <div class="carousel-inner">
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
    <br><br>
 <!--  {{-- ======================= end of caro2 ==================== --}} -->

 <!--  {{-- ======================= start of caro3 ==================== --}} -->

   <div class="caro3_3">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-xs-12 mb-3">
         <div class="caro3">
           <img src="https://c.static-nike.com/a/images/f_auto/w_1536,c_limit/ebni4cssccl4rvr0fgeb/homepage-apla-xa.jpg" class="caro3_img">
           <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="border-radius: 20px; margin-right: 40px; margin-bottom: 25px;">Men's </a></p>
          </div>
        </div>
         </div>
      </div>

       <div class="col-lg-4 col-sm-12 col-xs-12 mb-3">
         <div class="caro3">
           <img src="https://c.static-nike.com/a/images/f_auto/w_1536,c_limit/xkh1zz53gxufllifu6yd/homepage-apla-xa.jpg" class="caro3_img">
             <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="border-radius: 20px; margin-right: 40px; margin-bottom: 25px;">Women's </a></p>
          </div>
        </div>
         </div>
      </div>

       <div class="col-lg-4 col-sm-12 col-xs-12 mb-3">
         <div class="caro3">
           <img src="https://c.static-nike.com/a/images/f_auto/w_1536,c_limit/rl9h6expvyvrv6gwbzr2/homepage-apla-xa.jpg" class="caro3_img">
             <div class="container">
          <div class="carousel-caption">

            <p><a class="btn btn-lg btn-light" href="product.php" role="button" style="border-radius: 20px; margin-right: 40px; margin-bottom: 25px;">Kids' </a></p>
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

 

 
        
