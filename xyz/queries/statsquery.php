<?php
//get number of artists verified
$verifiedartists_sql = mysqli_query($con, "SELECT COUNT(*) as totalartist from artists where status = 1");
$row = mysqli_fetch_array($verifiedartists_sql);
$verified_artists = $row['totalartist'];

//get number of artists not verified
$not_verifiedartists_sql = mysqli_query($con, "SELECT COUNT(*) as total_not_artist from artists where status = 0");
$row = mysqli_fetch_array($not_verifiedartists_sql);
$not_verified_artists = $row['total_not_artist'];

//get number of users 
$total_users_sql = mysqli_query($con, "SELECT COUNT(*) as total_users FROM users WHERE mwRole ='mwuser' ");
$row = mysqli_fetch_array($total_users_sql);
$total_users = $row['total_users'];

//get number of users 
$total_songs_sql = mysqli_query($con, "SELECT COUNT(*) as total_songs FROM songs WHERE `tag` = 'music'");
$row = mysqli_fetch_array($total_songs_sql);
$total_songs = $row['total_songs'];

//get number of total_ads 
$total_ads_sql = mysqli_query($con, "SELECT COUNT(*) as total_ads FROM songs WHERE `tag` = 'ad'");
$row = mysqli_fetch_array($total_ads_sql);
$total_ads = $row['total_ads'];


