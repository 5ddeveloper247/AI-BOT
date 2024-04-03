<!doctype html>
<html lang="en">

<head>

    @include('admin.layouts.admin-header')

    <title>AI - @yield('title', 'AI - dashboard')</title>
</head>
@stack('css')


<body class="bg-theme bg-theme1">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <x-admin-sidebar />
        <!--end sidebar wrapper -->
        <!--start header -->
        <x-admin-header />
        <!--end header -->


        <!--start page wrapper -->
        @yield('content')
        <!--end page wrapper -->


        <!--start overlay-->
        <div class="overlay toggle-icon"></div>

        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        @include('admin.layouts.admin-footer')

        @stack('script')
</body>


</html>
