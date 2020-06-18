<?php

if(isset($_POST['add'])){
    //print_r($_POST['productId']);
    if(isset($_SESSION['cart'])){
        print_r($_SESSION['cart']);
    }else{

        $item_array = array(
            'productId' => $_POST['productId']

        );
        
        //maakt een nieuwe sesseion variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);

    }

}

?>