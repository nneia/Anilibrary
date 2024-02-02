
//Focusing on textarea
focus("write-comment-area", "write-comment-box", "write-comment-panel");

modalSelector();
let modalCounter = 0;
	function modalSelector() {
		let btnAddHG = document.getElementById("btnAddHG");
		btnAddHG.addEventListener("click", () => {
			modalCounter = 1;
			modalSwitch();
			shadow();
			scrollLock("body");
			innerModalSelector();


			let btnClose = document.getElementById("close-modal-addHG");
			let pageBody = document.getElementById('body');

			btnClose.addEventListener('click', ()=> {
				let container = document.getElementById("modalsContainer");
				let modalShadow = document.getElementsByClassName("modal-shadow");

				container.innerHTML = "";
				pageBody.removeChild(modalShadow[0]);
				scrollLock("body");
			})
		});
	}
	function modalSwitch(){
		let modalContentContainer = document.getElementById("modalsContainer");

		let newHGModal = hgHTML();

		switch (modalCounter){
			case 1: 
			modalContentContainer.innerHTML = newHGModal;
			break;
		};
	}



	function innerModalSelector(){
		let selectBtns = document.querySelectorAll(".hg-select");
		selectBtns.forEach( el => el.addEventListener('click', function(){
			innerModalSwitch();
		}));
	}
	function innerModalSwitch(){
		let innerContainer = document.getElementById("hg-inner-container");
		let modal = innerHgHTML();

		innerContainer.innerHTML = modal;
		//Lock HG modal
		scrollLock("results-container");

		innerModalClose();
	}
	function innerModalClose(){
		let closeBtn = document.querySelector(".cancel-btn-m");
		let innerContainer = document.getElementById("hg-inner-container");

		closeBtn.addEventListener("click", ()=>{
			innerContainer.innerHTML = "";
			scrollLock("results-container");
		});
	}


	function shadow(){
		let shadow = document.createElement("div");
		shadow.classList.add("modal-shadow");
		let pageBody = document.getElementById("body");
		pageBody.appendChild(shadow);
	}
	function scrollLock(elemId){
		let body = document.getElementById(elemId);
		body.classList.toggle("scroll-lock");
	}



	function hgHTML(){
		let rawTemplate = document.getElementById("addHGModal").innerHTML;
		let compiledTemplate = Handlebars.compile(rawTemplate);
		let ourGeneratedHTML = compiledTemplate();

		return ourGeneratedHTML;
	};
	function innerHgHTML(){
		let rawTemplate = document.getElementById("selectedHG").innerHTML;
		let compiledTemplate = Handlebars.compile(rawTemplate);
		let ourGeneratedHTML = compiledTemplate();

		return ourGeneratedHTML;
	};