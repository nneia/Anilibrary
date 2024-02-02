function focus(clickThis, focThis, focThis2) {
  let btn = document.getElementById(clickThis);
  let element1 = document.getElementById(focThis);
  let element2 = document.getElementById(focThis2);

  btn.addEventListener("focusin", () => {
    element1.style.border = "1px solid #b2b2b2";
    element2.style.borderTop = "1px solid #b2b2b2";
  });
  btn.addEventListener("focusout", () => {
    element1.style.border = "1px solid #ddd";
    element2.style.borderTop = "1px solid #ddd";
  });
}
function toggleOnClickBlock(clickingObjId, displayObj) {
  let status = 1;
  document.getElementById(clickingObjId).onclick = function () {
    if (status == 1) {
      document.getElementById(displayObj).style.display = "block";
      status = 0;
    } else if (status == 0) {
      document.getElementById(displayObj).style.display = "none";
      status = 1;
    }

    return status;
  };

  /*document.body.addEventListener('click', e=>{
		displayObj.style.display = 'none';
	});
	displayObj.addEventListener('click', e=>{
		e.stopImmediatePropagation();
	});*/
}

function toggleTextOnClick(
  clickingObjId,
  changeTextObj,
  newText,
  oldText,
  rotate
) {
  let clickOn = document.getElementById(clickingObjId);
  let changeObj = document.getElementById(changeTextObj);
  let rotateObj = document.getElementById(rotate);

  let status = 1;

  clickOn.addEventListener("click", function () {
    if (status == 1) {
      changeObj.innerText = newText;

      status = 0;
    } else if (status == 0) {
      changeObj.innerText = oldText;

      status = 1;
    }
  });
}
function toggleOnClickFlex(clickingObjId, displayObj) {
  let status = 1;
  document.getElementById(clickingObjId).onclick = function () {
    if (status == 1) {
      document.getElementById(displayObj).style.display = "flex";
      status = 0;
    } else if (status == 0) {
      document.getElementById(displayObj).style.display = "none";
      status = 1;
    }

    return status;
  };
}

function toggleClassOnHover(hoverObjId, displayObj, addClass) {
  let hoverObjIds = document.querySelectorAll(hoverObjId);
  let displayObjs = Array.from(document.querySelectorAll(displayObj));

  hoverObjIds.addEventListener("mouseover", () => {
    displayObjs.forEach(el => el.classList.add(addClass));
  });
}
function displayOnHover(hoverObjId, displayObj) {
  document.getElementById(hoverObjId).onmouseover = function () {
    document.querySelectorAll(displayObj).style.display = "block";
  };
  document.getElementById(hoverObjId).onmouseout = function () {
    document.getElementById(displayObj).style.display = "none";
  };
}
function displayOnHoverAll(hoverObjIds, displayObj) {
  let hovOn = document.querySelectorAll(hoverObjIds);

  Array.from(hovOn).forEach(el =>
    el.addEventListener("mouseover", function (e) {
      var clickedElement = e.currentTarget.parentElement;
      let hiddenElement = clickedElement.querySelector(displayObj);

      hiddenElement.style.opacity = "0";
      hiddenElement.style.display = "block";
      setTimeout(function () {
        hiddenElement.style.opacity = "1";
      }, 650);
    })
  );
  Array.from(hovOn).forEach(el =>
    el.addEventListener("mouseleave", function (e) {
      var clickedElement = e.currentTarget.parentElement;
      console.log(clickedElement);
      let hiddenElement = clickedElement.querySelector(displayObj);

      hiddenElement.style.display = "none";
    })
  );
}

function toggleClassOnClick(clickingObjId, addToElem, classAdd) {
  let clickOn = document.getElementById(clickingObjId);
  let addTo = document.getElementById(addToElem);
  let delFrom = document.getElementById(addToElem);

  clickOn.addEventListener("click", function () {
    addTo.classList.toggle(classAdd);
  });
}
function toggleClassOnClickAd(clickingObjId, addToElem, classAdd) {
  let clickOn = document.getElementById(clickingObjId);
  let addTo = document.querySelector(addToElem);
  let delFrom = document.getElementById(addToElem);

  clickOn.addEventListener("click", function () {
    addTo.classList.toggle(classAdd);
  });
}

function addClassOnClick(clickingObjId, addToElem, addClass) {
  let clickOn = document.getElementById(clickingObjId);
  let addTo = document.getElementById(addToElem);

  clickOn.addEventListener("click", function () {
    addTo.classList.add(addClass);
  });
}

