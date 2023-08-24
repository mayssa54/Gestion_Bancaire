<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['nomv']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$nomv = validate($_POST['nomv']);

	if (empty($nomv)) {
		header("Location: verif.php?error= nom obligatoire ");
	    exit();
	}else{

		$sql = "SELECT user_name FROM users WHERE user_name='$nomv'";

		$result = mysqli_query($conn, $sql);
   
	if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $nomv ) {
            	$_SESSION['user_name'] = $row['user_name'];
            	header("Location: 1.php");
		        exit();
            }else{
				header("Location: verif.php?error=nom invalide ");
		        exit();
			}
		}else{
			header("Location: verif.php?error=nom invalide");
	        exit();
		}
	}
	
}else{
	header("Location: verif.php");
	exit();
}

