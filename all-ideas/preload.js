function preloadAudio (filename) {

    var sound = new Audio();
    sound.preload = 'auto';

    sound.addEventListener('canplaythrough', function () {
        // now the audio is ready to play through
    });

    document.body.appendChild(sound);

    sound.src = filename;
    sound.load();

}

'https://stackoverflow.com/questions/29723089/preloading-the-next-song-in-a-playlist-a-bit-before-the-current-one-ends'