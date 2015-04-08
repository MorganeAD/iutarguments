<!DOCTYPE HTML>

<?php 
	$mysql_host = "infolimon"; // infolimon
	$mysql_database = "alonsom"; 
	$mysql_user = "alonsom";
	$mysql_password = "0203003337B";


	$connect = mysql_connect($mysql_host,$mysql_user,$mysql_password)  or die("erreur de connexion au serveur" . mysql_error());
	
	mysql_select_db($mysql_database)  or die("erreur de connexion a la base de donnees" . mysql_error());

	$query = 
	"
		select 	sum( case when a1 = -2 then 1 else 0 end ),
				sum( case when a2 = -2 then 1 else 0 end ),
				sum( case when a3 = -2 then 1 else 0 end ),
				sum( case when a4 = -2 then 1 else 0 end ),
				sum( case when b1 = -2 then 1 else 0 end ),
				sum( case when b2 = -2 then 1 else 0 end ),
				sum( case when b3 = -2 then 1 else 0 end ),
				sum( case when b4 = -2 then 1 else 0 end ),
				sum( case when c1 = -2 then 1 else 0 end ),
				sum( case when c2 = -2 then 1 else 0 end ),
				sum( case when c3 = -2 then 1 else 0 end ),
				sum( case when c4 = -2 then 1 else 0 end ),
				sum( case when d1 = -2 then 1 else 0 end ),
				sum( case when d2 = -2 then 1 else 0 end ),
				sum( case when d3 = -2 then 1 else 0 end ),
				sum( case when d4 = -2 then 1 else 0 end ),
				sum( case when e1 = -2 then 1 else 0 end ), 
				sum( case when e2 = -2 then 1 else 0 end ),
				sum( case when e3 = -2 then 1 else 0 end ),
				sum( case when e4 = -2 then 1 else 0 end ),
				sum( case when f1 = -2 then 1 else 0 end ),
				sum( case when f2 = -2 then 1 else 0 end ),
				sum( case when f3 = -2 then 1 else 0 end ),
				sum( case when f4 = -2 then 1 else 0 end ),
				sum( case when g1 = -2 then 1 else 0 end ),
				sum( case when g2 = -2 then 1 else 0 end ),
				sum( case when g3 = -2 then 1 else 0 end ),
				sum( case when g4 = -2 then 1 else 0 end ),
				sum( case when a1 = -1 then 1 else 0 end ),
				sum( case when a2 = -1 then 1 else 0 end ),
				sum( case when a3 = -1 then 1 else 0 end ),
				sum( case when a4 = -1 then 1 else 0 end ),
				sum( case when b1 = -1 then 1 else 0 end ),
				sum( case when b2 = -1 then 1 else 0 end ),
				sum( case when b3 = -1 then 1 else 0 end ),
				sum( case when b4 = -1 then 1 else 0 end ),
				sum( case when c1 = -1 then 1 else 0 end ),
				sum( case when c2 = -1 then 1 else 0 end ),
				sum( case when c3 = -1 then 1 else 0 end ),
				sum( case when c4 = -1 then 1 else 0 end ),
				sum( case when d1 = -1 then 1 else 0 end ),
				sum( case when d2 = -1 then 1 else 0 end ),
				sum( case when d3 = -1 then 1 else 0 end ),
				sum( case when d4 = -1 then 1 else 0 end ),
				sum( case when e1 = -1 then 1 else 0 end ), 
				sum( case when e2 = -1 then 1 else 0 end ),
				sum( case when e3 = -1 then 1 else 0 end ),
				sum( case when e4 = -1 then 1 else 0 end ),
				sum( case when f1 = -1 then 1 else 0 end ),
				sum( case when f2 = -1 then 1 else 0 end ),
				sum( case when f3 = -1 then 1 else 0 end ),
				sum( case when f4 = -1 then 1 else 0 end ),
				sum( case when g1 = -1 then 1 else 0 end ),
				sum( case when g2 = -1 then 1 else 0 end ),
				sum( case when g3 = -1 then 1 else 0 end ),
				sum( case when g4 = -1 then 1 else 0 end ),
				sum( case when a1 = 1  then 1 else 0 end ),
				sum( case when a2 = 1  then 1 else 0 end ),
				sum( case when a3 = 1  then 1 else 0 end ),
				sum( case when a4 = 1  then 1 else 0 end ),
				sum( case when b1 = 1  then 1 else 0 end ),
				sum( case when b2 = 1  then 1 else 0 end ),
				sum( case when b3 = 1  then 1 else 0 end ),
				sum( case when b4 = 1  then 1 else 0 end ),
				sum( case when c1 = 1  then 1 else 0 end ),
				sum( case when c2 = 1  then 1 else 0 end ),
				sum( case when c3 = 1  then 1 else 0 end ),
				sum( case when c4 = 1  then 1 else 0 end ),
				sum( case when d1 = 1  then 1 else 0 end ),
				sum( case when d2 = 1  then 1 else 0 end ),
				sum( case when d3 = 1  then 1 else 0 end ),
				sum( case when d4 = 1  then 1 else 0 end ),
				sum( case when e1 = 1  then 1 else 0 end ), 
				sum( case when e2 = 1  then 1 else 0 end ),
				sum( case when e3 = 1  then 1 else 0 end ),
				sum( case when e4 = 1  then 1 else 0 end ),
				sum( case when f1 = 1  then 1 else 0 end ),
				sum( case when f2 = 1  then 1 else 0 end ),
				sum( case when f3 = 1  then 1 else 0 end ),
				sum( case when f4 = 1  then 1 else 0 end ),
				sum( case when g1 = 1  then 1 else 0 end ),
				sum( case when g2 = 1  then 1 else 0 end ),
				sum( case when g3 = 1  then 1 else 0 end ),
				sum( case when g4 = 1  then 1 else 0 end ),
				sum( case when a1 = 2  then 1 else 0 end ),
				sum( case when a2 = 2  then 1 else 0 end ),
				sum( case when a3 = 2  then 1 else 0 end ),
				sum( case when a4 = 2  then 1 else 0 end ),
				sum( case when b1 = 2  then 1 else 0 end ),
				sum( case when b2 = 2  then 1 else 0 end ),
				sum( case when b3 = 2  then 1 else 0 end ),
				sum( case when b4 = 2  then 1 else 0 end ),
				sum( case when c1 = 2  then 1 else 0 end ),
				sum( case when c2 = 2  then 1 else 0 end ),
				sum( case when c3 = 2  then 1 else 0 end ),
				sum( case when c4 = 2  then 1 else 0 end ),
				sum( case when d1 = 2  then 1 else 0 end ),
				sum( case when d2 = 2  then 1 else 0 end ),
				sum( case when d3 = 2  then 1 else 0 end ),
				sum( case when d4 = 2  then 1 else 0 end ),
				sum( case when e1 = 2  then 1 else 0 end ), 
				sum( case when e2 = 2  then 1 else 0 end ),
				sum( case when e3 = 2  then 1 else 0 end ),
				sum( case when e4 = 2  then 1 else 0 end ),
				sum( case when f1 = 2  then 1 else 0 end ),
				sum( case when f2 = 2  then 1 else 0 end ),
				sum( case when f3 = 2  then 1 else 0 end ),
				sum( case when f4 = 2  then 1 else 0 end ),
				sum( case when g1 = 2  then 1 else 0 end ),
				sum( case when g2 = 2  then 1 else 0 end ),
				sum( case when g3 = 2  then 1 else 0 end ),
				sum( case when g4 = 2  then 1 else 0 end )

		from choixAnalyse;
	";

	$result = mysql_query($query) or die(mysql_error());

	while($row = mysql_fetch_row($result)){
	$a1_tresmauvais = $row[0];
	$a2_tresmauvais = $row[1];
	$a3_tresmauvais = $row[2];
	$a4_tresmauvais = $row[3];
	$b1_tresmauvais = $row[4];
	$b2_tresmauvais = $row[5];
	$b3_tresmauvais = $row[6];
	$b4_tresmauvais = $row[7];
	$c1_tresmauvais = $row[8];
	$c2_tresmauvais = $row[9];
	$c3_tresmauvais = $row[10];
	$c4_tresmauvais = $row[11];
	$d1_tresmauvais = $row[12];
	$d2_tresmauvais = $row[13];
	$d3_tresmauvais = $row[14];
	$d4_tresmauvais = $row[15];
	$e1_tresmauvais = $row[16];
	$e2_tresmauvais = $row[17];
	$e3_tresmauvais = $row[18];
	$e4_tresmauvais = $row[19];
	$f1_tresmauvais = $row[20];
	$f2_tresmauvais = $row[21];
	$f3_tresmauvais = $row[22];
	$f4_tresmauvais = $row[23];
	$g1_tresmauvais = $row[24];
	$g2_tresmauvais = $row[25];
	$g3_tresmauvais = $row[26];
	$g4_tresmauvais = $row[27];

	$a1_mauvais = $row[28];
	$a2_mauvais = $row[29];
	$a3_mauvais = $row[30];
	$a4_mauvais = $row[31];
	$b1_mauvais = $row[32];
	$b2_mauvais = $row[33];
	$b3_mauvais = $row[34];
	$b4_mauvais = $row[35];
	$c1_mauvais = $row[36];
	$c2_mauvais = $row[37];
	$c3_mauvais = $row[38];
	$c4_mauvais = $row[39];
	$d1_mauvais = $row[40];
	$d2_mauvais = $row[41];
	$d3_mauvais = $row[42];
	$d4_mauvais = $row[43];
	$e1_mauvais = $row[44];
	$e2_mauvais = $row[45];
	$e3_mauvais = $row[46];
	$e4_mauvais = $row[47];
	$f1_mauvais = $row[48];
	$f2_mauvais = $row[49];
	$f3_mauvais = $row[50];
	$f4_mauvais = $row[51];
	$g1_mauvais = $row[52];
	$g2_mauvais = $row[53];
	$g3_mauvais = $row[54];
	$g4_mauvais = $row[55];

	$a1_bon = $row[56];
	$a2_bon = $row[57];
	$a3_bon = $row[58];
	$a4_bon = $row[59];
	$b1_bon = $row[60];
	$b2_bon = $row[61];
	$b3_bon = $row[62];
	$b4_bon = $row[63];
	$c1_bon = $row[64];
	$c2_bon = $row[65];
	$c3_bon = $row[66];
	$c4_bon = $row[67];
	$d1_bon = $row[68];
	$d2_bon = $row[69];
	$d3_bon = $row[70];
	$d4_bon = $row[71];
	$e1_bon = $row[72];
	$e2_bon = $row[73];
	$e3_bon = $row[74];
	$e4_bon = $row[75];
	$f1_bon = $row[76];
	$f2_bon = $row[77];
	$f3_bon = $row[78];
	$f4_bon = $row[79];
	$g1_bon = $row[80];
	$g2_bon = $row[81];
	$g3_bon = $row[82];
	$g4_bon = $row[83];

	$a1_tresbon = $row[84];
	$a2_tresbon = $row[85];
	$a3_tresbon = $row[86];
	$a4_tresbon = $row[87];
	$b1_tresbon = $row[88];
	$b2_tresbon = $row[89];
	$b3_tresbon = $row[90];
	$b4_tresbon = $row[91];
	$c1_tresbon = $row[92];
	$c2_tresbon = $row[93];
	$c3_tresbon = $row[94];
	$c4_tresbon = $row[95];
	$d1_tresbon = $row[96];
	$d2_tresbon = $row[97];
	$d3_tresbon = $row[98];
	$d4_tresbon = $row[99];
	$e1_tresbon = $row[100];
	$e2_tresbon = $row[101];
	$e3_tresbon = $row[102];
	$e4_tresbon = $row[103];
	$f1_tresbon = $row[104];
	$f2_tresbon = $row[105];
	$f3_tresbon = $row[106];
	$f4_tresbon = $row[107];
	$g1_tresbon = $row[108];
	$g2_tresbon = $row[109];
	$g3_tresbon = $row[110];
	$g4_tresbon = $row[111];
	}

	mysql_close();
