@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-bold float-left">Edit Vidio Sepak Bola</h4>
                    <div class="card-header-action ">
                        <a href="{{ route('upload.sepakbola') }}" class="btn btn-rounded btn-success float-right">
                            Kembali</a>
                    </div>
                    <br>
                    <form action="{{ route('sepakbola.update', $sepakbola->id) }}" method="post"
                        enctype="multipart/form-data" style="clear:both">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Video</label>
                            <input type="text" name="judul_video" id="title" class="form-control"
                                value="{{ $sepakbola->judul_video }}">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Video</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi"
                                rows="4">{{ $sepakbola->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputvideo">Upload Video</label><br>
                            <video width="200" height="200" controls preload="metadata" >
                                <source src=" {{ 'uploads_sepakbola/' . $sepakbola->video }} " type="video/mp4" />
                            </video>
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" placeholder="Upload Video" name="inputvideo"
                                    id="inputvideo">
                                <span class="input-group-append">
                                    <label class="file-upload-browse btn btn-primary" for="inputvidio">Upload</label>
                                </span>
                            </div>
                            <p><span class="text-danger text-bold">*)</span>Kosongkan jika tidak mengedit vidio</p>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light" hidden>Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
