document.addEventListener("DOMContentLoaded", function () {
    var passwordInput = document.getElementById("password");
    var toggleButton = document.getElementById("togglePassword");

    toggleButton.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
});
