document.addEventListener('DOMContentLoaded', () => {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const popup = document.getElementById('navPopup');
    const closePopup = document.querySelector('.navclose-popup');

    if (!hamburgerMenu || !popup || !closePopup) return;

    // Show popup when hamburger is clicked
    hamburgerMenu.addEventListener('click', () => {
        popup.classList.toggle('show');
    });

    // Close popup when 'X' is clicked
    closePopup.addEventListener('click', () => {
        popup.classList.remove('show');
    });

    // Close popup when clicking outside the content
    popup.addEventListener('click', (e) => {
        if (!e.target.closest('.navpopup-content')) {
            popup.classList.remove('show');
        }
    });
});



document.querySelectorAll('.dropdown').forEach((dropdown) => {
    dropdown.addEventListener('click', function () {
        const menu = this.querySelector('.dropdown-menu');
        const isVisible = menu.style.display === 'block';
        document.querySelectorAll('.dropdown-menu').forEach((menu) => menu.style.display = 'none');
        menu.style.display = isVisible ? 'none' : 'block';
    });
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown-menu').forEach((menu) => menu.style.display = 'none');
    }
});


function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
