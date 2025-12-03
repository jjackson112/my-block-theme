/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("mobile-btn");
    const menu = document.getElementById("mobile-menu");
    const closeBtn = document.getElementById('mobileMenuClose');

    const openMenu = () => {
        menu.classList.remove("hidden");
        menu.classList.add("open");
    };

    const closeMenu = () => {
        menu.classList.remove("open");
        setTimeout(() => {
            menu.classList.add("hidden");
        }, 300); // matches transition duration
    };

    btn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);

});