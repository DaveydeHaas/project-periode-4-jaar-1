<?php

//haalt producten uit de datbase gebaseerd op categoryId
function getData1(){
    include("db_connect.php");
    $categoryId = $_GET['categoryId'];
    $sql = "SELECT * FROM `products` WHERE `categoryId` = '$categoryId'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

//haalt producten uit de datbase
function getData2(){
    include("db_connect.php");
    $sql = "SELECT * FROM `products`";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

//haalt gebruikersinformatie uit de datbase
function getData3(){
    include("db_connect.php");
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

?>