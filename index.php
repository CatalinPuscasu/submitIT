<?php session_start(); ?>

<?php 

  if (isset($_POST['logout'])) {
    
    session_destroy();

          echo "<script> location.href='login.php'; </script>";


  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>SubmitIT! Main page</title>
</head>
<body>

   <style>
    .carousel-item {
      height : 42rem;
      position : relative;
      background-position : center;
      background-size : cover;
    }
    img {
      width : 400px;
      height :400px;
    }
   </style>   

    <h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h1>

    <div class="container">
        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-danger text-white">
        <h5 class="card-title">Submit an Incident!</h5>
        <p class="card-text">Access this section if you have an error in your app, or fi something doesn't work on your workstation.</p>
        <a href="./incidentForm.php" class="btn btn-primary">Go the incident form</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-info text-white">
        <h5 class="card-title">Submit a request!</h5>
        <p class="card-text">Access this section to submit a request in order to obtain the access to an app, a licence, or hardware.</p>
        <a href="./requestForm.php" class="btn btn-primary">Submit the request</a>
      </div>
    </div>
  </div>
</div>
    </div>
    <!-- end of forms container -->

    <!-- ---------------------CAROUSEL--------------------- -->

  <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/undraw_multitasking_re_ffpb.svg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-xxl-block">
        <h5>Work from home, or anywhere in the world!</h5>
        <p>You can request the access to the VPN feature, in the Request Form!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/undraw_team_page_re_cffb.svg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-xxl-block">
        <h5>Collaboration with your team has never been easier!</h5>
        <p>Look out for the new collaborative solutions fo the enterprise, which guarantee seamless communication!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/undraw_cloud_hosting_7xb1.svg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-xxl-block">
        <h5>I should really get into the cloud bussiness...</h5>
        <p>Need to stock you data, or Virtual Machines somewhere convenient? Google, Microsoft or Amazon got you on this!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- -------------------------enf of CAROUSEL------------------------------------ -->

    <!-- ----------LOGOUT---------- -->
<form action="" method="POST">
    <button class="btn btn-warning" name="logout">LOGOUT</button>
    </form>
    <!-- -------------------------------------------- -->
</body>
</html>