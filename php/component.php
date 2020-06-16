<?php

function component(){

    $element = '         
    <div class="col-md-3 col-sm6">
        <form action="./content/webshop-add.php" method="POST" >
            <div class="card card-webshop">
                <img src="./afbeeldingen/producten/04.png." alt="chibi" class="img-fluid card-img-top image-styling">
                <div class="card-body">
                    <h5 class="card-title">Product1</h5>
                    <hr>
                    <p class="card-text">
                        Some quick example text to build on the card.
                    </p>
                    <h5 class="price-placement">
                    <button type="submit" name="add" class="btn btn-warning btn-placement">Add to Cart</button>
                    <span class="price">$400</span>
                    </h5>
                </div>
            </div>
        </form>
    </div>';

    echo $element;
}

?>