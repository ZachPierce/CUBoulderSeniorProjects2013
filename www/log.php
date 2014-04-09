<?php
if ($handle = opendir('/var/www/logs/')) {
    while (false !== ($entry = readdir($handle))) {
        if (substr($entry, 0, 4) == 'fcs_' || substr($entry, 0, 5) == 'tele_') {
            echo "<a href='./logs/$entry'>$entry</a><br>";
        }
    }
    closedir($handle);
}
?>
