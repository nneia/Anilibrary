	



	let mState = "close";
	mSelector();
	function mSelector() {

		let openBtn = document.getElementById("rating");



		
	
		openBtn.addEventListener("click", function() {
			mState = "open";
			mSwitch();
			

		});

		
	};

	function mSwitch() {
		let container = document.getElementById("modal-container");


		let modal = studiosModal();
		


		switch (mState){
			case "open": 
			container.innerHTML = modal;
			shadow();
			scrollLock();
			clearModal();
			break;
		};
	};
	mSwitch();

	function scrollLock(){
		let body = document.getElementById('body');
		body.classList.toggle("scroll-lock");
	}
	function shadow(){
		let shadow = document.createElement("div");
		shadow.classList.add("modal-shadow");
		document.getElementById('body').appendChild(shadow);
	}
	function clearModal(){
		let closeBtn = document.getElementsByClassName("close-list");
		let pageBody = document.getElementById("body");
		let modalContainer = document.getElementById("modal-container");
		let modalShadow = document.getElementsByClassName("modal-shadow");
		closeBtn[0].addEventListener('click', () => {
			modalContainer.innerHTML = "";
			pageBody.removeChild(modalShadow[0]);
			scrollLock();
		});
	}

	function studiosModal(){
		let rawTemplate = document.getElementById("modalStudios").innerHTML;
		let compiledTemplate = Handlebars.compile(rawTemplate);
		let ourGeneratedHTML = compiledTemplate();

		return ourGeneratedHTML;
	}