<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";

// messages
switch($alert){
    case "no-email" :
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-email</h1>
        <hr>
        <p>U heeft geen email ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "no-username":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-username</h1>
        <hr>
        <p>U heeft geen username ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "no-pass":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-pass</h1>
        <hr>
        <p>U heeft geen password ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "no-cpass":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>No-cpass</h1>
        <hr>
        <p>U heeft geen verify password ingevoerd probeer dit opnieuw</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "email-exists":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>email-exists</h1>
        <hr>
        <p>Het ingevoerde email adress bestaat al probeer een ander email adress.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "username-exists":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>username-exists</h1>
        <hr>
        <p>De ingevoerde username bestaat al probeer een andere username.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "register-complete":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>register-complete</h1>
        <hr>
        <p>U bent succesvol geregistreerd op de webstie Game Center</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "register-error":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>register-error</h1>
        <hr>
        <p>Er is iets fout gegaan probeer dit later opnieuw. <br> Als deze fout zich voor blijft doen neem contact op met de server admin.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "password-no-match":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>no-pass-match</h1>
        <hr>
        <p>U wachtwoord en verify wachtwoord komen niet overeen.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=registratie");
    break;

    case "loginform-empty":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>login-form-empty</h1>
        <hr>
        <p>U heeft 1 van de beide velden niet ingevuld, probeer dit opnieuw </p>
        <br>
        </div>'; 
    break;

    case "username-password-false":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>username-password-false</h1>
        <hr>
        <p>Het door u ingevulde username en password combinatie komt niet met elkaar overeen. probeer het opnieuw.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=login");
    break;

    case "logout":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>logout</h1>
        <hr>
        <p>u bent uitgelogd en wordt doorverwezen naar de homepage.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "auth-error":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Authentication error</h1>
        <hr>
        <p>U heeft geen bevoegdheden voor deze pagina. U wordt doorgestuurd naar de homepage.</p>
        <br>
        </div>'; 
        header("Refresh:3 ; ./index.php?content=home");
    break;

    case "cart-empty":
        echo '
        <div class="alert alert-danger" role="alert">
        <br>
        <h1>Authentication error</h1>
        <hr>
        <p>U winkelmand is leeg.</p>
        <br>
        </div>'; 

    break;
    case "logout":
        echo '
        <div class="alert alert-success" role="alert">
        <br>
        <h1>Logout</h1>
        <hr>
        <p>U bent uitgelogd, u wordt doorgestuurd naar de homepage.</p>
        <br>
        </div>'; 

        header("Refresh: 3; ./index.php?content=home");
    break;

   


    default:
        header("Location: ./index.php?content=home");
    break;
    
}
?>