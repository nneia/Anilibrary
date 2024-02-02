window.addEventListener('scroll', function(ev) {

	let controlls = document.getElementById('c-bar');

	if (window.pageYOffset > 80) {
		controlls.classList.add('reduced-b');
	}else{
		controlls.classList.remove('reduced-b');
	}

   
});

console.log("asdsd")