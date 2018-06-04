const cardElement = document.querySelectorAll('.card');

	for (let i = 0; i < cardElement.length; i++) {
		cardElement[i].addEventListener('mouseenter', () =>{

		let titleElement = cardElement[i].children[0].children[0].children[0]
		titleElement.classList.add('hover-effect')

		})

		cardElement[i].addEventListener('mouseleave', () =>{

			let titleElement = cardElement[i].children[0].children[0].children[0]
			titleElement.classList.remove('hover-effect')
		})

	}