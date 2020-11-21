const burgerMenu = document.querySelector('.burger-menu');
const closeMenu = document.querySelector('.close-menu');
const menuOverlay = document.querySelector('.menu-overlay');
const menu = document.querySelector('.menu');
const backArrow = document.querySelector('.back-arrow');

function toggleMenu() {
    menuOverlay.classList.toggle('hidden');
}

burgerMenu.addEventListener('click', toggleMenu);
closeMenu.addEventListener('click', toggleMenu);
menuOverlay.addEventListener('click', toggleMenu);
menu.addEventListener('click', (e) => e.stopPropagation());

if (backArrow) backArrow.addEventListener('click', () => history.back());
