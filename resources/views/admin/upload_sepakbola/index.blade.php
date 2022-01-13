@extends('admin.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Vidio bola</h4>
                <br> <a href="{{ route('create.sepakbola') }}">
                    <button class="btn btn-rounded btn-success mr-2 btn-sm float-right" {{-- data-id="{{ $j_kategori->id }}" data-name="{{ $j_kategori->kategori }}"
                data-slug="{{ $j_kategori->slug }}"> --}}>
                        <i class="mdi mdi-plus-circle-outline">Tambah Video</i></button></a>
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sepakbola as $sepakbolas)


                                <tr>
                                    <td>{{ $sepakbolas->id }}</td>
                                    <td> {{ $sepakbolas->judul_video }} </td>
                                    <td> {{ $sepakbolas->deskripsi }} </td>
                                    <td>
                                        <video width="200" height="200" controls preload="metadata">
                                            <source src=" {{ 'uploads_sepakbola/' . $sepakbolas->video }} "
                                                type="video/mp4" />
                                        </video>
                                    </td>
                                    <td>
                                        <div class="d-flex d-inline justify-content-center">
                                            <a href="{{ route('sepakbola.edit', $sepakbolas->id) }}"><button
                                                    class="btn btn-success mr-2 btn-sm" {{-- data-id="{{ $j_kategori->id }}" data-name="{{ $j_kategori->kategori }}"
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
