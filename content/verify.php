<?php

var_dump($_GET);



?>

<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom registratie-color1 ">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Klik hier om te verifiëren</h1>
                    <h4 class="card-subtitle mb-2 text-muted"><hr></h4>
                </div>

                <form action="./index.php?content=verify_script" method="POST">
                    <div class="form-container">
                        <div class="form-row">
                        </div>
                        <button type="submit" class="btn btn-lg btn-block registratie-button">verifiëren</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-4"></div>