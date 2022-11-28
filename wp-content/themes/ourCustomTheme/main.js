const navbar = document.getElementById("navbar__main");
const hamburgerBtn = document.getElementById("hamburger__button");
const animatedDiv = document.getElementById("navbarNavAltMarkup");

let bgColorBool = false;

hamburgerBtn.addEventListener("click", function onClick() {
  if (bgColorBool == false) {
    animatedDiv.removeEventListener("transitionrun", changeNavBgColor);
    navbar.style.backgroundColor = "rgba(28, 46, 90, 1)";
    bgColorBool = true;
  } else {
    animatedDiv.addEventListener("transitionrun", changeNavBgColor);
  }
});

function changeNavBgColor() {
  console.log("cangeing navbar color");
  navbar.style.backgroundColor = "rgba(28, 46, 90, 0)";
  navbar.style.transition = "background-color 0.27s linear";
  bgColorBool = false;
}
