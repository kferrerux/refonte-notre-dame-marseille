// section - history
//-------------------------------------------

// On vient déclarer l'ensemble des variables
let imgHistory = document.getElementById("history-img");
// On log dans la console pour confirmation de sélection de l'élement dans le DOM
// console.log(imgHistory);

// MANIPULATION DOM : APPARITION D'ELEMENT
// -------------------------------------

// On va venir écouter l'élement au scroll
document.addEventListener("scroll", () => {
  // console.log(e);
  // Si la valeur de scrollY est inférieure ou égale à 0
  if (window.scrollY <= 0) {
    // console.log(scrollY);
    // Alors l'image est cachée à gauche
    imgHistory.style.marginLeft = "-10000px";
    imgHistory.style.transition = "all 0.3s ease";
    // Si la valeur de scrollY atteint 100
  }
  if (window.scrollY >= 100) {
    // console.log(scrollY);
    // Alors l'image apparaît (valeur 0 de left)
    imgHistory.style.marginLeft = "0";
    imgHistory.style.transition = "all 0.3s ease";
  }
});

// MANIPULATION DOM : ROTATION D'ELEMENT
// -------------------------------------

// On va venir écouter l'élement au scroll
// document.addEventListener('scroll', () => {
// console.log(e);
//     Si l'utilisateur scroll sur l'axe vertical à valeur supérieure ou égale à 200
//     if (window.scrollY <= 200) {
//     console.log(scrollY);
//         Alors l'image se met à tourner à 45deg maximum
//         imgHistory.style.transform = 'rotate(0deg)';
//         imgHistory.style.transition = 'all 2s ease';
//     Si l'utilisateur scroll sur l'axe vertical à valeur inférieure ou égale à 500
//     } if (window.scrollY >= 300) {
//         console.log(scrollY);
//         imgHistory.style.transform = 'rotate(45deg)';
//         imgHistory.style.transition = 'all 2s ease';
//     } if (window.scrollY >= 800) {
//     console.log(scrollY);
//     imgHistory.style.transform = 'rotate(0deg)';
//     imgHistory.style.transition = 'all 2s ease';
//     }
// })

// -------------------------------------
