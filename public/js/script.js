const activeMenuBurger = document.querySelectorAll(".activeMenuBurger");
const closeMenuBurger = document.querySelector(".cross img");

activeMenuBurger.forEach((e) => {
  e.addEventListener("click", () => {
    e.nextElementSibling.classList.toggle("menuShow");
  });
});

const allMenuBurger = document.querySelectorAll(".menuBurger");
const shadowMenu = document.createElement("div");

closeMenuBurger.addEventListener("click", () => {
  allMenuBurger.forEach((e) => {
    if (e.classList.contains("menuShow")) {
      e.classList.toggle("menuShow");
    }
    shadowMenu.style.animation = "shadowMenuHide 1s forwards";
  });
});

const backMenu = document.querySelector(".backMenu i");

backMenu.addEventListener("click", () => {
  backMenu.parentElement.parentElement.classList.toggle("menuShow");
});

const menuBurger = document.querySelector(".menu");

menuBurger.addEventListener("click", () => {
  shadowMenu.className = "shadowMenu";
  document.body.appendChild(shadowMenu);
  shadowMenu.style.animation = "shadowMenuShow 1s forwards";
});
