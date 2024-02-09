function scrollLock() {
  let body = document.getElementById("body");
  body.classList.toggle("scroll-lock");
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
function closeAddingModal() {
  let cancelBtn = document.querySelector(".cancel-btn");
  let submitBtn = document.querySelector(".submit-btn");
  let modalContainer = document.querySelector(".anime-statistics-container");
  let deleteThis = modalContainer.children[0];

  cancelBtn.addEventListener("click", () => {
    deleteThis.remove();
    addAnimeCounter = 0;
  });
  submitBtn.addEventListener("click", () => {
    deleteThis.remove();
    addAnimeCounter = 0;
  });
}
function selectingAnime() {
  let selectBtns = document.querySelectorAll(".to-list-button-sel");
  let contSelected = document.getElementById("selected-container");

  selectBtns.forEach(el =>
    el.addEventListener("click", function (e) {
      let img = el.parentElement
        .querySelector(".anime-cover-add")
        .cloneNode(true);
      img.classList.remove("anime-cover-add");
      img.classList.add("s-anime-img");
      let anime = document.createElement("div");
      let del = document.createElement("p");
      del.classList.add("s-remove");
      del.innerText = "-";
      anime.classList.add("s-anime-box");

      anime.appendChild(img);
      anime.appendChild(del);
      console.log(anime);
      contSelected.appendChild(anime);
      removeSelectedAnime();
      counterSelectedAnime();
    })
  );
}
function removeSelectedAnime() {
  let delBtns = document.querySelectorAll(".s-remove");

  delBtns.forEach(el =>
    el.addEventListener("click", function (e) {
      let anime = el.parentElement;
      anime.remove();
      counterSelectedAnime();
    })
  );
}
function counterSelectedAnime() {
  let counter = document.getElementById("selected-counter");
  let number = document.getElementById("selected-container").childElementCount;

  counter.innerText = number;
}
function addAnimeModal() {
  let rawTemplate = document.getElementById("adding-anime-modal").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//Add to list
modalAddToList();

//Opening modals

let addAnimeCounter = 0;
let called = false;
let viewState = "default";
let counterManage = 0;
let mCounter = "";
mSelector();
function mSelector() {
  let lists = document.querySelectorAll(".list");
  console.log(lists);

  lists[0].addEventListener("click", function () {
    mCounter = "watched_list";
    mSwitch();
  });
  lists[1].addEventListener("click", function () {
    mCounter = "fav_list";
    mSwitch();
  });
  lists[2].addEventListener("click", function () {
    mCounter = "dropped_list";
    mSwitch();
  });
  lists[3].addEventListener("click", function () {
    mCounter = "planned_list";
    mSwitch();
  });
}
function clearModal() {
  let closeBtn = document.getElementsByClassName("close-btn");
  let cancelBtn = document.getElementsByClassName("cancel-btn");
  let pageBody = document.getElementById("body");
  let modalContainer = document.getElementById("modal-container");
  let modalShadow = document.getElementsByClassName("modal-shadow");
  if (closeBtn[0] == undefined) {
    cancelBtn[0].addEventListener("click", () => {
      modalContainer.innerHTML = "";
      modalShadow[0].style.opacity = 0;
      setTimeout(() => {
        pageBody.removeChild(modalShadow[0]);
      }, 150);

      scrollLock();
    });
  } else {
    closeBtn[0].addEventListener("click", () => {
      modalContainer.innerHTML = "";
      modalShadow[0].style.opacity = 0;
      setTimeout(() => {
        pageBody.removeChild(modalShadow[0]);
      }, 150);

      scrollLock();
    });
  }
}
function manageMode() {
  let anime = Array.from(
    document.querySelector(".custom-list-content").children
  );
  let btn = document.getElementById("mng-btn");

  if (called == false) {
    vis();
    called == true;
  }

  function vis() {
    toggleClassOnClick("mng-btn", "mng-btn", "mng-clicked");
  }

  btn.addEventListener("click", () => {
    switch (counterManage) {
      case 0:
        anime = Array.from(
          document.querySelector(".custom-list-content").children
        );
        anime.map(function (el) {
          el.classList.toggle("zoom-block");
          let lock = document.createElement("div");
          let lock_t = document.createElement("p");
          lock_t.innerText = "-";
          lock.classList.add("delete-btn");
          lock_t.classList.add("del-icon");
          lock.appendChild(lock_t);

          el.prepend(lock);
        });

        deleteConfirm();
        counterManage = 1;
        console.log(counterManage);
        console.log(anime);

        break;
      case 1:
        anime = Array.from(
          document.querySelector(".custom-list-content").children
        );
        anime.map(function (el) {
          let b = el.querySelector(".delete-btn");
          if (b != null) {
            b.remove();
          }
          el.classList.toggle("zoom-block");
        });

        counterManage = 0;
        console.log(counterManage);
        break;
    }
  });
}
function deleteConfirm() {
  let btns = document.querySelectorAll(".delete-btn");

  let shadow = document.createElement("div");
  shadow.classList.add("inner-shadow");

  let confirmWindow = document.createElement("div");
  let confirmText = document.createElement("p");

  let actions = document.createElement("div");
  let action1 = document.createElement("p");
  action1.innerText = "Yes";
  let action2 = document.createElement("p");
  action2.innerText = "No";

  confirmWindow.classList.add("confirm-window");
  confirmText.classList.add("confirm-header");
  actions.classList.add("actions-box-conf");
  action1.classList.add("action-conf-1");
  action2.classList.add("action-conf-2");

  actions.appendChild(action1);
  actions.appendChild(action2);
  confirmWindow.appendChild(confirmText);
  confirmWindow.appendChild(actions);

  Array.from(btns).forEach(el =>
    el.addEventListener("click", function (e) {
      let cont = e.currentTarget.parentElement;
      let title = "";

      switch (viewState) {
        case "default":
          title = e.currentTarget.parentElement
            .querySelector(".anime-title-box-ongoing")
            .querySelector(".anime-title-ongoing").innerText;
          break;
        case "list":
          title = e.currentTarget.parentElement
            .querySelector(".list-v-block")
            .querySelector(".anime-title-lv").innerText;
          break;
      }

      confirmText.innerText = "Are you sure you want to remove " + title + "?";

      if (cont.querySelector(".confirm-window") == null || undefined) {
        cont.appendChild(confirmWindow);
      }
      if (cont.querySelector(".inner-shadow") == null || undefined) {
        cont.appendChild(shadow);
      }

      setTimeout(() => {
        confirmWindow.style.opacity = 1;
      }, 0);
      setTimeout(() => {
        shadow.style.opacity = 0.2;
      }, 0);

      closeConfirmation(e);
    })
  );
}
function modalTransitionLists(container) {
  let e = container.querySelector(".anime-statistics-container");
  e.style.opacity = 1;
}
function defaultView() {
  let rawTemplate = document.getElementById("default-view").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function listView() {
  let rawTemplate = document.getElementById("list-view").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function addAnimeSelector() {
  let btn = document.getElementById("list-add-btn");

  btn.addEventListener("click", () => {
    addAnimeSwitch();
    selectingAnime();
    removeSelectedAnime();
    counterSelectedAnime();
  });
}
function addAnimeSwitch() {
  let contianer = document.querySelector(".anime-statistics-container");
  let modal = addAnimeModal();
  let modalDiv = document.createElement("div");
  switch (addAnimeCounter) {
    case 0:
      modalDiv.innerHTML = modal;
      contianer.prepend(modalDiv);
      closeAddingModal();
      addAnimeCounter = 1;

      break;
  }
}
function closeConfirmation(e) {
  let btn1 = e.currentTarget.parentElement
    .querySelector(".confirm-window")
    .querySelector(".actions-box-conf")
    .querySelector(".action-conf-1");
  let btn2 = e.currentTarget.parentElement
    .querySelector(".confirm-window")
    .querySelector(".actions-box-conf")
    .querySelector(".action-conf-2");
  let shadow = e.currentTarget.parentElement.querySelector(".inner-shadow");
  let modal = e.currentTarget.parentElement.querySelector(".confirm-window");

  btn1.addEventListener("click", () => {
    shadow.style.opacity = 0;
    setTimeout(() => {
      shadow.remove();
    }, 150);
    modal.style.opacity = 0;
    setTimeout(() => {
      modal.remove();
    }, 150);
  });
  btn2.addEventListener("click", () => {
    shadow.style.opacity = 0;
    setTimeout(() => {
      shadow.remove();
    }, 150);
    modal.style.opacity = 0;
    setTimeout(() => {
      modal.remove();
    }, 150);
  });
}
function viewMode() {
  let btn1 = document.querySelector(".list-view");
  let btn2 = document.querySelector(".normal-view");
  let mngBtn = document.getElementById("mng-btn");

  btn1.addEventListener("click", () => {
    viewState = "list";

    btn1.classList.add("this-view");
    btn2.classList.remove("this-view");
    viewSwitch();

    mngBtn.classList.remove("mng-clicked");
    counterManage = 0;
  });
  btn2.addEventListener("click", () => {
    viewState = "default";

    btn2.classList.add("this-view");
    btn1.classList.remove("this-view");
    viewSwitch();

    mngBtn.classList.remove("mng-clicked");
    counterManage = 0;
  });
}

function viewSwitch() {
  let cont = document.querySelector(".custom-list-content");
  console.log(cont);
  let lv = listView();
  let dv = defaultView();
  switch (viewState) {
    case "default":
      cont.innerHTML = dv;
      cont.classList.remove("block");
      break;
    case "list":
      cont.innerHTML = lv;
      cont.classList.add("block");
      break;
  }
}
function mSwitch() {
  let container = document.getElementById("modal-container");

  let lists = listsModal();

  switch (mCounter) {
    case "watched_list":
      container.innerHTML = lists;
      setTimeout(() => {
        modalTransitionLists(container);
      }, 0);
      shadow();
      scrollLock();
      clearModal();
      listsSwitchVisuals();
      viewSwitch();
      viewMode();
      manageMode();
      addAnimeSelector();
      break;
    case "fav_list":
      container.innerHTML = lists;
      setTimeout(() => {
        modalTransitionLists(container);
      }, 0);
      shadow();
      scrollLock();
      clearModal();
      listsSwitchVisuals();
      viewSwitch();
      viewMode();
      manageMode();
      addAnimeSelector();
      break;
    case "dropped_list":
      container.innerHTML = lists;
      setTimeout(() => {
        modalTransitionLists(container);
      }, 0);
      shadow();
      scrollLock();
      clearModal();
      listsSwitchVisuals();
      viewSwitch();
      viewMode();
      manageMode();
      addAnimeSelector();
      break;
    case "planned_list":
      container.innerHTML = lists;
      setTimeout(() => {
        modalTransitionLists(container);
      }, 0);
      shadow();
      scrollLock();
      clearModal();
      listsSwitchVisuals();
      viewSwitch();
      viewMode();
      manageMode();
      addAnimeSelector();

      break;
  }
}
mSwitch();

function listsSwitchVisuals() {
  let watched = document.querySelectorAll(".list-switch")[0];
  let fav = document.querySelectorAll(".list-switch")[1];
  let drop = document.querySelectorAll(".list-switch")[2];
  let planned = document.querySelectorAll(".list-switch")[3];

  let customLists = document.querySelectorAll(".list-switch-c");

  customLists.forEach(el =>
    el.addEventListener("click", function () {
      if (!el.classList.contains("custom-locked")) {
        Array.from(customLists).map(elem => elem.classList.remove("custom"));
        el.classList.toggle("custom");
        fav.classList.remove("favorites-m");
        watched.classList.remove("watched");
        drop.classList.remove("dropped");
        planned.classList.remove("planned");
      }
    })
  );
  watched.addEventListener("click", function () {
    watched.classList.toggle("watched");
    fav.classList.remove("favorites-m");
    drop.classList.remove("dropped");
    planned.classList.remove("planned");
    Array.from(customLists).map(elem => elem.classList.remove("custom"));
  });
  fav.addEventListener("click", function () {
    fav.classList.toggle("favorites-m");
    watched.classList.remove("watched");
    drop.classList.remove("dropped");
    planned.classList.remove("planned");
    Array.from(customLists).map(elem => elem.classList.remove("custom"));
  });
  drop.addEventListener("click", function () {
    drop.classList.toggle("dropped");
    watched.classList.remove("watched");
    fav.classList.remove("favorites-m");
    planned.classList.remove("planned");
    Array.from(customLists).map(elem => elem.classList.remove("custom"));
  });
  planned.addEventListener("click", function () {
    planned.classList.toggle("planned");
    watched.classList.remove("watched");
    drop.classList.remove("dropped");
    fav.classList.remove("favorites-m");
    Array.from(customLists).map(elem => elem.classList.remove("custom"));
  });

  switch (mCounter) {
    case "watched_list":
      watched.classList.toggle("watched");
      break;
    case "fav_list":
      fav.classList.toggle("favorites-m");
      break;
    case "dropped_list":
      drop.classList.toggle("dropped");
      break;
    case "planned_list":
      planned.classList.toggle("planned");
      break;
  }
}
function listsModal() {
  let rawTemplate = document.getElementById("lists-modal").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
