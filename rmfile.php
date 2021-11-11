<?php
session_start();

$filename = $_POST['rmfile'];
$full_path = $_SESSION["usr_dir"]."/".$filename;


if (!unlink($full_path)) {
    echo "<h1>File cannot be deleted due to an error! Plase return to preview page</h1>";
}
else {
    echo "<h1>File deleted! Plase return to preview page</h1>";
}

?>