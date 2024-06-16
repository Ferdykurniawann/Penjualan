document.addEventListener("DOMContentLoaded", function () {
    const navbarToggle = document.getElementById("navbar-toggle");
    const navbarLinks = document.getElementById("navbar-links");

    navbarToggle.addEventListener("click", function () {
        if (navbarLinks.style.display === "flex") {
            navbarLinks.style.display = "none";
        } else {
            navbarLinks.style.display = "flex";
        }
    });
});
