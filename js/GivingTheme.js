const menuMobile = document.getElementById('menuMobile');
const menuNav = document.getElementById('menu-primary-menu');
const menu = document.querySelector('.header-nav-menu');

console.log(menuMobile)

menuMobile.addEventListener('click', function(){
	menu.style.display = "block";
	menuNav.classList.toggle('Active');
if (menuNav.classList.contains("Active")){  
		} else { 
			menu.style.display = "none";
	};
});