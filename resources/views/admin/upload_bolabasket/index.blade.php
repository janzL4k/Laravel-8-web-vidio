@extends('admin.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Vidio Basket</h4>
                <br>    <a href="{{ route("create.basket") }}">
                <button  class="btn btn-rounded btn-success mr-2 btn-sm float-right"
              {{-- data-id="{{ $j_kategori->id }}" data-name="{{ $j_kategori->kategori }}"
                data-slug="{{ $j_kategori->slug }}"> --}}>
                <i class="mdi mdi-plus-circle-outline">Tambah Video</i></button></a>
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>

                            <tr>
                                <th>No</th>
                                <th>judul</th>
                                <th>deskripsi</th>
                                <th>video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>   @foreach ($basket as $basketer)

                            <tr>
                                <td>{{ $basketer->id }}</td>
                                <td>{{ $basketer->judul_video }}</td>
                                <td>{{ $basketer->deskripsi}}</td>
                                <td>
                                    {{-- <video id="my-video" controls width="200" height="200" autoplay="true">
                                        <source src="public.uploads.{{$basketer->video}}" type='video/mp4'>
                                     </video> --}}
                                     <video width="100" height="100" controls class="thumb" >
                                        <source src=" uploads.{{($basketer->video) }}">
                                      </video>


                                </td>
                                <td>
                                    <div class="d-flex d-inline justify-content-center">
                                        <a href="{{ route("bolabasket.edit") }}"><button class="btn btn-success mr-2 btn-sm" data-toggle="modal"
                                            data-target="#editSubject" {{-- data-id="{{ $j_kategori->id }}" data-name="{{ $j_kategori->kategori }}"
                                            data-slug="{{ $j_kategori->slug }}"> --}}>
                                            <i class="mdi mdi-pencil"></i></button></a>
                                        <form method="post">
                                            @csrf
                                            {{-- @method('DELETE') --}}
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apa Anda yakin ?');"><i
                                                    class="mdi mdi-delete"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
