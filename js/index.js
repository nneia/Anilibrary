//Genres
switchDesignGenres();

function switchDesignGenres() {
  addClassOnClick("recOverallBtn", "recOverallBtn", "genre-marked");
  delClassOnClick("recOverallBtn", "genre1Btn", "genre-marked");
  delClassOnClick("recOverallBtn", "genre2Btn", "genre-marked");
  delClassOnClick("recOverallBtn", "genre3Btn", "genre-marked");
  delClassOnClick("recOverallBtn", "genre4Btn", "genre-marked");
  delClassOnClick("recOverallBtn", "genre5Btn", "genre-marked");

  delClassOnClick("genre1Btn", "recOverallBtn", "genre-marked");
  addClassOnClick("genre1Btn", "genre1Btn", "genre-marked");
  delClassOnClick("genre1Btn", "genre2Btn", "genre-marked");
  delClassOnClick("genre1Btn", "genre3Btn", "genre-marked");
  delClassOnClick("genre1Btn", "genre4Btn", "genre-marked");
  delClassOnClick("genre1Btn", "genre5Btn", "genre-marked");

  delClassOnClick("genre2Btn", "recOverallBtn", "genre-marked");
  delClassOnClick("genre2Btn", "genre1Btn", "genre-marked");
  addClassOnClick("genre2Btn", "genre2Btn", "genre-marked");
  delClassOnClick("genre2Btn", "genre3Btn", "genre-marked");
  delClassOnClick("genre2Btn", "genre4Btn", "genre-marked");
  delClassOnClick("genre2Btn", "genre5Btn", "genre-marked");

  delClassOnClick("genre3Btn", "recOverallBtn", "genre-marked");
  delClassOnClick("genre3Btn", "genre1Btn", "genre-marked");
  delClassOnClick("genre3Btn", "genre2Btn", "genre-marked");
  addClassOnClick("genre3Btn", "genre3Btn", "genre-marked");
  delClassOnClick("genre3Btn", "genre4Btn", "genre-marked");
  delClassOnClick("genre3Btn", "genre5Btn", "genre-marked");

  delClassOnClick("genre4Btn", "recOverallBtn", "genre-marked");
  delClassOnClick("genre4Btn", "genre1Btn", "genre-marked");
  delClassOnClick("genre4Btn", "genre2Btn", "genre-marked");
  delClassOnClick("genre4Btn", "genre3Btn", "genre-marked");
  addClassOnClick("genre4Btn", "genre4Btn", "genre-marked");
  delClassOnClick("genre4Btn", "genre5Btn", "genre-marked");

  delClassOnClick("genre5Btn", "recOverallBtn", "genre-marked");
  delClassOnClick("genre5Btn", "genre1Btn", "genre-marked");
  delClassOnClick("genre5Btn", "genre2Btn", "genre-marked");
  delClassOnClick("genre5Btn", "genre3Btn", "genre-marked");
  delClassOnClick("genre5Btn", "genre4Btn", "genre-marked");
  addClassOnClick("genre5Btn", "genre5Btn", "genre-marked");
}

//Votes

function toggleClassOnClickAllVotes(clickingObjIds, addToElems, classAdd) {
  let clickOn = document.querySelectorAll(clickingObjIds);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      var clickedElement = e.currentTarget.parentElement;
      let hiddenElement = clickedElement.querySelector(addToElems);
      hiddenElement.classList.toggle(classAdd);
    })
  );
}
toggleClassOnClickAllVotes(".post-up", ".post-up", "post-clicked-up");
toggleClassOnClickAllVotes(
  ".post-up",
  ".post-rating-value",
  "score-clicked-up"
);
delClassOnClickAll(".post-up", ".post-down", "post-clicked-down");
delClassOnClickAll(".post-up", ".post-rating-value", "score-clicked-down");

toggleClassOnClickAllVotes(".post-down", ".post-down", "post-clicked-down");
toggleClassOnClickAllVotes(
  ".post-down",
  ".post-rating-value",
  "score-clicked-down"
);
delClassOnClickAll(".post-down", ".post-up", "post-clicked-up");
delClassOnClickAll(".post-down", ".post-rating-value", "score-clicked-up");

//Ongoing pages

let modalCounter = 1;

function ongSelector() {
  const buttonIds = ["ong1-btn", "ong2-btn", "ong3-btn", "ong4-btn"];

  for (let i = 0; i < buttonIds.length; i++) {
    let pageBtn = document.getElementById(buttonIds[i]);
    let pNumber = pageBtn.children[0];
    let pUnderline = pageBtn.children[1];

    pageBtn.addEventListener("click", function () {
      modalCounter = i + 1;
      updateClasses(i);
      ongSwitchModal();
    });
  }
}

function updateClasses(activeIndex) {
  const buttonIds = ["ong1-btn", "ong2-btn", "ong3-btn", "ong4-btn"];

  for (let i = 0; i < buttonIds.length; i++) {
    let pageBtn = document.getElementById(buttonIds[i]);
    let pNumber = pageBtn.children[0];
    let pUnderline = pageBtn.children[1];

    if (i === activeIndex) {
      pNumber.classList.add("current-page");
      pUnderline.classList.add("current-underbar");
    } else {
      pNumber.classList.remove("current-page");
      pUnderline.classList.remove("current-underbar");
    }
  }
}

