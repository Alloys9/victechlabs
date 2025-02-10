document.addEventListener("DOMContentLoaded", function() {
    let popup = document.getElementById("googlePopup");
    let closeBtn = document.getElementById("closePopup");

    // Show popup if not closed before
    if (!sessionStorage.getItem("googlePopupClosed")) {
        setTimeout(() => {
            popup.classList.add("show");
        }, 500);
    }

    // Close popup and set session storage
    closeBtn.addEventListener("click", function(event) {
        event.stopPropagation();
        popup.classList.remove("show");
        sessionStorage.setItem("googlePopupClosed", "true");
    });

    // Redirect to Google login on click
    popup.addEventListener("click", function() {
        window.location.href = "{{ url('google') }}";
    });
});
