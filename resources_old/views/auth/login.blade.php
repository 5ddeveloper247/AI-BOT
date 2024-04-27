{{-- <!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/login.css') }}" />
    <!-- Bootstrap Icon CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div class="container">
        <div class="cover">
            <div class="front">
                <img src="assets/images/login.jpg" alt="login" loading="lazy" />
                <div class="text">
                    <span class="text-1">Welcome to the Future<br />AI-Powered Bot <br />Login</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>

        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="#">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="bi bi-envelope-fill"></i>
                                <input type="text" placeholder="Enter your email" required />
                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" placeholder="Enter your password" required />
                            </div>
                            <div class="text"><a href="{{ route('password.request') }}">Forgot password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Submit" />
                            </div>
                            <div class="text sign-up-text">
                                Don't have an account? <a href="{{ route('register') }}">Signup</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AI - @yield('title', 'login')</title>

    <!--Bootstrap CDN's-->

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/login.css') }}" />
    @stack('css')
</head>

<body>
    @include('layouts.web.header')
<div class="container mt-5">
    <div class="cover">
        <div class="front">
            <img src="assets/images/login.jpg" alt="login" loading="lazy" />
            <div class="text">
                <span class="text-1">Welcome to the Future<br />AI-Powered Bot <br />Login</span>
                <span class="text-2">Let's get connected</span>
            </div>
        </div>
    </div>

    <div class="forms">
        <div class="form-content">
            <div class="login-form">
                <div class="title">Login</div>


                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-boxes " >

                        <div class="input-box" id="login">
                            <i class="bi bi-envelope-fill"></i>
                            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                            <x-text-input id="email" placeholder="Enter your email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" required />

                            {{-- <input type="text" placeholder="Enter your email" required /> --}}
                        </div>

                        <div class="input-box">
                            <i class="bi bi-lock-fill"></i>
                            <x-text-input id="password" placeholder="Enter your password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />
                            {{-- <input type="password" placeholder="Enter your password" required /> --}}
                        </div>

                        <div class="text"><a href="{{ route('password.request') }}">Forgot password?</a></div>

                        <div class="button input-box">
                            <input type="submit" value="Submit"  class="submit-btn-register"/>
                        </div>
                        <div class="text sign-up-text">
                            Don't have an account? <a href="{{ route('register') }}">Signup</a>
                        </div>
                    </div>
                </form>
                <div class="google-button">
                    <a href="{{ route('user.oauth.google') }}" type="button" class="google-sign-in-button" >
                        Sign in with Google
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
{{-- @include('layouts.web.footer') --}}

@stack('script')
</body>

</html>
