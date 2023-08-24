<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
     <title>HOME</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Bienvenue, <?php echo $_SESSION['name']; ?></h1>
     <a href="debit.php">Débiter de l'argent</a> <br> 
     <a href="credit.php">Créditer de l'argent </a> <br> 
     <a href="verif.php">Vérifier le solde</a> <br> 
     <a href="logout.php">Logout</a> 
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>