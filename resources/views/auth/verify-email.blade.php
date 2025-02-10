<!DOCTYPE html>
<html lang="en">

<head>
    <title>Email Verification | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @include('defaults.head')
</head>

<body>
    <a href="javascript:history.back()" class="back-icon">
        <i class='bx bx-chevron-left-circle'></i>
    </a>
    <div class="wrapper">
        <h1>Email Verification</h1>

        <div class="info-box">
            <p>{{ __('Before continuing, please verify your email address by clicking on the link we just sent you. If you didn\'t receive the email, we will gladly send you another.') }}
            </p>
        </div>

        <div class="gmail-link">
            <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
                <img src="{{ asset('images/gmail.png') }}" alt="Gmail" class="gmail-image">
            </a>
        </div>

        <p>If you have successfully verified your email, you may now leave this page.</p>

        @if (session('status') == 'verification-link-sent')
            <div class="success-message">
                <p>{{ __('A new verification link has been sent to the email address you provided in your profile settings. If you still cant see it, check your spam folder.') }}
                </p>
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}" class="action-form">
            @csrf
            <div class="input-box button">
                <input type="submit" value="Resend Verification Email">
            </div>
        </form>

        <div class="text">

            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-button">Log Out</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/auth-forms.js') }}"></script>
</body>

</html>
