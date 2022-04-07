<?php
if (isset($_GET['term'])) {
    $term = urldecode($_GET['term']);
} else {
    $term = "";
}
?>

<script>
$(".searchInput").focus();
$(function() {

    $(".searchInput").keyup(function() {
        clearTimeout(timer);

        $(".spinner img").css("visibility", "visible");


        timer = setTimeout(function() {

            var val = $(".searchInput").val();
            openPage("search?term=" + val);
        }, 2000)
    });

});

function menuhandler() {
    document.getElementById("navmenu").classList.toggle("change");
    document.getElementById("nav").classList.toggle("navchange");
}
</script>


<section class="header">

    <div class="page-flows">

        <span class="flow" role="link" tabindex="0" onclick="openPage('index'); albumnavitem()">
            Mwonyaa
        </span>


    </div>

    <div class="search">

        <input type="text" name="searchinputfield" class="searchInput" value="<?php echo $term ?>" placeholder="Search"
            onfocus="this.value = this.value" />

        <span class="spinner"> <img src="assets/images/icons/spinner.gif" alt=""></span>
        <div id="menu-bar">
            <div id="navmenu" onclick="menuhandler()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
        </div>








    </div>

    <div class="navitems">

        <span id="albumnavitem" class="navigation__list__item" role="link" tabindex="0"
            onclick="openPage('index');  albumnavitem()">
            <i class="ion-ios-albums-outline"></i>
            <span>Music</span>
        </span>

        <span id="artistnavitem" class="navigation__list__item" role="link" tabindex="0"
            onclick="openPage('library'); artistnavitem() ">
            <i class="ion-android-contact"></i>
            <span>Library</span>
        </span>


        <span id="podcastnavitem" class="navigation__list__item" role="link" tabindex="0"
            onclick="openPage('podcasts');  podcastnavitem()">
            <i class="ion-ios-mic"></i>
            <span>Podcast</span>
        </span>

        <span id="djmixnavitem" class="navigation__list__item" role="link" tabindex="0"
            onclick="openPage('liveshows'); djmixnavitem()">
            <i class="ion-social-buffer"></i>
            <span>Live</span>
        </span>

        <span id="poemnavitem" class="navigation__list__item" role="link" tabindex="0"
            onclick="openPage('shop'); poemnavitem()">
            <i class="ion-pricetag"></i>
            <span>Shop</span>
        </span>


        <button class="playlistbtn button-dark" onclick="openPage('createplaylist')">
            <span role='link' tabindex='0'>

                <i class="ion-ios-plus-outline"></i>

                Playlist

            </span>
        </button>


    </div>

    <div class="user">

        <!-- <div class="user__notifications">
      
        <i class="ion-android-notifications"></i>
        
      </div>
      
      <div class="user__inbox">
      
        <i class="ion-archive"></i>
        
      </div> -->

        <div class="user__info">

            <span class="user__info__img">

                <img src="assets/images/profile-pics/head_emerald.jpg" alt="Profile Picture" class="img-responsive" />

            </span>

            <span class="user__info__name" role="link" tabindex="0" onclick="openPage('settings')">
                <span class="first"><?= $userLoggedIn->getcheckuser() ? $userLoggedIn->getUsername():$username ?></span>
            </span>

        </div>

        <div class="user__actions">

            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <i class="ion-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li onclick="openPage('manageaccount')"><span role="link" tabindex="0">Account</span></li>
                    <li onclick="openPage('settings')"><span role="link" tabindex="0">Settings</span></li>
                    <li onclick="logout()"><span role="link" tabindex="0">Log Out</span></li>
                </ul>
            </div>

        </div>

    </div>

</section>