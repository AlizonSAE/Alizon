<?php 

	include("headers/tete.php");
	// Le titre de la page entre els deux includes
	echo "Dashboard - Produits";

	include("headers/internaute.php");

?>

<main class="dashboardvendeur__produit">

	<ul class="vendeurmenu">

		<li class="vendeurmenu__line"><a href="dashboard_vendeur_accueil.php"><img></img>Accueil</a></li>
		<li class="vendeurmenu__line vendeurmenu__selected">Gestion des produits</li>
		<li class="vendeurmenu__line"><a href="">Gestion des commandes</a></li>
		<li class="vendeurmenu__line"><a href="">Gestion des promotions</a></li>
		<li class="vendeurmenu__line"><a href="">Gestion des categories de produits</a></li>

	</ul>

	<section class="vendeurresume">

		<h2 class="vendeurresume__titremenu">Bienvenue sur votre page de gestion des produits</h2>

		<a class="vendeurresume__button" href="dashboard_vendeur_accueil.php">Ajouter un produit</a>

		<section class="vendeurresume__listeproduit">

			<figure class="vendeurresume__produit">
					
					<img class="vendeurresume__produit__fav-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

					<img class="vendeurresume__produit__image"src="img/100_vannes/carnac/carnac_face.png"></img>

					<img class="vendeurresume__produit__edit-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>
					<img class="vendeurresume__produit__hide-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

					<figcaption class="vendeurresume__produit__nom">Sweat "Carnac"</figcaption>
					<figcaption class="vendeurresume__produit__prix">276€</figcaption>

			</figure>

			<figure class="vendeurresume__produit">
				
				<img class="vendeurresume__produit__fav-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

				<img class="vendeurresume__produit__image"src="img/100_vannes/carnac/carnac_face.png"></img>

				<img class="vendeurresume__produit__edit-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>
				<img class="vendeurresume__produit__hide-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

				<figcaption class="vendeurresume__produit__nom">Sweat "Carnac"</figcaption>
				<figcaption class="vendeurresume__produit__prix">276€</figcaption>

			</figure>

			<figure class="vendeurresume__produit">
				
				<img class="vendeurresume__produit__fav-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

				<img class="vendeurresume__produit__image"src="img/100_vannes/carnac/carnac_face.png"></img>

				<img class="vendeurresume__produit__edit-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>
				<img class="vendeurresume__produit__hide-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

				<figcaption class="vendeurresume__produit__nom">Sweat "Carnac"</figcaption>
				<figcaption class="vendeurresume__produit__prix">276€</figcaption>

			</figure>

			<figure class="vendeurresume__produit">
				
				<img class="vendeurresume__produit__fav-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

				<img class="vendeurresume__produit__image"src="img/100_vannes/carnac/carnac_face.png"></img>

				<img class="vendeurresume__produit__edit-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>
				<img class="vendeurresume__produit__hide-button" src="ressources/img/logos/shopping-bag-fill.svg"></img>

				<figcaption class="vendeurresume__produit__nom">Sweat "Carnac"</figcaption>
				<figcaption class="vendeurresume__produit__prix">276€</figcaption>

			</figure>

		</section>

	</section>

</main>

<?php 

	include("footers/internaute.php");
	
?>