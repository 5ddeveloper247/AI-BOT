<!DOCTYPE html>

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

</html>
