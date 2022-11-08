<?php 

	include("../headers/tete.php");
	// Le titre de la page entre els deux includes
	echo "Dashboard - Produits";

	include("../headers/internaute.php");

?>

<div class="dashboardvendeur__body">
	<div class="container1">
		<div class="dashboardvendeur__ajout">
			<ul class="vendeurmenu">
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_accueil.php"><img></img>Accueil</a></li>
				<li class="vendeurmenu__line vendeurmenu__selected">Gestion des produits</li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des commandes</a></li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des promotions</a></li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des categories de produits</a></li>
			</ul>
		</div>
	</div>
	
	<div class="container2">

		<section class="vendeurresume">

			<h2 class="vendeurresume__titremenu">Bienvenue sur votre page de gestion des produits</h2>

			<a class="vendeurresume__button" href="ajout_produit.php">Ajouter un produit</a>

			<section class="vendeurresume__listeproduit">

				<?php

					include('../../ressources/databases/connect_params.php');
					
					try {
						$dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $pass);

						$dbh -> query("SET SCHEMA 'alizon'");

						echo '<section class="vendeurresume__listeproduit">';

						foreach($dbh->query('SELECT * from alizon._produit', PDO::FETCH_ASSOC) as $row) {

							echo '<figure class="vendeurresume__produit">';

							echo '<a href=""><img class="vendeurresume__produit__fav-button" src="../../ressources/img/logos/mise-avant-logo.svg" height="34" width="34"></img></a>';

							//$image_produit -> query('SELECT cat_image FROM alizon._image WHERE' .$row['id_produit']. ' = _image.id_produit');

							echo '<img class="vendeurresume__produit__image"src="../../ressources/img/100_vannes/bretonpascon3/bretonpascon3_dos.png"></img>';

							echo '<a href=""><img class="vendeurresume__produit__edit-button" src="../../ressources/img/logos/edit-button.svg"></img></a>';
							echo '<a href=""><img class="vendeurresume__produit__hide-button" src="../../ressources/img/logos/hide-button.svg"></img></a>';

							echo '<figcaption class="vendeurresume__produit__nom">'.$row['nom'].'</figcaption>';
							echo '<figcaption class="vendeurresume__produit__prix">'.$row['prix'].'€</figcaption>';

							echo '</figure>'.PHP_EOL;

						}

						echo '</section>';

						$dbh = null;

					} catch (PDOException $e) {

						print "Erreur !: " . $e->getMessage() . "<br/>";
						die();

					}

				?>

			</section>

		</section>
		
	</div>       
</div>

<?php 

	include("footers/internaute.php");
	
?>