
//Представим что я получаю этот обьект с информацией из БД
let dataForManageUsers = {
	staffData: {
		admins: ["Condomer"],
		moderators: ["Momon", "Neia"],
	},
	bannedUsersData: {
		usernames: ["banned1", "banned2", "banned3"],
		banDates: ["22.03.2020", "19.04.2020", "29.09.2019"],
	}
};
console.log(dataForManageUsers);


let pageCounter = 1;
document.onload = pageSwitchContent();
pageSelector();

function pageSelector() {
	let btn1 = document.getElementById("overall-btn");
	let btn2 = document.getElementById("manage-users-btn");
	let btn3 = document.getElementById("albums-playlists-btn");

	btn1.addEventListener("click", () => {
		pageCounter = 1;
		pageSwitchContent();
		changeBtnStyle(btn1, btn2, btn3);
		modalSelectorP1();
	});
	btn2.addEventListener("click", () => {
		pageCounter = 2;
		console.log("true");
		pageSwitchContent();
		changeBtnStyle(btn2, btn1, btn3);
		modalSelectorP2();
		
	});
	btn3.addEventListener("click", () => {
		pageCounter = 3;
		pageSwitchContent();
		changeBtnStyle(btn3, btn2, btn1);
		modalSelectorP3();
	});
};



function pageSwitchContent() {
	let pageContentContainer = document.getElementById("pageContent");
	let pageOverall = createOverallHTML(dataForManageUsers);
	let pageManageUsers = createManageUsersHTML(dataForManageUsers);
	let pageAlbumsPlaylists = createAlbumsPlaylistsHTML(dataForManageUsers);

	switch (pageCounter){
		case 1: 
		pageContentContainer.innerHTML = pageOverall;
		break;
		case 2:
		pageContentContainer.innerHTML = pageManageUsers;
		break;
		case 3:
		pageContentContainer.innerHTML = pageAlbumsPlaylists;
		break;
	};
};
function changeBtnStyle(target, reset1, reset2) {
	target.classList.add("selected-page");
	reset1.classList.remove("selected-page");
	reset2.classList.remove("selected-page");
};


