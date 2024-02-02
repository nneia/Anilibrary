window.addEventListener("scroll", function (ev) {
  let menu = document.getElementById("menu-page");
  let logo = document.getElementById("logo");
  let nav = document.getElementById("nav");
  let bar = document.getElementById("bar");

  let dropList1 = document.getElementById("dropbox1");
  let drop1 = document.getElementById("belldrop");
  if (window.pageYOffset > 80) {
    menu.classList.add("reduced");
    logo.classList.add("reduced-logo");
    nav.classList.add("reduced-nav");
    bar.classList.add("reduced-bar");
    drop1.classList.add("drop-reduced");
    dropList1.classList.add("reduced-droplist");
  } else {
    menu.classList.remove("reduced");
    logo.classList.remove("reduced-logo");
    nav.classList.remove("reduced-nav");
    bar.classList.remove("reduced-bar");
    drop1.classList.remove("drop-reduced");
    dropList1.classList.remove("reduced-droplist");
  }
});
