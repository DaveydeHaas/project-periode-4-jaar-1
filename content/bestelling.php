<?php 
require_once("./scripts/component.php");
require_once("./scripts/db_content.php");

if(isset($_SESSION['id'])){
 echo "test";
}else{
    header("Location: ./index.php?content=message&alert=bestelling-no-user");
}


?>