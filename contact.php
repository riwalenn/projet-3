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
	             	CONTACT
	 ---------------------------------------------- -->
	 <div class="row page-contact">
	 	<div class="col-sm-12 col-md-4 txt-contact">
	 		<p>Le festival se déroule du 5 au 8 août inclus à partir de 18h :</p>
	 		<h4>FESTIVAL FILMS PLEIN AIR</h4>
	 		<p>PARC MONCEAU<br />
	 		35 Boulevard de courcelles<br />
	 		75008 Paris<br />
	 		France<br />
	 		Tél. : +33 (0)1 99 98 97 96<br />
	 		Email : contact@films-plein-air.org</p>
	 		<h5>Attention !</h5>
	 		<p>Piques-niques interdits ainsi que les bouteilles en verre.<br />
	 	Veillez à jeter vos détritus dans les endroits appropriés (poubelles, contenaires de tri...).</p>
	 	<p><br /></p>
	 	<p><a href="formulaire-inscription.php">Cliquez ici pour vous inscrire à une séance !</a></p>
	 		</div>
	 	<div class="col-sm-6 col-md-4 contact-form">
	 		<h3>Nous contacter :</h3>
	 		<form class="form-horizontal">
				<div class="form-group field-text">
					<label for="inputNom" class="col-md-4 control-label">Nom<span>*</span> :</label>
					<div class="col-md-8">
						<input type="text" name="Nom" class="form-control" id="inputNom" placeholder="Nom">
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputPrenom" class="col-md-4 control-label">Prénom<span>*</span> :</label>
					<div class="col-md-8">
						<input type="text" name="Prenom" class="form-control" id="inputPrenom" placeholder="Prénom">
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputEmail" class="col-md-4 control-label">Email<span>*</span> :</label>
					<div class="col-md-8">
						<input type="email" name="Email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputTelephone" class="col-md-4 control-label">Téléphone<span>*</span> :</label>
					<div class="col-md-8">
						<input type="text" name="Telephone" class="form-control" id="inputTelephone" placeholder="Téléphone">
					</div>
				</div>
				<div class="form-group field-text">
					<label for="inputMessage" class="col-md-4 control-label">Message<span>*</span> :</label>
					<div class="col-md-8">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
				    <div class="col-md-offset-5 col-md-2">
				    	<button type="submit" class="btn btn-default">Envoyer</button>
				    </div>
  				</div>
				</form>
	 	</div>
	 	<div class="col-sm-6 col-md-4 contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.8737382034997!2d2.3067663156751315!3d48.879683479289554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fbe98f714c3%3A0xe62425fddeddc402!2sParc+Monceau!5e0!3m2!1sfr!2sfr!4v1491994404542" width="400" height="300" frameborder="0" allowfullscreen></iframe></div>
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