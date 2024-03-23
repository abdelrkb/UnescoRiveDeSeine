
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
	<title>Confirm Admin</title>
    
</head>

<body class = "connec_admin">


	<h1>Accueil connexion Admin</h1>

	<?php


	echo("Monument ajouté.");
    $user = 'abdelnour.rekkab';       
    $pass = 'Eiffel#23#';
        try{
            $cnx = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=abdelnour.rekkab_db', $user, $pass);
        }
        catch (PDOException $e){
            echo "Erreur connexion échoué";
        
        }
	
        $id = $_POST["ID"];
        $monument = $_POST["monument"];
        $date = $_POST["date"];
        $lien = $_POST["lien"];
        $desc = $_POST["desc"];
        $requete = 'set search_path to unesco;';
        $results=$cnx->query("INSERT INTO unesco.monuments VALUES('$id','$monument','$date','$lien','$desc');");

	?>

</body>
</html>
