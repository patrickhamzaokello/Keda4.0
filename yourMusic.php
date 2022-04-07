<?php include("includes/includedFiles.php"); ?>

<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
    $("#sharedplaylistshowing").load("includes/sharedPlaylistlogic.php");
</script>


<div class="pagesection">

    <div class="overview__albums__head">

        <h2 class="pageHeadingBig">Playlist</h2>

    </div>

    <div class="buttonItems">
        <button class="button green" onclick="openPage('createplaylist')"> Create NEW Playlist</button>
    </div>

    <div class="album">


        <div class="albumlisting">



            <?php

            $username = $userLoggedIn->getUsername();

            $playlistQuery = mysqli_query($con, "SELECT * FROM playlists where owner ='$username'");

            if (mysqli_num_rows($playlistQuery) == 0) {
                echo "<span class='noResults'>You Don't have any Playlist. Create New Ones</span>";
            }

            while ($row = mysqli_fetch_array($playlistQuery)) {

                $playlist = new Playlist($con, $row); ?>

                <div class='albumlist' role='link' tabindex='0' onclick='openPage("playlist?id=<?= $playlist->getId() ?>")'>

                    <img class='image' src="<?= $playlist->getCoverimage() ?>">

                    <div class='albumlistinfo'><?= $playlist->getName() ?></div>
                </div>

            <?php
            }

            ?>




        </div>

    </div>




    <div class="overview__albums__head">

        <h2 class="pageHeadingBig">Shared Playlists</h2>

    </div>


    <div class="album">
        <p class="plabel">Playlist shared by people you follow appear here</p>


        <div class="albumlisting" id="sharedplaylistshowing">

            <!-- where share playlists will show  -->
        </div>

    </div>

</div>

<script>
    var elmnt = document.getElementById("mainContent");
    console.log(elmnt.scrollTop);
    elmnt.scrollTop = 0
</script>