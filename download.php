<?php

if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/',$file)) {
 header('Content-Type: application/mp3');
 header("Content-Disposition: attachment; filename=\"$file\"");
 readfile($file);
 }
}

?>