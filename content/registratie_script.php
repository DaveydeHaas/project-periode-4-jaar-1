<?php
if (empty($_POST["username"])) {
    header("Location: ./index.php?content=message&alert=no-username");
} else {
    if (empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        if (empty($_POST["pass"])) {
            header("Location: ./index.php?content=message&alert=no-pass");
        } else {
            if (empty($_POST["cpass"])) {
                header("Location: ./index.php?content=message&alert=no-cpass");
            } else {

                if (empty($_POST["pass"]) || empty($_POST["cpass"])) {
                    header("Location: ./index.php?content=message&alert=no-pass-match");
                } else {
                    include("./scripts/db_connect.php");
                    include("./scripts/functions.php");

                    $email = sanitize($_POST["email"]);
                    $username = sanitize($_POST["username"]);
                    $password = sanitize($_POST["pass"]);
                    $verifypassword = sanitize($_POST["cpass"]);

                    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {
                        //email bestaat al
                        header("Location: ./index.php?content=message&alert=email-exists");
                    } else {

                        $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";

                        $result2 = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result2)) {
                            //username bestaat al
                            header("Location: ./index.php?content=message&alert=username-exists");
                        } else {


                            if ($password == $verifypassword) {

                                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                                //Gegevens sturen naar de database tabel users

                                $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`, `userrole`) VALUES(NULL, '$username', '$email', '$password_hash', 'user')";

                                if (mysqli_query($conn, $sql)) {

                                    $id = mysqli_insert_id($conn);

                                    $to = $email;
                                    $subject = "Activatielink voor uw account op gamecenter.org";
                                    $message = '<!doctype html>
                                                <html lang="en">
                                                <head>
                                                    <!-- Required meta tags -->
                                                    <meta charset="utf-8">
                                                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                                                
                                                    <!-- Bootstrap CSS -->
                                                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                                                </head>
                                                <body>
                                                    <h1>Activatie</h1>
                                                    <p>Klik <a href="http://gamecenter.org/index.php?content=verify&id=' . $id . '&pwh=' . $password_hash . '">hier</a> voor het activeren van uw account.</p>

                                                    <!-- Optional JavaScript -->
                                                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                                                </body>
                                                </html>';

                                    $headers = "MIME-Version: 1.0\r\n";
                                    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                                    $headers .= "From: admin@gamecenter.org\r\n";
                                    $headers .= "Cc: moderator@gamecenter.org\r\n";
                                    $headers .= "Bcc: root@gamecenter.org";

                                    mail($to, $subject, $message, $headers);

                                    header("Location: ./index.php?content=message&alert=register-complete");
                                } else {
                                    header("Location: ./index.php?content=message&alert=register-error");
                                }
                            } else {
                                header("Location: ./index.php?content=message&alert=password-no-match");
                            }
                        }
                    }
                }
            }
        }
    }
}




 // filtert de post data
//$email sanitize($_POST["email"]);
//$username sanitize($_POST["username"]);

// haalt de post data op
//$sqlemail = "SELECT * FROM `register` WHERE `email` = $email";
//$sqlusername = "SELECT * FROM `register` WHERE `username` = $username";

//myslqi_query($conn, $sql);
