@extends('frontend.layouts.main')
@section('content')

    <!-- ##### Hero Area Start ##### -->

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trending-posts-area mt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-8">
                    <!-- Section Heading -->
                    <div class="section-heading"><br>
                        <h4>Trending Videos</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            {{-- <div class="row"> --}}
            <div class="row row-cols-1 row-cols-md-4 p-10  ">
                <div class="col">
                    <div class="card">
                        <video  controls preload="metadata">
                            @foreach ($sepakbola as $sepak)

                            @endforeach
                            <source src=" {{ 'uploads_sepakbola/'.$sepak->video }} "
                                type="video/mp4" />
                        </video>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Messi is not perfect</h5>
                            <p class="card-text">Messi is not perfect card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <video src=""></video>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Messi is not perfect</h5>
                            <p class="card-text">Messi is not perfect card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <video src=""></video>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Messi is not perfect</h5>
                            <p class="card-text">Messi is not perfect card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card">
                        <video src=""></video>
                        <div class="card-body">
                            <a href=""><h5 class="card-title text-primary">Messi is not perfect</h5></a>
                            <p class="card-text">Messi is not perfect card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <video src=""></video>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Messi is not perfect</h5>
                            <p class="card-text">Messi is not perfect card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <video src=""></video>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Messi is not perfect</h5>
                            <p class="card-text">Messi is not perfect card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->
@endsection
