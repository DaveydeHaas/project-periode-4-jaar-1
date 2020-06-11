<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

    switch($_GET["alert"]) {
        case "no-email" :
            echo '<div class="alert alert-warning text-center" role="alert">
            <h4 class="alert-heading"><b>Error!</b></h4>
            <p>U heeft geen e-mailadres ingevuld, probeer het opnieuw..</p>
            <hr>
            <p class="mb-0">Hulp nodig? Stuur een mail naar <b>contact@gamedistrict.com</b></p>
          </div>';
          header("Refresh: 6; ./index.php?content=registratie");
        break;
        case "" :

        break;
        case "" :

        break;
        default:
            header("Location: ./index.php?content=home");
        break;
    }
?>