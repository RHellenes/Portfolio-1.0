document.addEventListener('DOMContentLoaded', function(event) { 

	document.getElementById('menu_icon').addEventListener('click', mobileNav)


	function mobileNav(){

		document.querySelector('header').classList.toggle('open_menu')
		document.querySelector('nav').classList.toggle('block_nav')
		document.querySelector('.line1').classList.toggle('rotate1')
		document.querySelector('.line2').classList.toggle('move_away')
		document.querySelector('.line3').classList.toggle('rotate2')

		setTimeout(logo_change, 100)
		function logo_change(){

			document.querySelector('.logo').classList.toggle('logo-visible')
			document.querySelector('.menu_logo').classList.toggle('menu_logo-visible')
			
		}
		setTimeout(block_nav, 300)

		function block_nav() {

		 document.querySelector('nav').classList.toggle('opacity')
		}
	
	}

	

})