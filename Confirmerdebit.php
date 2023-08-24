<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['montant']) && isset($_POST['num'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$montant = validate($_POST['montant']);
	$num = validate($_POST['num']);

	if (empty($montant)) {
		header("Location: debit.php?error=montant est obligatoire ");
	    exit();
	}else if(empty($num)){
        header("Location: debit.php?error=Numéro de compte est obligatoire ");
	    exit();
	}else{

		$sql2 = "UPDATE compte SET debit=debit+'$montant' WHERE num_compte= '$num' ";

		$result = mysqli_query($conn, $sql2); 

		$sql3 = "UPDATE compte SET solde=solde+'$montant' WHERE num_compte= '$num' ";

		$result = mysqli_query($conn, $sql3); 
		

		$sql = "SELECT num_compte FROM compte WHERE num_compte='$num' "; 

		$result = mysqli_query($conn, $sql); 

		

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['num_compte'] === $num ) {
            	$_SESSION['num_compte'] = $row['num_compte'];
            	header("Location: confirmer.php");
		        exit();
            }else{
				header("Location: debit.php?error= Donnée incorrecte ");
		        exit();
			}
		}else{
			header("Location: debit.php?error= Donnée incorrecte  ");
	        exit();
		}
	}
	
}else{
	header("Location: debit.php");
	exit();
}