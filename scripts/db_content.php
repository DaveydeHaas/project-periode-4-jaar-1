<?php

//haalt producten uit de datbase
function getData(){
    include("db_connect.php");
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0 ){
        return $result;
    }
}

?>