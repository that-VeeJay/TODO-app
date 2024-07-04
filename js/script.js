// Script to toggle icon visibility
document.addEventListener('DOMContentLoaded', function() {
    let eyeIcons = document.querySelectorAll(".toggle-icon, .toggle-icon-confirm");
    let passwords = document.querySelectorAll(".input-field[type='password']");

    eyeIcons.forEach(function(eyeIcon, index) {
        eyeIcon.addEventListener("click", function () {
            if (passwords[index].type === "password") {
                passwords[index].type = "text";
                eyeIcon.src = "assets/eye-slash-regular.svg";
            } else {
                passwords[index].type = "password";
                eyeIcon.src = "assets/eye-regular.svg";
            }
        });
    });
});  