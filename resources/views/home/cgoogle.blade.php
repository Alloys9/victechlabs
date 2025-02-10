@if(!Auth::check())
<div class="popup-container" id="googlePopup" data-url="{{ url('google') }}">
    <img src="{{ asset('images/google.png') }}" alt="Google">
    <div class="popup-content">
        <h4>Sign in with Google</h4>
        <p>One tap login for easy access</p>
    </div>
    <button class="popup-close" id="closePopup">&times;</button>
</div>
@endif

<script src="{{ asset('js/google-auth.js') }}"></script>
