<?php
if(empty($_POST["username"]))
{
    header("Location: ./index.php?content=message&alert=no-username");
}
else
{
    if(empty($_POST["email"]))
    {
        header("Location: ./index.php?content=message&alert=no-email");
    }
    else
    {
        if(empty($_POST["pass"]))
        {
            header("Location: ./index.php?content=message&alert=no-pass");
        }
        else
        {
            if(empty($_POST["cpass"]))
            {
                header("Location: ./index.php?content=message&alert=no-cpass");
            }
            else
            {

                if(empty($_POST["pass"]) || empty($_POST["cpass"]))
                {
                    header("Location: ./index.php?content=message&alert=no-pass-match");
                }
                else
                {
                    include("./scripts/db_connect.php");
                    include("./scripts/functions.php");
                    
                    $email = sanitize($_POST["email"]);
                    $username = sanitize($_POST["username"]);
                    $password = sanitize($_POST["pass"]);
                    $verifypassword = sanitize($_POST["cpass"]);
                    
                    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result))
                    {
                        //email bestaat al
                        header("Location: ./index.php?content=message&alert=email-exists");
                    }
                    else
                    {
                        
                        $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";
                        
                        $result2 = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result2))
                        {
                            //username bestaat al
                            header("Location: ./index.php?content=message&alert=username-exists");
                        }
                        else
                        {
                            

                            if($password == $verifypassword)
                            {

                                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                                //Gegevens sturen naar de database tabel register
                                $sql = "INSERT INTO `users` (`id`,
                                                             `username`
                                                             `email`,
                                                             `password`,
                                                             `userrole`)
                                                       VALUES(NULL,
                                                             '$username'
                                                             '$email',
                                                             '$password_hash'
                                                             'user')";
                            
                                if (mysqli_query($conn, $sql)) {
                                header("Location: ./index.php?content=message&alert=register-complete");
                                } else {
                                header ("Location: ./index.php?content=message&alert=register-error");   
                                }
                            }
                            else
                            {
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
