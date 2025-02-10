document.querySelectorAll(".password-container i").forEach((icon) => {
    icon.addEventListener("click", function () {
        const input = this.previousElementSibling;
        if (input.type === "password") {
            input.type = "text";
            this.classList.replace("bx-hide", "bx-show");
        } else {
            input.type = "password";
            this.classList.replace("bx-show", "bx-hide");
        }
    });
});

setTimeout(
    () => document.querySelectorAll(".error").forEach((el) => el.remove()),
    5000
);


