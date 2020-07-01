a-home
<?php
$userrole = 'admin';

if(isset($_SESSION['id'])){
    if($_SESSION['userrole'] == $userrole){
        echo 'Test';
    }

}else{
    header("Location: ./index.php?content=message&alert=no-admin");
}






    var_dump($_SESSION);
    
    echo session_id();
    echo "<hr>";
    echo "Mijn gebruikersrol is: ". $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: ". $_SESSION["id"];

?>