function delClassOnClick(clickingObjId, deleteFrom, classDel) {
  let clickOn = document.getElementById(clickingObjId);
  let delFrom = document.getElementById(deleteFrom);

  clickOn.addEventListener("click", function () {
    delFrom.classList.remove(classDel);
  });
}
function returnToTheTop(clickingObjId) {
  let clickOn = document.getElementById(clickingObjId);
  clickOn.addEventListener("click", function () {
    window.scrollTo(0, 0);
  });
}
function returnToTopElement(clickingObjId, element, marginTop) {
  let clickOn = document.getElementById(clickingObjId);
  let topElement = document.getElementById(element);

  clickOn.addEventListener("click", function () {
    window.scrollTo(
      0,
      topElement.getBoundingClientRect().top -
        marginTop -
        document.documentElement.getBoundingClientRect().top
    );
  });
}
function addStyle(clickingObj, addTo, styles) {
  let clickOn = document.getElementById(clickingObj);
  let addToElem = document.querySelectorAll(addTo);

  let status = 1;
  clickOn.onclick = function () {
    if (status == 1) {
      addToElem.forEach(el => el.classList.add(styles));
      status = 0;
    } else if (status == 0) {
      addToElem.forEach(el => el.classList.remove(styles));
      status = 1;
    }
  };
}

function scrollHook(offsetValue, top1, top2, element1, element2) {
  let thisElement1 = document.getElementById(element1);
  let thisElement2 = document.getElementById(element2);
  window.addEventListener("scroll", function () {
    if (window.pageYOffset > offsetValue) {
      thisElement1.style.position = "sticky";
      thisElement2.style.position = "sticky";
      thisElement1.style.position = "-webkit-sticky";
      thisElement2.style.position = "-webkit-sticky";

      thisElement1.style.top = top1;
      thisElement2.style.top = top2;
    } else if (window.pageYOffset < offsetValue) {
      thisElement1.style.position = "relative";
      thisElement2.style.position = "relative";

      thisElement1.style.top = "0";
      thisElement2.style.top = "0";
    }
  });
}

function createElementOnClick(
  clickingObjId,
  parentElem,
  newelem,
  asignClass,
  id
) {
  let switchClick = document.getElementById(clickingObjId);
  let parent = document.getElementById(parentElem);

  switchClick.addEventListener("click", function () {
    let elem = document.createElement("div");
    elem.classList.add(asignClass);
    elem.setAttribute("id", id);
    parent.appendChild(elem);
  });
}
function popUpOnHov(hoverObjId) {
  let popUpBody = document.createElement("div");
  let p;
}

function deleteElementOnClick(clickingObjId, elemDelete) {
  let switchClick = document.getElementById(clickingObjId);
  let delThis = document.getElementById(elemDelete);

  switchClick.addEventListener("click", function () {
    delThis.remove();
  });
}

function addTextOnClick(clickingObjId, to, text) {
  let switchClick = document.getElementById(clickingObjId);
  let addTo = document.getElementById(to);
  switchClick.addEventListener("click", function () {
    addTo.textContent += text;
  });
}

function addReplyAll(clickingObjs, textArea, nickname) {
  let switchClick = document.querySelectorAll(clickingObjs);
  let textBlock = document.getElementById(textArea);
  let status = 1;
  let span = document.createElement("span");
  let p = document.createElement("p");
  p.classList.add("content");
  p.setAttribute("id", "reply-content");
  span.classList.add("reply-active");

  if (status == 1) {
    Array.from(switchClick).forEach(el =>
      el.addEventListener("click", function () {
        span.innerText = `@${nickname} `;
        textBlock.prepend(span);
        textBlock.append(p);
        status = 1;
      })
    );
  }
}

function addClassOnClickAll(clickingObjs, addToElem, addClass) {
  let clickOn = document.querySelectorAll(clickingObjs);
  let addTo = document.getElementById(addToElem);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function () {
      addTo.classList.add(addClass);
    })
  );
}

function delClassOnClickAll(clickingObjIds, addToElems, classAdd) {
  let clickOn = document.querySelectorAll(clickingObjIds);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      var clickedElement = e.currentTarget.parentElement;
      let hiddenElement = clickedElement.querySelector(addToElems);

      hiddenElement.classList.remove(classAdd);
    })
  );
}

