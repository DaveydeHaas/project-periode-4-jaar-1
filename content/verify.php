<?php


if(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"])){
}else{
    header("Location:  ./index.php?content=message&alert=hacker-alert");
}

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
                    <input name="id" type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                    <input name="pwh" type="hidden" name="id" value="<?php echo $_GET["pwh"]; ?>">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-4"></div>