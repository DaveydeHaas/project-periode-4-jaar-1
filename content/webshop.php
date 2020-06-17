<?php
include("./scripts/db_connect.php");
require_once("php/component.php");
include("./scripts/get_db_content");

?>

<div class="container">
    <div class="row">
        <div class="col-12 navbar-to-content-fix"></div>
        <?php
            $result = getData();
            while ($row = mysqli_fetch_assoc($conn, $result){
                component($row['productName'], $row['price'], $row['image'], $row['description']);
            };
            ?>
    </div>
</div>
