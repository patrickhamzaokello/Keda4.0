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




?>

<script>
  podcastnavitem();
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










</div>

<script>
  var elmnt = document.getElementById("mainContent");
  elmnt.scrollTop = 0
</script>