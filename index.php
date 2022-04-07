<?php

include("includes/includedFiles.php");
include("includes/queries/browsequery.php");

$userId = $userLoggedIn->getUserId();



?>

<script>
    albumnavitem();
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>

<!-- <button onclick="notifyMe()">Notify me!</button> -->
<div class="pagesection">


    <div class="promotionspace" style="display: none">
        <div class="promotionbanner" onclick="openPage('album?id=m_al61c1e19ec14ce961')">
            <img src="ads/zappernew.png" alt="">
        </div>
    </div>

    <div class="sectioncontainer">
        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Featured</span></h5>

                    <h2 class="hs__headline">Trending Artists
                    </h2>
                </div>

                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>
            <?php if ($featuredartists) : ?>

                <ul class="hs">

                    <?php
                    foreach ($featuredartists as $row) :

                    ?>

                        <?php
                        $artist = new Artist($con, $row['id']);
                        ?>


                        <li class="hs__item" role='link' tabindex='0' onclick="openPage('artist?id=<?= $row['id'] ?>')">
                            <div class="hs__item__image__wrapper">
                                <img class="hs__item__image" src="<?= $artist->getProfilePath() ?>" alt="" />
                            </div>
                            <div class="hs__item__description"><span class="hs__item__title"><?= $artist->getName() ?></span><span class="hs__item__subtitle"><?= $artist->getGenrename() ?></span></div>
                        </li>


                    <?php endforeach ?>




                </ul>




            <?php else :  ?>
                Working on Getting Featured Music Artists Curated for You
            <?php endif ?>


        </div>

    </div>




    <div class="sectioncontainer">
        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Curated</span></h5>
                    <h2 class="hs__headline">Featured Playlists</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>
            <?php if ($publicplaylistsarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($publicplaylistsarray as $row) :

                    ?>

                        <?php $playlist = new Playlist($con, $row) ?>

                        <li class="hs__item" role='link' tabindex='0' onclick='openPage("playlist?id=<?= $playlist->getId() ?>")'>
                            <div class="hs__item__image__wrapper">
                                <img class="hs__item__image" src="<?= $playlist->getCoverimage() ?>" alt="" />
                            </div>
                            <div class="hs__item__description"><span class="hs__item__title"><?= $playlist->getName() ?></span><span class="hs__item__subtitle">Mwonyaa Stream</span></div>
                        </li>


                    <?php endforeach ?>




                </ul>




            <?php else :  ?>
                Working on Playlist Curated for You
            <?php endif ?>


        </div>

    </div>



    <div class="sectioncontainer">
        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Featured</span></h5>
                    <h2 class="hs__headline">Hotest Albums</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>
            <?php if ($albumsarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($albumsarray as $row) :

                    ?>

                        <?php
                        $album = new Album($con, $row['id']);
                        $artist = $album->getArtist();
                        ?>


                        <li class="hs__item" role='link' tabindex='0' onclick="openPage('album?id=<?= $row['id'] ?>')">
                            <div class="hs__item__image__wrapper">
                                <img class="hs__item__image" src="<?= $row['artworkPath'] ?>" alt="" />
                            </div>
                            <div class="hs__item__description"><span class="hs__item__title"><?= $row['title'] ?></span><span class="hs__item__subtitle"><?= $artist->getName() ?></span></div>
                        </li>


                    <?php endforeach ?>




                </ul>




            <?php else :  ?>
                Working on Getting Music Albums Curated for You
            <?php endif ?>


        </div>

    </div>



    <div class="sectioncontainer">

        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Featured</span></h5>
                    <h2 class="hs__headline">Mwonyaa Podcasts</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>

            <?php if ($podcastsarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($podcastsarray as $row) :

                    ?>

                        <?php
                        $album = new Album($con, $row['id']);
                        $artist = $album->getArtist();
                        ?>


                        <li class="hs__item" role='link' tabindex='0' onclick="openPage('mediacollection?id=<?= $row['id'] ?>')">
                            <div class="hs__item__image__wrapper">
                                <img class="hs__item__image" src="<?= $row['artworkPath'] ?>" alt="" />
                            </div>
                            <div class="hs__item__description"><span class="hs__item__title"><?= $row['title'] ?></span><span class="hs__item__subtitle"><?= $artist->getName() ?></span></div>
                        </li>


                    <?php endforeach ?>




                </ul>




            <?php else :  ?>
                Working on Getting Podcasts Curated for You
            <?php endif ?>

        </div>
    </div>

    <div class="sectioncontainer">
        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Recently Updated</span></h5>
                    <h2 class="hs__headline">DJ Mixes</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>
            <?php if ($djmixesarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($djmixesarray as $row) :

                    ?>

                        <?php
                        $album = new Album($con, $row['id']);
                        $artist = $album->getArtist();
                        ?>


                        <li class="hs__item" role='link' tabindex='0' onclick="openPage('mediacollection?id=<?= $row['id'] ?>')">
                            <div class="hs__item__image__wrapper">
                                <img class="hs__item__image" src="<?= $row['artworkPath'] ?>" alt="" />
                            </div>
                            <div class="hs__item__description"><span class="hs__item__title"><?= $row['title'] ?></span><span class="hs__item__subtitle"><?= $artist->getName() ?></span></div>
                        </li>


                    <?php endforeach ?>



                </ul>




            <?php else :  ?>
                Working on Getting Dj Mixes Curated for You
            <?php endif ?>
        </div>
    </div>
    <div class="sectioncontainer">
        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Recently Updated</span></h5>
                    <h2 class="hs__headline">Mwonyaa Poems</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>
            <?php if ($poemsarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($poemsarray as $row) :

                    ?>

                        <?php
                        $album = new Album($con, $row['id']);
                        $artist = $album->getArtist();
                        ?>


                        <li class="hs__item" role='link' tabindex='0' onclick="openPage('mediacollection?id=<?= $row['id'] ?>')">
                            <div class="hs__item__image__wrapper">
                                <img class="hs__item__image" src="<?= $row['artworkPath'] ?>" alt="" />
                            </div>
                            <div class="hs__item__description"><span class="hs__item__title"><?= $row['title'] ?></span><span class="hs__item__subtitle"><?= $artist->getName() ?></span></div>
                        </li>


                    <?php endforeach ?>



                </ul>




            <?php else :  ?>
                Working on Getting Poems Curated for You
            <?php endif ?>
        </div>
    </div>

    <script>
        $(function() {
            var elmnt = document.getElementById("mainContent");
            elmnt.scrollTop = 0
            var instance = $(".hs__wrapper");

            $.each(instance, function(key, value) {

                var arrows = $(instance[key]).find(".arrow"),
                    prevArrow = arrows.filter('.arrow-prev'),
                    nextArrow = arrows.filter('.arrow-next'),
                    box = $(instance[key]).find(".hs"),
                    x = 0,
                    mx = 0,
                    maxScrollWidth = box[0].scrollWidth - (box[0].clientWidth / 2) - (box.width() / 2);

                $(arrows).on('click', function() {

                    if ($(this).hasClass("arrow-next")) {
                        x = ((box.width() / 2)) + box.scrollLeft() - 10;
                        box.animate({
                            scrollLeft: x,
                        })
                    } else {
                        x = ((box.width() / 2)) - box.scrollLeft() - 10;
                        box.animate({
                            scrollLeft: -x,
                        })
                    }

                });

                $(box).on({
                    mousemove: function(e) {
                        var mx2 = e.pageX - this.offsetLeft;
                        if (mx) this.scrollLeft = this.sx + mx - mx2;
                    },
                    mousedown: function(e) {
                        this.sx = this.scrollLeft;
                        mx = e.pageX - this.offsetLeft;
                    },
                    scroll: function() {
                        toggleArrows();
                    }
                });

                $(document).on("mouseup", function() {
                    mx = 0;
                });

                function toggleArrows() {
                    if (box.scrollLeft() > maxScrollWidth - 10) {
                        // disable next button when right end has reached 
                        nextArrow.addClass('disabled');
                    } else if (box.scrollLeft() < 10) {
                        // disable prev button when left end has reached 
                        prevArrow.addClass('disabled')
                    } else {
                        // both are enabled
                        nextArrow.removeClass('disabled');
                        prevArrow.removeClass('disabled');
                    }
                }

            });
        });
    </script>



</div>