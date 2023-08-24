<html>
<head>
	<title>VERIF</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="confirmverif.php" method="post">
     	<h2>Vérifier votre solde</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label >Votre nom : </label>
     	<input type="Integer" name="nomv" placeholder="Saisir votre nom   "><br>
     	
     	<button type="submit">Continuer</button> <br> <br> <br> <br> 
 

     	<a href="home.php">Retour</a>
     	<a href="logout.php">Logout</a>
     </form>
</body>
</html> 