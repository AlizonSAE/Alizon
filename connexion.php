<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ressources/css/insc_conn.css">
    <link rel="stylesheet" href="../ressources/css/styles.css">
    <title>Alizon - Inscription</title>
</head>
<body>
    <form id="inscription" method="POST" action="gestion.php" class="inscription_connection">
        <h2>Se connecter</h2>
        <p class = 'error'>
        <?php
            if (!empty($_GET['mdpinc'])) {
                echo $_GET['mdpinc'];
            }
        ?>
        </p>
        <label>Identifiant<strong>*</strong></label><br><input type="text" name="identifiant" placeholder="Identifiant"><br>
        <label>Mot de passe<strong>*</strong></label><br><input type="password" name="mot_de_passe" placeholder="mot de passe"><br>

        <input type="submit" value="Se connecter" class="btn_inscr">
        <p>Nouveau sur le site ? <a href="inscription.php">Inscrivez-vous !</a></p>
    </form>
</body>
</html>
