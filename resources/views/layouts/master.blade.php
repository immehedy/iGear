<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <script src ="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">



    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/filter.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/apple.png')}}" />
    <!-- Toastr -->
{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">--}}

<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('includes.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
    @include('includes.sidebar')
    <!-- partial -->
        <div class="main-panel">
            <div class="text-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            @yield('content')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->

        <!-- partial:partials/_footer.html -->
    </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.mindtech.com/" target="_blank">Mindtech</a>. All rights reserved.</span>
                {{--        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>--}}
            </div>
        </footer>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
{{--<script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>--}}
<script src="{{asset('assets/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/js/misc.js')}}"></script>
{{--<script src="{{asset('assets/js/chart.js')}}"></script>--}}
<script src="{{asset('assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/js/todolist.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/file-upload.js')}}"></script>

<script>
    toastr.options = {
        "debug": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "fadeIn": 300,
        "fadeOut": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000
    };
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif
    @if(Session::has('warning'))
    toastr.warning("{{Session::get('warning')}}");
    @endif
</script>
</body>
</html>
