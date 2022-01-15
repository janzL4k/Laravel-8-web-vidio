<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Website Olahraga | 2022</title>

    <!-- Favicon -->
    <link rel="icon" href="frontend/img/core-img/oborr.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="frontend/style.css">

    {{-- jquery active --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
  @include('frontend.layouts.nav')
    <!-- ##### Header Area End ##### -->

   @yield('content')
    <br> <br><br>
    <!-- ##### Footer Area Start ##### -->
    @include('frontend.layouts.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="frontend/js/active.js"></script>
</body>

</html>
