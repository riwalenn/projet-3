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
	            FILM (détail + formulaire)
	 ---------------------------------------------- -->
	<div class="container-fluid">
		<div class="row detail-programme">
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-12 col-md-5">
					<div class="img_g"><img src="/images/vignettes-details/enemy.jpg" alt="Film Enemy" /></div>
					</div>
					<div class="col-sm-12 col-md-7">
					<h3>Enemy</h3>
					<p><span>Date de sortie</span> 27 août 2014. De Denis Villeneuve. Avec Jake Gyllenhaal,
					Mélanie Laurent, Sarah Gadon...</p>
					<p><span>Genre</span> Thriller</p>
					<p>Nationalités Canadien, Espagnol.</p></div>
					<div class="col-md-12">
						<p><span>SYNOPSIS ET DETAILS</span></p>
						<p>Adam, un professeur discret, mène une vie paisible avec sa fiancée Mary.
						Un jour qu'il découvre son sosie parfait en la personne d'Anthony, un acteur fantasque,
						il ressent un trouble profond. Il commence alors à observer à distance la vie de cet homme
						et de sa mystérieuse femme enceinte. Puis Adam se met à imaginer les plus stupéfiants scénarios...
						pour lui et pour son propre couple.</p>
						<p><span>DETAILS SUR LA PROJECTION</span></p>
						<p class="programme-date">Date : 5 août</p>
						<p class="programme-horaire">Horaire : 18h</p>
						<p class="programme-duree">Durée : 1h30</p>
					</div>
				</div>
			</div>
			<div class="col-sm-5 formulaire">
				<p><span>Inscription :</span></p>
				<p>*champ requis</p>
				<form class="form-horizontal">
					<div class="form-group field-text">
					<label for="inputNom" class="col-md-4 control-label">Nom<span>*</span> :</label>
					<div class="col-md-8">
						<input type="text" name="Nom" class="form-control" id="inputNom" placeholder="Nom" required>
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputPrenom" class="col-md-4 control-label">Prénom<span>*</span> :</label>
					<div class="col-md-8">
						<input type="text" name="Prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required>
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputNbrInscrits" class="col-md-4 control-label">Nombre d'inscrits<span>*</span> :</label>
					<div class="col-md-8">
						<input type="number" name="nombreInscrits" class="form-control" id="inputNbrInscrits" placeholder="Nombre d'inscrits" required>
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputEmail" class="col-md-4 control-label">Email<span>*</span> :</label>
					<div class="col-md-8">
						<input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-md-12">
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="Enemy" checked> Enemy
				        </label>
				      </div>
				    </div>
				    <div class="col-md-offset-5 col-md-2">
				    	<button type="submit" class="btn btn-default">Envoyer</button>
				    </div>
  				</div>
				</form>
			</div>
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