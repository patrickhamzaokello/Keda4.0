<?php
require "../../includes/config.php";
require "../../includes/classes/Artist.php";
require "../../includes/classes/Album.php";
require "../../includes/classes/Genre.php";
require "../../includes/classes/Song.php";
require "../../includes/classes/Playlist.php";

$db = new Database();
$con = $db->getConnString();
?>