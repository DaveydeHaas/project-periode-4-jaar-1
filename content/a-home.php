a-home
<?php
    var_dump($_SESSION);
    
    echo session_id();
    echo "<hr>";
    echo "Mijn gebruikersrol is: ". $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: ". $_SESSION["id"];

?>