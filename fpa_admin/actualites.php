<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Festival : les films plein air !</title>
  <meta name="description" content="Festival des films plein air du 5 au 8 août 2017 à partir de 18h. Entrée gratuite, rendez-vous au parc Monceau à Paris !" />
  <meta name="keywords" content="films, plein air, festival, parc monceau, 5 au 8 aout, 18h-minuit, gratuit, Paris">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Riwalenn Bas">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/style_admin.css">
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
	                  Texte Actus
	 ---------------------------------------------- -->
	 <div class="row page-actualites">
		 <div class="col-md-12">
		 	<form>
	 			<div class="col-md-6">
	 				<div class="form-group field-text">
						<label for="inputTitreActu" class="control-label">Titre de l'actualité :</label>
						<input type="text" name="TitreActu" class="form-control" id="inputTitreActu" placeholder="titre de l'actu" style="width: 50%;">
					</div>
	 				<div class="form-group field-text">
						<label for="inputObjetActu" class="control-label">Actualité :</label>
						<textarea class="form-control" rows="3" style="width: 50%;"></textarea>
					</div>
				</div>
				<div class="col-md-2">
				    <button type="submit" class="btn btn-default">Ajouter une actualité&nbsp;<i class="fa fa-plus ajout-film" aria-hidden="true"></i></button>
				</div>
			</form>
		 </div>
	 	<div class="col-md-8">
	 		<h4><a href="http://www.strategies.fr/actualites/medias/1062303W/les-films-d-auteur-se-mettent-a-la-svod.html" target="_blank">Les films d'auteur se mettent à la SVOD</a></h4>
	 		<h5>Stratégies - 10 avril 2017</h5>
	 		<p>Destinés aux cinéphiles avertis, de plus en plus de plateformes de vidéo en ligne offrent des abonnements centrés sur les films d'auteur, ...</p>
	 		<p><a href="http://www.strategies.fr/actualites/medias/1062303W/les-films-d-auteur-se-mettent-a-la-svod.html" target="_blank">Lire l'article sur Stratégies</a></p>
	 		<hr />
	 	</div>
	 	<div class="col-md-4">
	 		<form class="form-horizontal">
				<div class="col-md-2">
				   <button type="submit" class="btn btn-default">Modifier le billet &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
				</div>
			</form>
	 	</div>
	 	<div class="col-md-8">
	 		<h4><a href="http://www.lesinrocks.com/2017/03/15/cinema/actualite-cinema/new-yorker-attaque-le-cinema-francais-dauteur-juge-formate-et-conservateur-11922739/" target="_blank">Le “New Yorker” attaque le cinéma français d'auteur, jugé formaté et ...</a></h4>
	 		<h5>Les Inrocks - 15 mars 2017</h5>
	 		<p>Dans une longue chronique polémique, le prestigieux critique du “New Yorker” Richard Brody s'empare du documentaire de Claire Simon sur ...</p>
	 		<p><a href="http://www.lesinrocks.com/2017/03/15/cinema/actualite-cinema/new-yorker-attaque-le-cinema-francais-dauteur-juge-formate-et-conservateur-11922739/" target="_blank">Lire l'article sur Les Inrocks</a></p>
	 	</div>
	 	<div class="col-md-4">
	 		<form class="form-horizontal">
				<div class="col-md-2">
				   <button type="submit" class="btn btn-default">Modifier le billet &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
				</div>
			</form>
	 	</div>
	 </div>
<!-- ---------------------------------------------- 
	                   FOOTER
	 ---------------------------------------------- -->
	<?php 
				include 'footer.html'; 
	?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>