<?php
include("includes/includedFiles.php");

$podcastsarray = array();

$podcastQuery = mysqli_query($con, "SELECT * FROM albums WHERE tag = \"podcast\" ORDER BY datecreated DESC LIMIT 20");

//pushing to the podcast array
while ($row = mysqli_fetch_array($podcastQuery)) {

    array_push($podcastsarray, $row);
}


$djarray = array();

$djQuery = mysqli_query($con, "SELECT * FROM albums WHERE tag = \"dj\" ORDER BY RAND() LIMIT 20");

//pushing to the podcast array
while ($row = mysqli_fetch_array($djQuery)) {

    array_push($djarray, $row);
}



$poemarray = array();

$poemquery = mysqli_query($con, "SELECT * FROM albums WHERE tag = \"poem\" ORDER BY RAND() LIMIT 20");

//pushing to the podcast array
while ($row = mysqli_fetch_array($poemquery)) {

    array_push($poemarray, $row);
}




?>
<script>
    artistnavitem();
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>

<!-- headerends -->
<div class="pagesection">


    <div class="sectioncontainer">
        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Featured</span></h5>

                    <h2 class="hs__headline">Jump Back In
                    </h2>
                </div>

                <!-- <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div> -->
            </div>

            <ul class="hs">



                <li class="hs__item" role='link' tabindex='0' onclick='openPage("weeklytopsongs")'>
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="assets/images/createdplaylist/weekly.png" alt="" />
                    </div>
                    <div class="hs__item__description"><span class="hs__item__title">Weekly Top Songs</span><span class="hs__item__subtitle">Mwonyaa Stream</span></div>
                </li>

                <li class="hs__item" role='link' tabindex='0' onclick='openPage("recentlyplayed")'>
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="assets/images/createdplaylist/recentlyplayed.png" alt="" />
                    </div>
                    <div class="hs__item__description"><span class="hs__item__title">Recently Played Songs</span><span class="hs__item__subtitle">Mwonyaa Stream</span></div>
                </li>

                <li class="hs__item" role='link' tabindex='0' onclick='openPage("mostplayedsongs")'>
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="assets/images/createdplaylist/mostplayed.png" alt="" />
                    </div>
                    <div class="hs__item__description"><span class="hs__item__title">Most Played</span><span class="hs__item__subtitle">Mwonyaa Stream</span></div>
                </li>

                <li class="hs__item" role='link' tabindex='0' onclick='openPage("recommendations")'>
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="assets/images/createdplaylist/recommended.png" alt="" />
                    </div>
                    <div class="hs__item__description"><span class="hs__item__title">Recommended Songs</span><span class="hs__item__subtitle">Mwonyaa Stream</span></div>
                </li>


            </ul>



        </div>

    </div>

    <div class="sectioncontainer">
        <div class="hs__header">
            <div class="sectionheadingroup">
                <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>

                <h2 class="hs__headline">Music Artists
                </h2>
            </div>

            <!-- <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div> -->
        </div>


        <ul class="mwonyaartistlisting">

            <?php

            $artistQuery = mysqli_query($con, "SELECT * FROM artists WHERE tag='music' AND status = 1 ORDER BY `artists`.`overalplays` DESC");

            while ($row = mysqli_fetch_array($artistQuery)) {


                echo "
                
                <li class='listedartist' role='link' tabindex='0' onclick='openPage(\"artist?id=" . $row['id'] . "\")'>
                <img class='listedartistprofile' src='" . $row['profilephoto'] . "'>
                
                <p>" . $row['name'] . "</p>
                
                </li>
                
                ";
            }

            ?>



        </ul>

    </div>



    <div class="sectioncontainer">
        <div class="hs__header">
            <div class="sectionheadingroup">
                <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>

                <h2 class="hs__headline">Podcast Creators
                </h2>
            </div>

            <!-- <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div> -->
        </div>

        <div class="usercollection">

            <?php

            $artistQuery = mysqli_query($con, "SELECT * FROM artists WHERE tag='podcast' AND status = 1 ORDER BY `artists`.`overalplays` DESC ");


            if (mysqli_num_rows($artistQuery) == 0) {
                echo "<span class='noResults'>no users</span>";
            }

            while ($row = mysqli_fetch_array($artistQuery)) {


                echo "
            <div class='friend'>

                <div class='userdiv' onclick='openPage(\"artist?id=" . $row['id'] . "\")'>
                <img src='" . $row['profilephoto'] . "' alt='' />

            </div>

                <p> " . $row['name'] . " </p>

            </div>

            ";
            }


            ?>

        </div>
    </div>

    <div class="sectioncontainer">
        <div class="hs__header">
            <div class="sectionheadingroup">
                <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>

                <h2 class="hs__headline">Music Djs
                </h2>
            </div>

            <!-- <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div> -->
        </div>

        <div class="usercollection">

            <?php

            $artistQuery = mysqli_query($con, "SELECT * FROM artists WHERE tag='dj' AND status = 1 ORDER BY `artists`.`overalplays` DESC ");


            if (mysqli_num_rows($artistQuery) == 0) {
                echo "<span class='noResults'>no users</span>";
            }

            while ($row = mysqli_fetch_array($artistQuery)) {


                echo "
            <div class='friend'>

                <div class='userdiv' onclick='openPage(\"artist?id=" . $row['id'] . "\")'>
                <img src='" . $row['profilephoto'] . "' alt='' />

            </div>

                <p> " . $row['name'] . " </p>

            </div>

            ";
            }


            ?>

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
                    <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>
                    <h2 class="hs__headline">Featured Dj Mixes</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>

            <?php if ($djarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($djarray as $row) :

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

    <?php

    $artistQuery = mysqli_query($con, "SELECT * FROM artists WHERE tag='poem' AND status = 1 ORDER BY `artists`.`overalplays` DESC ");


    if (mysqli_num_rows($artistQuery) == 0) {
    ?>


        <div class="sectioncontainer">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>

                    <h2 class="hs__headline">Poem Mastors
                    </h2>
                </div>
            </div>
        </div>



    <?php
    } else {
    ?>
        <div class="sectioncontainer">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>

                    <h2 class="hs__headline">Poem Mastors
                    </h2>
                </div>

                <!-- <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div> -->
            </div>

            <div class="usercollection">

                <?php

                while ($row = mysqli_fetch_array($artistQuery)) {


                    echo "
            <div class='friend'>

                <div class='userdiv' onclick='openPage(\"artist?id=" . $row['id'] . "\")'>
                <img src='" . $row['profilephoto'] . "' alt='' />

            </div>

                <p> " . $row['name'] . " </p>

            </div>

            ";
                }


                ?>

            </div>

        </div>
    <?php } ?>


    <div class="sectioncontainer">

        <div class="hs__wrapper">
            <div class="hs__header">
                <div class="sectionheadingroup">
                    <h5><span class="hs__item__subtitle">Mwonyaa</span></h5>
                    <h2 class="hs__headline">Featured Poems</h2>
                </div>
                <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
            </div>

            <?php if ($poemarray) : ?>

                <ul class="hs">

                    <?php
                    foreach ($poemarray as $row) :

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