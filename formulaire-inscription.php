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
	                  Formulaire
	 ---------------------------------------------- -->
	 <div class="container-fluid">
		 <div class="row form-inscription">
		 	<div class="col-sm-offset-1 col-sm-10 formulaire">
		 		<h3>Inscription :</h3>
				<p><span>*</span>champ requis</p>
				<form class="form-horizontal">
					<div class="form-group field-text">
					<label for="inputNom" class="col-sm-3 control-label">Nom<span>*</span> :</label>
					<div class="col-sm-9">
						<input type="text" name="Nom" class="form-control" id="inputNom" placeholder="Nom" required>
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputPrenom" class="col-sm-3 control-label">Prénom<span>*</span> :</label>
					<div class="col-sm-9">
						<input type="text" name="Prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required>
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputNbrInscrits" class="col-sm-3 control-label">Nombre d'inscrits<span>*</span> :</label>
					<div class="col-sm-9">
						<input type="number" name="nombreInscrits" class="form-control" id="inputNbrInscrits" placeholder="Nombre d'inscrits" required>
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputEmail" class="col-sm-3 control-label">Email<span>*</span> :</label>
					<div class="col-sm-9">
						<input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-sm-12">
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="Enemy"> Enemy
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="Nid-de-coucou"> Vol au-dessus d'un nid de coucou
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="Holy-motors"> Holy Motors
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="requiem-for-a-dream"> Requiem for a dream
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="into-the-wild"> Into the wild
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="Demolition"> Demolition
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="The master"> The master
				        </label>
				      </div>
				      <div class="checkbox">
				        <label class="checkbox-label">
				          <input type="checkbox" value="poetes-disparus"> Cercle des poètes disparus
				        </label>
				      </div>
				    </div>
				    <div class="col-sm-offset-5 col-sm-2">
				    	<button type="submit" class="btn btn-default">Envoyer</button>
				    </div>
  				</div>
				</form>
			</div>
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