function toggleClassOnClickAll(clickingObjIds, addToElems, classAdd) {
  let clickOn = document.querySelectorAll(clickingObjIds);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      var clickedElement =
        e.currentTarget.parentElement.parentElement.parentElement;
      let hiddenElement = clickedElement.querySelector(addToElems);
      hiddenElement.classList.toggle(classAdd);
    })
  );
}

function toggleClassOnClickAllSelf(clickingObjIds, classAdd) {
  let clickOn = document.querySelectorAll(clickingObjIds);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      var clickedElement = e.currentTarget;

      clickedElement.classList.toggle(classAdd);
    })
  );
}

function addClassModal(clickingObjId, addToElem, classAdd) {
  let clickOn = document.querySelectorAll(clickingObjId);
  let hiddenElement = document.getElementById(addToElem);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      hiddenElement.classList.add(classAdd);
    })
  );
}
function delClassModal(clickingObjId, addToElem, classAdd) {
  let clickOn = document.querySelectorAll(clickingObjId);
  let hiddenElement = document.getElementById(addToElem);

  Array.from(clickOn).forEach(el =>
    el.addEventListener("click", function (e) {
      hiddenElement.classList.remove(classAdd);
    })
  );
}

function linkBack() {
  window.history.back(1);
}
function linkRef(url) {
  window.link(url);
}
function slideDown() {
  let status = document.querySelector("#menu-page").clientHeight;
  console.log(status);
}
function modalAddToList() {
  //List modal open/close
  slideDown();
  addClassOnClickAll(".to-list-button", "list-modal-shadow", "shade-appear");
  addClassOnClickAll(".to-list-button", "list-modal-shadow", "block");
  addClassOnClickAll(".to-list-button", "list-modal-top", "slide-down");
  addClassOnClickAll(".to-list-button", "list-modal", "slide-down");
  addClassOnClickAll(".to-list-button-l", "list-modal-shadow", "shade-appear");
  addClassOnClickAll(".to-list-button-l", "list-modal-shadow", "block");
  addClassOnClickAll(".to-list-button-l", "list-modal-top", "slide-down");
  addClassOnClickAll(".to-list-button-l", "list-modal", "slide-down");

  delClassOnClick("cancel-button-list", "list-modal-shadow", "shade-appear");
  delClassOnClick("cancel-button-list", "list-modal-shadow", "block");
  delClassOnClick("cancel-button-list", "list-modal-top", "slide-down");
  delClassOnClick("cancel-button-list", "list-modal", "slide-down");

  //Add to lists modal

  //reset on close
  delClassOnClick("cancel-button-list", "label-1", "checked");
  delClassOnClick("cancel-button-list", "list-button-1", "list-button-slide");
  delClassOnClick("cancel-button-list", "list-wrapper-1", "wrapper-selected");
  delClassOnClick("cancel-button-list", "label-2", "checked");
  delClassOnClick("cancel-button-list", "list-button-2", "list-button-slide");
  delClassOnClick("cancel-button-list", "list-wrapper-2", "wrapper-selected");
  delClassOnClick("cancel-button-list", "label-3", "checked");
  delClassOnClick("cancel-button-list", "list-button-3", "list-button-slide");
  delClassOnClick("cancel-button-list", "list-wrapper-3", "wrapper-selected");

  //1
  toggleClassOnClick("list-box-1", "label-1", "checked");
  toggleClassOnClick("list-box-1", "list-button-1", "list-button-slide");
  toggleClassOnClick("list-box-1", "list-wrapper-1", "wrapper-selected");
  delClassOnClick("list-box-1", "label-2", "checked");
  delClassOnClick("list-box-1", "list-button-2", "list-button-slide");
  delClassOnClick("list-box-1", "list-wrapper-2", "wrapper-selected");
  delClassOnClick("list-box-1", "label-3", "checked");
  delClassOnClick("list-box-1", "list-button-3", "list-button-slide");
  delClassOnClick("list-box-1", "list-wrapper-3", "wrapper-selected");

  //2
  toggleClassOnClick("list-box-2", "label-2", "checked");
  toggleClassOnClick("list-box-2", "list-button-2", "list-button-slide");
  toggleClassOnClick("list-box-2", "list-wrapper-2", "wrapper-selected");
  delClassOnClick("list-box-2", "label-1", "checked");
  delClassOnClick("list-box-2", "list-button-1", "list-button-slide");
  delClassOnClick("list-box-2", "list-wrapper-1", "wrapper-selected");
  delClassOnClick("list-box-2", "label-3", "checked");
  delClassOnClick("list-box-2", "list-button-3", "list-button-slide");
  delClassOnClick("list-box-2", "list-wrapper-3", "wrapper-selected");

  //3
  toggleClassOnClick("list-box-3", "label-3", "checked");
  toggleClassOnClick("list-box-3", "list-button-3", "list-button-slide");
  toggleClassOnClick("list-box-3", "list-wrapper-3", "wrapper-selected");
  delClassOnClick("list-box-3", "label-1", "checked");
  delClassOnClick("list-box-3", "list-button-1", "list-button-slide");
  delClassOnClick("list-box-3", "list-wrapper-1", "wrapper-selected");
  delClassOnClick("list-box-3", "label-2", "checked");
  delClassOnClick("list-box-3", "list-button-2", "list-button-slide");
  delClassOnClick("list-box-3", "list-wrapper-2", "wrapper-selected");

  //Close modal add button

  delClassOnClick("list-button-1", "list-modal-shadow", "shade-appear");
  delClassOnClick("list-button-1", "list-modal-shadow", "block");
  delClassOnClick("list-button-1", "list-modal-top", "slide-down");
  delClassOnClick("list-button-1", "list-modal", "slide-down");

  delClassOnClick("list-button-2", "list-modal-shadow", "shade-appear");
  delClassOnClick("list-button-2", "list-modal-shadow", "block");
  delClassOnClick("list-button-2", "list-modal-top", "slide-down");
  delClassOnClick("list-button-2", "list-modal", "slide-down");

  delClassOnClick("list-button-3", "list-modal-shadow", "shade-appear");
  delClassOnClick("list-button-3", "list-modal-shadow", "block");
  delClassOnClick("list-button-3", "list-modal-top", "slide-down");
  delClassOnClick("list-button-3", "list-modal", "slide-down");

  //reset add button

  delClassOnClick("list-button-1", "label-1", "checked");
  delClassOnClick("list-button-1", "list-button-1", "list-button-slide");
  delClassOnClick("list-button-1", "list-wrapper-1", "wrapper-selected");
  delClassOnClick("list-button-2", "label-2", "checked");
  delClassOnClick("list-button-2", "list-button-2", "list-button-slide");
  delClassOnClick("list-button-2", "list-wrapper-2", "wrapper-selected");
  delClassOnClick("list-button-3", "label-3", "checked");
  delClassOnClick("list-button-3", "list-button-3", "list-button-slide");
  delClassOnClick("list-button-3", "list-wrapper-3", "wrapper-selected");

  addClassOnClick(
    "list-button-1",
    "add-finish-modal",
    "slide-modal-add-finish"
  );
  delClassTimeout(
    "list-button-1",
    "add-finish-modal",
    "slide-modal-add-finish",
    2500
  );

  addClassOnClick(
    "list-button-2",
    "add-finish-modal",
    "slide-modal-add-finish"
  );
  delClassTimeout(
    "list-button-2",
    "add-finish-modal",
    "slide-modal-add-finish",
    2500
  );

  addClassOnClick(
    "list-button-3",
    "add-finish-modal",
    "slide-modal-add-finish"
  );
  delClassTimeout(
    "list-button-3",
    "add-finish-modal",
    "slide-modal-add-finish",
    2500
  );

  delClassOnClick(
    "close-add-event",
    "add-finish-modal",
    "slide-modal-add-finish"
  );
}

