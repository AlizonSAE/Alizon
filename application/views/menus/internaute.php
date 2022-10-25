<nav id="menu">
    <div id="section-menu-1">
        <img class="logo-alizon" src="<?php echo $_SESSION["pr"] ?>img/logo.png" alt="Logo d'Alizon"/>
        <div id="icones-utilisateur">
            <a href="profil.html">
                <img class="icones-svg" src="<?php echo $_SESSION["pr"] ?>img/account-pin-circle-line.svg" alt="Votre profil"/>
            </a>
            <a href="panier.html">
                <img class="icones-svg" src="<?php echo $_SESSION["pr"] ?>img/shopping-bag-fill.svg"  alt="Votre panier"/>
            </a>
        </div>
    </div>
    <div id="section-menu-2">
        <div id="bouton-categories" class="modifications-mutuelles">
            <img id="icone-menu" src="<?php echo $_SESSION["pr"] ?>img/menu-line.svg"/>
            <h4>Catégories</h4>
        </div>
        <div id="barre-recherche">
            <img id="icone-loupe" src="<?php echo $_SESSION["pr"] ?>img/search-2-line.svg"/>
            <input type="text"/>
        </div>
    </div>
    <div id="section-menu-3" class="shadow bottom modifications-mutuelles">
        <div id="cache-bordure"></div>
        <div id="elements">
            <ul>
                <h6><a href="ma_categorie.html">Alimentaire</a></h6>
                <li><a href="ma_sous_categorie.html">Ingrédients</a></li>
                <li><a href="ma_sous_categorie.html">Plats cuisinés</a></li>
                <li><a href="ma_sous_categorie.html">Boissons</a></li>
                <li><a href="ma_sous_categorie.html">Assaisonement</a></li>
            </ul>
            <ul>
                <h6><a href="ma_categorie.html">Vetements</a></h6>
                <li><a href="ma_sous_categorie.html">T-Shirts</a></li>
                <li><a href="ma_sous_categorie.html">Chemises</a></li>
                <li><a href="ma_sous_categorie.html">Polos</a></li>
                <li><a href="ma_sous_categorie.html">Pulls</a></li>
                <li><a href="ma_sous_categorie.html">Vestes</a></li>
                <li><a href="ma_sous_categorie.html">Pantalons</a></li>
                <li><a href="ma_sous_categorie.html">Accessoires</a></li>
            </ul>
        </div>
    </div>
</nav>