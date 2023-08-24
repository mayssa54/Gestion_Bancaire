<html>
<head>
	<title>VERIF</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="saye.php" method="post">
     	<h2>Vérifier votre solde<h2> 
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label >Numéro du compte</label>
     	<input type="Integer" name="numv" placeholder="Saisir le numéro du votre compte  "><br>
     	
     	<button type="submit">Vérifier</button> <br> <br>


     	<a href="home.php">Retour</a>
     	<a href="logout.php">Logout</a>
     </form>
</body>
</html> 