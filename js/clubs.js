
leaveConfirmation();
favoritesVisuals();
displayFavoritesOnly();
function leaveConfirmation() {
	let btns = document.querySelectorAll('.join-btn');
	let container = document.getElementById('modal-container');
	let modal = confirmationModal();


	btns.forEach( el => el.addEventListener('click', () => {
		let modalBox = document.createElement('div');
		let name = el.parentElement.querySelector('.title-box').querySelector('.club-title').innerText;
		modalBox.innerHTML = modal;
		modalBox
		.querySelector('.confirm-window')
		.querySelector('.confirm-header')
		.querySelector('.confirm-club')
		.innerHTML = name;



		container.appendChild(modalBox);



		setTimeout( () => {
			container.children[0].style.opacity = 1 ;
		}, 0);
		shadow();
		scrollLock();
		clearModal();


		
		console.log(name)
	}));
}

function favoritesVisuals() {
	let icons = document.querySelectorAll('.fav-icon');
	icons.forEach( el => el.addEventListener('click', () => {
		el.classList.toggle('favorite');
		displayFavoritesOnly();
	}))
}

function displayFavoritesOnly() {
	let clubs_fav = [];
	let icons = document.querySelectorAll('.favorite').forEach(el => clubs_fav.push(el
		.parentElement
		.parentElement
		.parentElement
	));

	let clubs = document.querySelector('.clubs-list').children;

}

switchPageVisuals();
function switchPageVisuals() {
	let btns = document.querySelector('.sticky-wrapper').children;
	let my_clubs = btns[0];
	let recomended = btns[1];
	let icon1 = btns[1].querySelector('.recomended-icon');
	let popular = btns[2];
	let icon2 = btns[2].querySelector('.pwf-icon');

	my_clubs.addEventListener('click', () => {
		my_clubs.classList.add('this-tab');
		recomended.classList.remove('this-tab');
		popular.classList.remove('this-tab');
		icon1.classList.remove('this-icon');
		icon2.classList.remove('this-icon');
	});
	recomended.addEventListener('click', () => {
		my_clubs.classList.remove('this-tab');
		recomended.classList.add('this-tab');
		popular.classList.remove('this-tab');
		icon1.classList.add('this-icon');
		icon2.classList.remove('this-icon');
	})
	popular.addEventListener('click', () => {
		my_clubs.classList.remove('this-tab');
		recomended.classList.remove('this-tab');
		popular.classList.add('this-tab');
		icon1.classList.remove('this-icon');
		icon2.classList.add('this-icon');
	})
}






function shadow(){
	let shadow = document.createElement("div");
	let body = document.getElementById('body');
	shadow.classList.add("modal-shadow");
	body.appendChild(shadow);
	setTimeout( () => {
		shadow.style.opacity = 0.6 ;
	}, 0);


}
function scrollLock(){
	let body = document.getElementById('body');
	body.classList.toggle("scroll-lock");
}
function clearModal(){
	let closeBtn = document.getElementsByClassName("close-btn");
	let cancelBtn = document.getElementsByClassName("cancel-btn");
	let pageBody = document.getElementById("body");
	let modalContainer = document.getElementById("modal-container");
	let modalShadow = document.getElementsByClassName("modal-shadow");
	if (closeBtn[0] == undefined) {
		cancelBtn[0].addEventListener('click', () => {
			modalContainer.innerHTML = "";
			modalShadow[0].style.opacity = 0;
			setTimeout( () => {
				pageBody.removeChild(modalShadow[0]);
			}, 150);

			scrollLock();
		});
	}else{
		closeBtn[0].addEventListener('click', () => {
			modalContainer.innerHTML = "";
			modalShadow[0].style.opacity = 0;
			setTimeout( () => {
				pageBody.removeChild(modalShadow[0]);
			}, 150);

			scrollLock();
		});
	}

};	





function confirmationModal(){
	let rawTemplate = document.getElementById("leave-confirmation").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}