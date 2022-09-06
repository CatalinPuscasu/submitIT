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
        <div class="incident_container p-5">
            <h2 class="p-4">
                Submit an incident!
            </h2>
                  <form action="" method="POST">
                       <!-- maybe a GET request -->
                  </form>     
        </div>
        <div class="request_container"></div>
    </div>
</body>
</html>