function createOverallHTML(dataForManageUsers){
	let rawTemplate = document.getElementById("rawOverallTemplate").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function createManageUsersHTML(dataForManageUsers){
	let rawTemplate = document.getElementById("rawManageUsersTemplate").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function createAlbumsPlaylistsHTML(dataForManageUsers){
	let rawTemplate = document.getElementById("rawAlbumsPlaylistsTemplate").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};







//Modal windows managing

let modalCounter = 0;
modalSelectorP1();


function modalSelectorP1() {
	
	let manageAvatar = document.getElementById("manageAvatar");
	let manageBackground = document.getElementById("manageBackground");
	let manageTitle = document.getElementById("manageTitle");
	let manageDesc = document.getElementById("manageDesc");
	let manageLinks = document.getElementById("manageLinks");
	let manageRules = document.getElementById("new-rule-btn");
	let manageRelatedAnime = document.getElementById("add-related-anime-btn");
	let manageMissingAnime = document.getElementById("missing-anime-btn");
	let manageRelatedClub = document.getElementById("add-related-club-btn");
	let manageFlaers = document.getElementById("add-new-flaer-btn");

	let currentLinks = document.querySelectorAll(".link-box");
	let currentRules = document.querySelectorAll(".rule-box");
	let currentRelatedAnime = document.querySelectorAll(".related-anime-box");
	let currentRelatedClub = document.querySelectorAll(".club-box");
	let currentFlaer = document.querySelectorAll(".flaer-box");



	manageAvatar.addEventListener("click", function() {
		modalCounter = 1;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	manageBackground.addEventListener("click", function() {
		modalCounter = 2;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	manageTitle.addEventListener("click", function() {
		modalCounter = 3;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	manageDesc.addEventListener("click", function() {
		modalCounter = 3;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	manageLinks.addEventListener("click", function() {
		modalCounter = 4;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	currentLinks.forEach(el => el.addEventListener("click", function() {
		modalCounter = 44;
		pageSwitchModal();
		scrollLock();
		clearModal();
	}));
	manageRules.addEventListener("click", function() {
		modalCounter = 11;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	currentRules.forEach(el => el.addEventListener("click", function() {
		modalCounter = 111;
		pageSwitchModal();
		scrollLock();
		clearModal();
	}));
	manageRelatedAnime.addEventListener("click", function() {
		modalCounter = 12;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	currentRelatedAnime.forEach(el => el.addEventListener("click", function() {
		modalCounter = 122;
		pageSwitchModal();
		scrollLock();
		clearModal();
		verificationModal();
	}));
	manageMissingAnime.addEventListener("click", function() {
		modalCounter = 13;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	manageRelatedClub.addEventListener("click", function() {
		modalCounter = 14;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	currentRelatedClub.forEach(el => el.addEventListener("click", function() {
		modalCounter = 144;
		pageSwitchModal();
		scrollLock();
		clearModal();
		verificationModal();
	}));
	manageFlaers.addEventListener("click", function() {
		modalCounter = 15;
		pageSwitchModal();
		scrollLock();
		clearModal();
	});
	currentFlaer.forEach(el => el.addEventListener("click", function() {
		modalCounter = 155;
		pageSwitchModal();
		scrollLock();
		clearModal();
	}));

};
function modalSelectorP2() {
	
	let manageNewStaff = document.getElementById("add-new-staff-btn");
	let manageNewBan = document.getElementById("ban-user-btn");
	let currentStaff = document.querySelectorAll(".staff-box");
	let currentBans = document.getElementById("ban-box");

	manageNewStaff.addEventListener("click", function() {
		modalCounter = 16;
		pageSwitchModal();
		scrollLock();
		clearModal();
		internalSwitch();
	});
	currentStaff.forEach(el => el.addEventListener("click", function() {
		modalCounter = 166;
		pageSwitchModal();
		scrollLock();
		clearModal();
	}));
	manageNewBan.addEventListener("click", function() {
		modalCounter = 17;
		pageSwitchModal();
		scrollLock();
		clearModal();
		internalSwitch();
	});
	currentBans.addEventListener("click", function() {
		modalCounter = 177;
		pageSwitchModal();
		scrollLock();
		clearModal();
		internalSwitchCurrent();
	});

};
function modalSelectorP3() {
};

function scrollLock(){
	let body = document.getElementById('body');
	body.classList.toggle("scroll-lock");
}
function clearModal(){
	let closeBtn = document.getElementsByClassName("cancel-btn");
	let pageBody = document.getElementById("body");
	let modalContainer = document.getElementById("modals-container");
	let modalShadow = document.getElementsByClassName("modal-shadow");
	closeBtn[0].addEventListener('click', () => {
		modalContainer.innerHTML = "";
		pageBody.removeChild(modalShadow[0]);
		scrollLock();
	});
}

function verificationModal(){
	toggleClassOnClickAll(".remove-btn", ".remove-modal", "block");
	toggleClassOnClickAll(".remove-btn", ".remove-shadow", "block");
	toggleClassOnClickAll(".remove-neg", ".remove-modal", "block");
	toggleClassOnClickAll(".remove-neg", ".remove-shadow", "block");
	toggleClassOnClickAll(".remove-pos", ".remove-modal", "block");
	toggleClassOnClickAll(".remove-pos", ".remove-shadow", "block");


	let pageBody = document.getElementById("body");
	let modalContainer = document.getElementById("modals-container");
	let modalShadow = document.getElementsByClassName("modal-shadow");
	let yesBtn = document.querySelector(".remove-pos");

	yesBtn.addEventListener('click', () => {
		modalContainer.innerHTML = "";
		pageBody.removeChild(modalShadow[0]);
		scrollLock();
	});
}

function pageSwitchModal() {
	let pageBody = document.getElementById("body");
	let modalContainer = document.getElementById("modals-container");
	let shadow = document.createElement("div");
	shadow.classList.add("modal-shadow");



	let modalAvatar = createAvatarModalHTML();
	let modalBackground = createBackgroundModalHTML();
	let modalTitleDesc = createTitleDescModalHTML();
	let modalLinks = createLinksModalHTML();
	let modalRules = rulesModalHTML();
	let modalRelatedAnime = relatedAnimeModalHTML();
	let modalMissingAnime = missingAnimeModalHTML();
	let modalRelatedClub = relatedClubsModalHTML();
	let modalFlaers = manageFlaersModalHTML();
	let modalNewStaff = newStaffModalHTML();
	let modalNewBan = newbanModalHTML();

	let currentLinksModal = currentLinksModalHTML();
	let currentRulesModal = currentRulesModalHTML();
	let currentRelatedAnimeModal = currentRelatedAnimeModalHTML();
	let currentRelatedClubModal = currentRelatedClubModalHTML();
	let currentFlaerModal = currentFlaerModalHTML();
	let currentStaffModal = currentStaffModalHTML();
	let currentBannedModal = currentBannedModalHTML();
	let bannedUserFull = bannedUserFullHTML();

	switch (modalCounter){
		case 1: 
		modalContainer.innerHTML = modalAvatar;
		pageBody.appendChild(shadow);
			break;
		case 2:
		modalContainer.innerHTML = modalBackground;
		pageBody.appendChild(shadow);
			break;
		case 3:
		modalContainer.innerHTML = modalTitleDesc;
		pageBody.appendChild(shadow);
			break;
		case 4:
		modalContainer.innerHTML = modalLinks;
		pageBody.appendChild(shadow);
			break;
		case 44:
		modalContainer.innerHTML = currentLinksModal;
		pageBody.appendChild(shadow);
			break;

		//Overall modals
		case 11:
		modalContainer.innerHTML = modalRules;
		pageBody.appendChild(shadow);
			break;
		case 111:
		modalContainer.innerHTML = currentRulesModal;
		pageBody.appendChild(shadow);
			break;
		case 12:
		modalContainer.innerHTML = modalRelatedAnime;
		pageBody.appendChild(shadow);
			break;
		case 122:
		modalContainer.innerHTML = currentRelatedAnimeModal;
		pageBody.appendChild(shadow);
			break;
		case 13:
		modalContainer.innerHTML = modalMissingAnime;
		pageBody.appendChild(shadow);
			break;
		case 14:
		modalContainer.innerHTML = modalRelatedClub;
		pageBody.appendChild(shadow);
			break;
		case 144:
		modalContainer.innerHTML = currentRelatedClubModal;
		pageBody.appendChild(shadow);
			break;
		case 15:
		modalContainer.innerHTML = modalFlaers;
		pageBody.appendChild(shadow);
			break;
		case 155:
		modalContainer.innerHTML = currentFlaerModal;
		pageBody.appendChild(shadow);
			break;
		case 16:
		modalContainer.innerHTML = modalNewStaff;
		pageBody.appendChild(shadow);
			break;
		case 166:currentStaffModal
		modalContainer.innerHTML = currentStaffModal;
		pageBody.appendChild(shadow);
			break;
		case 17:
		modalContainer.innerHTML = modalNewBan;
		pageBody.appendChild(shadow);
			break;
		case 177:
		modalContainer.innerHTML = currentBannedModal;
		pageBody.appendChild(shadow);
			break;
	};
};

function createAvatarModalHTML () {
	let rawTemplate = document.getElementById("newManageAvatars").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function createBackgroundModalHTML () {
	let rawTemplate = document.getElementById("newBackground").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function createTitleDescModalHTML(){
	let rawTemplate = document.getElementById("newDescTitile").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function createLinksModalHTML(){
	let rawTemplate = document.getElementById("newLink").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function rulesModalHTML(){
	let rawTemplate = document.getElementById("newRules").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function relatedAnimeModalHTML(){
	let rawTemplate = document.getElementById("newRelatedAnime").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function missingAnimeModalHTML(){
	let rawTemplate = document.getElementById("newMissingAnime").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function relatedClubsModalHTML(){
	let rawTemplate = document.getElementById("newRelatedClub").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function manageFlaersModalHTML(){
	let rawTemplate = document.getElementById("newManageFlaers").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function newStaffModalHTML(){
	let rawTemplate = document.getElementById("newStaffMember").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function newstaffBoxHTML(){
	let rawTemplate = document.getElementById("innerStaffBox").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function newbanModalHTML(){
	let rawTemplate = document.getElementById("newBan").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};
function newbanBoxHTML(){
	let rawTemplate = document.getElementById("innerBanBox").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
};



function currentLinksModalHTML(){
	let rawTemplate = document.getElementById("currentLink").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function currentRulesModalHTML(){
	let rawTemplate = document.getElementById("currentRule").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function currentRelatedAnimeModalHTML(){
	let rawTemplate = document.getElementById("currentRelatedAnime").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function currentRelatedClubModalHTML(){
	let rawTemplate = document.getElementById("currentRelatedClub").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function currentFlaerModalHTML(){
	let rawTemplate = document.getElementById("currentFlaer").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function currentStaffModalHTML(){
	let rawTemplate = document.getElementById("currentStaff").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function currentBannedModalHTML(){
	let rawTemplate = document.getElementById("currentBans").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}
function bannedUserFullHTML(){
	let rawTemplate = document.getElementById("userBanFull").innerHTML;
	let compiledTemplate = Handlebars.compile(rawTemplate);
	let ourGeneratedHTML = compiledTemplate(dataForManageUsers);

	return ourGeneratedHTML;
}





function internalSwitchCurrent(){
	let switchStaff = document.querySelectorAll('.mng-staff');
	let staffContainer = document.getElementById('staff-modal-2');
	let switchBan = document.querySelectorAll('.banned-user-box');
	let banContainer = document.getElementById('banned-users-container');

	let staffBoxModal = newstaffBoxHTML();
	let banBoxModal = bannedUserFullHTML();


	switchBan.forEach(el => el.addEventListener('click', function(e){
		banContainer.innerHTML += banBoxModal;
		let backBtn = document.querySelector(".back-btn");
		backBtn.addEventListener('click', () =>{
			let deleteContainer = document.querySelector(".banned-user-full");
			banContainer.removeChild(deleteContainer);
			internalSwitchCurrent();
		})
	}));
}

function internalSwitch(){

	let switchStaff = document.querySelectorAll('.mng-staff');
	let staffContainer = document.getElementById('staff-modal-2');
	let switchBan = document.querySelectorAll('.mng-ban');
	let banContainer = document.getElementById('ban-modal-2');

	let staffBoxModal = newstaffBoxHTML();
	let banBoxModal = newbanBoxHTML();

	switchStaff.forEach(el => el.addEventListener('click', function(e){
		staffContainer.innerHTML += staffBoxModal;
		let backBtn = document.querySelector(".back-btn");
		backBtn.addEventListener('click', () =>{
			let deleteContainer = document.querySelector(".manage-user-box");
			staffContainer.removeChild(deleteContainer);
			internalSwitch();
		})
	}));
	switchBan.forEach(el => el.addEventListener('click', function(e){
		banContainer.innerHTML += banBoxModal;
		let backBtn = document.querySelector(".back-btn");
		backBtn.addEventListener('click', () =>{
			let deleteContainer = document.querySelector(".manage-user-box");
			banContainer.removeChild(deleteContainer);
			internalSwitch();
		})
	}));
	
}





toggleSaveBtn();
function toggleSaveBtn(){
	let clickOn = document.querySelectorAll(".checkbox-box");
	clickOn.forEach(item =>{
		item.addEventListener('click', function(e) {
			let btn = e.currentTarget.parentElement.querySelector(".save-checkbox-btn");
			console.log(btn);
			btn.classList.toggle("block");
		});
	})
}
