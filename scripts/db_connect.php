<?php
    //Inloggen op database en database selecteren

    define("SERVERNAME", "localhost");
    define("USERNAME", "Admin");
    define("PASSWORD", "Admin!");
    define("DATABASE", "gamecenter");

//Contact makem met MySQL-Server
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE);
?>