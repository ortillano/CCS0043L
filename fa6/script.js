document.addEventListener("DOMContentLoaded", function() {
    const alertBox = document.getElementById("status-message");
    if (alertBox) {
        setTimeout(() => alertBox.style.opacity = "0", 2500);
    }
});