function delClassTimeout(clickingObjId, deleteFrom, classDel, timeout) {
  let clickOn = document.getElementById(clickingObjId);
  let delFrom = document.getElementById(deleteFrom);

  clickOn.addEventListener("click", function () {
    setTimeout(function () {
      delFrom.classList.remove(classDel);
    }, timeout);
  });
}

function switchViewMain(container) {
  //Switch Full

  addClassOnClick("full-view-b", "full-view-b", "chosen-view");
  delClassOnClick("full-view-b", "clipped-view-b", "chosen-view");
  delClassOnClick("full-view-b", "list-view-b", "chosen-view");

  delClassOnClick("full-view-b", "clipped-view-p", "flex");
  delClassOnClick("full-view-b", "list-view-p", "block");
  addClassOnClick("full-view-b", "full-view-p", "block");

  delClassOnClick("full-view-b", "switch-container", "clipped");
  delClassOnClick("full-view-b", "switch-container", "list");

  returnToTopElement("full-view-b", container, "106");

  //Switch Clipped

  addClassOnClick("clipped-view-b", "clipped-view-b", "chosen-view");
  delClassOnClick("clipped-view-b", "full-view-b", "chosen-view");
  delClassOnClick("clipped-view-b", "list-view-b", "chosen-view");

  delClassOnClick("clipped-view-b", "full-view-p", "block");
  delClassOnClick("clipped-view-b", "list-view-p", "block");
  addClassOnClick("clipped-view-b", "clipped-view-p", "flex");

  addClassOnClick("clipped-view-b", "switch-container", "clipped");
  delClassOnClick("clipped-view-b", "switch-container", "list");

  returnToTopElement("clipped-view-b", container, "106");

  //Switch List

  addClassOnClick("list-view-b", "list-view-b", "chosen-view");
  delClassOnClick("list-view-b", "full-view-b", "chosen-view");
  delClassOnClick("list-view-b", "clipped-view-b", "chosen-view");

  delClassOnClick("list-view-b", "full-view-p", "block");
  delClassOnClick("list-view-b", "clipped-view-p", "flex");
  addClassOnClick("list-view-b", "list-view-p", "block");

  addClassOnClick("list-view-b", "switch-container", "list");
  delClassOnClick("list-view-b", "switch-container", "clipped");

  returnToTopElement("list-view-b", container, "106");
}

