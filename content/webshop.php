<?php
include("./scripts/db_connect.php");
require_once("php/component.php");
include("./scripts/functions.php");

?>

<div class="container">
    <div class="row">
        <div class="col-12 navbar-to-content-fix"></div>
        <?php
            $result = $conn->getData();
            while($row = mysqli_fetch_assoc($result)){
                component($row['productName'], $row['price'], $row['price'], $row['description']);
            }
        ?>
    </div>
</div>
