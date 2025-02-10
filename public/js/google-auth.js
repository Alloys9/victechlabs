document.addEventListener("DOMContentLoaded", function() {
    let popup = document.getElementById("googlePopup");

    let googleAuthUrl = popup ? popup.getAttribute("data-url") : null;

    if (!popup || !googleAuthUrl) return;

    if (sessionStorage.getItem("googlePopupClosed")) {
        popup.parentNode.removeChild(popup);
        return;
    }

    let closeBtn = document.getElementById("closePopup");

    setTimeout(() => {
        popup.classList.add("show");
    }, 500);

    closeBtn.addEventListener("click", function(event) {
        event.stopPropagation();
        popup.classList.remove("show");

        setTimeout(() => {
            popup.parentNode.removeChild(popup);
        }, 500);

        sessionStorage.setItem("googlePopupClosed", "true");
    });

    popup.addEventListener("click", function() {
        window.location.replace(googleAuthUrl);
    });
});
