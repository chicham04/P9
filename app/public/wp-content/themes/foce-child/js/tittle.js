const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animateTitle");
      } else {
        entry.target.classList.remove("animateTitle");
      }
    });
  });
  
  const sections = document.querySelectorAll(".Animetitre");
  sections.forEach((section) => {
    observer.observe(section);
  });
  
  const observer2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Utilisation de setTimeout pour ajouter la classe après 0.5 seconde
        setTimeout(() => {
          entry.target.classList.add("animateTitle2");
        }, 500);
      } else {
        entry.target.classList.remove("animateTitle2");
      }
    });
  });
  
  const sections2 = document.querySelectorAll(".Animetitre2");
  sections2.forEach((section) => {
    observer2.observe(section);
  });
  