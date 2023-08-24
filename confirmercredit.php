<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['montantC']) && isset($_POST['numC'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$montantC = validate($_POST['montantC']);
	$numC = validate($_POST['numC']);

	if (empty($montantC)) {
		header("Location: credit.php?error=montant est obligatoire ");
	    exit();
	}else if(empty($numC)){
        header("Location: credit.php?error=Numéro de compte est obligatoire ");
	    exit();
	}else{

		$sql5 = "UPDATE compte SET solde=solde-'$montantC' WHERE solde > '$montantC' " ;

		$result = mysqli_query($conn, $sql5); 


		$sql8 = "UPDATE compte SET credit='$montantC' WHERE  solde > '$montantC' " ;

		$result = mysqli_query($conn, $sql8); 


		$sql = "SELECT * FROM compte WHERE num_compte='$numC' "; 

		$result = mysqli_query($conn, $sql); 

		

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['num_compte'] === $numC && $row['solde'] > $montantC ) {
            	$_SESSION['num_compte'] = $row['num_compte'];
            	header("Location: validercre.php");
		        exit();
            }else{
				header("Location: credit.php?error= Donnée incorrecte ou montant invalide ");
		        exit();
			}
		}else{
			header("Location: credit.php?error= Donnée incorrecte  ");
	        exit();
		}
	}
	
}else{
	header("Location: credit.php");
	exit();
}