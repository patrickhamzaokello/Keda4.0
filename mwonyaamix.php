<?php
include("includes/includedFiles.php");


if (!isset($_COOKIE['nowsong_id'])) {
    echo "
    <div class='notificationempty'>
    <h5>We use Cookies to Store your Tracks</h5>
    <p>Allow cookies in settings</p>
</div>
    ";

    header("Location:index");
    return;
}

$mixid = $_COOKIE['nowsong_id'];

$albumSong = new Song($con, $mixid);


$songgenre = $albumSong->getGenre();

if ($songgenre) {
    include("includes/queries/mwonyaamixquery.php");
} else {
?>

    <div>
        <p>Mix not Found. Checkout the Top Trending songs on Mwonyaa Here.
        <p>

        <div class="suggestions" onclick="openPage('weeklytopsongs')">Trending This Week</div>

    </div>

<?php
    exit;
}


?>
<!-- headerends -->
<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>



<?php if ($mwonyaamixarray) : ?>

    <?php $albumSong = new Song($con, $mixid) ?>
    <?php $albumArtist = $albumSong->getArtist() ?>
    <?php $songAlbum = $albumSong->getAlbum() ?>

    <div class='player-full' style="transform: translateY(0px); will-change: transform; transition-property: transform; transition-duration: 500ms; transition-timing-function: ease-in-out;">
        <div class="player-wrapper player-queuelist">
            <div class="player-header">
                <div class="player-close"><button class="svg-icon-group-btn" type="button" aria-label="Close panel"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                            <g>
                                <path d="m8 11.5 6-6.277-.69-.723L8 10.054 2.691 4.5l-.69.723L8 11.5z"></path>
                            </g>
                        </svg></button></div>
            </div>
            <div class="player-container">
                <div class="queuelist-cover">
                    <div class="queuelist-cover-thumbnail">
                        <figure class="figurethumbnail">
                            <div class="picture overlay-hidden no-background">
                                <img src="<?= $songAlbum->getArtworkPath() ?>" loading="lazy" alt="Skin" class="sk__sc-10y8cfp-0 aBWjY picture-img" height="380" width="380">
                                <div class="playbuttondiv">
                                    <div class="mainplaybutton">
                                        <a class="icon icon ion-ios-play mainplay" onclick="playFirstSong()"></a>
                                    </div>
                                    <div class="mainpausebutton">
                                        <a class="icon icon ion-ios-pause mainpause" onclick="pauseSong()"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="queuelist-cover-actions">
                        <ul class="svg-icon-group">
                            <li class="svg-icon-group-item"><button class="svg-icon-group-btn" type="button" aria-label="View lyrics"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                        <g>
                                            <path d="M15 4.5a3.5 3.5 0 1 0-7 0 3.5 3.5 0 0 0 7 0zm1 0a4.5 4.5 0 0 1-5.099 4.46L3.048 15 0 12l7-7.58v.08a4.5 4.5 0 1 1 9 0zM7.166 5.715l-5.774 6.252 1.736 1.71 6.57-5.053a4.511 4.511 0 0 1-2.532-2.91z"></path>
                                        </g>
                                    </svg></button></li>
                            <li class="svg-icon-group-item">
                                <div class="popper-wrapper"><button class="svg-icon-group-btn" type="button"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path d="M9 0H8v7H1v1h7v7h1V8h7V7H9V0z"></path>
                                            </g>
                                        </svg></button></div>
                            </li>
                            <li class="svg-icon-group-item"><button class="svg-icon-group-btn option-btn" type="button" aria-label="Add to favourite tracks"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                        <g>
                                            <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                        </g>
                                    </svg></button></li>
                            <li class="svg-icon-group-item">
                                <div class="popper-wrapper"><button class="svg-icon-group-btn" type="button"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                            </g>
                                        </svg></button></div>
                            </li>
                        </ul>
                    </div>
                    <div class="queuelist-cover-title"><a class="queuelist-cover-link" href="#"><?= $albumSong->getTitle() ?> . (RADIO MIX)</a></div>
                    <div class="queuelist-cover-subtitle"><a class="queuelist-cover-link" href="#">Tracks curated from <?= $albumArtist->getName() ?> - and many more</a></div>
                </div>
                <div class="queuelist-content">
                    <div class="queuelist-header">
                        <div class="queuelist-heading"><span class="queuelist-title">Mwonyaa Mix</span><span class="queuelist-subtitle"> · <?= sizeof($mwonyaamixarray) ?> tracks </span></div>
                        <div class="popper-wrapper"><button type="button" class="sk__sc-1y6h0ji-0 bNQPvi"><span class="sk__sc-1y6h0ji-1 fZCKwv">Add to playlist</span></button></div>
                    </div>

                    <div class="queuelist-datagrid nano has-scrollbar">
                        <div class="scroller-shadow-top is-active"></div>
                        <div class="scroller-shadow-bottom"></div>
                        <div class="nano-content" tabindex="0" style="right: -12px;">
                            <div class="nano-content-ref">
                                <div class="datagrid-container">
                                    <div class="datagrid">
                                        <?php
                                        $i = 1;

                                        foreach ($mwonyaamixarray as $songid) :
                                        ?>



                                            <?php $albumSong = new Song($con, $songid) ?>
                                            <?php $albumArtist = $albumSong->getArtist() ?>
                                            <?php $songAlbum = $albumSong->getAlbum() ?>

                                            <div class="datagrid-row song is-first track" data-key="140869465" draggable="true" itemprop="track" itemscope="" itemtype="http://schema.org/MusicRecording">
                                                <div class="datagrid-cell datagrid-cell-action" onclick='setTrack(<?= $albumSong->getId() ?>,tempPlaylist, true)'>
                                                    <div class="datagrid-cover datagrid-cover-hover">
                                                        <figure class="figurethumbnail">
                                                            <div class="picture overlay-hidden no-background"><img src="<?= $songAlbum->getArtworkPath() ?>" loading="lazy" alt="Skin - Rag'n'Bone Man" class="sk__sc-10y8cfp-0 xGwwo picture-img" height="28" width="28"></div>
                                                        </figure>
                                                    </div>
                                                    <div class="datagrid-cell-hover cell-play"><a class="cell-play-icons" role="button" data-target="play" tabindex="0" aria-label="Play"><span class="play-default"><svg class="svg-icon svg-icon-play" focusable="false" height="10" role="img" width="10" viewBox="0 0 12 12" aria-hidden="true">
                                                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                                                </svg></span><span class="play-hover"><svg class="svg-icon svg-icon-pause" focusable="false" height="10" role="img" width="10" viewBox="0 0 12 12" aria-hidden="true">
                                                                    <path d="M2.495 0h2.01C4.778 0 5 .224 5 .5v11a.5.5 0 0 1-.495.5h-2.01A.498.498 0 0 1 2 11.5V.5a.5.5 0 0 1 .495-.5ZM7 .5a.5.5 0 0 1 .495-.5h2.01c.273 0 .495.224.495.5v11a.5.5 0 0 1-.495.5h-2.01A.498.498 0 0 1 7 11.5V.5Z"></path>
                                                                </svg></span><span class="play-active"><span class="equalizer equalizer-inverse equalizer-12"></span></span></a></div>
                                                </div>
                                                <div class="datagrid-cell datagrid-cell-action cell-love">
                                                    <input type='hidden' class='songId' value='<?= $albumSong->getId() ?>'>
                                                    <input type='hidden' class='artistId' value='<?= $albumArtist->getId() ?>'>
                                                    <button class="datagrid-action option-btn" type="button" onclick='addSongLiked(this)' aria-label="Add to favourite tracks"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                            <g>
                                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                            </g>
                                                        </svg></button>
                                                </div>
                                                <div class="datagrid-cell cell-title">
                                                    <div class="ellipsis" onclick="openPage('song?id=<?= $albumSong->getId() ?>')"><a itemprop="url" class="datagrid-label datagrid-label-main title" tabindex="0" role="button" href="#"><span itemprop="name"><?= $albumSong->getTitle() ?></span></a></div>
                                                </div>
                                                <div class="datagrid-cell datagrid-cell-hover datagrid-cell-action">
                                                    <div class="popper-wrapper"><button class="datagrid-action" type="button"><svg class="svg-icon svg-icon-options" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                                                <path d="M10.5 7.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM6 7.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm-4.5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"></path>
                                                            </svg></button></div>
                                                </div>
                                                <div class="datagrid-cell datagrid-cell-action"><span class="datagrid-action"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                            <g>
                                                                <path d="M15 4.5a3.5 3.5 0 1 0-7 0 3.5 3.5 0 0 0 7 0zm1 0a4.5 4.5 0 0 1-5.099 4.46L3.048 15 0 12l7-7.58v.08a4.5 4.5 0 1 1 9 0zM7.166 5.715l-5.774 6.252 1.736 1.71 6.57-5.053a4.511 4.511 0 0 1-2.532-2.91z"></path>
                                                            </g>
                                                        </svg></span></div>
                                                <div class="datagrid-cell cell-artist">
                                                    <div class="ellipsis" onclick="openPage('artist?id=<?= $albumArtist->getId() ?>')"><a class="datagrid-label datagrid-label-main" itemprop="byArtist" title="Rag'n'Bone Man" href="#"><?= $albumArtist->getName() ?></a></div>
                                                </div>
                                                <div class="datagrid-cell cell-duration">
                                                    <meta itemprop="duration" content="PT3M59S"><span class="datagrid-label datagrid-label-idle ellipsis"><?= $albumSong->getDuration() ?></span>
                                                </div>
                                                <div class="datagrid-cell datagrid-cell-action cell-remove"><button class="datagrid-action" type="button"><svg class="svg-icon svg-icon-cancel" focusable="false" height="14" role="img" width="14" viewBox="0 0 12 12" aria-hidden="true">
                                                            <path d="m1.75 10.25 8.5-8.5m.002 8.505L1.75 1.75" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-width="1.5"></path>
                                                        </svg></button></div>
                                            </div>

                                        <?php
                                            $i = $i + 1;
                                        endforeach
                                        ?>



                                        <script>
                                            var tempSongIds = '<?php echo json_encode($mwonyaamixarray); ?>';
                                            tempPlaylist = JSON.parse(tempSongIds);



                                            // $("#mainContent").animate({ scrollTop: 0 }, "fast");
                                            document.getElementById("mainContent").scrollIntoView({
                                                behavior: "smooth",
                                                block: "start",
                                                inline: "nearest"
                                            })
                                        </script>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nano-pane" style="">
                            <div class="nano-slider" style="height: 70px; transform: translate(0px, 111.981px);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php else :  ?>
    No Recommended songs
<?php endif ?>

<script>
    var elmnt = document.getElementById("mainContent");
    elmnt.scrollTop = 0

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