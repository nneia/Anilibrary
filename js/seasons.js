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
toggleClassOnClickAllVotes(".post-up", ".vote-value", "score-clicked-up");
delClassOnClickAll(".post-up", ".post-down", "post-clicked-down");
delClassOnClickAll(".post-up", ".vote-value", "score-clicked-down");

toggleClassOnClickAllVotes(".post-down", ".post-down", "post-clicked-down");
toggleClassOnClickAllVotes(".post-down", ".vote-value", "score-clicked-down");
delClassOnClickAll(".post-down", ".post-up", "post-clicked-up");
delClassOnClickAll(".post-down", ".vote-value", "score-clicked-up");

//Add to list
modalAddToList();

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
