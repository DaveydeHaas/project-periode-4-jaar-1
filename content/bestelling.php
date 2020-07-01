<?php 
$id = $_SESSION['id'];

if(!isset($_SESSION['id'])){
    header("Location: ./index.php?content=message&alert=bestelling-no-user");
}

?>
<!-- form adresgegevens -->

<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom registratie-color1 ">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Game District</h1>
                    <h4 class="card-subtitle mb-2 text-muted">Registratie</h4>
                </div>

                <form action="./index.php?content=bestelling_script" method="POST">
                    <div class="form-container">
                        <div class="form-row">

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputFirstname">Voornaam</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Voornaam" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="inputPassword4">Achternaam</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Achternaam" required>
                            </div>
                        </div>
                            <div class="form-group col-5">
                                <label for="inputusername">Woonplaats</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="Woonplaats" required>
                            </div>
                            <div class="form-group col-5">
                                <label for="inputusername">Postcode</label>
                                <input type="text" name="postcode" class="form-control" id="postcode" placeholder="Postcode" required>
                            </div>
                            <div class="form-group col-2">
                                <label for="inputusername">huisnummer</label>
                                <input type="text" name="house-number" class="form-control" id="House-number" placeholder="Huisnummer" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-10">

                                <label for="inputPassword4">Land</label>
                                <input type="text" name="land" class="form-control" id="land" placeholder="Land" required>
                            </div>
                        </div>

                        
                        <div class="form-row">
                        </div>

                        <button type="submit" class="btn btn-lg btn-block registratie-button" value="checkpassword">Klaar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-4"></div>
