// Page Switch

let pCounter = "comments";
pSelector();
function pSelector() {
  let commentsBtn = document.getElementById("comments-btn");
  let communityBtn = document.getElementById("community-btn");

  commentsBtn.addEventListener("click", function () {
    pCounter = "comments";
    pSwitch();
  });
  communityBtn.addEventListener("click", function () {
    pCounter = "community";
    pSwitch();
    activateSortCom();
    activatePosts();
    //Display user tooltip
    displayOnHoverAll(".post-author-text", ".post-user-tooltip");
  });
}

function pSwitch() {
  let container = document.getElementById("ref-wrap");

  let comments = commentsP();
  let community = communityP();

  switch (pCounter) {
    case "comments":
      container.innerHTML = comments;
      activateComments();
      break;
    case "community":
      container.innerHTML = community;
      break;
  }
}
pSwitch();

pSwitchVisuals();
function pSwitchVisuals() {
  let btnComments = document.getElementById("comments-btn");
  let btnCommunity = document.getElementById("community-btn");

  let btnIcon = document.getElementById("icon-c");
  let c1 = document.getElementById("circle1");
  let c2 = document.getElementById("circle2");
  let c3 = document.getElementById("circle3");

  btnComments.addEventListener("click", () => {
    btnComments.classList.add("this-c");
    btnCommunity.classList.remove("this-c");

    btnIcon.classList.add("this-com");
  });
  btnCommunity.addEventListener("click", e => {
    btnComments.classList.remove("this-c");
    btnCommunity.classList.add("this-c");

    btnIcon.classList.remove("this-com");
  });
}

activateSortCom();

function commentsP() {
  let rawTemplate = document.getElementById("comments-p").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function communityP() {
  let rawTemplate = document.getElementById("community-p").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//General visuals

//Comments

function activateComments() {
  //Open replies

  postingComments();

  openingReplies();
  replyOpen();
  countReplies();

  //Vote comment
  toggleClassOnClickAll(".comment-up", ".comment-up", "comment-voted-up");
  toggleClassOnClickAll(
    ".comment-up",
    ".comment-rating-value",
    "comment-voted-value-up"
  );
  delClassOnClickAll(".comment-up", ".comment-down", "comment-voted-down");
  delClassOnClickAll(
    ".comment-up",
    ".comment-rating-value",
    "comment-voted-value-down"
  );

  toggleClassOnClickAll(".comment-down", ".comment-down", "comment-voted-down");
  toggleClassOnClickAll(
    ".comment-down",
    ".comment-rating-value",
    "comment-voted-value-down"
  );
  delClassOnClickAll(".comment-down", ".comment-up", "comment-voted-up");
  delClassOnClickAll(
    ".comment-down",
    ".comment-rating-value",
    "comment-voted-value-up"
  );
}

function postingComments() {
  let btn = document.querySelector(".main-comment");
  console.log(btn);
  btn.addEventListener("click", () => {
    if (checkContents(btn)) {
      addingComment();

      openingReplies();
      replyOpen();
      countReplies();

      clearCommentArea(btn);
    } else {
      console.log("f");
    }
  });
}

function addingComment() {
  let cont = document.querySelector(".comments-container");
  let text = document.querySelector(".main-ta").value;

  let newComment = document.createElement("div");
  let newShell = commentHTML();
  newComment.innerHTML = newShell;
  let textPos = newComment
    .querySelector(".comment-box")
    .querySelector(".comment-content")
    .querySelector(".comment-text");
  textPos.innerHTML = text;
  console.log(textPos);

  cont.prepend(newComment);
}

function checkContents(btn) {
  let text = btn.parentElement.parentElement.querySelector(".main-ta");

  if (text.value !== "") {
    return true;
  } else {
    return false;
  }
}
function clearCommentArea(btn) {
  let text = btn.parentElement.parentElement.querySelector(".main-ta");
  text.value = "";
}
function commentHTML() {
  let rawTemplate = document.getElementById("commentHTML").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//Replies

function openingReplies() {
  let openRepliesBtns = document.querySelectorAll(".replies-btn");
  let openStatus = "close";
  openRepliesBtns.forEach(el =>
    el.addEventListener("click", function () {
      console.log(el);
      var clickedElement = el.parentElement.parentElement;
      let hiddenElement = clickedElement.querySelector(".replies-container");

      console.log(hiddenElement);
      switch (openStatus) {
        case "close":
          hiddenElement.style.display = "block";
          openStatus = "open";
          break;
        case "open":
          hiddenElement.style.display = "none";
          openStatus = "close";
          break;
      }
    })
  );
}
//New Reply

function replyOpen() {
  let replyState = "close";
  let clickOn = document.querySelectorAll(".reply-btn");
  console.log(clickOn);
  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      var clickedElement =
        e.currentTarget.parentElement.parentElement.parentElement;
      let hiddenElement = clickedElement.querySelector(".new-reply-container");
      let newCommentBox = newCommentHTML();

      switch (replyState) {
        case "close":
          hiddenElement.innerHTML = newCommentBox;
          hiddenElement.style.marginTop = "10px";
          replyState = "open";
          break;
        case "open":
          hiddenElement.innerHTML = "";
          hiddenElement.style.marginTop = "0px";
          replyState = "close";
          break;
      }

      clickOn = document.querySelectorAll(".reply-btn"); //Selects replybtns of a new reply
      console.log(clickOn);

      let commentBtn = hiddenElement
        .querySelector(".reply-new-comment-box")
        .querySelector(".comment-panel")
        .querySelector(".reply-comment"); //Comment btn of a new Comment window

      commentBtn.addEventListener("click", e => addReply(e));

      console.log(openRepliesBtns);
    })
  );
}

