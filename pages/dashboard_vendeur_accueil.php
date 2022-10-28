<?php 

	include("headers/tete.php");
	// Le titre de la page entre els deux includes
	echo "Dashboard - Vendeur";

	include("headers/internaute.php");

?>

<div class="dashboardvendeur__body">
		<div class="container1">
			<div class="dashboardvendeur__ajout">
				<ul class="vendeurmenu">
					<li class="vendeurmenu__line"><img></img>Accueil</li>
					<li class="vendeurmenu__line vendeurmenu__selected"><a href="dashboard_vendeur_produit.php">Gestion des produits</a></li>
					<li class="vendeurmenu__line">Gestion des commandes</li>
					<li class="vendeurmenu__line">Gestion des promotions</li>
					<li class="vendeurmenu__line">Gestion des categories de produits</li>
				</ul>
			</div>
		</div>
	
	<div class="container2">

		<section class="vendeurresume">

		<h2 class="vendeurresume__titremenu">Bienvenue sur votre tableau de bord !</h2>

		<h2 class="vendeurresume__titremenu">Vos produits</h2>

		<a class="vendeurresume__button">Ajouter un produit</a>

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

		<h2 class="vendeurresume__titremenu">Commandes à gérer</h2>

		<table class="tableaucommande">

			<thead class="tableaucommande__head">

				<tr>

					<th>Nom du produit</td>
					<th>Adresse de livraison</td>
					<th>Quantité</td>
					<th>État de la commande</td>
					
				</tr>

			</thead>

			<tbody class="tableaucommande__body">

				<tr class="tableaucommande__commande">

					<td>Sweat "Carnac"</td>
					<td>3 rue des peupliers, 50000 CHERBOURG EN COTENTIN</td>
					<td>4</td>
					<td>En transit</td>

				</tr>

				<tr class="tableaucommande__commande">

					<td>Sweat "A l'aise Breizh"</td>
					<td>3 avenue de la republique, 46000 CAHORS</td>
					<td>7</td>
					<td>En cours de préparation</td>

				</tr>

			</tbody>

		</table>

		<h2 class="vendeurresume__titremenu">Promotions en cours</h2>

		<section class="vendeurresume__listepromo">

			<figure class="vendeurresume__promo">

				<img class="vendeurresume__promo__image" src="img/promo.jpg"></img>

				<figcaption class="vendeurresume__promo__prctge">75%</figcaption>
				<figcaption class="vendeurresume__promo__nom">Fêtes de Noel</figcaption>

			</figure>

			<figure class="vendeurresume__promo">

				<img class="vendeurresume__promo__image" src="img/promo.jpg"></img>

				<figcaption class="vendeurresume__promo__prctge">45%</figcaption>
				<figcaption class="vendeurresume__promo__nom">Halloween</figcaption>

			</figure>

			<figure class="vendeurresume__promo">

				<img class="vendeurresume__promo__image" src="img/promo.jpg"></img>

				<figcaption class="vendeurresume__promo__prctge">30%</figcaption>
				<figcaption class="vendeurresume__promo__nom">Black Friday</figcaption>

			</figure>

			<figure class="vendeurresume__promo">

				<img class="vendeurresume__promo__image" src="img/promo.jpg"></img>

				<figcaption class="vendeurresume__promo__prctge">50%</figcaption>
				<figcaption class="vendeurresume__promo__nom">Fête des pères</figcaption>

			</figure>

		</section>

	</section>
		
	</div>       
</div>

<?php 

	include("footers/internaute.php");

?>
