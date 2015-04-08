<?php
session_start(); // On démarre la session AVANT d'écrire du code HTML sinon on ne pourra pas accéder aux variables superglobales $_SESSION
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>1Book2Friends</title>
</head>
<body>

<!-- <img src="http://www.alsacreations.com/xmedia/doc/full/schema2.png"/> -->

<?php 
	include("header.php");
?>

<section>

<article>
<h1>Derniers livres ajoutés</h1>

<?php 
	$host_name = "infolimon"; // infolimon
	$database = "gelabertp"; 
	$user_name= "gelabertp";
	$password = "123";

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "La connexion au serveur MySQL n'a pas abouti : " . mysqli_connect_error();
    }

mysqli_set_charset('utf8', $connect);
$sql = 'SELECT * FROM exemplaire ORDER BY id_exemplaire DESC'; // l'ORDER BY sert à classer les oeuvre de la plus récent à la plus ancienne car id_exemplaire est en autoincrementation

// on envoie la requête 
$req = mysqli_query($connect, $sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on fait une boucle qui va faire un tour pour chaque enregistrement 
$i = 0; // On initialise une variable compteur qui va compter le nombre de lignes affichées
$row = mysqli_fetch_array($req, MYSQLI_BOTH); // On extrait la première ligne
while(!empty($row) && $i < 4) // Tant qu'il a des lignes retournées et que le nombre de lignes affiché ne dépasse pas 4.
    { ?>
	
	<span>
		<img id="couverture" src="./couverture/ <?php echo $row["couverture"] .".jpg";?>" />  
		<p>Titre : <?php echo $row["titre_exemplaire"]; ?> </p>
		<p>Commentaire : <?php echo $row["commentaire"]; ?> </p> 
		<p>Etat : <?php echo $row["vetuste"]; ?> </p> 
		<p>Disponibilité : <?php echo $row["disponibilite"]; ?> : </p>
		<hr>
	</span>
	
    <?php
	$i++;
	$row = mysqli_fetch_array($req, MYSQLI_BOTH); //On extrait la ligne suivante
	} 

mysqli_close($connect);
?>
</article>

<article>
<h1>Livres les plus demandés</h1>
</article>

</section>

<?php 
	include("footer.html");
?>
















</body>
</html>
