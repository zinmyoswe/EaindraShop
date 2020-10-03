
<br><br><br><br>
<footer id="footer-sub">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
         <!--  <img src="https://novotelyangonmax.com/wp-content/themes/novotel-template/images/logo/logo-novotel.svg">

          <img src="img/logo_m_global.png">

          <img src="img/Pan-Pacific-Yangon-Hor.svg"> -->


       </div>
       <div class="col-sm-4">


       </div>
    </div>
  </div>
</footer>

<!-- ------------------------------footer sub end---------------------------------- -->

  <footer id="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
            <!-- <img src="img/footer-logo.png"> --><br>

            <h6 class="mt-3">Eaindra Store</h6>
            <p>
              
              No. 82, Sin Phyu Shin Avenue, Pyay Road, 6½ Mile, Ward 11, Hlaing Township, Yangon, Myanmar<br>
              +95-1-9351000
            </p>
        </div>
        <div class="col-sm-3">
          <a  href="admin/">Admin Panel</a>
          <a href="">EaindraShop Brands</a>
          <a href="">News</a>
          <a href="">Awards</a>
          <a href="">Gallery</a>
          <a href="">Sitemap</a>
        </div>
        <div class="col-sm-3">
           <?php 
               include('confs/config.php');
                $query = "SELECT * FROM categories order by cat_id desc";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['cat_id'];
                    $cat_name = $row['cat_name'];
                    $created_date = $row['created_date'];

                ?>
                <a href="product.php?cat=<?php echo $id ?>"><?php echo $row['cat_name'] ?></a>
            <?php } ?>
        </div>
        <div class="col-sm-3">
          <a href="">Voice of Customer</a>
          <a href="">Contacts by Branch</a>
          <a href="">Ethics Reporting</a>
          <a href="">Careers</a>

          <br><br>
          <a href="">Business Inquiry</a>
          <br>
          <a href="" class="ico"><i class="fab fa-apple fa-2x"></i> Apple Store</a>
          <a href="" class="ico"><i class="fab fa-google-play fa-2x"></i> Google Play</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          <!-- <img src="img/footer-img-lottedfs.png">
          <img src="img/footer-img-skyhill.png">
          <img src="img/footer-brand-resort.png"> -->
        </div>
        <div class="col-sm-6">
          
        </div>
        <hr>
        <a href="" style="margin-left: 1rem">Privacy Policy | &copy; 2020-2021 EaindraStore, Inc. &middot; </a>
      </div>
    </div>
  </footer>
<!-- ------------------------------footer end---------------------------------- -->

<style type="text/css">
  /* footer */
#footer-main{
  background: #000;
  color: white;
  font-size: 0.8rem;
  padding: 2.5rem 0;
  font-family: 'Lato', sans-serif;
}

#footer-main a{
  font-size: 14px;
  display: block;
  margin: 0.3rem;
  color: grey;
}

#footer-main a:hover{
  font-weight: bold;
  color: white;
}



#footer-main hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid white;
}

#footer-main img{
  margin-right: 0.6rem;
}

/* footer sub*/

#footer-sub{
  height: 5rem;
  background: whitesmoke;
}

#footer-sub img{
  margin: 1rem;
  
  height: 52px;
}

.ico{
  font-size: 18px;
  margin: 0.5rem;
}

.fab{
  margin-right: 0.5rem;
}

</style>