<!-- headerends -->
<script>
  $(".lds-facebook").hide();
  $("#mainContent").show();
</script>

<?php
include("includes/includedFiles.php"); ?>

<?php if ($userRegstatus === "registered") : ?>
  <?php

  $likedsong = new LikedSong($con, $userLoggedIn->getUserId());


  ?>


  <div class="pagesection">
    <?php

    $songIdArray = $likedsong->getSongIds(); ?>

    <?php if ($songIdArray) : ?>

      <div class="overview__albums__head">

        <span class="section-title">Your Liked Songs</span>



      </div>

      <div class="entityInfo">
        <div class="leftSection">
          <img src="assets/images/bg.jpg">
        </div>

        <div class="rightSection">

          <p> <?php echo $likedsong->getNumberOfSongs(); ?> Songs</p>
          <p> Liked songs from different albums</p>

          <button class="button-dark" onclick="playFirstSong()">
            <i class="ion-ios-play"></i>
            Play
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
            <?php


            $songIdArray = $likedsong->getSongIds();

            $i = 1;

            foreach ($songIdArray as $songId) {

              $playlistSong = new Song($con, $songId);
              $songArtist = $playlistSong->getArtist();
              $songAlbum = $playlistSong->getAlbum();

              echo "
                                <div class='track'>

                                  <div class='track__number'>$i</div>
        
                                  <div class='track__added'>
        
                                    <i class='ion-play playsong ' onclick='setTrack(\"" . $playlistSong->getId() . "\",tempPlaylist, true)'></i>

                                  </div>
        
                                  <div class='track__title featured'>
                                  
                                    <span class='title' role='link' tabindex='0' onclick='openPage(\"album?id=" . $songAlbum->getId() . "\")'>" . $playlistSong->getTitle() . "</span>
                                    <span class='feature' role='link' tabindex='0' onclick='openPage(\"artist?id=" . $songArtist->getId() . "\")'>" . $songArtist->getName() . "</span>
                                    
                                  </div>
        
                                  <div class='track__more'>
          
                                    <input type='hidden' class='songId' value='" . $playlistSong->getId() . "'>
            
                                    <i class='ion-more' onclick='showOptionsMenu(this)'></i>
          
                                  </div>
                                
                                  <div class='track__length'>" . $playlistSong->getDuration() . "</div>
                                  
                                  <div class='track__popularity'>
                                  
                                    <i class='ion-arrow-graph-up-right'></i>
                                    
                                  </div>
        
                                </div> ";

              $i = $i + 1;
            }

            ?>

            <script>
              var tempSongIds = '<?php echo json_encode($songIdArray); ?>';
              tempPlaylist = JSON.parse(tempSongIds);
            </script>


          </div>

        </div>

      </div>


    <?php else :  ?>


      <div class='notificationempty'>
        <h5>Your Liked Songs and Artists Appear Here!</h5>
        <p>Add songs from albums and playlists </p>
      </div>

    <?php endif ?>

  </div>

  <!-- options menu -->

  <nav class="optionsMenu">
    <input type="hidden" class="songId">

    <div class="item" onclick="removeFromYourSongs(this, '<?php echo $likedsong->getOwner(); ?>')">Remove Song</div>


  </nav>


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
          <h2>Your Liked Songs</h2>

          <p>This is a premium feature. it shows all songs that you liked in your personal library. create an account or sign up to access this feature</p>
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