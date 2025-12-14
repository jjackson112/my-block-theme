/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector("[data-mobile-btn]");
    const menu = document.querySelector("[data-mobile-menu]");
    const closeBtn = document.querySelector('[data-mobile-close]');

    if (!btn || !menu || !closeBtn) return;

    const openMenu = () => {
        menu.classList.remove("hidden",  "opacity-0", "scale-95");
        menu.classList.add("opacity-100", "scale-100");
        menu.setAttribute("aria-hidden", "false");
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