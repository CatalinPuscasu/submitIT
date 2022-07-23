<?php 

function registerUser () {

  global $dbConnection;


  if (isset($_POST['register'])) {

     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $username = mysqli_real_escape_string($dbConnection, $username);
     $email = mysqli_real_escape_string($dbConnection, $email);
     $password = mysqli_real_escape_string($dbConnection, $password);

     $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));
    
     $query = "INSERT INTO users(username, user_password, user_email, creation_date) VALUES('{$username}', '{$password}', '{$email}', now() ) ";

     $create_users_query = mysqli_query($dbConnection, $query);

     if(!$create_users_query) {

        die('N-a mers!' . mysqli_error($dbConnection));
     }  

      else {
        echo "<script type='text/javascript'>toastr.success('Your account has been successfully created! You may now login to the portal!')</script>";

      }
     
     
      
   

     }

}

registerUser();


?>