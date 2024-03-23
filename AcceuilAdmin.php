<?php
// Teste si les données attendues du formulaire sont toutes présentes ou non
;
if (($_POST['username']) === 'BUTParis' && ($_POST['password']) === 'Cessy')
	$ok = true;
else{
$ok=false;}?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_index.css">
    <link href="https://fonts.cdnfonts.com/css/cicle" rel="stylesheet">
    <link href="https://www.dafontfree.net/embed/ZHluby1yZWd1bGFyJmRhdGEvOC9kLzQ0MzE1L0R5bm8gUmVndWxhci50dGY" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/icone.png">
	<title>Acceuil Admin</title>
    
</head>

<body class = "connec_admin">


	<h1>Accueil connexion Admin</h1>

	<?php
	if (!$ok) {
		echo("Identifiant ou mot de passe inconnu, veuillez réessayer de vous <a href='connexion.html'>connecter</a>.");
	} else {
		echo("Connexion réussie !");
		echo("<br>");
        echo("Ajoutez une actu");
		echo("<br>");

        echo("<form method='post' action='confirm.php'>

		<label for='ID'>ID :</label>
		<input type='text' name='ID' id='ID' required>

		<label for='monument'>Monument :</label>
		<input type='text' name='monument' id='monument' required>

        <label for='date'>Date :</label>
		<input type='date' name='date' id='date' required>

        <label for='lien'>Lien :</label>
		<input type='text' name='lien' id='lien' required>

        <label for='desc'>Description :</label>
		<input type='text' name='desc' id='desc' required>

		<input type='submit' value='Ajouter'>

	</form>");
	}
	?>

</body>
</html>
