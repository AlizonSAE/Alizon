<?php
    session_start();

    if(!isset($_SESSION["p"]) || !isset($_SESSION["pr"])){
        $_SESSION["p"] = "http://localhost:8000";
        $_SESSION["pr"] = "http://localhost:8000/ressources/";
    }

    $_SESSION["p"] = "http://localhost:8000";
    $_SESSION["pr"] = "http://localhost:8000/ressources/";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>css/reset.css"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>css/style.css"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>css/styles.css"/>

        
        <!-- UIkit -->

        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>frameworks/uikit-3.15.10/css/uikit.css" />
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>
        
        <!-- Scripts propres -->

        <title>
            