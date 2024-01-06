<?php
    session_start();
    require_once '../../config/config.php';
    if (isset($_POST["submit"])){
        $Email = ($_POST["Email"]);
		$password = ($_POST["password"]);
	  
		$select = " SELECT * FROM account WHERE Email = '$Email' AND Password = '$password' ";
	  
		$result = mysqli_query($conn, $select);
	  
		if(mysqli_num_rows($result) > 0){
		  $rows = mysqli_fetch_array($result);
	  
		  $_SESSION['Email'] = $rows['Email'];
		  $_SESSION['password'] = $rows['password'];
		  
	  
		  header('location: ../../dashboard.php');    
		}else{
		  $error[] = 'Incorrect email or password';
		}
    }
?>