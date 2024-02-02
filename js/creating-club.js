window.addEventListener('scroll', function(ev) {

	let header = document.getElementById('header');
	if (window.pageYOffset > 80) {
		header.classList.add('reduced-header');
	}else{
		header.classList.remove('reduced-header');
	}


});



var loadFileImg = function(event) {
	var container = document.getElementById('preview-icon-box');
	var output = document.createElement("img");
	let eventval = event.currentTarget.files[0];
	console.log(eventval);
	output.src = URL.createObjectURL(eventval);
	output.classList.add("l-icon");
	container.innerHTML = "";
	container.appendChild(output);
};
var loadFileAdd = function(event) {
	var container = document.querySelector('.add-img-label');
	var output = document.createElement("img");
	let eventval = event.currentTarget.files[0];
	console.log(eventval);
	output.src = URL.createObjectURL(eventval);
	output.classList.add("adding-img");
	container.innerHTML = "";
	container.appendChild(output);
	transferAddedAnime();
};

function shadow(){
	let shadow_check = document.querySelector('.modal-shadow');
	console.log(shadow_check)
	if (shadow_check == null) {
		let shadow = document.createElement("div");
		let body = document.getElementById('body');
		shadow.classList.add("modal-shadow");
		body.appendChild(shadow);
		setTimeout( () => {
			shadow.style.opacity = 0.6 ;
		}, 0);
	}
	
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



//avatar

let updateAvatar = function(event) {
	var container = document.querySelector('.avatar-label');
	var output = document.createElement("img");
	let eventval = event.currentTarget.files[0];
	console.log(eventval);
	output.src = URL.createObjectURL(eventval);
	output.classList.add("avatar-img");
	container.innerHTML = "";
	container.appendChild(output);
	transferAddedAnime();
};

let updateBackground = function(event) {
	var container = document.querySelector('.background-label');
	var output = document.createElement("img");
	let eventval = event.currentTarget.files[0];
	console.log(eventval);
	output.src = URL.createObjectURL(eventval);
	output.classList.add("background-img");
	container.innerHTML = "";
	container.appendChild(output);
	transferAddedAnime();
};


//switch modals
displayAddModal();
function displayAddModal() {
	let btns = document.querySelector('.add-ar');
	let container = document.getElementById('modal-container');
	let modal = addingAnimeModal();


	btns.addEventListener('click', (el) => {
		let modalBox = document.createElement('div');
		modalBox.innerHTML = modal;


		container.appendChild(modalBox);



		setTimeout( () => {
			container.children[0].querySelector('.adding-anime-modal').style.opacity = 1 ;
		}, 0);
		shadow();
		scrollLock();
		clearModal();


		
		console.log(name)
	});
}
	
	//newlink
displayNewLinkModal()
function displayNewLinkModal() {
	let btn = document.querySelector('.link-add')
	let container = document.getElementById('modal-container');


	let modal = linkModal();
	

	btn.addEventListener('click', (e) => {
		let modal_wrapper = document.createElement('div');
		modal_wrapper.innerHTML = modal;
		container.appendChild(modal_wrapper)

		
		let post_btn = modal_wrapper
		.querySelector('.link-modal')
		.querySelector('.modal-actions')
		.querySelector('.submit-btn')
		post_btn.addEventListener('click', () => {

			let placeholder = modal_wrapper
			.querySelector('.link-modal')
			.querySelector('.link-title-m').value
			let url = modal_wrapper
			.querySelector('.link-modal')
			.querySelector('.url-box')
			.querySelector('.link-url-m').value
			let icon = modal_wrapper
			.querySelector('.link-modal')
			.querySelector('.url-box')
			.querySelector('.link-icon-m')
			.querySelector('.l-icon').getAttribute('src')

			addNewLink(placeholder, url, icon)
			deleteLink()
			displayLinkModal()

			post_btn.parentElement.querySelector('.cancel-btn').click();
		})

		setTimeout( () => {
			container.children[0].querySelector('.link-modal').style.opacity = 1 ;
		}, 0);
		shadow();
		scrollLock();
		clearModal();

	})
}
function addNewLink(placeholder, url, icon){
	let container_blank = document.querySelector('.link-container');
	let modal = newlinkModal();
	let modal_wrapper = document.createElement('div');

	modal_wrapper.innerHTML = modal;
	let placeholder_blank = modal_wrapper
	.querySelector('.link')
	.querySelector('.link-title');
	let icon_blank = modal_wrapper
	.querySelector('.link')
	.querySelector('.link-icon-label')
	.querySelector('.l-icon');
	placeholder_blank.innerText = placeholder;
	icon_blank.src = icon;

	container_blank.appendChild(modal_wrapper)
}



	//manageLink
displayLinkModal()
function displayLinkModal() {
	let btns = document.querySelectorAll('.link-title, .link-icon-label');
	let container = document.getElementById('modal-container');
	let modal = linkModal();

	btns.forEach(el => el.addEventListener('click', () => {
		let modalBox = document.createElement('div');
		modalBox.innerHTML = modal;



		let newValues = getLinkInfo(el);
		let placeholder_blank = modalBox
		.querySelector('.link-modal')
		.querySelector('.link-title-m')
		let icon_blank = modalBox
		.querySelector('.link-modal')
		.querySelector('.url-box')
		.querySelector('.link-icon-m')
		.querySelector('.l-icon');




		placeholder_blank.value = newValues[0];
		icon_blank.parentElement.querySelector('.icon-text').remove();
		icon_blank.src = newValues[1];

		container.innerHTML = "";
		container.appendChild(modalBox);



		let elem = el;
		let saveBtn = modalBox.querySelector('.link-modal').querySelector('.modal-actions').querySelector('.submit-btn')
		saveBtn.innerText = "Save changes";
		saveBtn.addEventListener('click', function(e) {
			updateLinkInfo(e, el);
			saveBtn.parentElement.querySelector('.cancel-btn').click();
			scrollLock();
			scrollLock();
		})
		

		setTimeout( () => {
			container.children[0].querySelector('.link-modal').style.opacity = 1 ;
		}, 0);
		shadow();
		scrollLock();
		clearModal();
		deleteLink();

		
		console.log(name)
	}));
}
function updateLinkInfo(e, position_onpage) {
	let placeholder_value = e.currentTarget.parentElement.parentElement
	.querySelector('.link-title-m').value;
	let icon_value = e.currentTarget.parentElement.parentElement
	.querySelector('.link-icon-m')
	.querySelector('.l-icon')
	.getAttribute('src');
	

	let placeholder = position_onpage.parentElement.querySelector('.link-title');
	let icon = position_onpage.parentElement.querySelector('.link-icon-label').querySelector('.l-icon');

	placeholder.innerText = placeholder_value;
	icon.src = icon_value;
}
function getLinkInfo(el){
	let newValues = [];
	
	let placeholder = el.parentElement.querySelector('.link-title').innerText;
	let icon = el.parentElement.querySelector('.link-icon-label').querySelector('.l-icon').getAttribute('src');
	
	newValues.push(placeholder)
	newValues.push(icon)

	return newValues
}


deleteLink();
function deleteLink(){
	let btns = document.querySelectorAll('.link-del');

	btns.forEach(el => el.addEventListener('click', () => {
		el.parentElement.remove()
	}));
}


//backgroundModal
displayBackgroundModal();
function displayBackgroundModal(){
	let btn = document.querySelector('.adjust-btn')
	let container = document.getElementById('modal-container');

	console.log(btn)
	let modal = backgroundModal();
	

	btn.addEventListener('click', (e) => {
		let modal_wrapper = document.createElement('div');
		modal_wrapper.innerHTML = modal;
		container.appendChild(modal_wrapper)

		
		let post_btn = modal_wrapper
		.querySelector('.modal-background')
		.querySelector('.b-cont')
		.querySelector('.background-info')
		.querySelector('.modal-actions')
		.querySelector('.submit-btn')
		post_btn.addEventListener('click', () => {
			updateOnPageBackground();
			post_btn.parentElement.querySelector('.cancel-btn').click();
		})

		setTimeout( () => {
			container.children[0].querySelector('.modal-background').style.opacity = 1 ;
		}, 0);
		shadow();
		scrollLock();
		clearModal();
		viewZoneShift();

	})
}

function viewZoneShift() {
	let offset = document.querySelector('.offset-value');
	let offset_value = document.querySelector('.offset-value').innerText;
	let increase_btn = document.querySelectorAll('.offset-controll')[0];
	let decrease_btn = document.querySelectorAll('.offset-controll')[1];

	increase_btn.addEventListener('click', ()=>{
		let initial = offset_value;
		let result;
		if (!(Number(initial) == 0)) {
			result = Number(initial) - 10;
			offset_value = result;
			offset.innerText = result;
		} 

		

		
		viewZoneChange();
	})
	decrease_btn.addEventListener('click', ()=>{
		let initial = offset_value;
		let result;

		if (!(Number(initial) == 260)){
			result = Number(initial) + 10;
			offset_value = result;
			offset.innerText = result;
		}

		viewZoneChange();
	})

	viewZoneChange();
}

function viewZoneChange() {
	let shift_value = document.querySelector('.offset-value').innerText;
	let focal_point = document.querySelector('.view-area');
	let dummy_img = document.querySelector('.background-prev');

	if (!(Number(shift_value) > 260) && !(Number(shift_value) < 0)) {
		focal_point.style.top =  "" + Number(shift_value) + "px";
		dummy_img.style.marginTop =  "-" + Number(shift_value) + "px";
	} 
}
function updateOnPageBackground(){
	let background = document.querySelector('.background-img');
	let shift_value = document.querySelector('.offset-value').innerText;
	background.style.marginTop = "-" + Number(shift_value) + "px"
	console.log(shift_value)
}

//Transfer existing anime
transferRelatedAnime();
function transferRelatedAnime() {
	let animes = document.querySelectorAll('.search-anime-box');
	let cont = document.querySelector('.related-anime-cont');
	let box = document.createElement('div');
	box.innerHTML = relAnimeBox();

	animes.forEach(el => el.addEventListener('click', () => {
		let img = el.querySelector('.search-anime-img').getAttribute('src');
		let title = el.querySelector('.search-anime-info').querySelector('.search-anime-title').innerText;
		
		
		let img_blank = box.querySelector('.related-anime').querySelector('.ra-img');
		let title_blank = box.querySelector('.related-anime').querySelector('.ra-info').querySelector('.ra-title');
		title_blank.innerText = title;
		img_blank.src = img;

		document.querySelector('.related-added-cont').innerHTML = "";
		cont.innerHTML = "";
		cont.appendChild(box);



		let sBtn = 	box.querySelector(".ra-info").querySelector('.select-anime').querySelector('.s-anime')
		console.log(sBtn)
		setTimeout( () => {
			sBtn.click();;
		}, 650);
		deletingRelatedAnime('.related-anime-cont')

	}));
}
deletingRelatedAnime('.related-anime-cont')
function deletingRelatedAnime(cont){
	let container = document.querySelector(cont);
	let btn = document.querySelector('.delete-btn');
	if (btn) {
		btn.addEventListener('click', () => {
			container.innerHTML = "";
		})
	}
}


//Added yourself
function transferAddedAnime(){
	let submit = document.querySelector('.submit-added');
	let container = document.querySelector('.related-added-cont');
	let box1 = document.createElement('div');
	box1.innerHTML = addedAnimeBox();

	console.log(box1)
	submit.addEventListener('click', () => {
		let img_blank = box1.querySelector('.related-anime').querySelector('.ra-img');
		let title_blank = box1.querySelector('.related-anime').querySelector('.ra-info').querySelector('.ra-title');
		let desc_blank = box1.querySelector('.related-anime').querySelector('.ra-info').querySelector('.ra-desc');

		let img = document.querySelector('.add-img-label').querySelector('.adding-img').getAttribute('src');
		let title = document.querySelector('.adding-title').value;
		let desc = document.querySelector('.adding-desc').value;


		img_blank.src = img;
		title_blank.innerText = title;
		desc_blank.innerText = desc;

		document.querySelector('.related-anime-cont').innerHTML = "";
		container.innerHTML = "";
		container.appendChild(box1);
		console.log(box1)


		let sBtn = 	box1.querySelector(".ra-info").querySelector('.select-anime').querySelector('.s-anime')
		setTimeout( () => {
			sBtn.click();;
		}, 650);
		deletingRelatedAnime('.related-added-cont')
		submitModalClear(submit);
		
	})
}
function submitModalClear(btn) {
		let modal = btn.parentElement.parentElement.parentElement;
		let shadow = document.querySelector(".modal-shadow");

		modal.remove();
		shadow.remove();
		scrollLock();
}


//modals
function relAnimeBox(){
	let rawTemplate = document.getElementById("anime-box").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}
function addedAnimeBox(){
	let rawTemplate = document.getElementById("added-anime-box").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}


function addingAnimeModal(){
	let rawTemplate = document.getElementById("adding-anime-modal").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}
function linkModal(){
	let rawTemplate = document.getElementById("link-modal").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}
function newlinkModal(){
	let rawTemplate = document.getElementById("new-link-modal").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}
function backgroundModal(){
	let rawTemplate = document.getElementById("background-modal").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate();

	return ourGeneratedHTML;
}

