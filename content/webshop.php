<?php
require_once("scripts/component.php");
include("./scripts/db_content.php");
include("./scripts/webshop-add.php");


?>

<div class="container">
    <div class="row">
        <div class="col-12 navbar-to-content-fix"></div>
        <!-- Deze script zorgt ervoor dat het aantal aangegeven producten een card krijgt met de juiste gegevens op de juiste plek -->
        <?php
<<<<<<< HEAD
        $result = getData();
=======
        if(isset($_GET['categoryId'])){
        $categoryId = 'categoryId';
        $result = getData1();
>>>>>>> abbcd37375be14f28bd8a3c6ed9ef606386dd58e
        while($row = mysqli_fetch_assoc($result)){;
            component($row['productName'], $row['price'], $row['image'], $row['description'], $row['productId'], $row['categoryId']);
        }
    }

        ?>
    </div>
</div>
