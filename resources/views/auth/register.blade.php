<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('defaults.head')
</head>

<body>
    <a href="javascript:history.back()" class="back-icon">
        <i class='bx bx-chevron-left-circle'></i>
    </a>
    <div class="wrapper">


        <h2>Create an Account</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>
            </div>

            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                    required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box password-container">
                <input type="password" id="password" name="password" placeholder="Create password" required>
                <i class='bx bx-hide' id="toggle-password"></i>

                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box password-container">
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm password" required>
                <i class='bx bx-hide' id="toggle-password"></i>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <input type="hidden" name="role" value="user">

            <div class="policy">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">I accept the <a href="{{ url('terms') }}" target="_blank">Terms & Conditions</a>
                    and <a href="{{ url('policy') }}" target="_blank">Privacy Policy</a></label>
            </div>

            <div class="input-box button">
                <input type="submit" value="Register Now">
            </div>

            <div class="text">
                <h3>Already have an account? <a href="{{ route('login') }}">Login now</a></h3>
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
