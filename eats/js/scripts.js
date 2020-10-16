// --- Mobile nav hamburger menu ---
const menuBtn = document.querySelector('#menu-btn');
const mainNav = document.querySelector('.main-nav');

//Toggle classes on click of #menu-btn
menuBtn.addEventListener('click', function() {
	this.classList.toggle('active');
	mainNav.classList.toggle('show');
});