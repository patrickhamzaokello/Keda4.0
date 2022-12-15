<?php

//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require "shareInclude.php";
    $track_id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

    $song = new Song($con, $track_id);
    $artist = $song->getArtist();
    $song_album = $song->getAlbum();
    $song_genre = $song->getGenrelink();
    $song_artist_id = $artist->getId();
    $song_Genre_id = $song->getGenre();

    ?>

    <?php if ($song->getTitle() != null) : ?>
        <title><?= $song->getTitle() ?> - <?= $artist->getName() ?></title>
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?= $song->getTitle() ?>">
        <meta property="og:description" content="<?= $artist->getName() ?> - <?= $song->getTag() ?> - <?= $song->getDateAdded() ?>. Click the link to Listen on Mwonya Stream">
        <meta property="og:url" content="https://www.mwonyaa.com/song?id=<?= $song->getId() ?>">
        <meta property="og:site_name" content="Mwonya Music">
        <meta property="article:published_time" content="<?= $song->getDateAdded() ?>">
        <meta property="article:modified_time" content="<?= $song->getDateAdded() ?>">
        <meta property="og:update_time" content="<?= $song->getDateAdded() ?>">
        <meta property="og:image"
              content="<?= $song_album->getArtworkPath() ?>">
        <meta property="og:image:secure_url"
              content="<?= $song_album->getArtworkPath() ?>">
        <meta property="og:image:width" content="300">
        <meta property="og:image:height" content="300">
        <meta property="og:image:alt" content="<?= $song->getTitle() ?> - <?= $artist->getName() ?>">
    <?php else : ?>
        <title>Mwonya</title>
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Mwonya: African Entertainment">
        <meta property="og:description" content="Mwonya Platform provides Music, Live Radio, Podcasts,Dj Mixes and Poems All available on the go and at your demand.">
        <meta property="og:url" content="https://www.mwonya.com/">
        <meta property="og:site_name" content="Mwonya Music">
        <meta property="article:published_time" content="02 Dec 2022">
        <meta property="article:modified_time" content="02 Dec 2022">
        <meta property="og:update_time" content="Mwonya Music">
        <meta property="og:image"
              content="mwonya logo">
        <meta property="og:image:secure_url"
              content="mwonya logo">
        <meta property="og:image:width" content="250">
        <meta property="og:image:height" content="250">
        <meta property="og:image:alt" content="Mwonya logo">
    <?php endif ?>



</head>

<body>

<h1>Mwonya Share Track ID <?= $track_id ?></h1>


</body>

</html>

