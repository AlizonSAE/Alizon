<?php 
    include("headers/tete.php");
    // Le titre de la page entre els deux includes
    echo "Alizon";

    include("headers/internaute.php");
?>

<main>
    <section>
        <div class="caroussel">
            <div class="element-caroussel" 
                style="background-image: url('<?php echo $_SESSION["pr"] ?>img/test/P1019364.jpg') " >
            </div>
        </div>
    </section>
</main>

<?php 
    include("footers/internaute.php");
?>