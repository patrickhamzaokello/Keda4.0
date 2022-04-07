<?php
include("includes/includedFiles.php");
?>

<!-- headerends -->
<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>

<?php if ($userRegstatus === "registered") : ?>

<!-- headerends -->
<div class="createplaylistpage">

    <div class="nocontentinplaylist">
        <h5>Create New Playlist! </h5>
        <p>Create new Playlist and Add you Music to it.</p>
    </div>


    <form action="javascript:void(0)" onsubmit="improvedcreateplaylist()" method="post" id="ajax-form">

        <div id="show_message" class="alert alert-success" style="display: none"></div>

        <div id="error" class="alert alert-danger" style="display: none"></div>



        <div class="createplaylistoverlay">

            <div class="imagecovercontainer">
                <label for="file-input-createplaylist">Cover Image *</label>
                <div class="imagegroup">
                    <img for="file-input-createplaylist" class="playlistcoverimage" id="blah" src="assets\images\createdplaylist\defaultplaylist.png" alt="image" />
                    <div class="inputicon">
                        <label for="file-input-createplaylist">
                            <ion-icon size="large" class="uploadicons" name="cloud-upload"></ion-icon>
                        </label>
                        <p for="file-input-createplaylist">Choose Image</p>
                        <input id="file-input-createplaylist" name="" class="playlistuloadfile" type='file' accept="image/*" onchange="readimageURL(this);" />
                    </div>
                    <div for="file-input-createplaylist" class="playlistcoveroverlay">

                    </div>
                </div>
            </div>

            <div class="playlistnameform">

                <div class="getplaylistdata">
                    <div class="inputaread">
                        <label for="plname">Name *</label>
                        <input class="actualinputforms" id="plname" name="cplaylistname" placeholder="Playlist Title" type="text">

                    </div>
                    <div class="inputaread">
                        <label for="pldesc">Description *</label>
                        <input class="actualinputforms" id="pldesc" name="cplaylistdesc" placeholder="Add an Optional Description" type="text">
                    </div>

                    <div class="csubmitbutton">
                        <input type="submit" class="btn btn-success btn-sm" name="submit" value="Save Playlist">
                    </div>



                </div>

            </div>

        </div>

    </form>

</div>

<?php else :  ?>

<script>
  showPreviewDialog();
</script>

<div class="pagesection">


  <div class="dismissable">

    <div class="dismissablecontent">

      <div class="previewimagecontainer">
        <img src="assets/images/livethumbnails/createplaylistlive.png" alt="images">
      </div>

      <div class="dismissablecontentdesc">

        <div class="dismissablecontenttext">
          <h4>Mwonyaa Stream <span>FEATURED</span></h4>
          <h2>Create Playlists. Be in Control!</h2>

          <p>Create Playlists and Share with Your Friends or Let it be Featured on Mwonyaa to be view and Listened to by Everyone</p>
        </div>

        <div class="dismissablecontentbutton">
          <button class="liveshowbtn" onclick="showPreviewDialog()">Create New Playlist</button>
        </div>

      </div>

    </div>

  </div>



</div>

<?php endif ?>

<script>
    var elmnt = document.getElementById("mainContent");
    elmnt.scrollTop = 0
</script>