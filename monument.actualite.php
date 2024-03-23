
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
	<title>Actualités Monuments</title>
    <style>
a {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}
.mon{
    z-index:-1;
    position : absolute;
    top : 150px;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body::-webkit-scrollbar {
    width: 12px; 
  }
  
  body::-webkit-scrollbar-track {
    background: var(--bgappoint); /* color of the tracking area */
  }
  
  body::-webkit-scrollbar-thumb {
    background-color: var(--bg); /* color of the scroll thumb */
    border-radius: 3px; /* roundness of the scroll thumb */
    border: 3px solid var(--bgprin); /* creates padding around scroll thumb */
  }
body,html {
    font-family: 'Cicle';
    overflow-x: hidden;
    background-color:var(--bgprin) ;
    scroll-behavior: smooth;
    color : var(--appoint);
}

h2{
    font-family: 'dyno-regular', sans-serif;
    font-size: 20px;
    color: white;
    left : 0px;
}

:root {
    --principale : #ea5c0d;
    --appoint: #b94503;
    --secondaire : #f7af3e;
    --bgprin : #333333;
    --bgappoint: #505050;
}
        </style>
</head>
<body>
<nav>
        <ul>
            <li class="">
              <a href="#"><img src="img/logo.png" alt=""></a>
              <ul class="sous-menu">
                <li><a href="https://www.univ-gustave-eiffel.fr" target="_blank"><img src="img/iutlogo.png" alt="logo iut marne la vallée">IUT de Marne la Vallée</a></li>
                <li><a href="https://www.unesco.org/fr" target="_blank"><img src="img/sticker_UNESCO_blue.png" alt="logo unesco">UNESCO</a></li>
                <li><a href="https://anr.fr/" target="_blank"><img src="img/anr.png" alt="logo ANR">ANR</a></li>
                <li><a href="https://www.icomos.org/fr" target="_blank"><img src="img/icomos.png" alt="logo Icomos">Icomos Internationale</a></li>


              </ul>
            </li>
            <li id="surbrillance" class="menu-deroulant">
              <a href="index.html">Accueil</a>
              <ul class="sous-menu">
                <li><a href="index.html#vid">Vidéo</a></li>
                <li><a href="index.html#carte">Carte</a></li>
              </ul>
            </li>
            <li class="menu-deroulant">
                <a href="monuments.html">Monuments</a>
                <ul class="sous-menu">
                    <li><a href="monuments.html#Q1">Quartier 1</a></li>
                    <li><a href="monuments.html#Q2">Quartier 2</a></li>
                    <li><a href="monuments.html#Q3">Quartier 3</a></li>
                </ul>
            </li>
            <li class="menu-deroulant">
                <a href="#">Parcours</a>
                <ul class="sous-menu">
                    <li><a href="parcoursnord.html">Rive Nord</a></li>
                    <li><a href="parcourssud.html">Rive Sud</a></li>
                    <li><a href="#">Parcours chronologique</a></li>
                </ul>
            </li>
            <li class="menu-deroulant">
                <a href="actualites.html">Actualités</a>
                <ul class="sous-menu">
                    <li><a href="actualites.html#EnCeMoment">En ce moment à Paris</a></li>
                    <li><a href="monument.actualite.php">Actualités par Monuments</a></li>
                </ul>
            </li>
            <li class="lang">
                <a href="#"><img src="img/langue.png" alt="langue"></a>
                <ul class="sous-menu">
                    <li><a href="#">Français</a></li>
                    <li><a href="index_anglais.html">Anglais</a></li>
                    <li><a href="index_esp.html">Espagnol</a></li>
                </ul>
            </li>
            

        </ul>
    </nav>
<div class="mon">
<?php
$user = 'abdelnour.rekkab';
$pass = 'Eiffel#23#';
try{
	$cnx = new PDO('pgsql:host=sqletud.u-pem.fr;dbname=abdelnour.rekkab_db', $user, $pass);
}
catch (PDOException $e){
	echo "Erreur connexion échoué";

}
echo("<h2> Louvre </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Louvre'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur


echo"<br>";

echo("<h2> Tour Eiffel/Eiffel Tower </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Eiffel'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Ecole Millitaire/ Millitary School </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Ecole'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Palais Chaillot/Chaillot Palace </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Chaillot'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Grand et petit palais/Big and Small Palace </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Palais'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Hôtel des invalides/ Invalid Hostel </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Invalides'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Place de la Concorde/ Concorde Place </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Concorde'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Palais de l'institut/Institute Palace </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Institut'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Hôtel de la monnaie /  Mint </h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Monnaie'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> La Sainte Chapelle / Sacred Chapel</h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Chapelle'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur

echo"<br>";

echo("<h2> Notre Dame</h2>");
$requete = 'set search_path to UNESCO;';
$results=$cnx->query("SELECT * FROM UNESCO.monuments where UNESCO.monuments.monument = 'Dame'");
while( $ligne = $results->fetch(PDO::FETCH_OBJ) ) // un par un
{

    echo $ligne->information . " " . $ligne->date . ", ";
    echo"Lien :";
    echo "<a href='" . $ligne->link . "'>$ligne->link</a>";
    echo "<br>";
}$results->closeCursor(); // on ferme le curseur
?>


</div>

<footer>
        <h2>Copyright © Tous droits réservés. </h2>
        <h4>Images des monuments, des icones de transports : <a href="https://www.wikipedia.org/">Wikipedia</a></h4>
        <h4>Icones des monuments : <a href="https://www.flaticon.com/fr/">Flaticon</a></h4>
        <br>
        <h2>Contactez-nous</h2>
        <br>
        <ul>
            <li><a href="https://www.instagram.com/rdsp_unesco/?hl=fr" target="_blank"><img src="img/reseaux/instagram.png" alt="logo instagram"></a></li>
            <li><a href="https://twitter.com/rdsp_unesco" target="_blank"><img src="img/reseaux/twitter.png" alt="logo twitter"></a></li>
            <li><a href="mailto:rivesdelaseine.iutmlv@gmail.com" target="_blank"><img src="img/reseaux/email.png" alt="logo mail"></a></li>
        </ul>
        <p> Admin ? <br> <a href="connexion.html"> Se connecter</a></p>
    </footer>
</body>

</html>