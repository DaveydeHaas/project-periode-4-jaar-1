<?php

// include connection and sanitize
include("./scripts/db_connect.php");
include("./scripts/functions.php");

// Username sanitizen (door mysql_real_escape_string & htmlspecialchars)
$username = sanitize($_POST["username"]);
// password sanitizen
$password = sanitize($_POST["pass"]);

//check of de login velden zijn ingevuld
if (empty($username) || empty($password)) {
    header("Location: ./index.php?content=message&alert=loginform-empty");
}
//check of de login velden zijn ingevuld
else {
    //maakt een connectie met de data, database en table
    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";

    $result = mysqli_query($conn, $sql);


    // kijkt na of de gegeven data overeen komt
    if (!mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=username-password-false");
    } else {
        $record = mysqli_fetch_assoc($result);

        //gehaste password uit database
        var_dump($record["password"]);
        //password die de gebruiker ingevuld heeft
        var_dump($password); {
            if (!password_verify($password, $record["password"])) {
                header("Location: ./index.php?content=message&alert=username-password-false");
            } else {

                $_SESSION["id"] = $record["id"];
                $_SESSION["userrole"] = $record["userrole"];
            
                switch ($record["userrole"]) {
                    case 'user':
                        header("Location: ./index.php?content=u-home");
                        break;

                    case 'root':
                        header("Location: ./index.php?content=r-home");
                        break;

                    case 'admin':
                        header("Location: ./index.php?content=a-home");
                        break;

                    case 'moderator':
                        header("Location: ./index.php?content=m-home");
                        break;

                    default:
                        header("Location: ./index.php?content=home");
                        break;
                }
            }
        }
    }
}
