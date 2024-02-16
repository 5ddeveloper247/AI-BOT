<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Register</title>
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
                <img src="assets/images/register.jpg" alt="register" loading="lazy" />
                <div class="text">
                    <span class="text-1">Every new friend is a <br />
                        new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
        </div>


        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="bi bi-person-fill"></i>
                                <input type="text" name="name" placeholder="Enter your name"
                                    value="{{ old('name') }}" required />
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-envelope-fill"></i>
                                <input type="email" name="email" placeholder="Enter your email"
                                    value="{{ old('email') }}" required />
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-telephone-fill"></i>
                                <input type="tel" name="phone" placeholder="Enter your phone number"
                                    value="{{ old('phone') }}" required />
                                @error('phone')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" name="password" placeholder="Enter your password" required />
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-box">
                                <i class="bi bi-lock-fill"></i>
                                <input type="password" name="password_confirmation" placeholder="Confirm your password"
                                    required />
                            </div>
                            <div class="term-and-condition">
                                <input type="checkbox" id="term--checkbox" name="terms" class="term--checkbox me-2"
                                    required />
                                <label for="term--checkbox" class="me-1">
                                    I agree to
                                    <a href="{{ route('privacy') }}" class="text-primary">privacy policy</a> &amp;
                                    <a href="{{ route('term-condition') }}" class="text-primary">terms</a>
                                </label>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Submit" />
                            </div>
                            <div class="text sign-up-text">
                                Already have an account? <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </form>
                    <div class="google-button">
                        <button type="button" class="google-sign-in-button" >
                            Continue with Google
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    {{-- <script>
        $(document).ready(function() {
            $(".button").click(function(e) {
                e.preventDefault();

                window.location.href = '{{ route('plans') }}';
            });
        });
    </script> --}}
</body>

</html>
