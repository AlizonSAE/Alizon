<?php 
    include("headers/tete.php");
    // Le titre de la page entre els deux includes
    echo "Alizon - Connexion";

    include("headers/internaute.php");
?>

    <form id="inscription" method="POST" action="gestion_connex.php" class="inscription_connection">
        <h2>Se connecter</h2>
        <p class = 'error'>
        <?php
            if (!empty($_GET['mdpinc'])) {
                echo $_GET['mdpinc'];
            }
        ?>
        </p>
        <label>E-mail<strong>*</strong></label><br>
        <input type="email" name="email" placeholder="exemple@domaine.com" required><br>
        
        <label>Mot de passe<strong>*</strong></label><br>
        <input type="password" name="mot_de_passe" placeholder="mot de passe" required><br>

        <input type="submit" value="Se connecter" class="btn_inscr">
        <p>Nouveau sur le site ? <a href="inscription.php">Inscrivez-vous !</a></p>
    </form>
<?php 
    include("footers/internaute.php");
?>
