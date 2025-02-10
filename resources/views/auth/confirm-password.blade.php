<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirm your Password for {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('defaults.head')
</head>

<body>
    <a href="javascript:history.back()" class="back-icon">
        <i class='bx bx-chevron-left-circle'></i>
    </a>
    <div class="wrapper">
        <h1>Please confirm your password</h1>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="input-box password-container">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <i class='bx bx-hide' id="toggle-password"></i>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box button">
                <input type="submit" value="Confirm" />
            </div>

            <div class="text">
                <h3>Don't have an account? <a href="{{ route('register') }}" id="signup-btn">Register now</a></h3>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/auth-forms.js') }}"></script>
</body>

</html>
