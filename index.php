<?php 
session_start(); 
//echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Covid 19 | Home</title>
  <!-- MDB icon -->
  <link rel="icon" href="lg.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
<header>
  <div class="container-fluid mt-3">
    <div class="row justify-content-center">
      <div class="col-md-9 ">
        <h4 class=" font-weight-bold "><img src="images/corona.jpeg" /><a class="grey-text" href="index.php">AN EXPERT SYSTEM ON COVID 19 AWARENESS</a></h2>
      </div>
      <div class="col-md-3">
      <?php if(isset($_SESSION['username'])){

        ?>
          <p><a style="border-radius:19px" class="btn btn-danger" href="logout.php">Logout</a>  | <a style="border-radius:19px" class="btn btn-primary" href="index.php?page=home">Take Pre Covid 19 Test</a></p>
        <?php
      }else{
        ?>
         <p>
        <a href="index.php?page=signup" style="border-radius:19px;"  class="btn btn-primary btn-sm">Sign up</a> 
        <a href="index.php?page=login" style="border-radius:19px;" class="btn btn-primary btn-sm"> Login</a>
        <a href="/covid19/admin" style="border-radius:19px;" class="btn btn-primary btn-sm">Admin</a> 
        </p>

        
        <?php
      }
      
      ?>
       
      </div>
    </div>
    <hr class="my-1"/>
  </div>
</header>

<main>

    <?php 
    if(isset($_GET['page'])){
      $page = $_GET['page'];
      include($page.'.php');
    }else{
      include('landing.php');
    }
    
    
    
    ?>
 
</main>

  <!-- Start your project here-->  

  
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="https://use.fontawesome.com/c576d0c8cc.js"></script>
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
</script>

</body>
</html>
