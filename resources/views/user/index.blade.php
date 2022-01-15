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
                        <h4>Trending Videos</h4>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            {{-- batas atas --}}
            @foreach ($sepakbola as $sepak)
                <div class="card-content mb-3" style="max-width: 50%; height: 250px; padding:20px; float: left; border-radius: 2%;">
                    <div class="row g-0 bg-dark">
                        <div class="col-md-4">

                            <video controls preload="metadata" style="width: 100%; padding-top: 35px">
                                <source src=" {{ 'uploads_sepakbola/' . $sepak->video }} " type="video/mp4" />
                            </video>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-danger">{{ $sepak->judul_video }}</h5>
                                <p class="card-text">{{ $sepak->deskripsi }}</p>
                                <p class="card-text"><small class="text-muted">Upload :
                                        {{ $sepak->created_at }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            {{-- batas bawah --}}

               {{-- batas atas --}}
               @foreach ($basket as $basketer)
               <div class="card-content mb-3" style="max-width: 50%; height: 250px; padding:20px; float: left; border-radius: 2%;">
                   <div class="row g-0 bg-dark">
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
                               <p class="card-text"><small class="text-muted">Upload :
                                       {{ $basketer->created_at }}</small></p>
                           </div>
                       </div>
                   </div>
               </div>

           @endforeach
           {{-- batas bawah --}}
        </div>

    </section>
@endsection