?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/theme.css" rel="stylesheet" type="text/css" />
		<title>Résultat choix Analyse</title>
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
			<h1>Résultat</h1>
			<p>résultat de la grille de choix</p>
		</div>

			<div class = "row">

					<table class="table table-bordered ">

						<caption> <h2> Grille de choix Interface/Débat </h2> </caption>
						
						<thead>
							<tr>
								<th class="active" colspan = "2"></th> 
			 
								<th class='active' colspan = '4'>Explication</th> 
								<th class='active' colspan = '4'>Persuasion</th> 
								<th class='active' colspan = '4'>Recherche d'information</th> 
								<th class='active' colspan = '4'>Déliberation</th>
							</tr>
						</thead>
						<thead>
							<tr>
								<th class="active" colspan = "2"></th> 
								<th>Très Mauvais</th> 
								<th class="active" >Mauvais</th>
								<th>Bon</th>
								<th class="active" >Très Bon</th> 
								<th>Très Mauvais</th> 
								<th class="active" >Mauvais</th>
								<th>Bon</th>
								<th class="active" >Très Bon</th> 
								<th>Très Mauvais</th> 
								<th class="active" >Mauvais</th>
								<th>Bon</th>
								<th class="active" >Très Bon</th> 
								<th>Très Mauvais</th> 
								<th class="active" >Mauvais</th>
								<th>Bon</th>
								<th class="active" >Très Bon</th> 
							</tr>
						</thead>						
						<tbody>
							<tr>
								<th class="warning" rowspan="2">Graphes</th>
								<th class="warning">Arbre</th> 
								<th><?php echo $a1_tresmauvais?></th><th><?php echo $a1_mauvais?></th><th><?php echo $a1_bon?></th><th><?php echo $a1_tresbon?></th> 
								<th><?php echo $a2_tresmauvais?></th><th><?php echo $a2_mauvais?></th><th><?php echo $a2_bon?></th><th><?php echo $a2_tresbon?></th>  
								<th><?php echo $a3_tresmauvais?></th><th><?php echo $a3_mauvais?></th><th><?php echo $a3_bon?></th><th><?php echo $a3_tresbon?></th>  
								<th><?php echo $a4_tresmauvais?></th><th><?php echo $a4_mauvais?></th><th><?php echo $a4_bon?></th><th><?php echo $a4_tresbon?></th>  
							</tr>
							<tr>
								<th class="warning">Plan cartesien</th> 
								<th><?php echo $b1_tresmauvais?></th><th><?php echo $b1_mauvais?></th><th><?php echo $b1_bon?></th><th><?php echo $b1_tresbon?></th> 
								<th><?php echo $b2_tresmauvais?></th><th><?php echo $b2_mauvais?></th><th><?php echo $b2_bon?></th><th><?php echo $b2_tresbon?></th>  
								<th><?php echo $b3_tresmauvais?></th><th><?php echo $b3_mauvais?></th><th><?php echo $b3_bon?></th><th><?php echo $b3_tresbon?></th>  
								<th><?php echo $b4_tresmauvais?></th><th><?php echo $b4_mauvais?></th><th><?php echo $b4_bon?></th><th><?php echo $b4_tresbon?></th>    
							</tr>
							<tr>
								<th class="success" rowspan="4">Autres outils</th>
								<th class="success">Aucun</th> 
								<th><?php echo $c1_tresmauvais?></th><th><?php echo $c1_mauvais?></th><th><?php echo $c1_bon?></th><th><?php echo $c1_tresbon?></th> 
								<th><?php echo $c2_tresmauvais?></th><th><?php echo $c2_mauvais?></th><th><?php echo $c2_bon?></th><th><?php echo $c2_tresbon?></th>  
								<th><?php echo $c3_tresmauvais?></th><th><?php echo $c3_mauvais?></th><th><?php echo $c3_bon?></th><th><?php echo $c3_tresbon?></th>  
								<th><?php echo $c4_tresmauvais?></th><th><?php echo $c4_mauvais?></th><th><?php echo $c4_bon?></th><th><?php echo $c4_tresbon?></th>   
							</tr>
							<tr>
								<th class="success" >Chat écrit</th> 
								<th><?php echo $d1_tresmauvais?></th><th><?php echo $d1_mauvais?></th><th><?php echo $d1_bon?></th><th><?php echo $d1_tresbon?></th> 
								<th><?php echo $d2_tresmauvais?></th><th><?php echo $d2_mauvais?></th><th><?php echo $d2_bon?></th><th><?php echo $d2_tresbon?></th>  
								<th><?php echo $d3_tresmauvais?></th><th><?php echo $d3_mauvais?></th><th><?php echo $d3_bon?></th><th><?php echo $d3_tresbon?></th>  
								<th><?php echo $d4_tresmauvais?></th><th><?php echo $d4_mauvais?></th><th><?php echo $d4_bon?></th><th><?php echo $d4_tresbon?></th>   
							</tr>
							<tr>
								<th class="success" >Chat vocal</th> 
								<th><?php echo $e1_tresmauvais?></th><th><?php echo $e1_mauvais?></th><th><?php echo $e1_bon?></th><th><?php echo $e1_tresbon?></th> 
								<th><?php echo $e2_tresmauvais?></th><th><?php echo $e2_mauvais?></th><th><?php echo $e2_bon?></th><th><?php echo $e2_tresbon?></th>  
								<th><?php echo $e3_tresmauvais?></th><th><?php echo $e3_mauvais?></th><th><?php echo $e3_bon?></th><th><?php echo $e3_tresbon?></th>  
								<th><?php echo $e4_tresmauvais?></th><th><?php echo $e4_mauvais?></th><th><?php echo $e4_bon?></th><th><?php echo $e4_tresbon?></th>   
							</tr>
							<tr>
								<th class="success" >Forum</th> 
								<th><?php echo $f1_tresmauvais?></th><th><?php echo $f1_mauvais?></th><th><?php echo $f1_bon?></th><th><?php echo $f1_tresbon?></th> 
								<th><?php echo $f2_tresmauvais?></th><th><?php echo $f2_mauvais?></th><th><?php echo $f2_bon?></th><th><?php echo $f2_tresbon?></th>  
								<th><?php echo $f3_tresmauvais?></th><th><?php echo $f3_mauvais?></th><th><?php echo $f3_bon?></th><th><?php echo $f3_tresbon?></th>  
								<th><?php echo $f4_tresmauvais?></th><th><?php echo $f4_mauvais?></th><th><?php echo $f4_bon?></th><th><?php echo $f4_tresbon?></th>     
							</tr>
							<tr>
								<th class="danger" colspan="2">Statistiques</th> 
								<th><?php echo $g1_tresmauvais?></th><th><?php echo $g1_mauvais?></th><th><?php echo $g1_bon?></th><th><?php echo $g1_tresbon?></th> 
								<th><?php echo $g2_tresmauvais?></th><th><?php echo $g2_mauvais?></th><th><?php echo $g2_bon?></th><th><?php echo $g2_tresbon?></th>  
								<th><?php echo $g3_tresmauvais?></th><th><?php echo $g3_mauvais?></th><th><?php echo $g3_bon?></th><th><?php echo $g3_tresbon?></th>  
								<th><?php echo $g4_tresmauvais?></th><th><?php echo $g4_mauvais?></th><th><?php echo $g4_bon?></th><th><?php echo $g4_tresbon?></th>   
							</tr>
							
							
						</tbody>
					</table>
			</div>	
			
		</div>	
	</body>
</html>