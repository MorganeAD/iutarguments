<?php 
	//gt-p5210
	$a1 = (isset($_POST['a1'])) ? $_POST['a1'] : 0;
	$a2 = (isset($_POST['a2'])) ? $_POST['a2'] : 0;
	$a3 = (isset($_POST['a3'])) ? $_POST['a3'] : 0;
	$a4 = (isset($_POST['a4'])) ? $_POST['a4'] : 0;

	$b1 = (isset($_POST['b1'])) ? $_POST['b1'] : 0;
	$b2 = (isset($_POST['b2'])) ? $_POST['b2'] : 0;
	$b3 = (isset($_POST['b3'])) ? $_POST['b3'] : 0;
	$b4 = (isset($_POST['b4'])) ? $_POST['b4'] : 0;

	$c1 = (isset($_POST['c1'])) ? $_POST['c1'] : 0;
	$c2 = (isset($_POST['c2'])) ? $_POST['c2'] : 0;
	$c3 = (isset($_POST['c3'])) ? $_POST['c3'] : 0;
	$c4 = (isset($_POST['c4'])) ? $_POST['c4'] : 0;

	$d1 = (isset($_POST['d1'])) ? $_POST['d1'] : 0;
	$d2 = (isset($_POST['d2'])) ? $_POST['d2'] : 0;
	$d3 = (isset($_POST['d3'])) ? $_POST['d3'] : 0;
	$d4 = (isset($_POST['d4'])) ? $_POST['d4'] : 0;

	$e1 = (isset($_POST['e1'])) ? $_POST['e1'] : 0;
	$e2 = (isset($_POST['e2'])) ? $_POST['e2'] : 0;
	$e3 = (isset($_POST['e3'])) ? $_POST['e3'] : 0;
	$e4 = (isset($_POST['e4'])) ? $_POST['e4'] : 0;

	$f1 = (isset($_POST['f1'])) ? $_POST['f1'] : 0;
	$f2 = (isset($_POST['f2'])) ? $_POST['f2'] : 0;
	$f3 = (isset($_POST['f3'])) ? $_POST['f3'] : 0;
	$f4 = (isset($_POST['f4'])) ? $_POST['f4'] : 0;

	$g1 = (isset($_POST['g1'])) ? $_POST['g1'] : 0;
	$g2 = (isset($_POST['g2'])) ? $_POST['g2'] : 0;
	$g3 = (isset($_POST['g3'])) ? $_POST['g3'] : 0;
	$g4 = (isset($_POST['g4'])) ? $_POST['g4'] : 0;



	$mysql_host = "infolimon"; // infolimon
	$mysql_database = "alonsom"; 
	$mysql_user = "alonsom";
	$mysql_password = "0203003337B";


	$connect = mysql_connect($mysql_host,$mysql_user,$mysql_password)  or die("erreur de connexion au serveur" . mysql_error());
	
	mysql_select_db($mysql_database)  or die("erreur de connexion a la base de donnees" . mysql_error());

	$query = "insert into choixAnalyse(a1,a2,a3,a4,b1,b2,b3,b4,c1,c2,c3,c4,d1,d2,d3,d4,e1,e2,e3,e4,f1,f2,f3,f4,g1,g2,g3,g4) values ($a1,$a2,$a3,$a4,$b1,$b2,$b3,$b4,$c1,$c2,$c3,$c4,$d1,$d2,$d3,$d4,$e1,$e2,$e3,$e4,$f1,$f2,$f3,$f4,$g1,$g2,$g3,$g4);";
	$result = mysql_query($query) or die(mysql_error());
	mysql_close();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/theme.css" rel="stylesheet" type="text/css" />
		<title>Traitement choix Analyse</title>
	</head>
	<body role="document">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Arguments</a>
				</div>
			</div>
		</nav>
		<div class="container theme-showcase" role="main">
			
		<div class="jumbotron">
			<h1>Merci!</h1>
			<p>Votre vote a bien était pris en compte, merci pour votre aide!</p>
		</div>
		</div>	
	</body>
</html>