const btn = document.getElementById("hamburger-btn");
const menu = document.getElementById("navbar-menu");
const icon = document.getElementById("burger-icon");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");

    if (menu.classList.contains("hidden")) {
        icon.classList.replace("fa-xmark", "fa-bars-staggered");
    } else {
        icon.classList.replace("fa-bars-staggered", "fa-xmark");
    }
});
const navLinks = menu.querySelectorAll("a");
navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        if (window.innerWidth < 768) {

            menu.classList.add("hidden");
            icon.classList.replace("fa-xmark", "fa-bars-staggered");
        }
    });
});
