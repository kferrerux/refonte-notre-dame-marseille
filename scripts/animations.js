// section - history
//-------------------------------------------

// On vient déclarer l'ensemble des variables
let historyimg = document.getElementById("history-img");
let historytext = document.getElementById("history-text");
let infos = document.getElementById("informations");
let map = document.getElementById("serendre");
let video = document.getElementById("video");

// MANIPULATION DOM : APPARITION D'ELEMENT
// -------------------------------------

// On va venir écouter l'élement au scroll
document.addEventListener("scroll", () => {
  console.log(scrollY);
  // Si la valeur de scrollY est inférieure ou égale à 0
  if (window.scrollY <= 0) {
    historyimg.style.clipPath = "polygon(0 0, 0% 0, 0% 0%, 0px 0%)";
    historyimg.style.transition = "all 0.5s ease";
  }

  if (window.scrollY >= 200) {
    historyimg.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
    historyimg.style.transition = "all 0.5s ease";
  }

  if (window.scrollY >= 600) {
    infos.style.clipPath = "polygon(0 0, 0% 0, 0% 0%, 0 0%)";
    infos.style.transition = "all 0.5s ease";
  }

  if (window.scrollY >= 950) {
    infos.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
    infos.style.transition = "all 0.5s ease";
  }

  if (window.scrollY >= 1700) {
  }
});
