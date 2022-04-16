function init() {
  console.log("Hello there!");

  var mobileMenu = document.getElementsByClassName("mob-menu")[0];
  var openMobileMenu = document.getElementById("openMobileMenu");
  var closeMobileMenu = document.getElementById("closeMobileMenu");

  openMobileMenu.onclick = function(){
    mobileMenu.classList.remove("mob-menu-closed");
    mobileMenu.classList.add("mob-menu-open");
    openMobileMenu.classList.remove("z-20");
  };
  
  closeMobileMenu.onclick = function(){
    mobileMenu.classList.remove("mob-menu-open");
    mobileMenu.classList.add("mob-menu-closed");
    openMobileMenu.classList.add("z-20");
  };
}

document.addEventListener("DOMContentLoaded", () => {
  init();
});