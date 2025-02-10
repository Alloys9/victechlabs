<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage with Google Login Popup</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @include('defaults.head')
</head>
<body>

    <div class="popup-container" id="googlePopup">
        <img src="{{ asset('images/google.png') }}" alt="Google">
        <div class="popup-content">
            <h4>Sign in with Google</h4>
            <p>One tap login for easy access</p>
        </div>
        <button class="popup-close" id="closePopup">&times;</button>
    </div>


    <script src="{{ asset('js/google-auth.js') }}"></script>

</body>
</html>
