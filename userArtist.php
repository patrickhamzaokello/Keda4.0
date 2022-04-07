<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>
<?php include("includes/includedFiles.php"); ?>

<?php if ($userRegstatus === "registered") : ?>

    <?php
    include("includes/classes/NewRelease.php");

    $likedsong = new LikedSong($con, $userLoggedIn->getUserId());
    $owner = new User($con, $likedsong->getOwner());

    ?>


    <!-- headerends -->

    <div class="pagesection">

        <div class="albumcontainer">

            <div class="hs__wrapper">
                <div class="hs__header">
                    <h2 class="hs__headline">Latest Release
                    </h2>
                    <div class="hs__arrows"><a class="arrow disabled arrow-prev"></a><a class="arrow arrow-next"></a></div>
                </div>
                <?php $artistIdArray = $likedsong->getArtistYouFollow(); ?>

                <?php if ($artistIdArray) : ?>

                    <ul class="hs">

                        <?php
                        foreach ($artistIdArray as $artistid) :

                        ?>

                            <?php
                            $artist = new Artist($con, $artistid);
                            $Newalbum = new NewRelease($con, $artistid);
                            ?>


                            <li class="hs__item" role='link' tabindex='0'>
                                <div class="hs__item__image__wrapper" onclick="openPage('album?id=<?= $Newalbum->getId() ?>')">
                                    <img class="hs__item__image" src="<?= $Newalbum->getArtworkPath() ?>" alt="" />
                                </div>
                                <div class="hs__item__description">

                                    <span class="hs__item__title" onclick="openPage('album?id=<?= $Newalbum->getId() ?>')"><?= $Newalbum->getTitle() ?></span>
                                    <span class="hs__item__subtitle" onclick="openPage('artist?id=<?= $Newalbum->getArtistId() ?>')"><?= $artist->getName() ?></span>

                                    <span class="hs__item__subtitle"><?= $Newalbum->getDatecreated() ?></span>


                                </div>
                            </li>


                        <?php endforeach ?>




                    </ul>




                <?php else :  ?>
                    <div class="notificationempty">
                        Follow artists to get Instant Updates when they post New content and Updates.

                    </div>

                <?php endif ?>


            </div>

        </div>


        <div class="overview__albums__head">

            <span class="section-title">Your Liked Artists</span>

        </div>




        <div class="album">




            <?php

            $artistIdArray = $likedsong->getArtistIds(); ?>

            <?php if ($artistIdArray) : ?>

                <div class="usercollection">


                    <?php
                    $i = 1;

                    foreach ($artistIdArray as $artistid) {

                        $artist = new Artist($con, $artistid);

                        echo "
            <div class='friend'>

                <div class='userdiv' onclick='openPage(\"artist?id=" . $artist->getId() . "\")'>
                <img src='" . $artist->getProfilePath() . "' alt='' />

            </div>

                <p> " . $artist->getName() . " </p>

            </div>

            ";
                        $i = $i + 1;
                    }


                    ?>
                </div>


            <?php else :  ?>


                <div class='notificationempty'>
                    <h5>Your Liked Artists Appear Here!</h5>
                </div>

            <?php endif ?>








        </div>


        <div class="overview__albums__head">

            <span class="section-title">Artist You Follow</span>

        </div>




        <div class="album">




            <?php

            $artistIdArray = $likedsong->getArtistYouFollow(); ?>



            <?php if ($artistIdArray) : ?>

                <div class="usercollection">


                    <?php

                    $i = 1;

                    foreach ($artistIdArray as $artistid) {

                        $artist = new Artist($con, $artistid);

                        echo "
            <div class='friend'>

                <div class='userdiv' onclick='openPage(\"artist?id=" . $artist->getId() . "\")'>
                <img src='" . $artist->getProfilePath() . "' alt='' />

            </div>

                <p> " . $artist->getName() . " </p>

            </div>

            ";
                        $i = $i + 1;
                    }


                    ?>

                </div>


            <?php else :  ?>

                <div class="notificationempty">
                    Artists you follow appear here, Follow your favourite artists to get started,

                </div>


            <?php endif ?>









        </div>

    </div>

<?php else :  ?>

    <script>
        showPreviewDialog();
    </script>

    <div class="dismissable">

        <div class="dismissablecontent">

            <div class="previewimagecontainer">
                <img src="assets/images/livethumbnails/premium.svg" alt="images">
            </div>

            <div class="dismissablecontentdesc">

                <div class="dismissablecontenttext">
                    <h4>Mwonyaa Stream</h4>
                    <h2>Favourite Artists</h2>

                    <p>Create an account to be able to Check Here often for new Content from your Favourite Artists & Creators and also manage Artists you follow</p>
                </div>

                <div class="dismissablecontentbutton">
                    <button class="liveshowbtn" onclick="createAccount();">Create Account</button>
                </div>

            </div>

        </div>

    </div>


<?php endif ?>



<script>
    var elmnt = document.getElementById("mainContent");
    elmnt.scrollTop = 0
</script>

<script>
    // work in progress - needs some refactoring and will drop JQuery i promise :)
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
</script>


</div>