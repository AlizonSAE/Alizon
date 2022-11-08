<?php
    session_start();

    // CONNEXION A LA BDD
    include("../ressources/databases/connect_params.php");
    $dbh = new PDO("$driver:host=$server;dbname=$dbname", $user, $pass);
    
    // ENREGISTREMENT DU email DU CLIENT DANS UNE VARIABLE
    $email = $_POST['email'];
    
    // VERIFICATION SI L'UTILISATEUR EST BIEN INCONNU VIA email
    $stmt = $dbh->query("SELECT email FROM alizon._client WHERE email = '$email'");
    $stmt->execute();
    $user = $stmt->fetch();

    
    echo $user['email'];
    
    if ($user >0 ){
        // redirection avec une erreur
        header('Location: inscription.php?aldrusr=\'Cet email est déjà associé à un compte\'');
    }else if ($_POST['mot_de_passe'] != $_POST['conf_mot_de_passe']) {
        // SECOND MOT DE PASSE != MDP

        // redirection avec une erreur
        header('Location: inscription.php?errmdp=\'Mot de passe non identique\'');
    }else if ($_POST['mot_de_passe'] == $_POST['conf_mot_de_passe']) {
        
        // ENREGISTREMENT DES INFOS DU CLIENT DANS DES VARIABLES
        $mdp = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        // base de données
        $sql = "INSERT INTO alizon._client (email, passwd, nom, prenom, date_naissance) VALUES ('$email', '$mdp', '$nom', '$prenom', '$date_naiss')";
        $stmt= $dbh->prepare($sql);
        $stmt->execute();
        
        // sauvegarde de l'email de session
        $_SESSION['email'] = $_POST['email'];
        header('Location: index.php');

    }

?>
