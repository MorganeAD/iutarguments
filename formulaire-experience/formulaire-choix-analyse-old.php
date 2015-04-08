<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/theme.css" rel="stylesheet" type="text/css" />
		<title>Formulaire choix Analyse</title>
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
			<?php 
			$groupe=$_GET['groupe'];
			echo "<h1> Groupe $groupe </h1>";
			?>
			<p>Notre projet tuteuré a pour but de proposer la meilleure interface afin de pouvoir représenter un débat sous la forme de graphique. Dans le cadre de la partie pratique de notre projet, nous souhaiterions vous faire voter afin de savoir qu'elle serait selon vous le meilleur couple "Interface / type de débat".</p>
		</div>
			<div class = "row">
			
				<form action="traitement-choix-analyse.php" method="post">
				
					<table class="table table-bordered ">

						<caption> <h2> Grille de choix Interface/Débat </h2> </caption>

						<?php 
							$options = "
															<option value='0'></option>
															<option value='-2'>Très mauvais</option>
															<option value='-1'>Mauvais</option>
															<option value='1'>Bien</option>
															<option value='2'>Très bien</option>";

							if($groupe==1)
							{
								echo "
												<thead>
													<tr>
														<th class='active' colspan = '2'></th> 
														<th>Persuasion</th> 
														<th>Recherche d'information</th> 
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<th class='warning' rowspan='2'>Graphes</th>
														<th class='warning'>Arbre</th> 
														<th><select name='a2' id='a2'>$options</select></th> 
														<th><select name='a3' id='a3'>$options</select></th> 
													</tr>
													<tr>
														<th class='warning'>Plan cartesien</th> 
														<th><select name='b2' id='b2'>$options</select></th> 
														<th><select name='b3' id='b3'>$options</select></th>  
													</tr>
													<tr>
														<th class='success' rowspan='4'>Communication</th>
														<th class='success'>Pas d'outil</th> 
														<th><select name='c2' id='c2'>$options</select></th> 
														<th><select name='c3' id='c3'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat écrit</th> 
														<th><select name='d2' id='d2'>$options</select></th> 
														<th><select name='d3' id='d3'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat vocal</th> 
														<th><select name='e2' id='e2'>$options</select></th> 
														<th><select name='e3' id='e3'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Forum</th> 
														<th><select name='f2' id='f2'>$options</select></th> 
														<th><select name='f3' id='f3'>$options</select></th> 
													</tr>
													<tr>
														<th class='danger' colspan='2'>Statistiques</th> 
														<th><select name='g2' id='g2'>$options</select></th> 
														<th><select name='g3' id='g3'>$options</select></th>  
													</tr>
													
													
												</tbody>";
							}
							else if($groupe==2)
							{
								echo "
												<thead>
													<tr>
														<th class='active' colspan = '2'></th> 
														<th>Recherche d'information</th> 
														<th>Déliberation</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<th class='warning' rowspan='2'>Graphes</th>
														<th class='warning'>Arbre</th> 
														<th><select name='a3' id='a3'>$options</select></th> 
														<th><select name='a4' id='a4'>$options</select></th> 
													</tr>
													<tr>
														<th class='warning'>Plan cartesien</th> 
														<th><select name='b3' id='b3'>$options</select></th> 
														<th><select name='b4' id='b4'>$options</select></th>   
													</tr>
													<tr>
														<th class='success' rowspan='4'>Communication</th>
														<th class='success'>Pas d'outil</th>  
														<th><select name='c3' id='c3'>$options</select></th> 
														<th><select name='c4' id='c4'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat écrit</th> 
														<th><select name='d3' id='d3'>$options</select></th> 
														<th><select name='d4' id='d4'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat vocal</th> 
														<th><select name='e3' id='e3'>$options</select></th> 
														<th><select name='e4' id='e4'>$options</select></th>  
													</tr>
													<tr>
														<th class='success' >Forum</th> 
														<th><select name='f3' id='f3'>$options</select></th> 
														<th><select name='f4' id='f4'>$options</select></th>  
													</tr>
													<tr>
														<th class='danger' colspan='2'>Statistiques</th> 
														<th><select name='g3' id='g3'>$options</select></th> 
														<th><select name='g4' id='g4'>$options</select></th>  
													</tr>
													
													
												</tbody>";
							}
							else if($groupe==3)
							{
								echo "
												<thead>
													<tr>
														<th class='active' colspan = '2'></th> 
														<th>Explication</th> 
														<th>Déliberation</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<th class='warning' rowspan='2'>Graphes</th>
														<th class='warning'>Arbre</th> 
														<th><select name='a1' id='a1'>$options</select></th> 
														<th><select name='a4' id='a4'>$options</select></th> 
													</tr>
													<tr>
														<th class='warning'>Plan cartesien</th> 
														<th><select name='b1' id='b1'>$options</select></th> 
														<th><select name='b4' id='b4'>$options</select></th>   
													</tr>
													<tr>
														<th class='success' rowspan='4'>Communication</th>
														<th class='success'>Pas d'outil</th> 
														<th><select name='c1' id='c1'>$options</select></th> 
														<th><select name='c4' id='c4'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat écrit</th> 
														<th><select name='d1' id='d1'>$options</select></th> 
														<th><select name='d4' id='d4'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat vocal</th> 
														<th><select name='e1' id='e1'>$options</select></th> 
														<th><select name='e4' id='e4'>$options</select></th>  
													</tr>
													<tr>
														<th class='success' >Forum</th> 
														<th><select name='f1' id='f1'>$options</select></th>  
														<th><select name='f4' id='f4'>$options</select></th>  
													</tr>
													<tr>
														<th class='danger' colspan='2'>Statistiques</th> 
														<th><select name='g1' id='g1'>$options</select></th> 
														<th><select name='g4' id='g4'>$options</select></th>  
													</tr>
													
													
												</tbody>";
							}
							else if($groupe==4)
							{
								echo "
												<thead>
													<tr>
														<th class='active' colspan = '2'></th> 
														<th>Explication</th> 
														<th>Persuasion</th> 
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<th class='warning' rowspan='2'>Graphes</th>
														<th class='warning'>Arbre</th> 
														<th><select name='a1' id='a1'>$options</select></th> 
														<th><select name='a2' id='a2'>$options</select></th> 
													</tr>
													<tr>
														<th class='warning'>Plan cartesien</th> 
														<th><select name='b1' id='b1'>$options</select></th> 
														<th><select name='b2' id='b2'>$options</select></th>    
													</tr>
													<tr>
														<th class='success' rowspan='4'>Communication</th>
														<th class='success'>Pas d'outil</th> 
														<th><select name='c1' id='c1'>$options</select></th> 
														<th><select name='c2' id='c2'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat écrit</th> 
														<th><select name='d1' id='d1'>$options</select></th> 
														<th><select name='d2' id='d2'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat vocal</th> 
														<th><select name='e1' id='e1'>$options</select></th> 
														<th><select name='e2' id='e2'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Forum</th> 
														<th><select name='f1' id='f1'>$options</select></th> 
														<th><select name='f2' id='f2'>$options</select></th> 
													</tr>
													<tr>
														<th class='danger' colspan='2'>Statistiques</th> 
														<th><select name='g1' id='g1'>$options</select></th> 
														<th><select name='g2' id='g2'>$options</select></th> 
													</tr>
													
													
												</tbody>";
							}
							else if($groupe==5)
							{
								echo "
												<thead>
													<tr>
														<th class='active' colspan = '2'></th> 
														<th>Persuasion</th> 
														<th>Déliberation</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<th class='warning' rowspan='2'>Graphes</th>
														<th class='warning'>Arbre</th> 
														<th><select name='a2' id='a2'>$options</select></th> 
														<th><select name='a4' id='a4'>$options</select></th> 
													</tr>
													<tr>
														<th class='warning'>Plan cartesien</th> 
														<th><select name='b2' id='b2'>$options</select></th>  
														<th><select name='b4' id='b4'>$options</select></th>   
													</tr>
													<tr>
														<th class='success' rowspan='4'>Communication</th>
														<th class='success'>Pas d'outil</th>  
														<th><select name='c2' id='c2'>$options</select></th> 
														<th><select name='c4' id='c4'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat écrit</th>  
														<th><select name='d2' id='d2'>$options</select></th> 
														<th><select name='d4' id='d4'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat vocal</th> 
														<th><select name='e2' id='e2'>$options</select></th> 
														<th><select name='e4' id='e4'>$options</select></th>  
													</tr>
													<tr>
														<th class='success' >Forum</th> 
														<th><select name='f2' id='f2'>$options</select></th> 
														<th><select name='f4' id='f4'>$options</select></th>  
													</tr>
													<tr>
														<th class='danger' colspan='2'>Statistiques</th> 
														<th><select name='g2' id='g2'>$options</select></th> 
														<th><select name='g4' id='g4'>$options</select></th>  
													</tr>
													
													
												</tbody>";
							}
							else if($groupe==6)
							{
								echo "
												<thead>
													<tr>
														<th class='active' colspan = '2'></th> 
									 
														<th>Explication</th> 
														<th>Recherche d'information</th> 
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<th class='warning' rowspan='2'>Graphes</th>
														<th class='warning'>Arbre</th> 
														<th><select name='a1' id='a1'>$options</select></th> 
														<th><select name='a3' id='a3'>$options</select></th> 
													</tr>
													<tr>
														<th class='warning'>Plan cartesien</th> 
														<th><select name='b1' id='b1'>$options</select></th> 
														<th><select name='b3' id='b3'>$options</select></th>   
													</tr>
													<tr>
														<th class='success' rowspan='4'>Communication</th>
														<th class='success'>Pas d'outil</th> 
														<th><select name='c1' id='c1'>$options</select></th> 
														<th><select name='c3' id='c3'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat écrit</th> 
														<th><select name='d1' id='d1'>$options</select></th> 
														<th><select name='d3' id='d3'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Chat vocal</th> 
														<th><select name='e1' id='e1'>$options</select></th> 
														<th><select name='e3' id='e3'>$options</select></th> 
													</tr>
													<tr>
														<th class='success' >Forum</th> 
														<th><select name='f1' id='f1'>$options</select></th> 
														<th><select name='f3' id='f3'>$options</select></th>  
													</tr>
													<tr>
														<th class='danger' colspan='2'>Statistiques</th> 
														<th><select name='g1' id='g1'>$options</select></th> 
														<th><select name='g3' id='g3'>$options</select></th> 
													</tr>
												</tbody>";
							}


						;?>
					</table>
					<button type='submit' class="btn btn-lg btn-default">Soumettre</button>
				</form>
			</div>	
			
		</div>	
	</body>
</html>