function checkIfPageOpen() {
  return document.hidden;
}

function slider() {
  const slider = document.querySelector(".slider-container");
  const images = document.querySelectorAll(".ongoing-background");
  const prevBtn = document.getElementById("prev");
  const nextBtn = document.getElementById("next");

  //Counter
  let counter = 1;
  const size = images[0].clientWidth;

  slider.style.transform = "translateX(" + -size * counter + "px)";

  //Button Listeners

  nextBtn.addEventListener("click", function () {
    //if (counter <= 0) return;
    slider.style.transition = "transform 650ms ease-in-out";
    counter++;
    slider.style.transform = "translateX(" + -size * counter + "px)";
  });

  prevBtn.addEventListener("click", function () {
    slider.style.transition = "transform 650ms ease-in-out";
    counter--;
    slider.style.transform = "translateX(" + -size * counter + "px)";
  });

  slider.addEventListener("transitionend", () => {
    if (images[counter].id === "lastClone") {
      slider.style.transition = "none";
      counter = images.length - 2;
      slider.style.transform = "translateX(" + -size * counter + "px)";
    }
    if (images[counter].id === "firstClone") {
      slider.style.transition = "none";
      counter = images.length - counter;
      slider.style.transform = "translateX(" + -size * counter + "px)";
    }
  });

  let timeoutArea = document.getElementById("slider-container");
  let timer;

  timeoutArea.addEventListener("mouseenter", stopSlider);
  timeoutArea.addEventListener("mouseleave", runSlider);

  function changeImage() {
    var time = 1;
    let status = checkIfPageOpen();

    if (time <= 10000 && status === false && window.pageYOffset < 393) {
      timer = setTimeout(changeImage, 6000);
      nextBtn.click();
      time++;
    }
  }

  let page = document.getElementById("page");
  let menu = document.getElementById("menu-page");

  function stopSlider() {
    clearTimeout(timer);
  }

  function runSlider() {
    timer = setTimeout(changeImage, 6000);
  }

  window.onload = runSlider();

  function changeContent() {
    let title = document.querySelector(".rec-anime-title");
    let summary = document.querySelector(".rec-anime-summary");
    let genresBox = document.querySelector(".rec-anime-genres");

    let animeStatus = document.getElementById("animeStatus");
    let episodes = document.getElementById("episodes");
    let year = document.getElementById("year");
    let studio = document.getElementById("studio");
    let author = document.getElementById("author");
  }
}

function disbaleLink(disElem) {
  var disElement = document.querySelectorAll(disElem);
  var disabled = true;
  disElement.forEach(ev =>
    ev.addEventListener("click", e => {
      if (disabled) {
        console.log("disabled");
        e.preventDefault();
      }
    })
  );
}

