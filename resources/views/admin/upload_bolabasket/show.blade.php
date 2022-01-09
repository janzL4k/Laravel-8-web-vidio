@extends('admin.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Vidio</h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Vidio</th>
                                <th>Judul Vidio</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td> <iframe width="100" height="100" src="https://www.youtube.com/embed/CNbmVEEW-mA"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe></td>
                                <td> Dilan new Video Songs </td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ut error quia perspiciatis
                                    in nihil sunt molestias at eum fuga. Culpa cumque quas vel neque magni! Quae repudiandae
                                    labore voluptatum.</td>
                                <td>
                                    <div class="d-flex d-inline justify-content-center">
                                        <button class="btn btn-success mr-2 btn-sm" data-toggle="modal"
                                            data-target="#editSubject" {{-- data-id="{{ $j_kategori->id }}" data-name="{{ $j_kategori->kategori }}"
                                            data-slug="{{ $j_kategori->slug }}"> --}}>
                                            <i class="mdi mdi-plus-circle-outline"></i></button>
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
