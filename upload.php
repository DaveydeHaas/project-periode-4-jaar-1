<?php

if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));


    $allowed = array('jpg', 'jpeg','png', 'webp');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true). "." . $fileActualExt;
                $fileDestionation = 'afbeeldingen/producten/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestionation);
                header("Location: index.php?uploadsuccess");
            }else{
                echo "Your file is to big";
            }
        }else{
            echo "There was an error while uploading your file.";
        }
    }else{
        echo "You cannot upload files of this type";
    }
}

?>