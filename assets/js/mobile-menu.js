/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("mobile-btn");
    const menu = document.getElementById("mobile-menu");
    const closeBtn = document.getElementById('mobileMenuClose');

    btn.addEventListener("click", () => {
        // Toggle visibility
        menu.classList.toggle("hidden");

        // Animate height
        if (menu.classList.contains("hidden")) {
            menu.style.maxHeight = "0";
            menu.style.opacity = "0";
            menu.style.transform = "translateY(-10px)";
        } else {
            menu.style.maxHeight = menu.scrollHeight + "px";
            menu.style.opacity = "1";
            menu.style.transform = "translateY(0)";
        }
    });
    
    // close menu
    closeBtn.addEventListener('click', () => {
        menu.classList.add('max-h-0', 'opacity-0', '-translate-y-2');
        
        // hide fully after animation is over
        setTimeout(() => {
            menu.classList.add('hidden');
        }, 300);
    });

});