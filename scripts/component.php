<?php
//Standaard card kan opgevraagd worden als component()
function component($productName, $price, $image, $beschrijving, $productId){

    $element = '         
    <div class="col-md-3 col-sm6">
        <form method="POST" >
            <div class="card card-webshop">
                <img src="'. $image .'" alt="chibi" class="img-fluid card-img-top image-styling">
                <div class="card-body">
                    <h5 class="card-title name-padding">' . $productName . '</h5>
                    <hr>
                    <p class="card-text ">
                        <p class="card-grootte">'. $beschrijving .'</p>
                    </p>
                    <h5 class="price-placement">
                    <button type="submit" name="add" class="btn btn-warning btn-placement">Add to Cart <i class="fa fa-shopping-cart "></i></button>
                    <input type="hidden" name="productId" value="' . $productId .'"></input>
                    <span class="price">$'. $price . ',-</span>
                    </h5>
                </div>
            </div>
        </form>
    </div>';

    echo $element;
}

function cartElement($image,$productName, $price, $productId){
    $element='
    <form action="index.php?content=winkelmand&verwijder&id='. $productId .'" method="POST" class="cart-items winkelmand">
        <div class="border rounded col-9">
            <div class="row card2">
                <div class="col-md-3">
                    <img src="'. $image .'" alt="vi" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5 class="pt-6">'. $productName .'</h5>
                    <small class="text-secondary">Seller:Dailytution</small>
                    <h5 class="pt-2">$'. $price .',-</h5>
                    <div>
                        <button type="submit" class="btn btn-danger mx-2" name=verwijder>Verwijder</button>
                    </div>
                </div>
                <div class="col-md-3 py-5">
                    <div>
                        <button type="button" id="add+" class="btn btn-light rounded-circle"><i class="fa fa-plus"></i></button>
                        <input type="text" value="1" id="amount" class="form-control w-25 d-inline">
                        <button type="button" id="add-" class="btn btn-light rounded-circle"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
    ';
    echo $element;
}














?>

