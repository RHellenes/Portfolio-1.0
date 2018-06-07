const prevButton = document.querySelector('.prev')
const topButton = document.querySelector('.top')
const nextButton = document.querySelector('.next')

const prevArrowEffect = document.querySelector('.prevArrow')
const topArrowEffect = document.querySelectorAll('.topArrow')
const nextArrowEffect = document.querySelector('.nextArrow')




// next animation

if(nextButton != null){
		nextButton.addEventListener('mouseenter', () => {
		nextArrowEffect.classList.add('next-motion')
	})
		nextButton.addEventListener('mouseleave', () => {
		nextArrowEffect.classList.remove('next-motion')
	})
}








// Prev animation

if(prevButton != null){
		prevButton.addEventListener('mouseenter', () => {
		prevArrowEffect.classList.add('prev-motion')
	})

	prevButton.addEventListener('mouseleave', () => {
		prevArrowEffect.classList.remove('prev-motion')
	})
}





// Top animation

if(topButton != null){
		topButton.addEventListener('mouseenter', () => {
		topArrowEffect[0].classList.add('top-motion')
		topArrowEffect[1].classList.add('top-motion')

	})

	topButton.addEventListener('mouseleave', () => {
		topArrowEffect[0].classList.remove('top-motion');
		topArrowEffect[1].classList.remove('top-motion');

	})
}
