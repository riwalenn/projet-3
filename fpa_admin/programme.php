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
	                  Texte Programme
	 ---------------------------------------------- -->
	 <div class="row page-programme-txt">
	 	<div class="col-md-8">
	 		<h3>Le programme du 5 au 8 août 2017 :</h3>
	 	</div>
	 	<div class="col-md-4 form-modif">
	 		<form class="form-horizontal">
				    <div class="col-md-2">
				    	<button type="submit" class="btn btn-default">Modifier le titre &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
				    </div>
				</form>
	 	</div>
	 	<div class="col-md-8">
		 	<p>les projections ont lieu à minuit avec une pause de 15 minutes entre chaque film.<br />
		 	L'entrée au festival est gratuite mais une pré-inscription à chaque séance est demandée.<br />
		 	Pour vous inscrire, vous devez remplir le formulaire de pré-inscription disponible sur chaque page détaillée des films projetés ou merci de cliquer sur <a href="formulaire-inscription.php" target="_blank" alt="formulaire d'inscription">ce lien</a>.</p>
	 	</div>
	 	<div class="col-md-4 form-modif">
	 		<form class="form-horizontal">
				    <div class="col-md-2">
				    	<button type="submit" class="btn btn-default">Modifier le texte &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
				    </div>
				</form>
	 	</div>
	 </div>

<!-- ---------------------------------------------- 
	                PROGRAMME
	 ---------------------------------------------- -->
	<div class="row page-programme">
	<div class="col-md-12 form-modif">
	 		<form class="form-horizontal">
	 			<div class="col-md-6">
	 				<div class="form-group field-text">
						<label for="inputTitreFilm" class="control-label">Titre du film :</label>
						<input type="text" name="TitreFilm" class="form-control" id="inputTitreFilm" placeholder="titre du film" style="width: 50%;">
					</div>
	 				<div class="form-group field-text">
						<label for="inputDateSortie" class="control-label">Date de sortie et acteurs :</label>
						<textarea class="form-control" rows="3" style="width: 50%;"></textarea>
					</div>
	 				<div class="form-group field-text">
						<label for="inputGenre" class="control-label">Genre :</label>
						<input type="text" name="Genre" class="form-control" id="inputGenre" placeholder="genre" style="width: 50%;">
					</div>
		 			<div class="form-group field-text">
						<label for="inputSynopsis" class="control-label">Synopsis et détails :</label>
						<textarea class="form-control" rows="3" style="width: 50%;"></textarea>
					</div>
	 			</div>
	 			<div class="col-md-6 form-group field-text">
	 				<div class="ajout-img"><p><a href="#">télécharger une image</a></p></div>
	 				<h4>Détails sur la projection :</h4>
					<label for="inputDate" class="control-label">Date :</label>
					<input type="date" name="Date" class="form-control" id="inputDate" placeholder="date" style="width: 50%;">
					<label for="inputHoraire" class="control-label">Horaire :</label>
					<input type="text" name="Horaire" class="form-control" id="inputHoraire" placeholder="horaire de projection" style="width: 50%;">
					<label for="inputDuree" class="control-label">Durée :</label>
					<input type="text" name="Duree" class="form-control" id="inputDuree" placeholder="durée de projection" style="width: 50%;">
				</div>
				<div class="col-md-2">
				    <button type="submit" class="btn btn-default">Ajouter un film &nbsp;<i class="fa fa-plus ajout-film" aria-hidden="true"></i></button>
				</div>
			</form>
	 	</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/enemy.jpg">
			<h4>Enemy</h4>
			<p>Date : 5 août à 18h<br/>
			Durée 1h30<br />
			<a href="enemy.php" target="_blank" alt="Détails sur le film Enemy">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/vol-au-dessus.jpg">
			<h4>Vol au dessus d'un nid de coucou</h4>
			<p>Date : 5 août à 19h45<br/>
			Durée 2h13<br />
			<a href="#" target="_blank" alt="Détails sur le film Vol au dessus d'un nid de coucou">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/holy-motors.jpg">
			<h4>Holy Motors</h4>
			<p>Date : 6 août à 18h<br/>
			Durée 1h55<br />
			<a href="#" target="_blank" alt="Détails sur le film Holy motors">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/requiem-for-a-dream.jpg">
			<h4>Requiem for a dream</h4>
			<p>Date : 6 août à 20h10<br/>
			Durée 1h42<br />
			<a href="#" target="_blank" alt="Détails sur le film Requiem for a dream">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/into-the-wild.jpg">
			<h4>Into the wild</h4>
			<p>Date : 7 août à 18h<br/>
			Durée 2h28<br />
			<a href="#" target="_blank" alt="Détails sur le film Into the wild">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/demolition.jpg">
			<h4>Demolition</h4>
			<p>Date : 7 août à 20h45<br/>
			Durée 1h41<br />
			<a href="#" target="_blank" alt="Détails sur le film Demolition">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/the-master.jpg">
			<h4>The master</h4>
			<p>Date : 8 août à 18h<br/>
			Durée 2h24<br />
			<a href="#" target="_blank" alt="Détails sur le film The master">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="../images/vignettes/cercle-poetes-disparus.jpg">
			<h4>le cercle des poètes disparus</h4>
			<p>Date : 8 août à 20h45<br/>
			Durée 1h30<br />
			<a href="#" target="_blank" alt="Détails sur le film le cercle des poètes disparus">En savoir +</a></p>
			<button type="submit" class="btn btn-default">Modifier<br />les infos &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i></button>
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