// Sélection des éléments du DOM
const boutonMenu = document.querySelector(".boutonMenu");
const burger = document.querySelector(".MenuFull");
const menuLinks = document.querySelectorAll(".MenuFull ul li a");
const animTitles = document.querySelectorAll(".Animetitre, .animateTitle");

// Fonction pour basculer l'état du menu et du bouton
const toggleMenu = () => {
  burger.classList.toggle("nav_open");
  boutonMenu.classList.toggle("active");

  // Empêche le défilement du corps lorsque le menu est ouvert
  document.body.style.overflow = burger.classList.contains("nav_open")
    ? "hidden"
    : "auto";
};

// Gestion de l'ouverture du menu au clic sur le bouton
boutonMenu.addEventListener("click", toggleMenu);

// Gestion de la fermeture du menu au clic sur un lien
menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burger.classList.remove("nav_open");
    boutonMenu.classList.remove("active");
    document.body.style.overflow = "auto"; // Rétablit le défilement du corps
  });
});

// Annule le style "overflow: hidden;" lorsque "Animetitre" ou "animateTitle" est cliqué
animTitles.forEach((title) => {
  title.addEventListener("click", () => {
    document.body.style.overflow = "auto";
  });
});