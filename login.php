<?php include "db.php"; ?>


<?php 


  if(isset($_POST['submit'])) {
    $username = $_POST['LoginUsername'];
    $password = $_POST['passwordLogin'];


  global $dbConnection;

  $mysqli = new mysqli('localhost', 'root', '', 'submitit!');

  $stmt = $mysqli->prepare("SELECT username, user_password FROM users WHERE username = ?");

  if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
  $stmt->bind_param("s", $username);

  $stmt->execute();
  $stmt->store_result();

  $stmt->bind_result($uname, $pw);


  // to find users

  if($stmt->num_rows == 1) {

    echo "utilizator existent!";
    $stmt->fetch();
    if (password_verify($password, $pw)) {

      echo "login OK";

      session_start();
      $_SESSION['username'] = $username;



    } else {
      $_SESSION = [];
      session_destroy();
    }

  } else {

    echo " nu e nimeni asa, boss";
     
  $_SESSION = [];
      session_destroy();

 } 

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubmitIT!</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--  TOASTR------------------------------------------- -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<!-- ------------------------------------------------ -->



</head>
<body>
    <h1 class="text-center">SubmitIT!, your own ticketing portal, to submit requests or incidents, for your technical needs!</h1>
    <h2 class="text-center p-3">Please login to the page to create the tickets</h2>
    <div class="container-sm p-2">
        <!-- -------------------------------FORM----------------------- -->
        <form action="" method="POST">

        <!-- username -->
                        <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="your Username" aria-label="Username" aria-describedby="basic-addon1" name="LoginUsername" id="usernameLogin">
            </div>
           
  <!---------------------------------------password---------------------------------- -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="passwordLogin" name="passwordLogin">
  </div>
  <!-- ------------------------------------------------------------------------------------ -->
  <button type="submit" class="btn btn-primary mb-5" name='submit'>Login</button>
        </form>

        <!-- modal button---------------------------------------------------- -->

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Don't have an account yet? Register one!
</button>
<!-- ---------------------FORM END---------------------------------------------------- -->

        <!-- MODAL------------------------------- -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="your Username" aria-label="Username" aria-describedby="basic-addon1" name="username" id="username">
            </div>
            <!-- ---------------------------------------------------------- -->
                <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder='example: sara@gmail.com' name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <!------------------------------------------------------------------------- -->
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="register" id="register">Create an account!</button>
        </form>
      </div>
    </div>
  </div>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <!--       insert php for calling the toastr function -->
<?php include "insert.php"; ?>

</body>
</html>
