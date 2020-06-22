<?php
 if(isset($_POST['add'])){
    //print_r($_POST['productId']);
    if(isset($_SESSION['cart'])){
        
        $item_array_id =array_column($_SESSION['cart'], "productId");
        
        
        if(in_array($_POST['productId'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart...!')</script>";
                header("Refresh: 0;");
                
        }
        else{
           $count = count($_SESSION['cart']);
           $item_array = array(
            'productId' => $_POST['productId']
        );

        $_SESSION['cart'][$count] = $item_array;
        header("Refresh: 0;");

        }
    }else{

        $item_array = array(
            'productId' => $_POST['productId']

        );
        
        //maakt een nieuwe session variable
        $_SESSION['cart'][0] = $item_array;
        header("Refresh: 0;");
    }

}   
    
    
    
    
    //header("Refresh:0 ; ../index.php?content=webshop");

?>