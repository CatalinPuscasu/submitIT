<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>SubmitIT! Main page</title>
</head>
<body>
    <h1 class="text-center">Welcome <?php echo $_SESSION['username']; ?></h1>

    <div class="container">
        <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-danger text-white">
        <h5 class="card-title">Submit an Incident!</h5>
        <p class="card-text">Access this section if you have an error in your app, or fi something doesn't work on your workstation.</p>
        <a href="#" class="btn btn-primary">Submit the incident</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-info text-white">
        <h5 class="card-title">Submit a request!</h5>
        <p class="card-text">Access this section to submit a request in order to obtain the access to an app, a licence, or hardware.</p>
        <a href="#" class="btn btn-primary">Submit the request</a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>
</html>