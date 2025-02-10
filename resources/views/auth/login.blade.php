<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('defaults.head')
</head>

<body>
    <a href="javascript:history.back()" class="back-icon">
        <i class='bx bx-chevron-left-circle'></i>
    </a>
    <div class="wrapper">


        <h2>Welcome Back <i class='bx bxs-hand waving-hand'></i></h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required
                    autocomplete="username">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box password-container">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <i class='bx bx-hide' id="toggle-password"></i>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="policy">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <div class="input-box button">
                <input type="submit" value="Login">
            </div>

            <div class="text">
                <h3>Don't have an account? <a href="{{ route('register') }}">Register now</a></h3>
                <h3><a href="{{ route('password.request') }}" class="forgotpass">Forgot Password?</a></h3>
            </div>
        </form>


        <div class="google-login">
            <a href="{{ url('google') }}" class="google-button">
                <img src="{{ asset('images/google.png') }}" alt="Google Icon">
                Continue with Google
            </a>
        </div>

    </div>
    <script src="{{ asset('js/auth-forms.js') }}"></script>
</body>

</html>
