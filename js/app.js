// menu
const menuButton = document.querySelector('button[type="menu"]');
const menu = document.querySelector('nav');

menuButton.addEventListener('click', () => {
	menu.classList.toggle('active');
});
