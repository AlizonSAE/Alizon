<?php 

	include("../headers/tete.php");
	// Le titre de la page entre els deux includes
	echo "Dashboard - Vendeur";

	include("../headers/internaute.php");

?>

<div class="dashboardvendeur__body">
	<div class="container1">
		<div class="dashboardvendeur__ajout">
			<ul class="vendeurmenu">
				<li class="vendeurmenu__line vendeurmenu__selected"><img></img>Accueil</li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des produits</a></li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des commandes</a></li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des promotions</a></li>
				<li class="vendeurmenu__line"><a href="dashboard_vendeur_produit.php">Gestion des categories de produits</a></li>
			</ul>
		</div>
	</div>
	
	<div class="container2">

		<section class="vendeurresume">

		<h2 class="vendeurresume__titremenu">Bienvenue sur votre tableau de bord !</h2>

		<h2 class="vendeurresume__titremenu">Vos produits</h2>

		<a class="vendeurresume__button" href="ajout_produit.php">Ajouter un produit</a>

		<section class="vendeurresume__listeproduit">

		<?php

			include('../../ressources/databases/connect_params.php');

			try {
				$dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $pass);

				$dbh -> query("SET SCHEMA 'alizon'");

				echo '<section class="vendeurresume__listeproduit">';

				$i = 0;

				foreach($dbh->query('SELECT * from alizon._produit', PDO::FETCH_ASSOC) as $row) {

					if($i < 6) {

						echo '<figure class="vendeurresume__produit">';

						echo '<a href=""><img class="vendeurresume__produit__fav-button" src="../../ressources/img/logos/mise-avant-logo.svg" height="34" width="34"></img></a>';

						echo '<img class="vendeurresume__produit__image"src="../../ressources/img/100_vannes/bretonpascon3/bretonpascon3_dos.png"></img>';

						echo '<a href=""><img class="vendeurresume__produit__edit-button" src="../../ressources/img/logos/edit-button.svg"></img></a>';
						echo '<a href=""><img class="vendeurresume__produit__hide-button" src="../../ressources/img/logos/hide-button.svg"></img></a>';

						echo '<figcaption class="vendeurresume__produit__nom">'.$row['nom'].'</figcaption>';
						echo '<figcaption class="vendeurresume__produit__prix">'.$row['prix'].'€</figcaption>';

						echo '</figure>'.PHP_EOL;
						
					}

					$i++;

				}

				echo '</section>';

				$dbh = null;

			} catch (PDOException $e) {

				print "Erreur !: " . $e->getMessage() . "<br/>";
				die();

			}

		?>

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
