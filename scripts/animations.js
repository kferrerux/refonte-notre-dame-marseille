// NOTRE-DAME DE LA GARDE - JAVASCRIPT - 2024 - FERRER KEVIN
//-------------------------------------------

// ENSEMBLE DE VARIABLES :
let history = document.getElementById("history");
let historyimg = document.getElementById("history-img");
let historyimg02 = document.getElementById("history-img02");
let historytext = document.getElementById("history-text");
let infos = document.getElementById("informations");
let map = document.getElementById("serendre");
let video = document.getElementById("video");
let more = document.getElementById("more");
let arrowup = document.getElementById("arrowup");
let welcome = document.getElementById("welcome");
let welcomeimg = document.getElementById("welcome-img");
let welcometext = document.getElementById("welcome-text");
let search = document.getElementById("search");
let header = document.getElementById("header");
let minus = document.getElementById("minus");

// MANIPULATIONS DOM :
// -------------------------------------

// ECOUTE DE L'ELEMENT AU "SCROLL"
document.addEventListener("scroll", () => {
  // console.log(scrollY);
  if (window.scrollY <= 0) {
    arrowup.style.display = "none";
    arrowup.style.transition = "all 0.5s ease";
    history.style.scale = "0";
    history.transition = "all 0.5s ease";
    welcomeimg.style.clipPath =
      "polygon(0 25%, 0 0, 35% 0%, 65% 0%, 100% 0, 100% 25%, 100% 49%, 100% 100%, 65% 100%, 35% 100%, 0 100%, 0 50%)";
    welcomeimg.style.transition = "all 1s ease";
  }

  if (window.scrollY >= 200) {
    arrowup.style.display = "block";
    arrowup.style.transition = "all 0.5s ease";
    history.style.scale = "1";
    history.style.transition = "all 0.7s ease";
    welcomeimg.style.clipPath =
      "polygon(10% 25%, 35% 25%, 35% 0%, 65% 0%, 65% 25%, 90% 25%, 90% 50%, 65% 50%, 65% 100%, 35% 100%, 35% 50%, 10% 50%)";
    welcomeimg.style.transition = "all 1s ease";
  }

  if (window.scrollY >= 550) {
    infos.style.clipPath = "polygon(0 0, 0% 0, 0% 0%, 0 0%)";
    infos.style.transition = "all 0.5s ease";
  }

  if (window.scrollY >= 750) {
    infos.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
    infos.style.transition = "all 0.5s ease";
  }

  if (window.scrollY >= 1550) {
  }
});

// ECOUTE DE L'ELEMENT AU "CLICK"
more.addEventListener("click", () => {
  history.style.transition = "all 0.7s ease-in-out";
  history.style.height = "499px";
  setTimeout(() => {
    history.style.height = "1500px";
    history.innerHTML = `
    <div class="row">
      <img id="history-img" class="col-12 col-sm-12 col-md-12 col-lg-6" src="../assets/imgs/history.jpg" alt="Image histoire Notre-Dame">
      <div id="history-text" class="col-12 col-sm-12 col-md-12 col-lg-6 p-sm-3 p-md-3 p-lg-5">
        <h2 class="mt-3 mt-sm-3 mt-md-3 mt-lg-0">Chargée d'histoire</h2>
        <hr>
        <p>La Basilique Notre-Dame de la Garde est un monument emblématique situé à Marseille, en France. Son
        histoire
        remonte au Moyen Âge, la construction de la basilique actuelle a débuté au XIXe siècle, la première
        pierre
        de la basilique fût posée en 1853 et les travaux ont été supervisés par l'architecte Henri-Jacques
        Espérandieu. La construction prit fin en 1864.
        </p>
      </div>
    </div>
    
    <div class="row">
      <div id="informations" class="col-12 col-sm-12 col-md-12 col-lg-12 p-sm-3 p-md-3 p-lg-5">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-sm-3 p-md-3 p-lg-5">
            <h2 class="mt-3 mt-sm-3 mt-md-3 mt-lg-0">«De chez moi, je la vois et je lui parle !»</h2>
            <hr>
            <p>Elle fait partie de la vie des Marseillais. On l’associe aux joies. Quand on s’absente de Marseille, au retour, on la guette des yeux.</p>
            
            <p>La Bonne Mère ! Bien sûr, il y a le site géographique : unique, pour découvrir Marseille dans toute son ampleur !
            Mais il y a plus : Marie, la Mère qui présente son Fils, et quel Fils ! Image de tendresse et de bonté. Offert à tous, pour tous.</p>
            
            <p>Puis il y a la colline. On y monte lentement, avec effort, fatigue, le regard baissé sur ses pieds, la tête parfois levée vers le sommet, dos à la cité, dos courbé par l’effort, mais aussi les soucis de la vie, les choses lourdes à déposer. Et au retour, on descend avec légèreté, sourire, joie, émerveillement.
            Des yeux, on cherche son quartier, son église, ses repères. On n’est plus seul.
            Elle redescend avec nous.</p>
            
            <p>Visiteurs de ce site Internet, nous voudrions vous faire partager tout ce que la Bonne Mère représente pour nous : plus qu’un paysage, plus qu’un sanctuaire, une Mère !
            Pour cela, voici quelques informations pour faciliter votre visite, votre pèlerinage, votre passage. Surtout, ne passez pas en courant ! Arrêtez-vous un instant, fermez les yeux, osez lui parler, vous confier.
            A vrai dire, elle vous attend !
            </p><h3><strong>Bienvenue chez votre « Bonne Mère ».</strong></h3>
            <strong>Georges PONTIER,</strong>
            <i>Archevêque de Marseille</i>
            </p>
          </div>    
      <div>
        <img id="history-img02" class=" img-fluid w-100" src="../assets/imgs/historyimg02.webp" alt="Notre Dame Historique">
      </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  `;
  }, 300);
});
