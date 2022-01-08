<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin C2Project</title>
    <!-- base:css -->
    <link rel="stylesheet" href="admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <p>Navigation</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="backend.dashboard">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <div class="badge badge-info badge-pill">2</div>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>KELOLA VIDEO</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="mdi mdi-camcorder menu-icon"></i>
                        <span class="menu-title">Upload Vidio</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            {{-- {{-- <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/buttons.html">Buttons</a></li> --}}
                            <li class="nav-item"> <a class="nav-link" href="#">Fantasy</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Magic</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Advanture</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Comedy</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-book menu-icon"></i>
                        <span class="menu-title">Artikel</span>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>Pages</p>
                    <span></span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            @include('admin.layouts.nav')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                    <!-- content-wrapper ends -->
                    {{-- star footer --}}
                    @include('admin.layouts.footer')

                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    </div>
    <!-- container-scroller -->

    <!-- base:js -->
    <script src="admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="admin/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="admin/js/off-canvas.js"></script>
    <script src="admin/js/hoverable-collapse.js"></script>
    <script src="admin/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="admin/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
