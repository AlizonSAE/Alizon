<?php 
    include("headers/tete.php");
    // Le titre de la page entre els deux includes
    echo "Alizon";

    include("headers/internaute.php");
?>

<main>
    <section>
        <div class="caroussel">
            <div class="element-caroussel" 
                style="background-image: url('<?php echo $_SESSION["pr"] ?>img/test/feuilles_enneigees.jpg') " >
            </div>
        </div>
    </section>
    <section id="conteneur-global-liste-article">
        <aside id="menu-criteres">
            <div id="boite-titre">
                <h3>Filtres</h3>
            </div>
            <div id="boite-criteres">
                <form>
                    <ul>
                        <h5>Alimentaire</h5>
                        <li><input type="checkbox"/>Ingrédients</li>
                        <li><input type="checkbox"/>Plats cuisinés</li>
                        <li><input type="checkbox"/>Boissons</li>
                        <li><input type="checkbox"/>Assaisonement</li>
                    </ul>
                    <ul>
                        <h5>Vêtements</h5>
                        <li><input type="checkbox"/>T-Shirts</li>
                        <li><input type="checkbox"/>Chemises</li>
                        <li><input type="checkbox"/>Polos</li>
                        <li><input type="checkbox"/>Pulls</li>
                        <li><input type="checkbox"/>Vestes</li>
                        <li><input type="checkbox"/>Pantalons</li>
                        <li><input type="checkbox"/>Accessoires</li>
                    </ul>
                </form>
            </div>
            <div id="languette-menu"></div>
        </aside>

        <article id="liste-articles">
            <div class="categorie-article">
                <h3>Vêtements</h3>
                <div class="sous-liste-articles">
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="categorie-article">
                <h3>Alimentaire</h3>
                <div class="sous-liste-articles">
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                    <div class="article">
                        <a href="exemple.php">
                            <img src="<?php echo $_SESSION["pr"] ?>img/test/carre_gris.jpg"/>
                            <p class="nom-article">Nom du produit</p>
                            <p><span class="taille-article">XS S L XL XXXL</span><span class="prix-article">5 €</span></p>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>

<?php 
    include("footers/internaute.php");
?>