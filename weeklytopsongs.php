<?php
include("includes/includedFiles.php");
include("includes/queries/weeklytopsongs.php");

?>
<!-- headerends -->
<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>





<div class="pagesection">

    <div class="overview__albums__head">

        <span class="section-title">Weekly Top 10 Songs</span>

    </div>

    <?php if ($recentSongIds) : ?>
        <div class="entityInfo">
            <div class="leftSection">
                <img src="assets/images/createdplaylist/weekly.png">
            </div>

            <div class="rightSection">
                <h2>Trending Songs</h2>

                <p>Find all the Songs topping the charts this week Here</p>

                <button class="button-dark" onclick="playFirstSong()">
                    <i class="ion-ios-play"></i>
                    Play All
                </button>

            </div>
        </div>


        <div class="album">

            <div class='album__tracks'>

                <div class='tracks'>

                    <div class='tracks__heading'>

                        <div class='tracks__heading__number'>#</div>

                        <div class='tracks__heading__title'>Song</div>

                        <div class='tracks__heading__length'>

                            <i class='ion-ios-stopwatch-outline'></i>

                        </div>

                        <div class='tracks__heading__popularity'>

                            <i class='ion-thumbsup'></i>

                        </div>

                    </div>

                    <?php if ($recentSongIds) : ?>

                        <?php $i = 1;?>


                            <?php
                            foreach ($recentSongIds as $songId) :

                            ?>

                                <?php
                                $albumSong = new Song($con, $songId);
                                $albumArtist = $albumSong->getArtist();
                                ?>



                                <div class='track'>

                                    <div class='track__number'><?=$i?></div>

                                    <div class='track__added'>

                                        <i class='ion-play playsong ' onclick='setTrack("<?=$albumSong->getId()?>",tempPlaylist, true)'></i>

                                    </div>

                                    <div class='track__added'>

                                        <input type='hidden' class='songId' value="<?=$albumSong->getId()?>">
                                        <input type='hidden' class='artistId' value="<?=$albumArtist->getId()?>">


                                        <i class='ion-heart' onclick="addSongLiked(this)"></i>

                                    </div>

                                    <div class='track__title featured'>
                                        <span class='title' value="<?=$albumSong->getId()?>" onclick='setTrack("<?=$albumSong->getId()?>",tempPlaylist, true)'><?=$albumSong->getTitle()?></span>
                                        <span class='feature' value="<?=$albumArtist->getId()?>" onclick='openPage("artist?id=<?=$albumArtist->getId()?>")'><?=$albumArtist->getName()?></span>
                                    </div>

                                    <div class='track__more'>

                                        <input type='hidden' class='songId' value="<?=$albumSong->getId()?>">

                                        <i class='ion-more' onclick='showOptionsMenu(this)'></i>

                                    </div>

                                    <div class='track__length'><?=$albumSong->getDuration()?></div>

                                    <div class='track__popularity'>

                                        <i class='ion-arrow-graph-up-right'></i>

                                    </div>

                                </div> 

                                <?php $i = $i + 1;?>


                            <?php endforeach ?>







                    <?php else :  ?>
                        Working on Getting Dj Mixes Curated for You
                    <?php endif ?>




                    <script>
                        var tempSongIds = '<?php echo json_encode($recentSongIds); ?>';
                        tempPlaylist = JSON.parse(tempSongIds);




                        var elmnt = document.getElementById("mainContent");

                        elmnt.scrollTop = 0;



                        $("input[value=" + currentPlaylist[currentIndex] + "]")
                            .parent()
                            .parent()
                            .addClass("pkkkk");
                        $(".pkkkk").css("border-left", "none");
                        $(".pkkkk").css("background", "none");

                        if (
                            $("input[value=" + currentPlaylist[currentIndex] + "]")
                            .parent()
                            .parent()
                            .hasClass("pkkkk")
                        ) {
                            $(".track").removeClass("pkkkk");
                            $("input[value=" + currentPlaylist[currentIndex] + "]")
                                .parent()
                                .parent()
                                .addClass("pkkkk");
                            $(".pkkkk").css("border-left", "2px solid yellow");
                            $(".pkkkk").css("background", "#2c093a");
                        } else {
                            $(".pkkkk").css("border-left", "none");
                            $(".pkkkk").css("background", "none");

                            $(".track").removeClass("pkkkk");
                        }
                    </script>


                </div>

            </div>

        </div>


    <?php else :  ?>
        <div>
            <p> Listen to Music, and They will show up here. Checkout the Top Trending songs on Mwonyaa Here.
            <p>

            <div class="suggestions" onclick="openPage('weeklytopsongs')">Trending This Week</div>

        </div>
    <?php endif ?>

</div>

<!-- options menu -->

<nav class="optionsMenu">
    <input type="hidden" class="songId">
    <?php echo Playlist::getPlaylistsDropdown($con, $userLoggedIn->getUsername()); ?>
</nav>