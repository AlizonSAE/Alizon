<?php
    session_start();

    if(!isset($_SESSION["p"]) || !isset($_SESSION["pr"])){
        $_SESSION["p"] = "http://localhost/Alizon";
        $_SESSION["pr"] = "http://localhost/Alizon/ressources/";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>{titre}</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>/css/reset.css"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>/css/styles.css"/>
    </head>
    <body>