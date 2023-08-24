<!DOCTYPE html>
<html>
<head>
	<title>CREDIT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="confirmercredit.php" method="post">
     	<h2>Créditer de l'argent</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label >montant à créditer</label>
     	<input type="Integer" name="montantC" placeholder="Saisir le montant à créditer  "><br>

     	<label >Numéro du compte</label>
     	<input type="Integer" name="numC" placeholder="Saisir le numéro du votre compte  "><br>

		<label >Libellé du compte</label>
     	<input type="text" name="libC" placeholder="Saisir le libellé du votre compte  "><br>


     	<button type="submit">confirmer</button> <br> <br> <br> <br> 
 


     	<a href="home.php">Retour</a>
     	<a href="logout.php">Logout</a>
     </form>
</body>
</html> 