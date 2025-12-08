/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector("[data-mobile-btn]");
    const menu = document.querySelector("[data-mobile-menu]");
    const closeBtn = document.querySelector('[data-mobile-close]');

    if (!btn || !menu || !closeBtn) return;

    const openMenu = () => {
        menu.classList.remove("hidden",  "opacity-0", "max-h-0", "-translate-y-2");
        menu.classList.add("opacity-100", "max-h-screen", "translate-y-0");
    };

    const closeMenu = () => {
        menu.classList.add("opacity-100", "max-h-screen", "translate-y-0");
        setTimeout(() => {
            menu.classList.add("hidden");
        }, 300); // matches transition duration
    };

    btn.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
});