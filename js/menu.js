const burgerMenu = document.querySelector('.burger-menu');
const closeMenu = document.querySelector('.close-menu');
const menuOverlay = document.querySelector('.menu-overlay');
const menu = document.querySelector('.menu');
const backArrow = document.querySelector('.back-arrow');

function toggleMenu() {
    menuOverlay.classList.toggle('hidden');
}

// bind toggleMenu
[burgerMenu, closeMenu, menuOverlay].forEach((element) =>
    element.addEventListener('click', toggleMenu)
);

// prevent event bubbling from menu container
menu.addEventListener('click', (e) => e.stopPropagation());

// give the browser go back functionality to the back arrow button
if (backArrow) backArrow.addEventListener('click', () => history.back());
