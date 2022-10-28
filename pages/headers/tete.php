<?php
    session_start();

    if(!isset($_SESSION["p"]) || !isset($_SESSION["pr"])){
        $_SESSION["p"] = "http://localhost:8000/Alizon";
        $_SESSION["pr"] = "http://localhost:8000/Alizon/ressources/";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>css/reset.css"/>
        <link rel="stylesheet" href="<?php echo $_SESSION["pr"] ?>css/styles.css"/>

        <!-- Scripts propres -->

        <title>
            