function transferHTMLOnClickAll(clickingObjs, transferTo) {
  let clickedObjects = document.querySelectorAll(clickingObjs);
  let transferToObj = document.querySelector(transferTo);

  Array.from(clickedObjects).forEach(el =>
    el.addEventListener("click", function (e) {
      let currentTarget = e.currentTarget.cloneNode(true);
      let elementsArray = Array.from(currentTarget.children);
      transferToObj.innerHTML = "";
      for (i = 0; i < elementsArray.length; i++) {
        transferToObj.appendChild(elementsArray[i]);
      }
    })
  );
}
function addArrowDownHTMLOnClick(clickingObjs, transferTo) {
  let clickedObjects = document.querySelectorAll(clickingObjs);
  let transferToObj = document.querySelector(transferTo);
  let elem = document.createElement("p");
  let text = document.createTextNode("&#11206");
  let arrowElement = elem.appendChild(text);

  Array.from(clickedObjects).forEach(el =>
    el.addEventListener("click", function (e) {
      console.log(arrowElement);
    })
  );
}

function toggleClassExcept(wrapper, except) {
  var body = document.getElementById(wrapper);
  var exceptElement = document.getElementById("except");

  body.addEventListener(
    "click",
    function () {
      alert("wrapper");
    },
    false
  );
  except.addEventListener(
    "click",
    function (ev) {
      alert("except");
      ev.stopPropagation(); //this is important! If removed, you'll get both alerts
    },
    false
  );
}

function generateRulesPost(clickingObjs, place) {
  let clickedObjects = document.querySelectorAll(clickingObjs);
  let pasteHere = document.getElementById(place);
  let rules = ["rule 1", "rule 2", "rule 3", "rule xx"];

  //Create HTML
  let container = document.createElement("div");
  let header = document.createElement("p");
  let list = document.createElement("ul");

  //Add classes
  container.classList.add("right-block-2");
  header.classList.add("right-block-header");
  header.style.color = "#C32E2E";
  list.classList.add("rules-list");

  //Append
  container.appendChild(header);
  container.appendChild(list);

  Array.from(clickedObjects).forEach(el =>
    el.addEventListener("click", function (e) {
      let currentTarget = e.currentTarget.cloneNode(true);
      let elementsArray = Array.from(currentTarget.children);
      let title = elementsArray[1].innerText;
      console.log(title);

      header.innerText = `${title} club rules:`;
      list.innerHTML = "";
      rules.map(rule => {
        let listElem = document.createElement("li");
        listElem.innerText = rule;
        list.appendChild(listElem);
      });

      pasteHere.appendChild(container);
    })
  );
}
function previewText(
  zone,
  title,
  content,
  previewPlaceTitle,
  previewPlaceText
) {
  document.getElementById(zone).addEventListener("change", () => {
    refresh(title, content, previewPlaceTitle, previewPlaceText);
  });
}
function refresh(title, content, previewPlaceTitle, previewPlaceText) {
  let postTitle = document.getElementById(title).value;
  let postContent = document.getElementById(content).value;

  let titlePreview = document.getElementById(previewPlaceTitle);
  let textPreview = document.getElementById(previewPlaceText);

  titlePreview.innerHTML = postTitle;
  textPreview.innerHTML = postContent;
}
function previewImage(btn, imgLink, previewContainer, imgClass) {
  let clickBtn = document.getElementById(btn);
  let link = document.getElementById(imgLink);
  let previewCont = document.getElementById(previewContainer);

  clickBtn.addEventListener("click", () => {
    let newimg = document.createElement("img");
    newimg.classList.add(imgClass);
    newimg.src = link.value;
    previewCont.appendChild(newimg);
  });
}
function freeMemory(btn, clearThis) {
  var button = document.getElementById(btn);
  var resetElem = document.getElementById(clearThis);

  button.addEventListener("click", () => {
    resetElem.innerText = "";
  });
}

let availability = true;

// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
  window.addEventListener(
    "test",
    null,
    Object.defineProperty({}, "passive", {
      get: function () {
        supportsPassive = true;
      },
    })
  );
} catch (e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent =
  "onwheel" in document.createElement("div") ? "wheel" : "mousewheel";

// call this to Disable
function disableScroll() {
  window.addEventListener("DOMMouseScroll", preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener("touchmove", preventDefault, wheelOpt); // mobile
  window.addEventListener("keydown", preventDefaultForScrollKeys, false);
  availability = false;
}

// call this to Enable
function enableScroll() {
  window.removeEventListener("DOMMouseScroll", preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
  window.removeEventListener("touchmove", preventDefault, wheelOpt);
  window.removeEventListener("keydown", preventDefaultForScrollKeys, false);
  availability = true;
}

function toggleScrollAvialability(btn) {
  let button = document.getElementById(btn);

  button.addEventListener("click", () => {
    availability ? disableScroll() : enableScroll();
  });
}
