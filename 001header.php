<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <link rel="icon" type="image/png" href="image/s-logo.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css"> -->
     
        <!-- Fonts -->
   

        <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Abel|Lato|Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/sport-store.css">
        
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>

        <!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
     
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        
<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/nav.css"> -->
<script type="text/javascript">
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>



<script src="angular.min.js"></script>
</head>
<body ng-app='myapp'>
  <style type="text/css">
 /*   .container{

    max-width: 1280px;
    padding: 0;


  }*/


  
    .label-warning {
    background-color: #FFC107;
    color : black;
}
/*search engine*/
.navbar-form .input-group > .form-control {
    width: 460px;
}

.btn-danger {
    color: #FFF;
    background-color: #DC3545;
    border-color: #DC3545;
}
.btn-info {
    color: #FFF;
    background-color: #17A2B8;
    border-color: #17A2B8;
}
 /*Prdouct Style */
#title{
    font-family: 'Times New Roman', Times, serif;
    
    color: #273746;
    font-size: 20px;
}

.display{
    width: 300px;
    height: 450px;
    cursor: pointer;
    background-color: #fff;
}


.box{
  width: 230px;
  height: 150px;

}



.display p strong{
    color: #2e405e;
    font-size: 12px;
}
.display p strong i a{
    color: #7f8c8d;
    font-size: 12px;

}
/*sidebar*/
.cats {
  list-style: none;
  padding: 0;
}

.cats li b a {
  display: block;
  font-size: 14px;
  padding: 8px 15px;
  color: black;
  
}

.cats li a {
  display: block;
  font-size: 14px;
  padding: 8px 15px;
  color: grey;
}

.cats li a:hover {
  
  color: #007BFF;
  


}

.btn-dark {
    color: #fff;
    background-color: #000;
    border-color: #000;
}
.btn-dark:hover{
  color: #fff;
  background-color: #000;
}

.btn-outline-dark {
    color: #000;
    background-color: transparent;
    background-image: none;
    border-color: #000;
}

.btn-outline-dark:hover{
    color: #fff;
    background-color: #000;
    
    border-color: #000;
}

html,body{
  font-family: 'Lato', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Abel', sans-serif;
}



  </style>