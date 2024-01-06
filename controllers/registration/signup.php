<?php 
 session_start();
    require_once '../../config/config.php';

    if(isset($_POST['submit'])){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $password = $_POST['password'];

        $select = "SELECT * FROM account where Name = '$name'";
        $result = mysqli_query($conn, $select);
        if (mysqli_num_rows($result) > 0) {
          $rows = mysqli_fetch_array($result);
          $_SESSION['ERROR'] = $rows["'Name already registered'"];
        }
        else {
          $insert = "INSERT into account (Name, Email, Password) VALUES ('$name','$email', '$password')";
          mysqli_query($conn, $insert);
          header("location:../../index.php");
        }
      }
      
    
?>