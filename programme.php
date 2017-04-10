<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Festival : les films plein air !</title>
  <meta name="description" content="Festival des films plein air du 5 au 8 août 2017 à partir de 18h. Entrée gratuite, rendez-vous au parc Monceau à Paris !" />
  <meta name="keywords" content="films, plein air, festival, parc monceau, 5 au 8 aout, 18h-minuit, gratuit, Paris">
  <meta name="author" content="Riwalenn Bas">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://use.fontawesome.com/a2fc004260.js"></script>
</head>
<body class="festival">
<!-- ---------------------------------------------- 
	                   HEADER
	 ---------------------------------------------- -->
	<?php 
				include 'header.html'; 
	?>

<!-- ---------------------------------------------- 
	                    MENU
	 ---------------------------------------------- -->		
	 	<?php 
				include 'menu.html'; 
		?>

<!-- ---------------------------------------------- 
	                  Texte Programme
	 ---------------------------------------------- -->
	 <div class="row page-programme-txt">
	 	<div class="col-md-12">
	 	<h3>Le programme du 5 au 8 août 2017 :</h3>
	 	<p>les projections ont lieu à minuit avec une pause de 15 minutes entre chaque film.<br />
	 	L'entrée au festival est gratuite mais une pré-inscription à chaque séance est demandée.<br />
	 	Pour vous inscrire, vous devez remplir le formulaire de pré-inscription disponible sur chaque page détaillée des films projetés ou merci de cliquer sur <a href="formulaire-inscription.php" target="_blank" alt="formulaire d'inscription">ce lien</a>.</p>
	 	</div>
	 </div>

<!-- ---------------------------------------------- 
	                PROGRAMME
	 ---------------------------------------------- -->
	<div class="row page-programme">
		<div class="col-md-3">
			<img src="images/vignettes/enemy.jpg">
			<h4>Enemy</h4>
			<p>Projection : 5 août à 18h<br/>
			Durée 1h30<br />
			<a href="films/enemy.php" target="_blank" alt="Détails sur le film Enemy">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/vol-au-dessus.jpg">
			<h4>Vol au dessus d'un nid de coucou</h4>
			<p>Projection : 5 août à 19h45<br/>
			Durée 2h13<br />
			<a href="films/vol-au-dessus.html" target="_blank" alt="Détails sur le film Vol au dessus d'un nid de coucou">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/holy-motors.jpg">
			<h4>Holy Motors</h4>
			<p>Projection : 6 août à 18h<br/>
			Durée 1h55<br />
			<a href="films/holy-motors.html" target="_blank" alt="Détails sur le film Holy motors">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/requiem-for-a-dream.jpg">
			<h4>Requiem for a dream</h4>
			<p>Projection : 6 août à 20h10<br/>
			Durée 1h42<br />
			<a href="films/requiem-for-a-dream.html" target="_blank" alt="Détails sur le film Requiem for a dream">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/into-the-wild.jpg">
			<h4>Into the wild</h4>
			<p>Projection : 7 août à 18h<br/>
			Durée 2h28<br />
			<a href="films/into-the-wild.html" target="_blank" alt="Détails sur le film Into the wild">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/demolition.jpg">
			<h4>Demolition</h4>
			<p>Projection : 7 août à 20h45<br/>
			Durée 1h41<br />
			<a href="films/demolition.html" target="_blank" alt="Détails sur le film Demolition">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/the-master.jpg">
			<h4>The master</h4>
			<p>Projection : 8 août à 18h<br/>
			Durée 2h24<br />
			<a href="films/the-master.html" target="_blank" alt="Détails sur le film The master">En savoir +</a></p>
		</div>
		<div class="col-md-3">
			<img src="images/vignettes/cercle-poetes-disparus.jpg">
			<h4>le cercle des poètes disparus</h4>
			<p>Projection : 8 août à 20h45<br/>
			Durée 1h30<br />
			<a href="films/cercle-poetes-disparus.html" target="_blank" alt="Détails sur le film le cercle des poètes disparus">En savoir +</a></p>
		</div>
	</div>
<!-- ---------------------------------------------- 
	                   FOOTER
	 ---------------------------------------------- -->
	<?php 
				include 'footer.html'; 
	?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>