function addReply(e) {
  let currentTarget = e.currentTarget;
  let text = currentTarget.parentElement.parentElement.querySelector(
    ".reply-comment-text-area"
  ).value;

  let newReply = document.createElement("div");
  newReply.innerHTML = addCommentHTML();

  //new reply text
  let newReplyText = newReply
    .querySelector(".reply-box")
    .querySelector(".reply-content")
    .querySelector(".comment-text");
  newReplyText.innerText = text;

  let containerReplies =
    currentTarget.parentElement.parentElement.parentElement.parentElement.querySelector(
      ".replies-container"
    ); //Container with replies

  containerReplies.prepend(newReply);

  let showRepliesBtn =
    currentTarget.parentElement.parentElement.parentElement.parentElement
      .querySelector(".reply-actions")
      .querySelector(".replies-btn");
  let newReplyWindow = currentTarget.parentElement.parentElement.parentElement;

  if (containerReplies.style.display == "none") {
    showRepliesBtn.click();
  }
  if (!(newReplyWindow.innerHTML = "")) {
    newReplyWindow.innerHTML = "";
    newReplyWindow.style.marginTop = "0px";
  }
  replyOpen();
  countPlus(showRepliesBtn);
  countReplies();
  openRepliesBtns = document.querySelectorAll(".replies-btn");
  openingReplies();
}
function countReplies() {
  let counter = document.querySelectorAll(".replies-val");

  Array.from(counter).map(function (e) {
    let currentCounter = e.parentElement;

    let elementsCounter =
      e.parentElement.parentElement.parentElement.querySelector(
        ".replies-container"
      ).children.length;
    e.textContent = elementsCounter;

    if (e.textContent == 0) {
      currentCounter.style.display = "none";
    } else {
      currentCounter.style.display = "block";
    }
  });
}
function countPlus(elem) {
  let counter = elem.querySelector(".replies-val");

  counter.textContent++;
}

function newCommentHTML() {
  let rawTemplate = document.getElementById("newComment").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}
