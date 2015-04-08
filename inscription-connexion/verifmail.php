<?php
session_start(); // On démarre la session AVANT d'écrire du code HTML sinon on ne pourra pas accéder aux variables superglobales $_SESSION
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>1Book2Friends - Confirmation du compte</title>
</head>
<body>

<?php 
	include("header.php");
?>

<section>

<article>
<?php
	$_GET["name"];
	$_GET["confirm"];
	
	$host_name = "infolimon"; // infolimon
	$database = "gelabertp"; 
	$user_name= "gelabertp";
	$password = "123";

    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "La connexion au serveur MySQL n'a pas abouti : " . mysqli_connect_error();
    }
	
	$sql = "SELECT * FROM utilisateur WHERE pseudo='" . $_GET["name"] . "';";
	if ( $result = mysqli_query($connect, $sql) ) { // execution de la requete SQL et si ca s'est mal passé, echo une erreur
		$row = mysqli_fetch_array($result, MYSQLI_BOTH); // row est un tableau qui reçoit la premiere ligne du resultat de la requete
		if ($row["confirm_mail"]==$_GET["confirm"]){  // si row (qui est un tableau) n'est pas vide, c'est que la requete a sorti un résultat
			$update = "UPDATE utilisateur SET confirm_mail = 'OK' WHERE pseudo= '" . $_GET["name"]. "'; "; // On écrase la chaine de 20 caractères par OK
			
			if ( !mysqli_query($connect, $update)){ // on execute la requete
				echo "Error: " . $sql . "<br>" . mysqli_error($connect);
			}
			else{echo '<h1>Votre compte a été validé !</h1>
			<a href="index.php">Retourner à l\'accueil</a>';}
		}
		else if ($row["confirm_mail"]=="OK") {echo '<h1>Votre compte a <strong>déjà</strong> été validé !</h1>
			<a href="index.php">Retourner à l\'accueil</a>';}
	}
	else{echo "Error: " . $sql . "<br>" . mysqli_error($connect);}
	
	
?>


</article>

</section>


<?php 
	include("footer.html");
?>
