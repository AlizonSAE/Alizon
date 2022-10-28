<?php
    include("header/tete.php");
    echo "Alizon - Panier</title>";
    //enlever le </title> pour matcher avec gugu
    include("header/internaute.php");
?>
<main>
    <div>
        <div class="div__produit--panier">
            <img class="image" src="../ressources/img/100_vannes/mortbihan/mortbihan_face.png" width="150px" alt="photo face pull">
            <div class="div__produit--description">
                <p class="titre_produit_panier">T-shirt "Mort-bihan"</p>
                <p class="font--text">Vêtements - Taille L</p>
                <form action="">
                    <input class="input__bouton--quantite" type="number" name="Qnt1" min="0" max="999">
                </form>
            </div>
            <div class="div__produit--suppr">
                <p class="font--text p__produit--prix">75€</p>
                <a href="">
                    <img src="../ressources/img/logos/delete-bin-line.svg" alt="supression" width="35px" color="#4f6d7a">
                </a>
            </div>
        </div>
        <hr class="hr__ligne--pleine" color="#DD6E42">
        <div class="div__produit--panier">
            <img class="image" src="../ressources/img/100_vannes/regardbzh1/regardbzh3_face.png" width="150px" alt="photo face pull">
            <div class="div__produit--description">
                <p class="titre_produit_panier">T-shirt "Regard Breizh"</p>
                <p class="font--text">Vêtements - Taille L</p>
                <form action="">
                    <input class="input__bouton--quantite" type="number" name="Qnt2" min="0" max="999">
                </form>
            </div>
            <div class="div__produit--suppr">
                <p class="font--text p__produit--prix">75€</p>
                <a href="">
                    <img src="../ressources/img/logos/delete-bin-line.svg" alt="supression" width="35px" color="#4f6d7a">
                </a>
            </div>
        </div>
        <hr class="hr__ligne--pleine" color="#DD6E42">
        <div class="div__produit--panier">
            <img class="image" src="../ressources/img/100_vannes/vie_en_roz/vie_en_roz_1.png" width="150px" alt="photo sac face">
            <div class="div__produit--description">
                <p class="titre_produit_panier">Sac à main "Vie en ROZ</p>
                <p class="font--text">Catégorie - Taille Unique</p>
                <form action="">
                    <input class="input__bouton--quantite" type="number" name="Qnt" min="0" max="999">
                </form>
            </div>
            <div class="div__produit--suppr">
                <p class="font--text p__produit--prix">75€</p>
                <a href="">
                    <img src="../ressources/img/logos/delete-bin-line.svg" alt="supression" width="35px" color="#4f6d7a">
                </a>
                
            </div>
        </div>
    </div>
    <div class="div__detail__commande">
        <h2 class="titre_produit_panier">Détail de la commande</h2>
        <div class="text__detail">
            <div class="one">
                <p class="font--text">3x T-shirt "Mort-bihan"</p>
            </div>
            <div class="two">
                <p class="font--text p__detail">3 x 75€</p>
            </div>
        </div>
        <hr class="hr__ligne--dash" width="200px">
        <div class="text__detail">
            <div class="three">
                <p class="font--text">Frais de livraison</p>
            </div>
        </div>
        <hr class="hr__ligne--dash" width="200px">
        <div class="text__detail">
            <div class="four">
                <p class="font--text">Prix HT</p>
            </div>
            <div class="five">
                <p class="font--text p__detail">180€</p>
            </div>
            <div class="six">
                <p class="font--text">TVA (20%)</p>
            </div>
            <div class="seven">
                <p class="font--text p__detail">45€</p>
            </div>
        </div>
        <hr color="#DD6E42" width="200px">
        <div class="text__detail">
            <div class="eight">
                <p class="font--text">Prix Total</p>
            </div>
            <div class="nine">
                <p class="font--text p__detail">225€</p>
            </div>
        </div>
        <div class="div__detail--bouton">
            <a href="">
                <button class="btn__bouton btn__text" type="button" name="button" onclick="">Commander</button>
            </a>
        </div>
    </div>
</main>
<?php
    include("footer/internaute.php");
?>