function addCommentHTML() {
  let rawTemplate = document.getElementById("addComment").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//Comment Actions

var text = document.querySelector(".main-ta");
let bold = document.querySelectorAll(".bold");
let italic = document.querySelectorAll(".italic");
let spoiler = document.querySelectorAll(".spoiler-btn");
bold_Maker();
function bold_Maker() {
  bold.forEach(el =>
    el.addEventListener("click", () => {
      if (text.selectionStart != undefined) {
        var startPos = text.selectionStart;
        var endPos = text.selectionEnd;
        var selectedText = text.value.substring(startPos, endPos);

        if (selectedText) {
          var v = text.value.substring(0, startPos);
          v += "<b>" + selectedText + "</b>";
          v += text.value.substring(endPos);

          text.value = v;
        }
      }
    })
  );
}
italic_Maker();
function italic_Maker() {
  italic.forEach(el =>
    el.addEventListener("click", () => {
      if (text.selectionStart != undefined) {
        var startPos = text.selectionStart;
        var endPos = text.selectionEnd;
        var selectedText = text.value.substring(startPos, endPos);

        if (selectedText) {
          var v = text.value.substring(0, startPos);
          v += "<i>" + selectedText + "</i>";
          v += text.value.substring(endPos);

          text.value = v;
        }
      }
    })
  );
}
spoiler_Maker();
function spoiler_Maker() {
  spoiler.forEach(el =>
    el.addEventListener("click", () => {
      if (text.selectionStart != undefined) {
        var startPos = text.selectionStart;
        var endPos = text.selectionEnd;
        var selectedText = text.value.substring(startPos, endPos);

        if (selectedText) {
          var v = text.value.substring(0, startPos);
          v += '<span class="spoiler-t">' + selectedText + "</span>";
          v += text.value.substring(endPos);

          text.value = v;
        }
      }
    })
  );
}

//Add to list
modalAddToList();

//Posts voting
function activatePosts() {
  toggleClassOnClickAll(".post-up", ".post-up", "post-clicked-up");
  toggleClassOnClickAll(".post-up", ".post-rating-value", "score-clicked-up");
  delClassOnClickAll(".post-up", ".post-down", "post-clicked-down");
  delClassOnClickAll(".post-up", ".post-rating-value", "score-clicked-down");

  toggleClassOnClickAll(".post-down", ".post-down", "post-clicked-down");
  toggleClassOnClickAll(
    ".post-down",
    ".post-rating-value",
    "score-clicked-down"
  );
  delClassOnClickAll(".post-down", ".post-up", "post-clicked-up");
  delClassOnClickAll(".post-down", ".post-rating-value", "score-clicked-up");
}

//Posts latest/trending

function activateSortCom() {
  if (pCounter == "community") {
    communitySort();
  }
}
function communitySort() {
  let latestBtn = document.getElementById("sort-l");
  let iconL = document.getElementById("sort-l-i");
  let trendingBtn = document.getElementById("sort-t");
  let iconT = document.getElementById("sort-t-i");

  latestBtn.addEventListener("click", () => {
    latestBtn.classList.add("sort-selected");
    iconL.classList.add("icon-selected");

    trendingBtn.classList.remove("sort-selected");
    iconT.classList.remove("icon-selected");
  });
  trendingBtn.addEventListener("click", () => {
    trendingBtn.classList.add("sort-selected");
    iconT.classList.add("icon-selected");

    latestBtn.classList.remove("sort-selected");
    iconL.classList.remove("icon-selected");
  });
}

//Switch Pages Visuals
pageVisualSwitch(".page-number-box");
function pageVisualSwitch(elementsClass) {
  let clickElements = Array.from(document.querySelectorAll(elementsClass));

  let specificElement = clickElements.forEach(el =>
    el.addEventListener("click", function (e) {
      let currentT = e.currentTarget;

      clickElements.map(function (elem) {
        if (elem == currentT) {
          let child = elem.children;
          child[0].classList.add("current-page");
          child[1].classList.add("current-underbar");
        } else {
          let child = elem.children;
          child[0].classList.remove("current-page");
          child[1].classList.remove("current-underbar");
        }
      });

      return currentT;
    })
  );
}

//Switch Reviews Sorting
pageSortSwitch(".sort-time-s");
function pageSortSwitch(elementsClass) {
  let clickElements = Array.from(document.querySelectorAll(elementsClass));
  let otherElement = document.querySelector(".sort-time");

  let specificElement = clickElements.forEach(el =>
    el.addEventListener("click", function (e) {
      let currentT = e.currentTarget;

      clickElements.map(function (elem) {
        if (elem == currentT) {
          elem.classList.add("selected");

          barReset();
          visualsReset(".page-number-box");
          revCounter = 1;
          revSwitchModal();
        } else {
          elem.classList.remove("selected");
        }
      });

      return currentT;
    })
  );
}
function visualsReset(elementsClass) {
  let clickElements = Array.from(document.querySelectorAll(elementsClass));

  let children1 = clickElements[0].children;
  children1[0].classList.add("current-page");
  children1[1].classList.add("current-underbar");

  let otherChildren = clickElements.splice(1);
  otherChildren.map(function (el) {
    let elChildren = el.children;
    elChildren[0].classList.remove("current-page");
    elChildren[1].classList.remove("current-underbar");
  });
}
function barReset() {
  let box1 = initial(1);
  let btn1 = box1;
  let box2 = initial(2);
  let btn2 = box2;
  let box3 = initial(3);
  let btn3 = box3;
  let box4 = initial(4);
  let btn4 = box4;
  let container = document.getElementById("switches-wrap");

  container.innerHTML = "";
  container.appendChild(box1);
  container.appendChild(box2);
  container.appendChild(box3);
  container.appendChild(box4);
  btnsArray = [btn1, btn2, btn3, btn4];
  console.log(btnsArray);
  revSelector();
  switchBtns();
  pageVisualSwitch(".page-number-box");

  function initial(i) {
    let box1 = document.createElement("div");
    let p1 = document.createElement("p1");
    let u1 = document.createElement("div");

    p1.classList.add("page-number-value");
    p1.innerText = i;
    box1.classList.add("page-number-box");
    box1.id = "r" + i;
    u1.classList.add("page-underbar");
    box1.appendChild(p1);
    box1.appendChild(u1);
    return box1;
  }
}

//Open full info
openInfo();
function openInfo() {
  let container = document.getElementById("info-cont");
  let btn = document.getElementById("info-btn");

  let status = 0;

  btn.addEventListener("click", () => {
    container.classList.toggle("h-unlock");
    if (status == 0) {
      btn.innerText = "Hide";
      status = 1;
    } else if (status == 1) {
      btn.innerText = "More Info ⯆";
      status = 0;
    }
  });
}

//Open lyrics
openLyrics();
function openLyrics() {
  let btns = document.querySelectorAll(".lyrics-btn");

  btns.forEach(el =>
    el.addEventListener("click", e => {
      let container =
        e.currentTarget.parentElement.getElementsByClassName("lyrics-box");
      container[0].classList.toggle("l-unlock");
    })
  );
}

//Reviews
let btn1 = document.getElementById("r1");
let btn2 = document.getElementById("r2");
let btn3 = document.getElementById("r3");
let btn4 = document.getElementById("r4");

let btnsArray = [btn1, btn2, btn3, btn4];
revSelector();
let revCounter = 1;

switchBtns();
function switchBtns() {
  btnsArray[btnsArray.length - 1].addEventListener("click", generateBtnsPos);
  btnsArray[btnsArray.length - 2].removeEventListener("click", generateBtnsPos);
  btnsArray[0].addEventListener("click", generateBtnsNeg);
  btnsArray[1].removeEventListener("click", generateBtnsNeg);
}

function generateBtnsPos() {
  let container = document.getElementById("switches-wrap");

  let newBtn = document.createElement("div");
  newBtn.classList.add("page-number-box");
  let newP = document.createElement("p");
  newP.classList.add("page-number-value");
  let newUnderbar = document.createElement("div");
  newUnderbar.classList.add("page-underbar");

  let newID = Number(btnsArray[3].id.slice(1));
  newID++;

  let text = document.createTextNode(String(newID));
  newP.appendChild(text);
  newBtn.appendChild(newP);
  newBtn.appendChild(newUnderbar);
  newBtn.id = "r" + newID;

  if (newID < content.length) {
    container.appendChild(newBtn); //Add new element on page
    container.removeChild(btnsArray[0]); //Remove 1 element on page

    btnsArray.shift(); //Remove 1 element of an array
    btnsArray.push(newBtn); //Add new element to array
  }

  revSelector();
  pageVisualSwitch(".page-number-box");
  switchBtns();
}
function generateBtnsNeg() {
  let container = document.getElementById("switches-wrap");

  let newBtn = document.createElement("div");
  newBtn.classList.add("page-number-box");
  let newP = document.createElement("p");
  newP.classList.add("page-number-value");
  let newUnderbar = document.createElement("div");
  newUnderbar.classList.add("page-underbar");

  let newID = Number(btnsArray[0].id.slice(1));
  newID--;

  let text = document.createTextNode(String(newID));
  newP.appendChild(text);
  newBtn.appendChild(newP);
  newBtn.appendChild(newUnderbar);
  newBtn.id = "r" + newID;

  if (newID > 0) {
    container.prepend(newBtn); //Add new element on page
    container.removeChild(btnsArray[3]); //Remove 1 element on page

    btnsArray.pop(); //Remove last element of an array
    btnsArray.unshift(newBtn); //Add new element to the array from the front
  }

  revSelector();
  pageVisualSwitch(".page-number-box");
  switchBtns();
}

function revSelector() {
  for (i = 1; i < btnsArray.length + 1; i++) {
    let index = i;
    let btn = btnsArray[i - 1];

    btn.addEventListener("click", function () {
      revCounter = Number(btn.id.slice(1));
      //console.log(revCounter);

      revSwitchModal();
    });
  }
}

let content = [
  1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
];
function revSwitchModal() {
  let container = document.getElementById("reviews-container");

  for (i = 1; i < revCounter + 1; i++) {
    container.innerHTML = content[i - 1];
  }
}
lastNum();
function lastNum() {
  let container = document.getElementById("reviews-container");

  let outer = document.getElementById("switches-outer");
  let btnL = document.createElement("div");
  let pL = document.createElement("p");
  let uL = document.createElement("div");
  btnL.classList.add("page-number-box");
  btnL.classList.add("last-p");
  pL.classList.add("page-number-value");
  uL.classList.add("page-underbar");
  pL.innerText = content[content.length - 1];
  btnL.appendChild(pL);
  btnL.appendChild(uL);

  outer.appendChild(btnL);

  btnL.addEventListener("click", () => {
    container.innerHTML = content[19];
  });
  revSelector();
  pageVisualSwitch(".page-number-box");
}

//Modals

let modalCounter;
modalSelector();
function modalSelector() {
  let watchedBtn = document.getElementById("watched");
  let favoritesBtn = document.getElementById("favorites");
  let droppedBtn = document.getElementById("dropped");

  watchedBtn.addEventListener("click", function () {
    modalCounter = "watched";
    modalSwitch();
  });
  favoritesBtn.addEventListener("click", function () {
    modalCounter = "favorites";
    modalSwitch();
  });
  droppedBtn.addEventListener("click", function () {
    modalCounter = "dropped";
    modalSwitch();
  });
}

function modalSwitch() {
  let container = document.getElementById("modal-container");

  let views = viewsHTML();

  switch (modalCounter) {
    case "watched":
      container.innerHTML = views;
      scrollLock();
      shadow();
      viewList();
      clearModal();
      break;
    case "favorites":
      container.innerHTML = views;
      scrollLock();
      shadow();
      viewList();
      clearModal();
      break;
    case "dropped":
      container.innerHTML = views;
      scrollLock();
      shadow();
      viewList();
      clearModal();
      break;
  }
}

function shadow() {
  let shadow = document.createElement("div");
  shadow.classList.add("modal-shadow");
  document.getElementById("body").appendChild(shadow);
}
function scrollLock() {
  let body = document.getElementById("body");
  body.classList.toggle("scroll-lock");
}
function clearModal() {
  let closeBtn = document.getElementsByClassName("close-btn");
  let pageBody = document.getElementById("body");
  let modalContainer = document.getElementById("modal-container");
  let modalShadow = document.getElementsByClassName("modal-shadow");
  closeBtn[0].addEventListener("click", () => {
    modalContainer.innerHTML = "";
    pageBody.removeChild(modalShadow[0]);
    scrollLock();
  });
}

function viewList() {
  let viewsSelector = document.getElementById("lists-selector");
  let watched = viewsSelector.children[0];
  let favorites = viewsSelector.children[1];
  let dropped = viewsSelector.children[2];

  switch (modalCounter) {
    case "watched":
      watched.classList.add("watched");
      favorites.classList.remove("favorites");
      dropped.classList.remove("dropped");
      break;
    case "favorites":
      watched.classList.remove("watched");
      favorites.classList.add("favorites");
      dropped.classList.remove("dropped");
      break;
    case "dropped":
      watched.classList.remove("watched");
      favorites.classList.remove("favorites");
      dropped.classList.add("dropped");
      break;
  }

  watched.addEventListener("click", () => {
    watched.classList.add("watched");
    favorites.classList.remove("favorites");
    dropped.classList.remove("dropped");
  });
  favorites.addEventListener("click", () => {
    watched.classList.remove("watched");
    favorites.classList.add("favorites");
    dropped.classList.remove("dropped");
  });
  dropped.addEventListener("click", () => {
    watched.classList.remove("watched");
    favorites.classList.remove("favorites");
    dropped.classList.add("dropped");
  });
}

function viewsHTML() {
  let rawTemplate = document.getElementById("modalViews").innerHTML;
  let compiledTemplate = Handlebars.compile(rawTemplate);
  let ourGeneratedHTML = compiledTemplate();

  return ourGeneratedHTML;
}

//Information full modal
appendInfoModal();
function appendInfoModal() {
  let displayBtn = document.querySelectorAll(".full-view-btn");
  console.log(displayBtn);

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
