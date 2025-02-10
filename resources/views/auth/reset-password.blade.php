<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('defaults.head')
</head>

<body>
    <a href="javascript:history.back()" class="back-icon">
        <i class='bx bx-chevron-left-circle'></i>
    </a>
    <div class="wrapper">
        <h1>Reset Password</h1>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email"
                    :value="old('email', $request - > email)" required autofocus autocomplete="username">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box password-container">
                <input type="password" id="password" name="password" placeholder="Enter your password" required
                    autocomplete="new-password">
                <i class='bx bx-hide' id="toggle-password"></i>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box password-container">
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm new password" required autocomplete="new-password">
                <i class='bx bx-hide' id="toggle-password"></i>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-box button">
                <input type="submit" value="Reset Password">
            </div>
        </form>
    </div>
    <script src="{{ asset('js/auth-forms.js') }}"></script>
</body>

</html>
