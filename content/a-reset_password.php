<?php

$userrole = 'admin';

if(isset($_SESSION['id'])){
    if($_SESSION['userrole'] == $userrole){
        echo 'Test';
    }

}else{
    header("Location: ./index.php?content=message&alert=no-admin");
}

?>