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
	                   SLIDER 
	 ---------------------------------------------- -->
	<div class="row"><div class="col-sm-3 txt-gratuit">ENTREE<br />GRATUITE</div></div>
	<div class="row slider">
		<div class="hidden-xs col-sm-12 slider-pp">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="images/slider/enemy.png" alt="Film Enemy">
			      <div class="bloc-info-slider">
						<h4>ENEMY</h4>
						<p class="txt-info-slider">Thriller fantastique canado-espagnol réalisé par Denis Villeneuve et sorti en 2013, librement adapté par le scénariste espagnol Javier Gullón du roman de l'écrivain portugais José Saramago O homem duplicado, 2002.</p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/slider/into-the-wild.png" alt="Into the wild">
			      <div class="bloc-info-slider">
						<h4>Into the wild</h4>
						<p class="txt-info-slider">Into the Wild ou Vers l'inconnu au Québec est un film américain réalisé par Sean Penn, sorti en 2007.</p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/slider/poetes-disparus.png" alt="Cercle des poètes disparus">
			      <div class="bloc-info-slider">
						<h4>Cercle des poètes disparus</h4>
						<p class="txt-info-slider">Le Cercle des poètes disparus ou La Société des poètes disparus au Québec est un film américain réalisé par Peter Weir, sorti en 1989.</p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/slider/requiem-for-a-dream.png" alt="Requiem for a dream">
			      <div class="bloc-info-slider">
						<h4>Requiem for a dream</h4>
						<p class="txt-info-slider">Requiem for a Dream ou Retour à Brooklyn au Québec est un film américain de Darren Aronofsky, adapté du roman éponyme d'Hubert Selby et sorti en 2000.</p>
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>

<!-- ---------------------------------------------- 
                   ACTUALITES 
     ---------------------------------------------- -->
     <div class="row bloc-actus">
     	<div class="col-xs-3 col-md-3 actu-ap begin"><h3>ENEMY</h3>
     		<div class="row txt-actu">
     			<div class="col-xs-12 col-md-12 actu">
     				<p class="home-txt-actu-begin">Thriller.</p>
     				<p class="home-txt-actu">Durée: 1h30</p>
     				<p class="home-txt-actu">Projection : le 05 août - 18h.</p>
     				<p class="home-txt-actu">Film de Denis Villeneuve avec Jake Gyllenhaal, Mélanie Laurent, Sarah Gadon.</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-xs-3 col-md-3 actu-ap middle"><h3>VOL AU DESSUS D'UN NID...</h3>
     		<div class="row txt-actu">
     			<div class="col-xs-12 col-md-12 actu">
     				<p class="home-txt-actu-begin">Drame.</p>
     				<p class="home-txt-actu">Durée: 2h13</p>
     				<p class="home-txt-actu">Projection : le 05 août - 19h45.</p>
     				<p class="home-txt-actu">Film de Milos Forman avec Jack Nicholson, Sydney Lassick, Christopher Lloyd.</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-xs-3 col-md-3 actu-ap middle"><h3>HOLY MOTORS</h3>
     		<div class="row txt-actu">
     			<div class="col-xs-12 col-md-12 actu">
     				<p class="home-txt-actu-begin">Drame et fantastique.</p>
     				<p class="home-txt-actu">Durée: 1h55</p>
     				<p class="home-txt-actu">Projection : le 06 août - 18h.</p>
     				<p class="home-txt-actu">Film de Leos Carax avec Denis Lavant, Edith Scob, Eva Mendes.<br/>&nbsp;</p>
     			</div>
     		</div>
     	</div>
     	<div class="col-xs-3 col-md-3 actu-ap end"><h3>INTO THE WILD</h3>
     		<div class="row txt-actu">
     			<div class="col-xs-12 col-md-12 actu">
     				<p class="home-txt-actu-begin">Aventure, biopic et drame.</p>
     				<p class="home-txt-actu">Durée: 2h28</p>
     				<p class="home-txt-actu">Projection : le 07 août - 18h.</p>
     				<p class="home-txt-actu">Film de Sean Penn avec Emile Hirsch, Marcia Gay Harden, William Hurt.</p>
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