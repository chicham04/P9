// Sélection de l'élément HTML avec la classe 'parallaxe'
const effetParallaxe = document.querySelector(".banner__parallaxe");

window.addEventListener("scroll", () => {
  const scrollenY = window.scrollY;
  const maxTranslationY = 200;
  if (scrollenY <= maxTranslationY) {
    effetParallaxe.style.transform = `translateY(${scrollenY}px)`;
  }
});