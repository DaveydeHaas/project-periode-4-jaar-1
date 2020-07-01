<?php
include("./scripts/db_connect.php");
include("./scripts/functions.php");


    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);

    $sql = "SELECT * FROM users WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);


        if(mysqli_num_rows($result)){
            $record = mysqli_fetch_assoc($result);
            
           if ($record["verified"]){
            header("Location: ./index.php?content=message&alert=already-activated");
           }else{
            $sql = "UPDATE `users` SET `verified` = 1 WHERE `id` = $id";
            if(mysqli_query($conn, $sql)){
                header("Location: ./index.php?content=message&alert=user-activated");
            }else{
                header("Location: ./index.php?content=message&alert=update+error&id=$id&pwh=$pwh");
           }
        }
        }


?>