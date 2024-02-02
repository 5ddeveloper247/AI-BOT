<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AI - @yield('title', 'AI - Home')</title>
    
    <!--Bootstrap CDN's-->

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/style.css') }}" />
    @stack('css')
</head>

<body>
    @include('layouts.web.header')
    <main>
        <div class="overlay"></div>
        @yield('content')
    </main>
    @include('layouts.web.footer')

    @stack('script')
</body>

</html>