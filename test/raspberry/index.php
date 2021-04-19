
<!DOCTYPE html>
<html>
<head>
	<title>lavamotique</title>
	<link rel="stylesheet" type="text/css" href="raspberr.css">
	 <meta charset="utf-8">
</head>
<body>
	<div class="container">
		<form method="post" action="script.php">
			<label for="nom">Nom :</label>
			<input class="t1"  type="text" name="nom" placeholder="Entrez le nom du client" id="nom" required><BR>

			<label for="prenom">Prénom :</label>
			<input class="t1" type="text" name="prenom" id="prenom" placeholder="Entrez le prénom du client" required><BR>

			<label for="teml">Téléphone :</label>
			<input class="t1" type="tel" name="tel" placeholder="Entrez le numéro de téléphone" id="tel" required><BR>

			<label for="">Poids Net :</label>
			<input class="t1" type="text" name="poids" required><BR>
			<label for="">Nombre de vêtement Blanc:</label>
			<input class="t1" type="text" name="podis" required><BR>
			<input type="submit" name="envoyer" value="envoyer" id="envoyer" class="btn">
			<input type="reset" name="" class="btn">
		</form>
		<?php //$name = $_POST['poids']*350; ?>
		<label>Prix total :</label><br>  <h3><?php //echo $name ?></h3>
	</div>
	
</body>
</html>