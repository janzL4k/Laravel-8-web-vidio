@extends('admin.main')
@section('content')
    <div class="title mb-20">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="row w-100 flex-grow">

                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Jumlah Vidio </h4>
                            </div>
                        </div>
                    </div>
                    {{-- 1 --}}
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div c lass="col-md-4">
                                        <div class="d-flex justify-content-between traffic-status">
                                            <div class="item">
                                                <p class="mb-4 font-weight-bold" style="font-size: 16px">Sepak Bola</p>
                                                <h5 class="font-weight-bold mb-0">{{ $sepakbola }}</h5>
                                                <div class="color-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div c lass="col-md-4">
                                        <div class="d-flex justify-content-between traffic-status">
                                            <div class="item">
                                                <p class="mb-4 font-weight-bold" style="font-size: 16px">Basket</p>
                                                <h5 class="font-weight-bold mb-0">{{ $basket }}</h5>
                                                <div class="color-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div c lass="col-md-4">
                                        <div class="d-flex justify-content-between traffic-status">
                                            <div class="item">
                                                <p class="mb-4 font-weight-bold" style="font-size: 16px">Bulu Tangkis</p>
                                                <h5 class="font-weight-bold mb-0">2</h5>
                                                <div class="color-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>








        <br><br><br><br>
    @endsection
