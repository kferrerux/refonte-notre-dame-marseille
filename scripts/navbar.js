// NAVBAR RESPONSIVE
//-------------------------------------------

// VARIABLE SCROLL 0
let scroll = 0;

// EVENEMENT AU SCROLL
window.addEventListener("scroll", () => {
  // Structure conditionnelle
  // Si la valeur de scroll verticale(Y) est inférieure à la valeur de la variable scroll (0)
  if (window.scrollY < scroll) {
    // Alors on applique ces styles CSS (top 0 / Opacitée 0.9)
    header.style.top = "0";
    header.style.transition = "all 0.5s ease";
    header.style.opacity = "0.9";
    // Si la valeur de scroll verticale(Y) est supérieure à la valeur de la variable scroll (0)
  }
  if (window.scrollY > scroll) {
    // Alors on applique ces styles CSS (top -121px (la barre est invisible pour le navigateur) / Opacitée 0.9)
    header.style.top = "-121px";
    header.style.transition = "all 0.5s ease";
    header.style.opacity = "0.9";
  }

  // La valeur de la variable scroll est égale à la valeur de scroll verticale
  scroll = window.scrollY;
  //  console.log(scroll);
});

// FONCTION RECHERCHE DYNAMIQUE
function searchbar() {
  search.addEventListener("click", (e) => {
    e.stopPropagation();
    header.classList.add("search");
    header.style.transition = "all 0.5s ease";
    // console.log(header);
  });

  document.body.addEventListener("click", () => {
    header.classList.remove("search");
    header.style.transition = "all 0.5s ease";
    // console.log("body clicked");
  });
}
searchbar();
