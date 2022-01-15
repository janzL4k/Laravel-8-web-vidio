@extends('frontend.layouts.main')
@section('content')

    <!-- ##### Hero Area Start ##### -->

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trendingmt-10">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-8">
                    <!-- Section Heading -->
                    <div class="section-heading"><br><br>
                        <h4>Bola Basket</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            @foreach ($basket as $basketer)
            <div class="card bg-dark mb-3" style="max-width: 100%; height: 250px; padding:10px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <br>
                    <video controls preload="metadata" style="width: 100%;">
                        <source src=" {{ 'uploads/' . $basketer->video }} " type="video/mp4" />
                    </video>



                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text-danger">{{ $basketer->judul_video }}</h5>
                      <p class="card-text">{{ $basketer->deskripsi }}</p>
                      <p class="card-text"><small class="text-muted position-bottom">{{ $basketer->created_at }}</small></p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach




        </div>

    </section>
    <!-- ##### Trending Posts Area End ##### -->
    <br><br><br><b><br><br><br><br><br><br><br><b><br><br><br><br><br><br><br><b><br><br><br><br>
            @endsection
