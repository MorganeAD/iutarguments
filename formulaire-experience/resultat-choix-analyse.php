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
		select 	sum( IF( SIGN( a1 ) = -1, a1, 0 ) ),
				sum( IF( SIGN( a2 ) = -1, a2, 0 ) ),
				sum( IF( SIGN( a3 ) = -1, a3, 0 ) ),
				sum( IF( SIGN( a4 ) = -1, a4, 0 ) ),
				sum( IF( SIGN( b1 ) = -1, b1, 0 ) ),
				sum( IF( SIGN( b2 ) = -1, b2, 0 ) ),
				sum( IF( SIGN( b3 ) = -1, b3, 0 ) ),
				sum( IF( SIGN( b4 ) = -1, b4, 0 ) ),
				sum( IF( SIGN( c1 ) = -1, c1, 0 ) ),
				sum( IF( SIGN( c2 ) = -1, c2, 0 ) ),
				sum( IF( SIGN( c3 ) = -1, c3, 0 ) ),
				sum( IF( SIGN( c4 ) = -1, c4, 0 ) ),
				sum( IF( SIGN( d1 ) = -1, d1, 0 ) ),
				sum( IF( SIGN( d2 ) = -1, d2, 0 ) ),
				sum( IF( SIGN( d3 ) = -1, d3, 0 ) ),
				sum( IF( SIGN( d4 ) = -1, d4, 0 ) ),
				sum( IF( SIGN( e1 ) = -1, e1, 0 ) ), 
				sum( IF( SIGN( e2 ) = -1, e2, 0 ) ),
				sum( IF( SIGN( e3 ) = -1, e3, 0 ) ),
				sum( IF( SIGN( e4 ) = -1, e4, 0 ) ),
				sum( IF( SIGN( f1 ) = -1, f1, 0 ) ),
				sum( IF( SIGN( f2 ) = -1, f2, 0 ) ),
				sum( IF( SIGN( f3 ) = -1, f3, 0 ) ),
				sum( IF( SIGN( f4 ) = -1, f4, 0 ) ),
				sum( IF( SIGN( g1 ) = -1, g1, 0 ) ),
				sum( IF( SIGN( g2 ) = -1, g2, 0 ) ),
				sum( IF( SIGN( g3 ) = -1, g3, 0 ) ),
				sum( IF( SIGN( g4 ) = -1, g4, 0 ) ),
				sum( IF( SIGN( a1 ) = 1, a1, 0 ) ),
				sum( IF( SIGN( a2 ) = 1, a2, 0 ) ),
				sum( IF( SIGN( a3 ) = 1, a3, 0 ) ),
				sum( IF( SIGN( a4 ) = 1, a4, 0 ) ),
				sum( IF( SIGN( b1 ) = 1, b1, 0 ) ),
				sum( IF( SIGN( b2 ) = 1, b2, 0 ) ),
				sum( IF( SIGN( b3 ) = 1, b3, 0 ) ),
				sum( IF( SIGN( b4 ) = 1, b4, 0 ) ),
				sum( IF( SIGN( c1 ) = 1, c1, 0 ) ),
				sum( IF( SIGN( c2 ) = 1, c2, 0 ) ),
				sum( IF( SIGN( c3 ) = 1, c3, 0 ) ),
				sum( IF( SIGN( c4 ) = 1, c4, 0 ) ),
				sum( IF( SIGN( d1 ) = 1, d1, 0 ) ),
				sum( IF( SIGN( d2 ) = 1, d2, 0 ) ),
				sum( IF( SIGN( d3 ) = 1, d3, 0 ) ),
				sum( IF( SIGN( d4 ) = 1, d4, 0 ) ),
				sum( IF( SIGN( e1 ) = 1, e1, 0 ) ), 
				sum( IF( SIGN( e2 ) = 1, e2, 0 ) ),
				sum( IF( SIGN( e3 ) = 1, e3, 0 ) ),
				sum( IF( SIGN( e4 ) = 1, e4, 0 ) ),
				sum( IF( SIGN( f1 ) = 1, f1, 0 ) ),
				sum( IF( SIGN( f2 ) = 1, f2, 0 ) ),
				sum( IF( SIGN( f3 ) = 1, f3, 0 ) ),
				sum( IF( SIGN( f4 ) = 1, f4, 0 ) ),
				sum( IF( SIGN( g1 ) = 1, g1, 0 ) ),
				sum( IF( SIGN( g2 ) = 1, g2, 0 ) ),
				sum( IF( SIGN( g3 ) = 1, g3, 0 ) ),
				sum( IF( SIGN( g4 ) = 1, g4, 0 ) ),
				sum(a1),
				sum(a2),
				sum(a3),
				sum(a4),
				sum(b1),
				sum(b2),
				sum(b3),
				sum(b4),
				sum(c1),
				sum(c2),
				sum(c3),
				sum(c4),
				sum(d1),
				sum(d2),
				sum(d3),
				sum(d4),
				sum(e1), 
				sum(e2),
				sum(e3),
				sum(e4),
				sum(f1),
				sum(f2),
				sum(f3),
				sum(f4),
				sum(g1),
				sum(g2),
				sum(g3),
				sum(g4)

		from choixAnalyse;
	";

	$result = mysql_query($query) or die(mysql_error());

	while($row = mysql_fetch_row($result)){
	$na1 = $row[0];
	$na2 = $row[1];
	$na3 = $row[2];
	$na4 = $row[3];
	$nb1 = $row[4];
	$nb2 = $row[5];
	$nb3 = $row[6];
	$nb4 = $row[7];
	$nc1 = $row[8];
	$nc2 = $row[9];
	$nc3 = $row[10];
	$nc4 = $row[11];
	$nd1 = $row[12];
	$nd2 = $row[13];
	$nd3 = $row[14];
	$nd4 = $row[15];
	$ne1 = $row[16];
	$ne2 = $row[17];
	$ne3 = $row[18];
	$ne4 = $row[19];
	$nf1 = $row[20];
	$nf2 = $row[21];
	$nf3 = $row[22];
	$nf4 = $row[23];
	$ng1 = $row[24];
	$ng2 = $row[25];
	$ng3 = $row[26];
	$ng4 = $row[27];

	$pa1 = $row[28];
	$pa2 = $row[29];
	$pa3 = $row[30];
	$pa4 = $row[31];
	$pb1 = $row[32];
	$pb2 = $row[33];
	$pb3 = $row[34];
	$pb4 = $row[35];
	$pc1 = $row[36];
	$pc2 = $row[37];
	$pc3 = $row[38];
	$pc4 = $row[39];
	$pd1 = $row[40];
	$pd2 = $row[41];
	$pd3 = $row[42];
	$pd4 = $row[43];
	$pe1 = $row[44];
	$pe2 = $row[45];
	$pe3 = $row[46];
	$pe4 = $row[47];
	$pf1 = $row[48];
	$pf2 = $row[49];
	$pf3 = $row[50];
	$pf4 = $row[51];
	$pg1 = $row[52];
	$pg2 = $row[53];
	$pg3 = $row[54];
	$pg4 = $row[55];

	$suma1 = $row[56];
	$suma2 = $row[57];
	$suma3 = $row[58];
	$suma4 = $row[59];
	$sumb1 = $row[60];
	$sumb2 = $row[61];
	$sumb3 = $row[62];
	$sumb4 = $row[63];
	$sumc1 = $row[64];
	$sumc2 = $row[65];
	$sumc3 = $row[66];
	$sumc4 = $row[67];
	$sumd1 = $row[68];
	$sumd2 = $row[69];
	$sumd3 = $row[70];
	$sumd4 = $row[71];
	$sume1 = $row[72];
	$sume2 = $row[73];
	$sume3 = $row[74];
	$sume4 = $row[75];
	$sumf1 = $row[76];
	$sumf2 = $row[77];
	$sumf3 = $row[78];
	$sumf4 = $row[79];
	$sumg1 = $row[80];
	$sumg2 = $row[81];
	$sumg3 = $row[82];
	$sumg4 = $row[83];
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
			 
								<th class='active' colspan = '3'>Explication</th> 
								<th class='active' colspan = '3'>Persuasion</th> 
								<th class='active' colspan = '3'>Recherche d'information</th> 
								<th class='active' colspan = '3'>Déliberation</th>
							</tr>
						</thead>
						<thead>
							<tr>
								<th class="active" colspan = "2"></th> 
								<th>-</th> 
								<th>+</th> 
								<th class='active'>sum</th> 
								<th>-</th> 
								<th>+</th> 
								<th class='active'>sum</th> 
								<th>-</th> 
								<th>+</th> 
								<th class='active'>sum</th> 
								<th>-</th> 
								<th>+</th> 
								<th class='active'>sum</th> 
							</tr>
						</thead>						
						<tbody>
							<tr>
								<th class="warning" rowspan="2">Graphes</th>
								<th class="warning">Arbre</th> 
								<th><?php echo $na1?></th><th><?php echo $pa1?></th><th class='active'><?php echo $suma1?></th> 
								<th><?php echo $na2?></th><th><?php echo $pa2?></th><th class='active'><?php echo $suma2?></th>  
								<th><?php echo $na3?></th><th><?php echo $pa3?></th><th class='active'><?php echo $suma3?></th>  
								<th><?php echo $na4?></th><th><?php echo $pa4?></th><th class='active'><?php echo $suma4?></th>  
							</tr>
							<tr>
								<th class="warning">Plan cartesien</th> 
								<th><?php echo $nb1?></th><th><?php echo $pb1?></th><th class='active'><?php echo $sumb1?></th> 
								<th><?php echo $nb2?></th><th><?php echo $pb2?></th><th class='active'><?php echo $sumb2?></th>  
								<th><?php echo $nb3?></th><th><?php echo $pb3?></th><th class='active'><?php echo $sumb3?></th>  
								<th><?php echo $nb4?></th><th><?php echo $pb4?></th><th class='active'><?php echo $sumb4?></th>    
							</tr>
							<tr>
								<th class="success" rowspan="4">Autres outils</th>
								<th class="success">Aucun</th> 
								<th><?php echo $nc1?></th><th><?php echo $pc1?></th><th class='active'><?php echo $sumc1?></th> 
								<th><?php echo $nc2?></th><th><?php echo $pc2?></th><th class='active'><?php echo $sumc2?></th>  
								<th><?php echo $nc3?></th><th><?php echo $pc3?></th><th class='active'><?php echo $sumc3?></th>  
								<th><?php echo $nc4?></th><th><?php echo $pc4?></th><th class='active'><?php echo $sumc4?></th>   
							</tr>
							<tr>
								<th class="success" >Chat écrit</th> 
								<th><?php echo $nd1?></th><th><?php echo $pd1?></th><th class='active'><?php echo $sumd1?></th> 
								<th><?php echo $nd2?></th><th><?php echo $pd2?></th><th class='active'><?php echo $sumd2?></th>  
								<th><?php echo $nd3?></th><th><?php echo $pd3?></th><th class='active'><?php echo $sumd3?></th>  
								<th><?php echo $nd4?></th><th><?php echo $pd4?></th><th class='active'><?php echo $sumd4?></th>   
							</tr>
							<tr>
								<th class="success" >Chat vocal</th> 
								<th><?php echo $ne1?></th><th><?php echo $pe1?></th><th class='active'><?php echo $sume1?></th> 
								<th><?php echo $ne2?></th><th><?php echo $pe2?></th><th class='active'><?php echo $sume2?></th>  
								<th><?php echo $ne3?></th><th><?php echo $pe3?></th><th class='active'><?php echo $sume3?></th>  
								<th><?php echo $ne4?></th><th><?php echo $pe4?></th><th class='active'><?php echo $sume4?></th>   
							</tr>
							<tr>
								<th class="success" >Forum</th> 
								<th><?php echo $nf1?></th><th><?php echo $pf1?></th><th class='active'><?php echo $sumf1?></th> 
								<th><?php echo $nf2?></th><th><?php echo $pf2?></th><th class='active'><?php echo $sumf2?></th>  
								<th><?php echo $nf3?></th><th><?php echo $pf3?></th><th class='active'><?php echo $sumf3?></th>  
								<th><?php echo $nf4?></th><th><?php echo $pf4?></th><th class='active'><?php echo $sumf4?></th>     
							</tr>
							<tr>
								<th class="danger" colspan="2">Statistiques</th> 
								<th><?php echo $ng1?></th><th><?php echo $pg1?></th><th class='active'><?php echo $sumg1?></th> 
								<th><?php echo $ng2?></th><th><?php echo $pg2?></th><th class='active'><?php echo $sumg2?></th>  
								<th><?php echo $ng3?></th><th><?php echo $pg3?></th><th class='active'><?php echo $sumg3?></th>  
								<th><?php echo $ng4?></th><th><?php echo $pg4?></th><th class='active'><?php echo $sumg4?></th>   
							</tr>
							
							
						</tbody>
					</table>
			</div>	
			
		</div>	
	</body>
</html>