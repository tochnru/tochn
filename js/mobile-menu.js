//=МОБИЛЬНОЕ МЕНЮ
let headerMenuBurger = document.querySelector(".header-menu__burger");
let menuMain = document.querySelector(".menu-main");
let menuTitleClose = document.querySelector(".menu-title__close");
let introHeaderBtn = document.querySelector(".intro-header__btn");

headerMenuBurger.onclick = function(){
   menuMain.style.display = "grid";
}
introHeaderBtn.onclick = function(){
   menuMain.style.display = "grid";
}
menuTitleClose.onclick = function(){
   menuMain.style.display = "none";
}