@extends('frontend.layouts.main')
@section('content')

    <section class="trendingmt-10">
        <div class="container">
            <div class="col-12 mt-8">
                <!-- Section Heading -->
                <div class="section-heading"><br><br>
                    <h4> Favorit Videos </h4>
                    <div class="line"></div>
                </div>
            </div>

            {{-- cover conten --}}
            <div class="col-12 col-md-7 col-lg-8 mt-10" style="float: left;">
                <div class="tab-content">
                    <div class="tab-pane fade" id="post-0" role="tabpanel" aria-labelledby="post-0-tab">
                        <!-- Single Feature Post -->
                        <div class="card bg-white" style="width: 100%; height: 300px">
                            <div class="title ">
                                <h2 class="text-danger" style="padding: 12px">{{ $sepakbola->judul_video }}</h2>
                                <ol style="padding-left: 30px; ">
                                    <li>Segala bentuk Vidio yang terdapat dalam aplikasi bersifat open source bebas untuk di
                                        publikasikan </li>
                                    <li>Hak Cipta pada vidio ditanggung sendiri </li>
                                    <li>Penyedia website bebas dari tuntutan UAS</li>
                                    <li>Vidio dalam website diambil dari dari media youtube, kemudian di publikasi ulang
                                    </li>
                                    <li>Segala bentuk Vidio yang terdapat dalam aplikasi bersifat open source bebas untuk di
                                        publikasikan </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- batas 0====== --}}
                    {{-- awal --}}
                    <div class="tab-pane fade" id="post-1" role="tabpanel" aria-labelledby="post-1-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/bg-img/10.jpg);">
                            <video controls preload="metadata" style="width: 100%;">
                                <source src=" {{ 'uploads_sepakbola/' . $sepakbola2->video }} " type="video/mp4" />
                            </video>
                            <div class="post-content">
                                <br>
                                <a href="single-post.html" class="post-title">{{ $sepakbola2->deskripsi }}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>
                            <!-- Video Duration -->
                            <span class="video-duration">Upload : {{ $sepakbola2->updated_at  }}</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="post-2" role="tabpanel" aria-labelledby="post-2-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/bg-img/10.jpg);">
                            <video controls preload="metadata" style="width: 100%;">
                                <source src=" {{ 'uploads_sepakbola/' . $sepakbola->video }} " type="video/mp4" />
                            </video>
                            <div class="post-content">
                                <br>
                                <a href="single-post.html" class="post-title">{{ $sepakbola->deskripsi }}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>
                            <!-- Video Duration -->
                            <span class="video-duration">Upload : {{ $sepakbola3->updated_at  }}</span>
                        </div>
                    </div>
                    {{-- post 3 --}}
                    <div class="tab-pane fade" id="post-3" role="tabpanel" aria-labelledby="post-3-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/bg-img/10.jpg);">
                            <video controls preload="metadata" style="width: 100%;">
                                <source src=" {{ 'uploads_sepakbola/' . $sepakbola3->video }} " type="video/mp4" />
                            </video> <br><br>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">{{ $sepakbola3->deskripsi }}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>
                            <!-- Video Duration -->
                            <span class="video-duration">Upload : {{ $sepakbola3->updated_at  }}</span>
                        </div>
                    </div>
                    {{-- end post3 --}}
                    <div class="tab-pane fade" id="post-4" role="tabpanel" aria-labelledby="post-4-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/bg-img/10.jpg);">
                            <!-- Play Button -->
                            {{-- @foreach ($sepakbola as $sepak) --}}
                            <video controls preload="metadata" style="width: 100%;">
                                <source src=" {{ 'uploads/' . $basket->video }} " type="video/mp4" />
                                </video>

                                <div class="post-content">
                                    <a href="single-post.html" class="post-title">{{$basket->judul_video}}</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>
                                <!-- Video Duration -->
                            </div>

                    </div>
                    <div class="tab-pane fade" id="post-5" role="tabpanel" aria-labelledby="post-5-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                            style="background-image: url(img/bg-img/10.jpg);">
                            <!-- Play Button -->
                            {{-- @foreach ($sepakbola as $sepak) --}}
                            <video controls preload="metadata" style="width: 100%;">
                                <source src=" {{ 'uploads/' . $basket3->video }} " type="video/mp4" />
                                </video>
                                <div class="post-content">

                                    <a href="single-post.html" class="post-title">{{$basket3->judul_video}}</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                    </div>
                                </div>

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="post-6" role="tabpanel" aria-labelledby="post-5-tab">
                        <!-- Single Feature Post -->
                        <div class="single-feature-post video-post bg-img"
                        style="background-image: url(img/bg-img/10.jpg);">
                        <!-- Play Button -->
                        {{-- @foreach ($sepakbola as $sepak) --}}
                        <video controls preload="metadata" style="width: 100%;">
                            <source src=" {{ 'uploads/' . $basket4->video }} " type="video/mp4" />
                            </video>
                            {{-- @endforeach --}}
                            <!-- Post Content -->
                            <div class="post-content">

                                <a href="single-post.html" class="post-title">{{$basket4->judul_video}}</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 25</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 25</a>
                                </div>
                            </div>

                            <!-- Video Duration -->
                            <span class="video-duration">05.03</span>
                    </div>
                    </div>
                </div>
            </div>
            {{-- batas cover --}}


            {{-- awal side-left --}}
            <div class="col-12 col-md-5 col-lg-4 float-right">
                <ul class="nav vizew-nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="post-2-tab" data-toggle="pill" href="#post-2" role="tab"
                            aria-controls="post-2" aria-selected="true">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="stisla/realmadrid.png" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{ $sepakbola->judul_video }}</h6>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="post-1-tab" data-toggle="pill" href="#post-1" role="tab"
                            aria-controls="post-1" aria-selected="false">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="stisla/vilareal.png" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{ $sepakbola2->judul_video }}</h6>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="post-3-tab" data-toggle="pill" href="#post-3" role="tab"
                            aria-controls="post-3" aria-selected="false">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="stisla/detik.PNG" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{ $sepakbola3->judul_video }}</h6>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="post-4-tab" data-toggle="pill" href="#post-4" role="tab"
                            aria-controls="post-4" aria-selected="false">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="stisla/basket3.PNG" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{ $basket->judul_video }} Skill Dewa</h6>

                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="post-5-tab" data-toggle="pill" href="#post-5" role="tab"
                            aria-controls="post-5" aria-selected="false">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="stisla/basket2.PNG" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{ $basket1->judul_video }}</h6>
                                    <div class="post-meta d-flex justify-content-between">
                                        <span><i class="fa fa-comments-o" aria-hidden="true"></i> 14</span>
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 34</span>
                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="post-6-tab" data-toggle="pill" href="#post-6" role="tab"
                            aria-controls="post-6" aria-selected="false">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style-2 d-flex align-items-center">
                                <div class="post-thumbnail">
                                    <img src="stisla/basket4.PNG" alt="">
                                </div>
                                <div class="post-content">
                                    <h6 class="post-title">{{ $basket2->judul_video }}</h6>
                                    <div class="post-meta d-flex justify-content-between">
                                        <span><i class="fa fa-comments-o" aria-hidden="true"></i> 24</span>
                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 98</span>
                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 63</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
            {{-- akhir side left --}}
        </div>
        </div>

    </section>
    <!-- ##### Trending Posts Area End ##### -->
    <br><br><br><b><br><br><br><br><br><br><br><b><br><br><br><br><br><br><br><b><br><br><br><br>
            @endsection
