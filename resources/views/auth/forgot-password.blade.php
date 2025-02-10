<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('defaults.head')
</head>

<body>
    <a href="javascript:history.back()" class="back-icon">
        <i class='bx bx-chevron-left-circle'></i>
    </a>
    <div class="wrapper">
        <h1>Forgot Password</h1>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required
                    autofocus autocomplete="username">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


            <div class="input-box button">
                <input type="submit" value="Email Password Reset Link">
            </div>
            @session('status')
                <div class="input-box message">
                    <p class="success">{{ $value }}. If you still cant see it, check your spam folder.</p>
                </div>
            @endsession
            <x-validation-errors class="input-box message" />
        </form>
        <div class="gmail-link">
            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
                <img src="{{ asset('images/gmail.png') }}" alt="Gmail" class="gmail-image"> <i class='bx bx-link-external'></i>
            </a>
        </div>

        <p>If you have successfully changed your password, you may now leave this page.</p>
        <div class="text">
            <h4>Remembered your password? <a href="{{ route('login') }}">Login now</a></h4>
        </div>
    </div>

    <script src="{{ asset('js/auth-forms.js') }}"></script>
</body>

</html>
