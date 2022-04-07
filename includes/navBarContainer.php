<?php
include("includes/classes/Playlist.php");


?>
<div class="content__left">

    <section id="nav" class="navigation">

        <div class="navigation__list">
            <div class="navigation__list__header" role="button" data-toggle="collapse" href="#yourHome" aria-expanded="true" aria-controls="yourHome">
                <i class="ion-social-buffer"></i>

                Home
            </div>

            <div class="collapse in" id="yourHome">


                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('index')">
                    <i class="ion-ios-albums-outline"></i>
                    <span>Music</span>
                </span>
                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('library')">
                    <i class="ion-android-contact"></i>
                    <span>Library</span>
                </span>

                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('manageaccount')">
                    <i class="ion-android-settings"></i>
                    <span>Account</span>
                </span>


            </div>


        </div>

        <!-- Your Music -->
        <div class="navigation__list">
            <div class="navigation__list__header" role="button" data-toggle="collapse" href="#yourMusic" aria-expanded="true" aria-controls="yourMusic">
                <i class="ion-social-buffer"></i>

                Your Music
            </div>

            <div class="collapse in" id="yourMusic">


                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('history')">
                    <i class="ion-person"></i>
                    <span>Listening History</span>
                </span>

                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('userSongs')">
                    <i class="ion-headphone"></i>
                    <span>Liked Songs</span>
                </span>

                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('userArtist')">
                    <i class="ion-person"></i>
                    <span>Favourite Artists</span>
                </span>

                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('playlists')">
                    <i class="ion-document"></i>
                    <span>Playlists</span>
                </span>
                <span class="navigation__list__item" role="link" tabindex="0" onclick="openPage('friends')">
                    <i class="ion-document"></i>
                    <span>Friends</span>
                </span>


            </div>

        </div>


        <!-- / -->

        <!-- Playlists -->
        <div class="navigation__list">

            <div class="navigation__list__header" role="button" data-toggle="collapse" href="#playlists" aria-expanded="true" aria-controls="playlists">
                <i class="ion-social-buffer"></i>

                Playlists

            </div>

            <div class="collapse in  playlistadjusted" id="playlists">

                <!-- listing playlists here -->

            </div>

        </div>
        <!-- / -->



    </section>


    <div class="songplaying">

        <div class="lds-dual-ring"> </div>

        <div class="maxidicator heartbeat" onclick="playerView()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" />
                <path d="M8 13.5L12 9.5L16 13.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </div>

        <div class="playing__art">

            <img id="albumartworkbg" role='link' tabindex='0' src="" alt="Album Art" />

        </div>

    </div>


    <section class="playing">

        <div class="minimize heartbeat" onclick="minimize()">
            <svg width="449" height="449" viewBox="0 0 449 449" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="224.5" cy="224.5" r="224.5" fill="#C4C4C4" />
                <path d="M215.454 346.528C220.726 351.8 229.274 351.8 234.546 346.528L320.459 260.615C325.732 255.342 325.732 246.795 320.459 241.523C315.187 236.251 306.64 236.251 301.368 241.523L225 317.89L148.632 241.523C143.36 236.251 134.813 236.251 129.541 241.523C124.268 246.795 124.268 255.342 129.541 260.615L215.454 346.528ZM211.5 111L211.5 336.982H238.5L238.5 111H211.5Z" fill="#310D6C" />
            </svg>
        </div>



        <div class="playing__song">

            <span role='link' tabindex='0' class=" marquee playing__song__name"></span>

            <span role='link' tabindex='0' class="playing__song__artist"></span>

        </div>

    </section>

</div>