<?php
include("includes/includedFiles.php");

if (isset($_GET['id'])) {
    $albumId =  $_GET['id'];
} else {
    header("Location:index");
}

$album = new Album($con, $albumId);
$artist = $album->getArtist();

?>
<!-- headerends -->
<script>
    $(".lds-facebook").hide();
    $("#mainContent").show();
</script>

<div class="pagesection">

    <div class="catalog-content">
        <div class="dee_container">
            <div class="_5BJsj">
                <div class="_2mzRF">
                    <div class="_2Rv6Z _2j25R _2L8AT">
                        <figure class="_1733Q"><img src="https://e-cdn-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/264x264-000000-80-0-0.jpg" loading="lazy" alt="Exclusive (Expanded Edition)" class="sk__sc-10y8cfp-0 fIa-dLY TjhqK" crossorigin="anonymous" height="264" width="264"></figure>
                    </div>
                    <div class="_2yyo6">
                        <h1 class="heading-1 ellipsis _3Oi7U">Exclusive (Expanded Edition)</h1>
                        <div class="_2kEwD ellipsis">
                            <ul class="Hexbv _3X1W4">
                                <li class="_1GIIs">
                                    <div class="tooltip-wrapper">
                                        <div class="_2Rv6Z _2w27N _2L8AT">
                                            <figure class="_1733Q"><img src="https://e-cdn-images.dzcdn.net/images/artist/ed15b84067164aa25701fdd30cc34d33/100x100-000000-80-0-0.jpg" loading="lazy" class="sk__sc-10y8cfp-0 xGwwo TjhqK" crossorigin="anonymous" height="28" width="28"></figure>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="_2Z2Jc"><a class="tnmRk" href="/us/artist/102">Chris Brown</a></h2>
                        </div>
                        <ul class="NV1uU">
                            <li class="_3XRsF">18 tracks</li>
                            <li class="_3XRsF">1 h 09 mins</li>
                            <li class="_3XRsF">11/06/2007</li>
                            <li class="_3XRsF">6,160 fans</li>
                        </ul>
                        <div class="_1k3N9">
                            <div class="_2PSK5" data-testid="toolbar">
                                <div class="_2cOQ6" data-testid="play"><button type="button" class="sk__sc-1y6h0ji-0 hACRDz"><span class="sk__sc-1y6h0ji-2 gNHbdC"><svg class="svg-icon svg-icon-play-circle" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                                <path d="M6 11A5 5 0 1 0 6 1a5 5 0 0 0 0 10Zm0 1A6 6 0 1 1 6 0a6 6 0 0 1 0 12ZM4.937 4.017a.125.125 0 0 0-.187.108v3.75c0 .096.104.156.187.108l3.25-1.875a.125.125 0 0 0 0-.216l-3.25-1.875Z"></path>
                                            </svg></span><span class="sk__sc-1y6h0ji-1 fZCKwv">
                                            <div class="states-button-action"><span class="states-button-label">Listen</span></div>
                                            <div class="states-button-action"><span class="states-button-label">Now Playing</span></div>
                                            <div class="states-button-action"><span class="states-button-label">Pause</span></div>
                                            <div class="states-button-action is-active"><span class="states-button-label">Resume</span></div>
                                        </span></button></div>
                                <div class="_2cOQ6"><button type="button" aria-label="Added" class="sk__sc-1y6h0ji-0 dAfnoz"><svg class="svg-icon svg-icon-love color-primary" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M6 2.5S5 1 3.25 1C1.667 1 0 2.25 0 4.5c0 3 6 7 6 7s6-4 6-7C12 2.25 10.334 1 8.75 1 7 1 6 2.5 6 2.5Z"></path>
                                        </svg></button></div>
                                <div class="_2cOQ6"><button type="button" aria-haspopup="true" aria-label="Share" class="sk__sc-1y6h0ji-0 dAfnoz"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path d="M8 14.26v-4.195c-1.34.182-2.54.719-3.478 1.283-.576.347-1.038.694-1.354.953a8.783 8.783 0 0 0-.44.387l-.019.017-.002.002L.358 15.06l.662-3.259L2 12s.516-.518 1.404-1.123C4.478 10.145 6.096 9.284 8 9.057A8.051 8.051 0 0 1 9 9v3l2.553-2.32L14 7.5 9 3v2c-3.738.451-5.58 3.303-6.408 5.225C2.154 11.243 2 12 2 12l-.98-.199v-.004l.002-.007.005-.02a4.953 4.953 0 0 1 .073-.3 12.354 12.354 0 0 1 1.407-3.24C3.533 6.579 5.257 4.775 8 4.159V.755l7.499 6.748-3.277 2.92L8 14.26z"></path>
                                            </g>
                                        </svg></button></div>
                                <div class="_2cOQ6">
                                    <div class="popper-wrapper"><button type="button" aria-haspopup="true" aria-label="View menu" class="sk__sc-1y6h0ji-0 dAfnoz"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div aria-rowcount="18" class="xdRiL" data-testid="is-fully-fetched" role="grid">
                <div class="_1wurs" role="rowgroup">
                    <div class="_2ZGZ3 _9V_Tf _32dqv" role="columnheader"><span>TRACK</span></div>
                    <div class="_2ZGZ3 _2FD_n _32dqv" role="columnheader"><span>FEATURED ARTISTS</span></div>
                    <div class="_2ZGZ3 XHdIB _32dqv" role="columnheader"><span><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                <g>
                                    <path d="M15 8A7 7 0 1 0 1 8a7 7 0 0 0 14 0zm1 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM7 3.2v5.404l3.824 3.06.625-.782L8 8.123V3.2H7z"></path>
                                </g>
                            </svg></span></div>
                    <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="columnheader"><span>POP.</span></div>
                    <div class="_2ZGZ3 XHdIB E7D0_" role="columnheader">
                        <div class="_3U9iJ">
                            <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                        <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                    </svg></label></div>
                        </div>
                    </div>
                </div>
                <div class="_1r7b-" role="rowgroup">
                    <div draggable="false" class="JoTQr" aria-rowindex="1" aria-selected="true" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT _2LgeE">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG _1H3xE"><button type="button" aria-label="Play Throwed by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6 LZV4h" data-testid="title">1. Throwed</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL _2DHiy">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY _3QRVL">03:01</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G VP-uW" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="2" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Kiss Kiss (feat. T-Pain) by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">2. Kiss Kiss (feat. T-Pain)</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL"><a class="_3PZ8B" data-testid="artist" href="/us/artist/323">T-Pain</a></div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:10</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 3 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="3" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Take You Down by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">3. Take You Down</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:05</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 5 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="4" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play With You by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">4. With You</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:12</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 3 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="5" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Picture Perfect (feat. will.i.am) by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">5. Picture Perfect (feat. will.i.am)</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL"><a class="_3PZ8B" data-testid="artist" href="/us/artist/10226">will.i.am</a></div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:13</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="6" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Hold Up (feat. Big Boi) by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">6. Hold Up (feat. Big Boi)</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL"><a class="_3PZ8B" data-testid="artist" href="/us/artist/175212">Big Boi</a></div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:48</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="7" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play You by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">7. You</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:22</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="8" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Damage by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">8. Damage</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:16</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="9" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Wall To Wall by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">9. Wall To Wall</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:43</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 3 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="10" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Help Me by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">10. Help Me</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:17</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="11" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play I Wanna Be by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">11. I Wanna Be</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:46</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 4 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="12" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Gimme Whatcha Got by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">12. Gimme Whatcha Got</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:48</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="13" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play I'll Call Ya by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">13. I'll Call Ya</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:53</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="14" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Lottery by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">14. Lottery</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:41</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="15" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Get At Ya by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">15. Get At Ya</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">03:18</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="16" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Mama by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">16. Mama</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL">-</div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:24</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="17" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Nice (feat. The Game) by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">17. Nice (feat. The Game)</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL"><a class="_3PZ8B" data-testid="artist" href="/us/artist/393">The Game</a></div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:32</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 2 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                    <div draggable="false" class="JoTQr" aria-rowindex="18" aria-selected="false" role="row" style="height: 56px;">
                        <div class="ZLI1L _9H6uT">
                            <div class="_2ZGZ3 _9V_Tf _32dqv" role="gridcell">
                                <div class="TY--6 zMvxh">
                                    <div class="_1ZxIr"><img src="https://e-cdns-images.dzcdn.net/images/cover/0fe8b5f354adfbb6734e208371436669/40x40-000000-80-0-0.jpg" height="40" width="40" alt=""></div>
                                    <div class="_3-BPG"><button type="button" aria-label="Play Down (feat. Kanye West) by Chris Brown" class="sk__sc-1y6h0ji-0 lmagDO"><svg class="svg-icon svg-icon-play" focusable="false" height="1em" role="img" width="1em" viewBox="0 0 12 12" aria-hidden="true">
                                                <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.5.5v11l9-5.5z"></path>
                                            </svg></button></div>
                                </div>
                                <div class="_1s9oz"></div>
                                <div class="_2tIhH">
                                    <div class="_1FlQH"><span class="BT3T6" data-testid="title">18. Down (feat. Kanye West)</span></div>
                                </div>
                                <div class="_3jkbz"><button type="button" aria-label="Add to Favorite tracks" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                            <g>
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                                <path d="m8 4.79-.755-.869c-1.17-1.348-2.252-1.832-3.093-1.9-.836-.067-1.59.263-2.164.858C.802 4.108.528 6.283 2.04 7.812a245.96 245.96 0 0 0 4.775 4.7c.482.46.882.837 1.186 1.122.304-.285.704-.663 1.186-1.123a238.026 238.026 0 0 0 4.771-4.695 3.545 3.545 0 0 0 .057-4.963c-.572-.589-1.324-.915-2.161-.843-.843.072-1.926.562-3.098 1.911L8 4.791zm6.672 3.725C10.78 12.452 8 15 8 15s-2.78-2.548-6.672-6.485c-3.717-3.76 1.043-10.549 5.976-5.972.232.215.464.455.696.723.232-.267.464-.508.696-.723C13.63-2.04 18.39 4.68 14.672 8.515z"></path>
                                            </g>
                                        </svg></button>
                                    <div class="popper-wrapper"><button type="button" aria-label="View menu" aria-haspopup="true" class="sk__sc-1y6h0ji-0 fIWlJo"><svg viewBox="0 0 16 16" width="16" height="16" focusable="false" role="img" aria-hidden="true" class="sk__sc-1vdzswr-0 bcVpWu">
                                                <g>
                                                    <path d="M5 8.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm5 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm3.5 1.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                                                </g>
                                            </svg></button></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 _2FD_n _32dqv" role="gridcell">
                                <div class="CPAmL"><a class="_3PZ8B" data-testid="artist" href="/us/artist/230">Kanye West</a></div>
                            </div>
                            <div class="_2ZGZ3 XHdIB _32dqv" role="gridcell"><span class="_2qGTY">04:17</span></div>
                            <div class="_2ZGZ3 XHdIB _32dqv V47V4" role="gridcell">
                                <div class="_2FJ3G" aria-label="By popularity: 3 / 10">
                                    <div class="_1nfYi wyye1"><span data-testid="note-active" class="_2Gbtw VP-uW"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span><span data-testid="note-inactive" class="_2Gbtw"></span></div>
                                </div>
                            </div>
                            <div class="_2ZGZ3 XHdIB E7D0_" role="gridcell">
                                <div class="_1nfYi"><label class="input-checkbox"><input class="input-control" type="checkbox" value=""><svg class="svg-icon svg-icon-check checkbox-tick" focusable="false" height="12" role="img" width="12" viewBox="0 0 12 12" aria-hidden="true">
                                            <path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 1 0-.689-.688l-6.889 6.88L.833 5.333Z"></path>
                                        </svg></label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_37RiP">
                    <div class="_3bIZO"></div>
                    <div class="_1Qw1W"><span class="_30NiJ">Loading</span><svg class="svg-icon svg-icon-loader animate-spin" focusable="false" height="24" role="img" width="24" viewBox="0 0 12 12" aria-hidden="true">
                            <path d="m1.735 10.22.707-.707a5 5 0 1 0 .015-7.042l-.707-.706a6 6 0 1 1-.015 8.456Z"></path>
                        </svg></div>
                </div>
            </div>
            <div class="catalog-legal-notice">2007 | Jive</div>
        </div>
    </div>

</div>