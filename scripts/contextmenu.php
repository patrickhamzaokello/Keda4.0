<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* For Body Padding and content */
        body {
            padding-top: 70px;
        }

        li a {
            text-decoration: none !important;
        }

        /* Thumbnail only */
        .thumb {
            margin-bottom: 30px;
        }

        .thumb:hover a,
        .thumb:active a,
        .thumb:focus a {
            border: 1px solid purple;
        }

        /************** For Context menu ***********/
        /* context menu */
        .context-menu {
            display: none;
            position: absolute;
            z-index: 9999;
            padding: 12px 0;
            width: 200px;
            background-color: #fff;
            border: solid 1px #dfdfdf;
            box-shadow: 1px 1px 2px #cfcfcf;
        }

        .context-menu--active {
            display: block;
        }

        .context-menu__items {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .context-menu__item {
            display: block;
            margin-bottom: 4px;
        }

        .context-menu__item:last-child {
            margin-bottom: 0;
        }

        .context-menu__link {
            display: block;
            padding: 4px 12px;
            color: #0066aa;
            text-decoration: none;
        }

        .context-menu__link:hover {
            color: #fff;
            background-color: #0066aa;
        }

        .context-menu__items ul {
            position: absolute;
            white-space: nowrap;
            z-index: 1;
            left: -99999em;
        }

        .context-menu__items>li:hover>ul {
            left: auto;
            padding-top: 5px;
            min-width: 100%;
        }

        .context-menu__items>li li ul {
            border-left: 1px solid #fff;
        }

        .context-menu__items>li li:hover>ul {
            left: 100%;
            top: -1px;
        }

        .context-menu__item ul {
            background-color: #ffffff;
            padding: 7px 11px;
            list-style-type: none;
            text-decoration: none;
            margin-left: 40px;
        }

        .page-media .context-menu__items ul li {
            display: block;
        }

        /************** For Context menu ***********/
    </style>
</head>

<body>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery <small>(Right click to see the context menu)</small></h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                </a>
            </div>

        </div>

        <hr>


    </div>
    <!-- /.container -->


    <!-- / The Context Menu -->
    <nav id="context-menu" class="context-menu">
        <ul class="context-menu__items">
            <li class="context-menu__item">
                <a href="#" class="context-menu__link" data-action="Delete This Photo"><i class="fa fa-empire"></i> Delete This Photo</a>
            </li>
            <li class="context-menu__item">
                <a href="#" class="context-menu__link" data-action="Photo Option 2"><i class="fa fa-envira"></i> Photo Option 2</a>
            </li>
            <li class="context-menu__item">
                <a href="#" class="context-menu__link" data-action="Photo Option 3"><i class="fa fa-first-order"></i> Photo Option 3</a>
            </li>
            <li class="context-menu__item">
                <a href="#" class="context-menu__link" data-action="Photo Option 4"><i class="fa fa-gitlab"></i> Photo Option 4</a>
            </li>
            <li class="context-menu__item">
                <a href="#" class="context-menu__link" data-action="Photo Option 5"><i class="fa fa-ioxhost"></i> Photo Option 5</a>
            </li>
            <li class="context-menu__item">
                <a href="#" class="context-menu__link"><i class="fa fa-arrow-right"></i> Add Photo to</a>
                <ul>
                    <li><a href="#!" class="context-menu__link" data-action="album-one"><i class="fa fa-camera-retro"></i> Album One</a></li>
                    <li><a href="#!" class="context-menu__link" data-action="album-two"><i class="fa fa-camera-retro"></i> Album Two</a></li>
                    <li><a href="#!" class="context-menu__link" data-action="album-three"><i class="fa fa-camera-retro"></i> Album Three</a></li>
                    <li><a href="#!" class="context-menu__link" data-action="album-four"><i class="fa fa-camera-retro"></i> Album Four</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- End # Context Menu -->



    <script>
        (function() {

            "use strict";


            /*********************************************** Context Menu Function Only ********************************/
            function clickInsideElement(e, className) {
                var el = e.srcElement || e.target;
                if (el.classList.contains(className)) {
                    return el;
                } else {
                    while (el = el.parentNode) {
                        if (el.classList && el.classList.contains(className)) {
                            return el;
                        }
                    }
                }
                return false;
            }

            function getPosition(e) {
                var posx = 0,
                    posy = 0;
                if (!e) var e = window.event;
                if (e.pageX || e.pageY) {
                    posx = e.pageX;
                    posy = e.pageY;
                } else if (e.clientX || e.clientY) {
                    posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                    posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
                }
                return {
                    x: posx,
                    y: posy
                }
            }

            // Your Menu Class Name
            var taskItemClassName = "thumb";
            var contextMenuClassName = "context-menu",
                contextMenuItemClassName = "context-menu__item",
                contextMenuLinkClassName = "context-menu__link",
                contextMenuActive = "context-menu--active";
            var taskItemInContext, clickCoords, clickCoordsX, clickCoordsY, menu = document.querySelector("#context-menu"),
                menuItems = menu.querySelectorAll(".context-menu__item");
            var menuState = 0,
                menuWidth, menuHeight, menuPosition, menuPositionX, menuPositionY, windowWidth, windowHeight;

            function initMenuFunction() {
                contextListener();
                clickListener();
                keyupListener();
                resizeListener();
            }

            /**
             * Listens for contextmenu events.
             */
            function contextListener() {
                document.addEventListener("contextmenu", function(e) {
                    taskItemInContext = clickInsideElement(e, taskItemClassName);

                    if (taskItemInContext) {
                        e.preventDefault();
                        toggleMenuOn();
                        positionMenu(e);
                    } else {
                        taskItemInContext = null;
                        toggleMenuOff();
                    }
                });
            }

            /**
             * Listens for click events.
             */
            function clickListener() {
                document.addEventListener("click", function(e) {
                    var clickeElIsLink = clickInsideElement(e, contextMenuLinkClassName);

                    if (clickeElIsLink) {
                        e.preventDefault();
                        menuItemListener(clickeElIsLink);
                    } else {
                        var button = e.which || e.button;
                        if (button === 1) {
                            toggleMenuOff();
                        }
                    }
                });
            }

            /**
             * Listens for keyup events.
             */
            function keyupListener() {
                window.onkeyup = function(e) {
                    if (e.keyCode === 27) {
                        toggleMenuOff();
                    }
                }
            }

            /**
             * Window resize event listener
             */
            function resizeListener() {
                window.onresize = function(e) {
                    toggleMenuOff();
                };
            }

            /**
             * Turns the custom context menu on.
             */
            function toggleMenuOn() {
                if (menuState !== 1) {
                    menuState = 1;
                    menu.classList.add(contextMenuActive);
                }
            }

            /**
             * Turns the custom context menu off.
             */
            function toggleMenuOff() {
                if (menuState !== 0) {
                    menuState = 0;
                    menu.classList.remove(contextMenuActive);
                }
            }

            function positionMenu(e) {
                clickCoords = getPosition(e);
                clickCoordsX = clickCoords.x;
                clickCoordsY = clickCoords.y;
                menuWidth = menu.offsetWidth + 4;
                menuHeight = menu.offsetHeight + 4;

                windowWidth = window.innerWidth;
                windowHeight = window.innerHeight;

                if ((windowWidth - clickCoordsX) < menuWidth) {
                    menu.style.left = (windowWidth - menuWidth) - 0 + "px";
                } else {
                    menu.style.left = clickCoordsX - 0 + "px";
                }

                // menu.style.top = clickCoordsY + "px";

                if (Math.abs(windowHeight - clickCoordsY) < menuHeight) {
                    menu.style.top = (windowHeight - menuHeight) - 0 + "px";
                } else {
                    menu.style.top = clickCoordsY - 0 + "px";
                }
            }


            function menuItemListener(link) {
                var menuSelectedPhotoId = taskItemInContext.getAttribute("data-id");
                var moveToAlbumSelectedId = link.getAttribute("data-action");
                if (moveToAlbumSelectedId == 'remove') {
                } else if (moveToAlbumSelectedId && moveToAlbumSelectedId.length > 7) {
                }
                toggleMenuOff();
            }
            initMenuFunction();

        })();
    </script>


</body>

</html>