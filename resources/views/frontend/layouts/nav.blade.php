<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Best Anime:</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="single-post.html">The Profesor</a></li>
                                <li><a href="single-post.html">The King di Lapangan Hijau</a></li>
                                <li><a href="single-post.html">Messi from PSG</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                <button type="submit" class="btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="depan" class="nav-brand"><img src="frontend/img/core-img/pan.png" style="width: 130px" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span
                                    class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li ><a href="depan">Halaman Utama</a></li>
                                <script>
                                    $("ul > li").hover(
                                        function() {
                                            $(this).addClass('active');
                                        }, function() {
                                            $( this ).removeClass('active');
                                        }
                                    );
                                    $( "ul > li" ).click(function(){
                                            $(this).toggleClass('active');
                                    });
                            </script>
                                <li><a href="{{ route('tentang') }}">Favorite Videos</a></li>
                                <li><a href="#">Kategori Olahraga</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('sepak') }}">Sepak Bola</a></li>
                                        <li><a href="{{ route('basket') }}">Bola Basket </a></li>
                                        <li><a href="{{ route('youtube') }}">Youtube Video </a></li>

                                    </ul>
                                </li>


                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
