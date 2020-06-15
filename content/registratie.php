<!-- form registratie -->

<div class="container-fluid">
    <div class="row">

        <div class="col-4"></div>

        <div class="card col-4 registratie-margin-top registratie-margin-bottom registratie-color1 ">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="card-title">Game District</h1>
                    <h4 class="card-subtitle mb-2 text-muted">Registratie</h4>
                </div>

                <form action="./index.php?content=registratie_script" method="POST">
                    <div class="form-container">
                        <div class="form-row">

                            <div class="form-group col-12">
                                <i class="fa fa-user"></i>
                                <label for="inputusername">Gebruikersnaam</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-envelope"></i>
                                <label for="inputusername">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputPassword4">Wachtwoord</label>
                                <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">
                            </div>

                            <div class="form-group col-12">
                                <i class="fa fa-lock"></i>
                                <label for="inputAddress">Opnieuw Wachtwoord</label>
                                <input type="password" name="cpass" class="form-control" id="inputVerifyPassword" placeholder="Verify Password">
                                <br>
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