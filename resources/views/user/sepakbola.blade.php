@extends('frontend.layouts.main')
@section('content')

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trendingmt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-8">
                    <!-- Section Heading -->
                    <div class="section-heading"><br><br>
                        <h4>Sepak Bola</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            @foreach ($sepakbola as $sepak)
            <div class="card bg-dark mb-3" style="max-width: 100%; height: 300px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <br>
                    <video controls preload="metadata" style="width: 100%;">
                        <source src=" {{ 'uploads_sepakbola/' . $sepak->video }} " type="video/mp4" />
                    </video>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-danger">{{ $sepak->judul_video }}</h5>
                      <p class="card-text">{{ $sepak->deskripsi }}</p>
                      <p class="card-text"><small class="text-muted">{{ $sepak->created_at }}</small></p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach




        </div>

    </section>
    <!-- ##### Trending Posts Area End ##### -->
    <br><br><br><b><br>
            @endsection
