<!DOCTYPE html>
<html>
	<head>
		<title>Camille Pogu</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<div id="tout">
			<nav>
				<a href="index.html"> <img src="../images/ceramic_logo.png" alt="logo" id="logo"> </a>

					<ul>
							<li> <a href="ecran.html"> écran</a></li>
							<li><a href="etendue.html"> étendue d'eau sallée </a></li>
							<li><a href="plusieurs_possibilites.html"> plusieurs possibilités</a></li>
							<li><a href="living.html"> living </a></li>
							<li><a href="communication_impossible.html">la possibilité d'une communication</a></li>
							<li><a href="trophee_sans_victoire.html">trophée sans victoire</a></li>
							<li><a href="association_1.html">association 1</a></li>
							<li><a href="3_solutions.html"> 3 solutions </a></li>
							<li><a href="changement_etat.html"> changement d'état </a></li>
							<li><a href="la_strategie_du_mot_clef.html">la stratégie du mot-clef</a></li>
							<li><a href="recherche_de_solutions.html">recherche de solutions</a></li>
					</ul>
				<h2><a href="collaborations.html">COLLABORATIONS</a></h2>
					
				<h2><a>À PROPOS</a></h2>
					
				
			</nav>

			<section id="acceuil">

                <?php
                foreach($articles as $article){
                    echo $article['text'];
                }
                ?> 
			</section>

		</div><!-- tout -->
	</body>
</html>