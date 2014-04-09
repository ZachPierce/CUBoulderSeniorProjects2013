<?php
function check_file_uploaded_name ($filename)
{
    (bool) ((preg_match("`^[-0-9A-Z_\.]+$`i",$filename)) ? true : false);
}

if ($_FILES["file"]["error"] > 0){
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else{
        echo "Upload: " . $_FILES["userfile"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temporarily Stored in: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (!move_uploaded_file($_FILES["file"]["tmp_name"], "code/auto")) {
                echo "<br>failed to copy " . $_FILES['file']['name']."...";
        }
        else{
                #echo "<br><br>Stored in: " . "/var/www/code/" . $_FILES["file"]["name"];
                echo "<br><br>Stored in: " . "/var/www/code/auto";
        }
}
?>
