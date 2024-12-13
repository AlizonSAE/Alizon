<?php 
    include("headers/tete.php");
    // Le titre de la page entre els deux includes
    echo "Alizon - Inscription";

    include("headers/internaute.php");
?>

    
    <form id="inscription" method="POST" action="gestion_inscr.php" class="inscription_connection">
        <h2>Créer votre compte</h2>
        <label>E-mail<strong>*</strong></label><br>
        <input type="email" name="email" placeholder="exemple@domaine.com" required><br>
        
        <p class="error">
            <?php
            if (!empty($_GET['aldrusr'])){
                echo $_GET['aldrusr'];
            }            
            ?>
        </p>

        <label>Nom<strong>*</strong></label><br>
        <input type="text" name="nom" placeholder="Nom" required><br>

        <label>Prénom<strong>*</strong></label><br>
        <input type="text" name="prenom" placeholder="Prénom" required><br>

        <label>Date de naissance<strong>*</strong></label><br>
        <input type="date" name="date_naissance" placeholder="xx/xx/xxxx" required><br>
        <p class="error">
            <?php
                if (!empty($_GET['datenaiss'])){
                    echo $_GET['datenaiss'];
                }            
            ?>
        </p>

        <label>Mot de passe<strong>*</strong></label><br>
        <input type="password" name="mot_de_passe" placeholder="mot de passe" required><br>


        <label>Confirmer le mot de passe<strong>*</strong></label><br>
        <input type="password" name="conf_mot_de_passe" placeholder="confirmer mot de passe" required><br>
        <p class="error">
            <?php
            if (!empty($_GET['errmdp'])){
                echo $_GET['errmdp'];
            }            
            ?>
        </p>
        
        <input type="submit" value="S'inscrire" class="btn_inscr">
        <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous</a></p>
    

    </form>
<?php 
    include("footers/internaute.php");
?>
