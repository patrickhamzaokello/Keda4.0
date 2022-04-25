<?php
include("includes/includedFiles.php");

if (isset($_GET['id'])) {
    $albumId =  $_GET['id'];
} else {
    header("Location:index");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();



?>
<!-- headerends -->
<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>

<div class="pagesection">

    <div class="catalog-content">


        <?php if ($album->getSongIds()) : ?>

            <div class="dee_container">

                <div class="_5BJsj">
                    <div class="_2mzRF">
                        <div class="_2Rv6Z _2j25R _2L8AT">
                            <figure class="_1733Q"><img src="<?php echo $album->getArtworkPath(); ?>" loading="lazy" alt="<?php echo $album->getTitle(); ?>" class="sk__sc-10y8cfp-0 fIa-dLY TjhqK" height="264" width="264"></figure>
                        </div>
                        <div class="_2yyo6">
                            <h1 class="heading-1 ellipsis _3Oi7U"><?php echo $album->getTitle(); ?></h1>
                            <div class="_2kEwD ellipsis">
                                <ul class="Hexbv _3X1W4">
                                    <li class="_1GIIs">
                                        <div class="tooltip-wrapper">
                                            <div class="_2Rv6Z _2w27N _2L8AT">
                                                <figure class="_1733Q"><img src="<?php echo $artist->getProfilePath(); ?>" loading="lazy" class="sk__sc-10y8cfp-0 xGwwo TjhqK" height="28" width="28"></figure>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h2 class="_2Z2Jc"><a class="tnmRk" href="/us/artist/102"><?php echo $artist->getName(); ?></a></h2>
                            </div>
                            <ul class="NV1uU">
                                <li class="_3XRsF"><?php echo $album->getNumberOfSongs(); ?> tracks</li>
                                <li class="_3XRsF">1 h 09 mins</li>
                                <li class="_3XRsF"><?php echo $album->getDatecreated(); ?></li>
                                <li class="_3XRsF">6,160 plays</li>
                            </ul>
                            <div class="_1k3N9">
                                <div class="_2PSK5" data-testid="toolbar">
                                    <div class="_2cOQ6" data-testid="play"><button onclick="playFirstSong()" type="button" class="sk__sc-1y6h0ji-0 hACRDz"><span class="sk__sc-1y6h0ji-2 gNHbdC"><svg class="svg-icon svg-icon-play-circle" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                                    <path d="M6 11A5 5 0 1 0 6 1a5 5 0 0 0 0 10Zm0 1A6 6 0 1 1 6 0a6 6 0 0 1 0 12ZM4.937 4.017a.125.125 0 0 0-.187.108v3.75c0 .096.104.156.187.108l3.25-1.875a.125.125 0 0 0 0-.216l-3.25-1.875Z"></path>
                                                </svg></span><span class="sk__sc-1y6h0ji-1 fZCKwv">
                                                <div class="states-button-action is-active"><span class="states-button-label">Play All</span></div>
                                                <div class="states-button-action"><span class="states-button-label">Now Playing</span></div>
                                                <div class="states-button-action"><span class="states-button-label">Pause</span></div>
                                                <div class="states-button-action"><span class="states-button-label">Resume</span></div>
                                            </span></button></div>
                                    <div class="_2cOQ6"><button type="button" aria-label="Added" class="sk__sc-1y6h0ji-0 dAfnoz"><svg class="svg-icon svg-icon-love color-primary" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                                <path d="M6 2.5S5 1 3.25 1C1.667 1 0 2.25 0 4.5c0 3 6 7 6 7s6-4 6-7C12 2.25 10.334 1 8.75 1 7 1 6 2.5 6 2.5Z"></path>
                                            </svg></button></div>
                                    <div class="_2cOQ6"><button type="button" aria-haspopup="true" aria-label="Share" class="sk__sc-1y6h0ji-0 dAfnoz"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M8 14.26v-4.195c-1.34.182-2.54.719-3.478 1.283-.576.347-1.038.694-1.354.953a8.783 8.783 0 0 0-.44.387l-.019.017-.002.002L.358 15.06l.662-3.259L2 12s.516-.518 1.404-1.123C4.478 10.145 6.096 9.284 8 9.057A8.051 8.051 0 0 1 9 9v3l2.553-2.32L14 7.5 9 3v2c-3.738.451-5.58 3.303-6.408 5.225C2.154 11.243 2 12 2 12l-.98-.199v-.004l.002-.007.005-.02a4.953 4.953 0 0 1 .073-.3 12.354 12.354 0 0 1 1.407-3.24C3.533 6.579 5.257 4.775 8 4.159V.755l7.499 6.748-3.277 2.92L8 14.26z"></path>
                                                </g>
                                            </svg></button></div>
                                    <div class="_2cOQ6">
                                        <div class="popper-wrapper"><button type="button" aria-haspopup="true" aria-label="View menu" class="sk__sc-1y6h0ji-0 dAfnoz"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                    <g>
                                                        <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                    </g>
                                                </svg></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-rowcount="18" class="xdRiL" data-testid="is-fully-fetched" role="grid">
                    <div class="_1wurs" role="rowgroup">
                        <div class="_2ZGZ3 _9V_Tf _32dqv" role="columnheader"><span>TRACK</span></div>
                        <div class="_2ZGZ3 XHdIB _32dqv" role="columnheader"><span><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                    <g>
                                        <path d="M15 8A7 7 0 1 0 1 8a7 7 0 0 0 14 0zm1 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM7 3.2v5.404l3.824 3.06.625-.782L8 8.123V3.2H7z"></path>
                                    </g>
                                </svg></span></div>

                    </div>
                    <div class="_1r7b-" role="rowgroup">




                        <?php
                        $songIdArray = $album->getSongIds();
                        $songPathArray = $album->getSongPaths();
                        $i = 1;


                        foreach ($songIdArray as $songId) :
                        ?>


                            <?php $albumSong = new Song($con, $songId); ?>
                            <?php $albumArtist = $albumSong->getArtist(); ?>




                            <div draggable="false" class="JoTQr" aria-rowindex="1" aria-selected="true" role="row" style="height: 56px;">
                                <div class="ZLI1L _9H6uT _2LgeE">
                                    <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                        <div class="TY--6 zMvxh" onclick='setTrack("<?= $albumSong->getId() ?>",tempPlaylist, true)'>
                                            <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                            <div class="_3-BPG _1H3xE"><button type="button" aria-label="Play Throwed by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                        <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                                    </svg></button></div>
                                        </div>
                                        <div class="_1s9oz"></div>
                                        <div class="_2tIhH">
                                            <div class="_1FlQH"><span class="BT3T6 LZV4h" data-testid="title"><?= $i ?>. <?= $albumSong->getTitle() ?></span></div>
                                        </div>
                                        <div class="_3jkbz">
                                            <input type='hidden' class='songId' value='<?= $albumSong->getId() ?>'>
                                            <input type='hidden' class='artistId' value='<?= $albumArtist->getId() ?>'>
                                            <button onclick='addSongLiked(this)' type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                    <g>
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                        <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                    </g>
                                                </svg>

                                            </button>
                                            <div class="popper-wrapper">
                                                <input type='hidden' class='songId' value='<?= $albumSong->getId() ?>'>

                                                <button onclick='showOptionsMenu(this)' type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                        <g>
                                                            <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                        </g>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                        <div class="CPAmL"><a class="_3PZ8B" data-testid="artist" href="/us/artist/323"><?= $albumArtist->getName() ?></a></div>
                                    </div>

                                    <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY _3QRVL"><?= $albumSong->getDuration()  ?></span></div>

                                </div>
                            </div>


                        <?php
                            $i = $i + 1;
                        endforeach
                        ?>


                    </div>
                    <div class="_37RiP">
                        <div class="_3bIZO"></div>
                        <div class="_1Qw1W"><span class="_30NiJ">Loading</span><svg class="svg-icon svg-icon-loader animate-spin" focusable="false" height="24" role="img" width="24" viewBox="0 0 12 12" aria-hidden="true">
                                <path d="m1.735 10.22.707-.707a5 5 0 1 0 .015-7.042l-.707-.706a6 6 0 1 1-.015 8.456Z"></path>
                            </svg></div>
                    </div>
                </div>
                <div class="catalog-legal-notice">2007 | Jive</div>
            </div>

            <script>
                var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
                tempPlaylist = JSON.parse(tempSongIds);

                var tempSongsPath = '<?php echo json_encode($songPathArray); ?>';
                tempPlaylistSongPath = JSON.parse(tempSongsPath);

                $(".track__title .feature").attr("onclick",
                    "openPage('artist?id=<?php echo $albumArtist->getId() ?>')");


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
                    $(".pkkkk").css("background", "#4b2078");
                } else {
                    $(".pkkkk").css("border-left", "none");
                    $(".pkkkk").css("background", "none");

                    $(".track").removeClass("pkkkk");
                }
            </script>
        <?php else :  ?>
            Media Content is Empty, Check Back soon when the Artist has uploaded Content
        <?php endif ?>

        <!-- options menu -->

        <nav class="optionsMenu">
            <input type="hidden" class="songId">
            <?php echo Playlist::getPlaylistsDropdown($con, $userLoggedIn->getUsername()); ?>
        </nav>
    </div>

</div>