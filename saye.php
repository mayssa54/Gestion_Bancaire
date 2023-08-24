<html> 
<head> <title> VOTRE SOLDE </title> </head>
<link rel="stylesheet" type="text/css" href="newcss.css"> 
<body> 
	<br> 
	 <h4> Votre solde est : 
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['numv']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$numv = validate($_POST['numv']);

	$bdd = new PDO("mysql:host=localhost; dbname=test_db","root","") ; 

		$requete = $bdd -> query("SELECT solde from compte WHERE num_compte='$numv' ") ;
		$resultat=$requete -> fetch() ; 
		echo  $resultat['solde']  ; echo ".DT" ;  
exit();
}
?> 
</h4> 
</body>
</html> 
