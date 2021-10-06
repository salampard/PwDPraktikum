<?php

$myDir = "c:/xampp/htdocs/kuliah/Praktikum/";
$dir = opendir($myDir);

echo "Isi Folder : <br>";
while ($tmp = readdir($dir)) {
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
