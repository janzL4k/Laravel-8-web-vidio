@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upload Vidio Bola Basket</h4>
                    <p class="card-description">
                        Upload Khusus Vidio Bola Basket
                    </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Judul Video</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi Video</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Video</label>

                            {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control" placeholder="Upload Video"  id="inputvidio">
                                <span class="input-group-append">
                                <label class="file-upload-browse btn btn-primary"  for="inputvidio">Upload</label>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
