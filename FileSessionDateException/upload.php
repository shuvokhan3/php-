<?php

//Selecte which dir,i want to store data;
$target_dir = 'uploads/';
//selected targeted file
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST['submit'])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
}

