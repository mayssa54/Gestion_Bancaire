<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	

     	<label>Code Client</label>
     	<input type="password" name="password" placeholder="Saisir votre code"><br> 
		<label >Nom Client</label>
     	<input type="text" name="uname" placeholder="Saisir votre nom "><br>
     	<label>Adresse</label>
     	<input type="text" name="Adress" placeholder="Saisir votre adresse"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>