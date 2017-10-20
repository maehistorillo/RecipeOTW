<?php
$target_dir = "color:brown">"uploads/";
$target_file = $target_dir . basename("color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"name"]);
$uploadOk = "color:red">1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
"color:green">// Check if image file is a actual image or fake image
"color:mediumblue">if("color:mediumblue">isset("color:goldenrod">$_POST["color:brown">"submit"])) {
    $check = getimagesize("color:goldenrod">$_FILES["color:brown">"fileToUpload"]["color:brown">"tmp_name"]);
    "color:mediumblue">if($check !== false) {
        "color:mediumblue">echo "color:brown">"File is an image - " . $check["color:brown">"mime"] . "color:brown">".";
        $uploadOk = "color:red">1;
    } "color:mediumblue">else {
        "color:mediumblue">echo "color:brown">"File is not an image.";
        $uploadOk = "color:red">0;
    }
}
"color:red">?>