<?php
require_once("./scripts/component.php");
require_once("./scripts/db_content.php");

//verwijderd de content uit de sessie
    if(isset($_POST['verwijder'])){
        if($_GET['action'] == $_POST['verwijder']){
            foreach($_SESSION['cart'] as $key => $value){
                if($value["productId"] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product is verwijderd!')</script>";
                    header("Refresh: 0; index.php?content=winkelmand");
                }
            }
        
    }
}

if(isset($_POST['add+'])){
    $amount = $_POST['amount'];
    $amount + '1';
    echo $amount;

}

?>

<div class="container-fluid navbar-to-content-fix">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="col-">
                <h1>Mijn producten<hr></h1> 
                <?php
                $total = 0;
                if(isset($_SESSION['cart'])){
                    $productId = array_column($_SESSION['cart'], 'productId');

                    $result = getData2();
                    $id;
                    while ($row = mysqli_fetch_assoc($result)){
                        foreach($productId as $id){
                            if($row['productId'] == $id){
                                cartElement($row['image'], $row['productName'], $row['price'], $row['productId']);
                                $total = $total + (int)$row['price']; 
                            }
                        }
                    }
                }else{
                    echo '<h3>U heeft nog geen producten in uw winkelmand toegevoegd.<h3>';
                }
                ?>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt5 card2 h-25">
            <div class="content-to-navbar-fix">
                <h1>Prijs Detail</h1>
                <hr>
                <div class="row price_details">
                    <div class="col-md-6">
                        <?php
                        if(isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo '<h5>Prijs. ('. $count .' producten)<h5>';
                        }else{
                            echo '<h5>Prijs. (0 producten)<h5>';
                        }
                        ?>
                        <h5>Bezorgkosten</h5>
                        <hr>
                        <h5>Totaal bedrag</h5>
                    </div>
                    <div class="col-md-6">
                        <h5>
                            <?php echo '$' . $total . ',-'?>
                        </h5>
                        <h5 class="text-success">GRATIS</h5>
                        <hr>
                        <h5>
                            <?php echo '$' . $total . ',-'?>
                            <hr>
                        </h5>
                    </div>
                    <div class="col-md-7"></div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-warning">Bestellen</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>