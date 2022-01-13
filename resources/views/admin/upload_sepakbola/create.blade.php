@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upload Vidio Sepak Bola</h4>
                    <p class="card-description">
                        Upload Khusus Vidio Sepak Bola
                    </p>
                    <form action="{{ route('admin.sepakbola.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="form-group">
                            <label for="title">Judul Video</label>
                            <input type="text" name="title" id="titile" class="form-control" id="exampleInputName1" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Video</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputvideo">Upload Video</label>
                            {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" placeholder="Upload Video" name="inputvideo" id="inputvideo">
                                <span class="input-group-append">
                                {{-- <label class="file-upload-browse btn btn-primary"  for="inputvidio">Upload</label> --}}
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light" hidden>Cancel</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
