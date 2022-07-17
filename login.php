<?php include "db.php"; ?>

<?php 

function registerUser () {

  global $dbConnection;


  if (isset($_POST['register'])) {

     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];

    
     $query = "INSERT INTO users(username, user_password, user_email, creation_date) VALUES('{$username}', '{$password}', '{$email}', now() ) ";

     $create_users_query = mysqli_query($dbConnection, $query);

     if(!$create_users_query) {

        die('N-a mers!' . mysqli_error($dbConnection));
     }  
     
      
    while($create_users_query) {

      ?>


         <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">SubmitIT!</strong>
      <small>Account created just now!</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">Close this pop-up</button>
    </div>
    <div class="toast-body">
      Hello, your account named <?php echo $username ?> has been successfully created!
     </div>
  </div>
</div>

     <?php   }  

     }

}

registerUser();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubmitIT!</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">SubmitIT!, your own ticketing portal, to submit requests or incidents, for your technical needs!</h1>
    <h2 class="text-center p-3">Please login to the page to create the tickets</h2>
    <div class="container-sm p-2">
        <!-- -------------------------------FORM----------------------- -->
        <form action="login.php" method="POST">

        <!-- username -->
                        <div class="mb-3">
                    <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="your Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
            </div>
           
  <!---------------------------------------password---------------------------------- -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <!-- ------------------------------------------------------------------------------------ -->
  <button type="submit" class="btn btn-primary mb-5" name='submit'>Submit</button>
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
            <input type="text" class="form-control" placeholder="your Username" aria-label="Username" aria-describedby="basic-addon1" name="username">
            </div>
            <!-- ---------------------------------------------------------- -->
                <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='example: sara@gmail.com' name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <!------------------------------------------------------------------------- -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="register">Create an account!</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- --------------------------------------------------------------------------- -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>