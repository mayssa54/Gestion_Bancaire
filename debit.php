<!DOCTYPE html>
<html>
<head>
	<title>DEBIT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="Confirmerdebit.php" method="post">
     	<h2>Débiter de l'argent</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label >montant à débiter</label>
     	<input type="Integer" name="montant" placeholder="Saisir le montant à débiter  "><br>

     	<label >Numéro du compte</label>
     	<input type="Integer" name="num" placeholder="Saisir le numéro du votre compte  "><br>

		<label >Libellé du compte</label>
     	<input type="text" name="lib" placeholder="Saisir le libellé du votre compte  "><br>

     	<button type="submit">confirmer</button> <br> <br> <br> <br> 

     	<a href="home.php">Retour</a> <br>
     	<a href="logout.php">Logout</a>
     </form>
</body>
</html> 