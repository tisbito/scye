
window.addEventListener('scroll', function(){

	let animation = document.getElementById('textAnimated1');
	let position = animation.getBoundingClientRect().top;
	console.log(position);
	let sizeWindow = window.innerHeight/1;
	
	if (position > sizeWindow){
		animation.style.display = 'none';
	}

	if (position < sizeWindow){
		animation.style.display = 'inline';
		animation.style.animation = 'mover 2.5s ease'
	}
});


window.addEventListener('scroll', function(){

	let animation2 = document.getElementById('textAnimated');
	let position2 = animation2.getBoundingClientRect().top;
	console.log(position2);
	let sizeWindow2 = window.innerHeight/2;
	
	if (position2 > sizeWindow2){
		animation2.style.display = 'none';
	}

	if (position2 < sizeWindow2){
		animation2.style.display = 'inline';
		animation2.style.animation = 'mover 2.5s ease'
	}
});