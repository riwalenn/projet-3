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
	                  ADMIN : INDEX
	 ---------------------------------------------- -->
	 <div class="container-fluid">
	 	<div class="row">
	 		<div class="col-xs-12">
	 			<h4>Bienvenue dans la partie administration du site !</h4>
	 			<p>Cette partie vous permet d'<span>ajouter</span> des fiches "détail" de films ou des actualités, <br />
	 			- de <span>modifier</span> les fiches actuelles,<br /> 
	 			- <span>modifier</span> la page de description du festival, <br />
	 			- <span>modifier</span> les actualités existantes<br />
	 			- <span>modifier</span> vos informations de contact.</p>
	 			<p>Cliquez sur une des pages du menu pour la <span>modifier</span> ou <span>ajouter</span> du contenu.</p>
	 			<p>Attention les éléments suivants ne peuvent pas subir de modification. Merci de <a href="mailto:#">me contacter</a> pour de plus amples informations :<br />
	 			- page "programme" : le nombre de films par ligne,<br />
	 			- les formulaires d'inscription, <br />
	 			- page "contact" : le formulaire et la carte</p>
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
<script src="../js/bootstrap.min.js"></script>
</body>
</html>