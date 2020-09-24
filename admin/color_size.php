
<?php
   include('../confs/config.php');
?>

<?php include('header3.php'); ?>
<!-- =============================================== -->
<script src="tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
  selector: 'textarea',
  height: 400,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
    </script>
  <script src="jquery.tinymce.min.js"></script>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Colors and Sizes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

   <div class="col-md-11">
          <!-- Horizontal Form -->
          <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">NEW COLOR & SIZE ADD FORM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="color_size.php" enctype="multipart/form-data">
              <div class="card-body">
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="value"  class="form-control" id="inputEmail3" placeholder="Color Or Size Name"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color & Size</label>
                  <div class="col-sm-10">
                  <select id="name" class="form-control" name="name">
                                                <option>Choose...</option>
                                                <option>color</option>
                                                <option>size</option>
                                                <option>size2</option>
                                                <option>size3</option>
                                          </select>  
                                          
                  </div>
                </div>

                 
                <!-- FORM ENDS -->


                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->
                  <br>
                  <div class="alert alert-success">
                    <p><span class="fa fa-check"></span> Color is for both</p>
                    <p><span class="fa fa-check"></span> size is for(XS, S, M, L, XL, XXL)<br>
                    (US 7, UK 6.5, F 40)
                    </p>
                    <p><span class="fa fa-check"></span> size2 is for(28,30,32)</p>
                    <p><span class="fa fa-check"></span> size3 is for One Size or free size product</p>
                  </div>

               
               
              </div>
              <!-- /.box-body -->
              <div class="card-footer">
                
                <button type="submit" name="submit" class="btn btn-primary float-right" style="margin: 0 4px">Save</button>
                <a href="home.php" class="btn btn-outline-default float-right" >Back</a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </div> <!-- col-md-6 ends-->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                

<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


  </div>
  <?php include('footer3.php') ?>

<?php

    if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $value = $_POST['value'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     

      // $product_image2 = $_FILES['product_image2']['name'];
      // $tmp2 = $_FILES['product_image2']['tmp_name'];

      // $product_image3 = $_FILES['product_image3']['name'];
      // $tmp3 = $_FILES['product_image3']['tmp_name'];

      
      // move_uploaded_file($tmp,"cover/$product_image");
      // move_uploaded_file($tmp2,"cover/$product_image2");
      // move_uploaded_file($tmp3,"cover/$product_image3");
      
      if($cover){
        move_uploaded_file($tmp, "images/$cover");

      }
      
    
      $sql = "INSERT INTO attribute(name,value,attr_img)
                   VALUES('$name','$value','$cover')";

      $run=mysqli_query($mysqli,$sql);
      
      if($run){

        echo "<script>alert('Color Size have been inserted')</script>";
        echo "<script>window.open('color_size.php','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>