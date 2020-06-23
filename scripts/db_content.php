<?php

//haalt producten uit de datbase
function getData(){
    include("db_connect.php");
    $categoryId = 1;
    $sql = "SELECT * FROM products WHERE categoryId = '$categoryId'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

?>