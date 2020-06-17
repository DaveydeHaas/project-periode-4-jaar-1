<?php
require_once("php/component.php");
include("./scripts/db_content.php");

?>

<div class="container">
    <div class="row">
        <div class="col-12 navbar-to-content-fix"></div>
        <?php
            $result = getData();
            while($row = mysqli_fetch_assoc($result)){
                component($row['productName'], $row['price'], $row['image'], $row['description']);
            }
        ?>
    </div>
</div>
