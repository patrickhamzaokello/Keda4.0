<?php
include("includes/includedIndexFiles.php");
include("includes/queries/indexpagequery.php");

?>

<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YNG3P75VXH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YNG3P75VXH');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mwonyaa is Home to Ugandan Music, Live Radio, Podcast. Discover new Artist and Other Content Creators From Uganda">
    <meta name="keywords" content="Mwonyaa, Northern Uganda, Music Streaming Site, Mwonyaa Music, Ugandan Streaming Platform, Mwonyaa Music, Streaming Platform">

    <meta name="theme-color" content="#180026" />
    <link rel="manifest" href="manifest.json">

    <script>
        // service worker supported by browser
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('sw.js')
        };
    </script>


    <title>Mwonyaa Home</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/browserconfig.xml">

    <!-- favicon end  -->

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://d1d1i04hu392ot.cloudfront.net/dist/css/style.css"> -->
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">Mwonyaa Stream </h1>
                            <h4>Music & Podcast Streaming Platform</h4>
                            <p class="hero-paragraph">Home to Music, Live Radio, Podcasts,Dj Mixes and Poems All
                                available on the go and at your demand. </p>
                            <p style="font-size: 15px;">Start listening to the best new releases.</p>
                            <div class="hero-cta"><a class="button button-primary" href="browse">Web Player</a><a class="button" href="mwonyacreate/index">Become an Artist</a></div>
                        </div>
                        <div class="hero-figure anime-element">
                            <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                <rect width="528" height="396" style="fill:transparent;" />
                            </svg>

                            <div class="hero-figure-box hero-figure-box-05">
                            </div>



                            <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="features section albumlistedonuserpage">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <?php if ($albumsarray) : ?>

                    <p class="albumsheading">Start Listening Now - Albums, Artists</p>


                            <div class="features-wrap">


                                <?php
                                foreach ($albumsarray as $row) :

                                ?>

                                    <?php
                                    $album = new Album($con, $row['id']);
                                    $artist = $album->getArtist();
                                    ?>

                                    <div class="feature text-center is-revealing">
                                        <div class="feature-inner selectedalbumindex">
                                            <img class="featuredalbumeindex" src="<?= $row['artworkPath'] ?>" alt="">
                                            <div class="imageoverlay"></div>
                                            <div class="albumviewaction">

                                            <p class="albumtitlebig"><?= $row['title'] ?></p>
                                            <p><?= $artist->getName() ?></p>
                                            <a href="album?id=<?= $row['id'] ?>">Play Now</a>

                                            </div>
                                        </div>
                                    </div>


                                <?php endforeach ?>
                            </div>

                        <?php else :  ?>
                            Working on Getting Music Albums Curated for You
                        <?php endif ?>
                    </div>
                </div>
            </section>

            <!-- <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-02.svg" width="50" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">Music</h4>
                                    <p class="text-sm mb-0">Enjoy our Wide Collection of Songs and Albums from various
                                        Artists, New Realeases and so much more from Ugandan Music Entertainment</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-04.svg" width="50" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">Live Radio</h4>
                                    <p class="text-sm mb-0">Listen to Your Favourite Radio Channels on the go, anywhere
                                        anytime all available from the wide range of local channels</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-01.svg" width="50" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Podcasts</h4>
                                    <p class="text-sm mb-0">Featuring top Shows around Town with Topics suitable to your
                                        moods and interests all available</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-03.svg" width="50" alt="Feature 04">
                                    </div>
                                    <h4 class="feature-title mt-24">Dj Mixes</h4>
                                    <p class="text-sm mb-0">Explore all your Favourite Djs and their Mixtapes all in one
                                        place. Create Playlist of your Favourite nonstops</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-05.svg" width="50" alt="Feature 05">
                                    </div>
                                    <h4 class="feature-title mt-24">Poems</h4>
                                    <p class="text-sm mb-0">Bringing to you the Wide collection of Poems in many genre
                                        for all the Poem Lovers</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-06.svg" width="50" alt="Feature 06">
                                    </div>
                                    <h4 class="feature-title mt-24">More +</h4>
                                    <p class="text-sm mb-0">We are focused on Developing more Products to meet our
                                        increasing customer demands and ensuring quality content produced</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Unlimited for all</h2>
                            <p class="section-paragraph mb-0">Sign up and Setup Payment Methods and Enjoy Full Features
                                with no Limits</p>
                        </div>
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price"><span class="pricing-table-price-currency h2">UGX</span><span class="pricing-table-price-amount h1"> 5,000</span><span class="text-xs">/month</span></div>
                                        </div>
                                        <div class="pricing-table-features-title text-xs pt-24 pb-24">What you will get
                                        </div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>Unlimited Access to All Content</span>
                                            </li>
                                            <li>
                                                <span>Saving Songs Offline to Listen Later</span>
                                            </li>
                                            <li>
                                                <span>Access to Artist Live Performance on Mwonya</span>
                                            </li>
                                            <li>
                                                <span>Sharing Playlists with Friends</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="register">Buy
                                            Package now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="cta section">
                <div class="container">
                    <div class="cta-inner section-inner">


                        <div>
                            <h3 class="section-title mt-0">Become a Content Creator on Mwonyaa!</h3>

                            <p>Built for Artists and Producers and all Creators</p>

                        </div>
                        <div class="cta-cta">
                            <a class="button button-primary button-wide-mobile" href="mwonyacreate/index.php">Sign up
                                Here</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2021 Mwonya, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <!-- <script src="https://d1d1i04hu392ot.cloudfront.net/dist/js/main.min.js"></script> -->
    <script src="dist/js/main.min.js"></script>



    <!-- <script>
    if ("serviceWorker" in navigator) {
        // register service worker
        navigator.serviceWorker.register("service-worker.js");
    }
    </script> -->

    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register('/service-worker.js')
                .then(function() {
                    console.log("Service Worker Registered");
                });
        }
    </script>
</body>

</html>