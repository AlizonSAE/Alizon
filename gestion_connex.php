<?php
    session_start();

    // CONNEXION A LA BDD
    include("../ressources/databases/connect_params.php");
    $dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $pass);

    $email = $_POST['email'];

    
    $stmt = $dbh->query("SELECT passwd FROM alizon._client WHERE email = '$email'");
    $stmt->execute();
    $user = $stmt->fetch();


    if (!password_verify($_POST['mot_de_passe'], $user['passwd'])){
        header('Location: connexion.php?mdpinc=\'Mot de passe incorrect ou utilisateur inconnu, veuillez réessayer\'');
    } else {
        $_SESSION['email'] = $_POST['email'];
        header('Location: index.php');
    }

    

?>
