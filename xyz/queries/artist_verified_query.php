<?php
$verifiedArtistarray = array();

$artistQuery = mysqli_query($con, "SELECT * FROM artists WHERE tag='music' AND status = 0 ORDER BY `artists`.`datecreated` DESC ");

while ($row = mysqli_fetch_array($artistQuery)) {

    array_push($verifiedArtistarray, $row);

}
