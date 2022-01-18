@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-header-action ">
                        <a href="{{ route('upload.sepakbola') }}" class="btn btn-rounded btn-success float-right">
                            Kembali</a>
                    </div>
                    <h4 class="card-title">Upload Vidio Sepak Bola</h4>
                    <p class="card-description">
                        Upload Khusus Vidio Sepak Bola
                    </p>

                    <form action="{{ route('admin.sepakbola.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Video</label>
                            <input type="text" name="title" id="titile"
                                class="form-control @error('title')is-invalid
                            @enderror"
                                id="exampleInputName1">
                            @error('title')
                                <span class="text-danger">Judul Harus Di isi</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Video</label>
                            <textarea name="deskripsi"
                                class="form-control @error('deskripsi')is-invalid
                            @enderror" id="exampel" ></textarea>
                            @error('deskripsi')
                                <span class="text-danger">Deskripsi Harus Di isi</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputvideo">Upload Video</label>
                            {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
                            <div class="input-group col-xs-12">
                                <input type="file"  name="inputvideo"
                                    class="form-control @error('inputvideo')is-invalid
                                @enderror"  id="inputvideo">

                                <span class="input-group-append">
                                    {{-- <label class="file-upload-browse btn btn-primary"  for="inputvidio">Upload</label> --}}
                                </span>

                            </div>
                            @error('inputvideo')
                            <span class="text-danger">Vidio Harus Di isi</span>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light" hidden>Cancel</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
