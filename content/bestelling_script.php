<?php


var_dump($_POST['postcode']);

if(!isset($_SESSION['id'])){
    header("Location: ./index.php?content=message&alert=bestelling-no-user");
}else{
    if(empty($_POST['firstname'])){
        header("Location: ./index.php?content=message&alert=bestelling-no-firstname");
    }else{
        if(empty($_POST['lastname'])){
            header("Location: ./index.php?content=message&alert=bestelling-no-lastname");
        }else{
            if(empty($_POST['city'])){
                header("Location: ./index.php?content=message&alert=bestelling-no-city");
            }else{
                if(empty($_POST['postcode'])){
                    header("Location: ./index.php?content=message&alert=bestelling-no-adres");
                    }else{                
                        if(empty($_POST['house-number'])){
                        header("Location: ./index.php?content=message&alert=bestelling-no-house-number");
                        }else{
                            if(empty($_POST['land'])){
                            header("Location: ./index.php?content=message&alert=bestelling-no-land");
                            }else{
                                echo'geslaagd';
                            }
                        }
                    }
                }
        }
    }
}

?>