ongSelector();

function ongSwitchModal() {
  let pageBody = document.getElementById("body");
  let ongContainer = document.getElementById("ong-container");

  let ong1 = ongoingPage1HTML();
  let ong2 = ongoingPage2HTML();
  let ong3 = ongoingPage3HTML();
  let ong4 = ongoingPage4HTML();

  switch (modalCounter) {
    case 1:
      ongContainer.innerHTML = ong1;
      break;
    case 2:
      ongContainer.innerHTML = ong2;
      break;
    case 3:
      ongContainer.innerHTML = ong3;
      break;
    case 4:
      ongContainer.innerHTML = ong3;
      break;
  }
}
ongSwitchModal();

function ongoingPage1HTML() {
  let rawTemplate = document.getElementById("ong1").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function ongoingPage2HTML() {
  let rawTemplate = document.getElementById("ong2").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function ongoingPage3HTML() {}
function ongoingPage4HTML() {}

//Recommendation pages
let recCounter = 1;
recSelector();

function recSelector() {
  let pageOverallBtn = document.getElementById("recOverallBtn");
  let ganre1Btn = document.getElementById("genre1Btn");
  let ganre2Btn = document.getElementById("genre2Btn");
  let ganre3Btn = document.getElementById("genre3Btn");
  let ganre4Btn = document.getElementById("genre4Btn");
  let ganre5Btn = document.getElementById("genre5Btn");

  pageOverallBtn.addEventListener("click", function () {
    recCounter = 1;
    recSwitchModal();
  });
  ganre1Btn.addEventListener("click", function () {
    recCounter = 2;
    recSwitchModal();
  });
  ganre2Btn.addEventListener("click", function () {
    recCounter = 3;
    recSwitchModal();
  });
  ganre3Btn.addEventListener("click", function () {
    recCounter = 4;
    recSwitchModal();
  });
  ganre4Btn.addEventListener("click", function () {
    recCounter = 5;
    recSwitchModal();
  });
  ganre5Btn.addEventListener("click", function () {
    recCounter = 6;
    recSwitchModal();
  });
}
function recSwitchModal() {
  let pageBody = document.getElementById("body");
  let recContainer = document.getElementById("contianer-rec");

  let pageOverall = recOverall();
  let ganre1Btn = recGenre1();
  let ganre2Btn = recGenre2();
  let ganre3Btn = recGenre3();
  let ganre4Btn = recGenre4();
  let ganre5Btn = recGenre5();

  switch (recCounter) {
    case 1:
      recContainer.innerHTML = pageOverall;
      break;
    case 2:
      recContainer.innerHTML = ganre1Btn;
      break;
    case 3:
      recContainer.innerHTML = ganre2Btn;
      break;
    case 4:
      recContainer.innerHTML = ganre3Btn;
      break;
    case 5:
      recContainer.innerHTML = ganre4Btn;
      break;
    case 6:
      recContainer.innerHTML = ganre5Btn;
      break;
  }
}
recSwitchModal();
function recOverall() {
  let rawTemplate = document.getElementById("recOverall").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function recGenre1() {
  let rawTemplate = document.getElementById("genre1").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function recGenre2() {
  let rawTemplate = document.getElementById("genre2").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function recGenre3() {
  let rawTemplate = document.getElementById("genre3").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function recGenre4() {
  let rawTemplate = document.getElementById("genre4").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function recGenre5() {
  let rawTemplate = document.getElementById("genre5").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//Information full modal
appendInfoModal();
function appendInfoModal() {
  let displayBtn = document.querySelectorAll(".full-view-btn");

  displayBtn.forEach(btn =>
    btn.addEventListener("click", function () {
      let modal = animeInformationModalHTML();
      let container = document.getElementById("infoModalContainer");
      container.innerHTML = modal;
      closeInfoModal();
      shadow();
      scrollLock();
    })
  );
}
function closeInfoModal() {
  let closeBtn = document.querySelectorAll(".close-btn");
  let pageBody = document.getElementById("body");
  closeBtn.forEach(btn =>
    btn.addEventListener("click", function () {
      let container = document.getElementById("infoModalContainer");
      let modalShadow = document.getElementsByClassName("modal-shadow");

      container.innerHTML = "";
      pageBody.removeChild(modalShadow[0]);
      scrollLock();
    })
  );
}
function shadow() {
  let shadow = document.createElement("div");
  shadow.classList.add("modal-shadow");
  let pageBody = document.getElementById("body");
  pageBody.appendChild(shadow);
}
function scrollLock() {
  let body = document.getElementById("body");
  body.classList.toggle("scroll-lock");
}

function animeInformationModalHTML() {
  let rawTemplate = document.getElementById("animeInfoFull").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//Page overall functions
slider();

//Check if came from registration
window.onload = function () {
  var a = document.referrer;
  if (a == "http://anilibrary/registration/register.php") {
    document.getElementById("login-menu-button").click();
  }
};
loginDropMenu();
function loginDropMenu() {
  addClassOnClick("login-menu-button", "login-popup", "slide-down");
  delClassOnClick("cancel-button-log", "login-popup", "slide-down");
}

//Add to list
modalAddToList();
