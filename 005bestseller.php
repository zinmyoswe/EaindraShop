<style type="text/css">
    .blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}
.blog{
    height: 400px;
}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 2px;
    width: 25px;
    height: 2px;
}

.blog .carousel-indicators .active {
background: #000;
}
.ftr2{
 
 height: 400px;
 margin-top: 50px;
 margin-bottom: 50px;
}
a{
    color: black;
}

a:hover{
    color: black;
}

</style>
<script type="text/javascript">
    // optional
        $('#blogCarousel2').carousel({
                interval: 6000
        });
</script>

<?php

    include('confs/config.php');
    $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity ASC LIMIT 0,4");
    
?>
<div class="ftr2">
  
<div class="container">

            <div class="blog">
                <h2 style="font-size: 28px; text-align: center;">BEST SELLER</h2>
  <br>
                
                    <div id="blogCarousel2" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active" style=" border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;"></li>
                            <li data-target="#blogCarousel" data-slide-to="1" style=" border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active" style="height: 20rem;">
                                <div class="row">
                                    
                                    <?php while($row2 = mysqli_fetch_assoc($result)):?>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="detail2.php?id=<?php echo $row2['id']; ?>">
                                            <img src="admin/cover/<?php echo $row2['cover'] ?>" alt="Image" style="width: 250px; height:250px;" class="img-responsive">
                                            
                                        </a>
                                        <p><a href="detail2.php?id=<?php echo $row2['id']; ?>"><?php echo $row2['product_name']; ?></a></p>
                                        <p><strong>$<?php echo $row2['price']; ?></strong></p>
                                    </div>
                                   <?php endwhile; ?>

                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item" style="height: 20rem;">
                                <div class="row">
            
                                   <?php

                  include('confs/config.php');
                  $result = mysqli_query($mysqli,"SELECT product.*,order_items.product_id, SUM(order_items.units) AS TotalQuantity
            FROM product 
            LEFT JOIN order_items 
            ON product.id = order_items.product_id
            GROUP BY order_items.product_id
            ORDER BY TotalQuantity ASC LIMIT 4,4");
                  while($row3 = mysqli_fetch_assoc($result)):
                  ?>
                                    <div class="col-sm-3 col-xs-6">
                                        <a href="detail2.php?id=<?php echo $row3['id']; ?>">
                                            <img src="admin/cover/<?php echo $row3['cover'] ?>" alt="Image" style="width: 250px; height:250px;" class="img-responsive">
                                            
                                        </a>
                                        <p><a href="detail2.php?id=<?php echo $row3['id']; ?>"><?php echo $row3['product_name']; ?></a></p>
                                        <p><strong>$<?php echo $row3['price']; ?></strong></p>
                                    </div>
                                <?php endwhile; ?>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                         <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev" style="margin-top: 100px; font-size: 10px; color: #000; background: #fff; border-radius: 50%; width: 40px; height: 40px;"">
    <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next" style="margin-top: 100px; font-size: 10px; color: #000; background: #fff; border-radius: 50%; width: 40px; height: 40px;">
    <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                    </div>
                    <!--.Carousel-->

             
            </div>
</div>
</div> <!-- ftr2 end -->

