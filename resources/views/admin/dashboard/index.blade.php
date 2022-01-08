@extends('admin.main')
@section('content')
<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="row w-100 flex-grow">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Website Audience Metrics</p>
                        <p class="text-muted">25% more traffic than previous week</p>
                        <div class="row mb-3">
                            <div class="col-md-7">
                                <div class="d-flex justify-content-between traffic-status">
                                    <div class="item">
                                        <p class="mb-">Users</p>
                                        <h5 class="font-weight-bold mb-0">93,956</h5>
                                        <div class="color-border"></div>
                                    </div>
                                    <div class="item">
                                        <p class="mb-">Bounce Rate</p>
                                        <h5 class="font-weight-bold mb-0">58,605</h5>
                                        <div class="color-border"></div>
                                    </div>
                                    <div class="item">
                                        <p class="mb-">Page Views</p>
                                        <h5 class="font-weight-bold mb-0">78,254</h5>
                                        <div class="color-border"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <canvas id="audience-chart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- row end -->
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-facebook d-flex align-items-center">
                <div class="card-body py-5">
                    <div
                        class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-facebook text-white icon-lg"></i>
                        <div class="ml-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">2.62 Subscribers</h5>
                            <p class="mt-2 text-white card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-google d-flex align-items-center">
                <div class="card-body py-5">
                    <div
                        class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-google-plus text-white icon-lg"></i>
                        <div class="ml-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">3.4k Followers</h5>
                            <p class="mt-2 text-white card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-twitter d-flex align-items-center">
                <div class="card-body py-5">
                    <div
                        class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        <i class="mdi mdi-twitter text-white icon-lg"></i>
                        <div class="ml-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">3k followers</h5>
                            <p class="mt-2 text-white card-text">You main list growing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row end -->
</div>
@endsection

