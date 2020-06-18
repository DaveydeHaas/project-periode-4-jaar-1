<?php
require_once("php/component.php");
include("./scripts/db_content.php");



?>

<div class="container">
    <div class="row">
        <div class="col-12 navbar-to-content-fix"></div>
        <!-- Deze script zorgt ervoor dat het aantal aangegeven producten een card krijgt met de juiste gegevens op de juiste plek -->
        <?php
            $result = getData();
            while($row = mysqli_fetch_assoc($result)){
                component($row['productName'], $row['price'], $row['image'], $row['description'], $row['productId']);
            }
        ?>
    </div>
</div>
