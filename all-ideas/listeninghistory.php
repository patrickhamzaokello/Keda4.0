<?php if ($curatedplaylist) : ?>

<?php

    $useridgot = "<script>currentuser</script>";

    ?>

<div class="album">

    <ul class='albumlisting'>
        <?php
            foreach ($curatedplaylist as $row) :
            ?>


        <li class='albumlist' role='link' tabindex='0' onclick="openPage('<?= $row['pagename'] ?>?id=<?= $userId ?>')">

            <img class="curatedimage" src='<?= $row['coverart'] ?>'>

            <div class='imagetextover'><?= $row['title'] ?></div>

        </li>

        <?php endforeach ?>

    </ul>

</div>

<?php else :  ?>
Working on Curated Mixs for You
<?php endif ?>