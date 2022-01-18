@extends('frontend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <center>
                            <div class="card col-md-8 text-center bg-dark">
                                <video preload="metadata" style="width: 100%; padding-top: 35px" id="video-element">
                                    <source src=" {{ 'uploads/' . $basket->video }} " type="video/mp4" />
                                </video>
                                <div class="post-content">
                                    <div id="controls">
                                        <progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
                                        <button id='btnReplay' class='replay' title='replay' accesskey="R"
                                            onclick='replayVideo();'
                                            style="text-align: center; padding-top: -10px">Replay</button>
                                        <button id='btnPlayPause' class='play' title='play' accesskey="P"
                                            onclick='playPauseVideo();'>Play</button>
                                        <button id='btnStop' class='stop' title='stop' accesskey="X"
                                            onclick='stopVideo();'>Stop</button>
                                        <input type="range" id="volume-bar" title="volume" min="0" max="1" step="0.1"
                                            value="1">
                                        <button id='btnMute' class='mute' title='mute' onclick='muteVolume();'>Mute</button>
                                        <button id='btnFullScreen' class='fullscreen' title='toggle full screen'
                                            accesskey="T" onclick='toggleFullScreen();'></button>

                                        <script>
                                            // get data keseluruhan vidio
                                            player = document.getElementById('video-element');
                                            btnPlayPause = document.getElementById('btnPlayPause');
                                            btnMute = document.getElementById('btnMute');
                                            progressBar = document.getElementById('progress-bar');
                                            volumeBar = document.getElementById('volume-bar');

                                            // update volume vidio
                                            volumeBar.addEventListener("change", function(evt) {
                                                player.volume = evt.target.value;
                                            });
                                            document.getElementById('btnFullScreen').disabled = true;
                                            //menambah efek folume
                                            player.addEventListener('timeupdate', updateProgressBar, false);
                                            //update volume on off
                                            player.addEventListener('play', function() {
                                                //button berenti
                                                changeButtonType(btnPlayPause, 'pause');
                                            }, false);

                                            player.addEventListener('pause', function() {
                                                //button mulai
                                                changeButtonType(btnPlayPause, 'play');
                                            }, false);

                                            player.addEventListener('volumechange', function(e) {
                                                // update berhenti dan mulai
                                                if (player.muted) changeButtonType(btnMute, 'unmute');
                                                else changeButtonType(btnMute, 'mute');
                                            }, false);

                                            player.addEventListener('ended', function() {
                                                this.pause();
                                            }, false);

                                            progressBar.addEventListener("click", seek);

                                            function seek(e) {
                                                var percent = e.offsetX / this.offsetWidth;
                                                player.currentTime = percent * player.duration;
                                                e.target.value = Math.floor(percent / 100);
                                                e.target.innerHTML = progressBar.value + '% played';
                                            }

                                            function playPauseVideo() {
                                                if (player.paused || player.ended) {
                                                    //mengubah tombol ke jeda
                                                    changeButtonType(btnPlayPause, 'pause');
                                                    player.play();
                                                } else {
                                                    //mengubah kembali tombol
                                                    changeButtonType(btnPlayPause, 'play');
                                                    player.pause();
                                                }
                                            }

                                            // hentikan vidio dan kembali ke awal
                                            function stopVideo() {
                                                player.pause();
                                                if (player.currentTime) player.currentTime = 0;
                                            }

                                            // button mute/unmute
                                            function muteVolume() {
                                                if (player.muted) {
                                                    // rubah ke mute
                                                    changeButtonType(btnMute, 'mute');
                                                    player.muted = false;
                                                } else {
                                                    // rubah ke unmut
                                                    changeButtonType(btnMute, 'unmute');
                                                    player.muted = true;
                                                }
                                            }

                                            // kembali ke awal dan muali
                                            function replayVideo() {
                                                resetPlayer();
                                                player.play();
                                            }

                                            // update waktu
                                            function updateProgressBar() {
                                                //tampil progrs
                                                var percentage = Math.floor((100 / player.duration) * player.currentTime);
                                                // update progres
                                                progressBar.value = percentage;

                                                progressBar.innerHTML = percentage + '% played';
                                            }

                                            function changeButtonType(btn, value) {
                                                btn.title = value;
                                                btn.innerHTML = value;
                                                btn.className = value;
                                            }

                                            function resetPlayer() {
                                                progressBar.value = 0;
                                                // kembalikan
                                                player.currentTime = 0;

                                                changeButtonType(btnPlayPause, 'play');
                                            }

                                            function exitFullScreen() {
                                                if (document.exitFullscreen) {
                                                    document.exitFullscreen();
                                                } else if (document.msExitFullscreen) {
                                                    document.msExitFullscreen();
                                                } else if (document.mozCancelFullScreen) {
                                                    document.mozCancelFullScreen();
                                                } else if (document.webkitExitFullscreen) {
                                                    document.webkitExitFullscreen();
                                                }
                                            }

                                            function toggleFullScreen() {
                                                if (player.requestFullscreen)
                                                    if (document.fullScreenElement) {
                                                        document.cancelFullScreen();
                                                    } else {
                                                        player.requestFullscreen();
                                                    }
                                                else if (player.msRequestFullscreen)
                                                    if (document.msFullscreenElement) {
                                                        document.msExitFullscreen();
                                                    } else {
                                                        player.msRequestFullscreen();
                                                    }
                                                else if (player.mozRequestFullScreen)
                                                    if (document.mozFullScreenElement) {
                                                        document.mozCancelFullScreen();
                                                    } else {
                                                        player.mozRequestFullScreen();
                                                    }
                                                else if (player.webkitRequestFullscreen)
                                                    if (document.webkitFullscreenElement) {
                                                        document.webkitCancelFullScreen();
                                                    } else {
                                                        player.webkitRequestFullscreen();
                                                    }
                                                else {
                                                    alert("Fullscreen API is not supported");

                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title text-danger">{{ $basket->judul_video }}</h2>
                                    <p class="card-text">{{ $basket->deskripsi }} Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Nemo saepe qui iusto earum harum alias temporibus,
                                        tenetur facilis placeat tempora sunt, id ea maiores, dolore excepturi? Quaerat eius
                                        officia illum?</p>
                                    <a href=" " onclick="link" class="btn btn-primary">Download</a>
                                    <script>
                                        var link = document.getElementById('video-element');
                                        link.click();
                                    </script>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
