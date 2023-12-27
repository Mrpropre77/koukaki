/** 
 * Custom Scripts 1.0.0
*/
console.log("Démarrage du script !");

// Différer le lancement du script => ne se lance qu'une fois que tout le HTML a été chargé

document.addEventListener("DOMContentLoaded", function () {
  monScript();
});

function monScript() {
  // console.log("HTML prêt !");

  (function ($) {
    // Gestion fermeture/ouverture avec jQuery
    $(".modopen").click(function () {
      console.log("modal-trigger cliqué");
      $(".modcontent").animate(
        { height: "toggle", opacity: "toggle" },
        1000
      );
      $(".modcontent").toggleClass("open");
      $(".modburger").toggleClass("close");
    });
    $("a").click(function () {
      if ($(".modcontent").hasClass("open")) {
        $(".modcontent").animate(
          { height: "toggle", opacity: "toggle" },
          1000
        );
        $(".modcontent").removeClass("open");
        $(".modburger").removeClass("close");
      }
    });
  })(jQuery);

  // Initialisation Swiper
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 60,
    speed: 1000,
    autoplay: {
      delay: 250,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    autoplay: {
      delay: 2500,
      //disable via interaction: false,
    },
  });

  let posX = 0;
  let mouveCloud = false;

  const root = document.documentElement;
  const place = document.querySelector("#place");

  const handleIntersect = (entries) => {
    entries.forEach(function (entry) {
      // Contrôle si l'élément à observer est dans le ratio de la zone affichée
      if (entry.intersectionRatio > ratio) {
        elementName = entry.target.className;
        
        // console.log(elementName + " est visible");

        // Si on trouve l'élément indiqué, activation de l'animation d'apparition
        if (
          elementName === "story hidden" ||
          elementName === "studio hidden" ||
          elementName === "nomination hidden" ||
          elementName === "site-footer hidden"
        ) {
          // Validation de la class qui va executer le keyframes d'apparition des sections
          entry.target.classList.add("mouvement-up");
          // Arrêt de l'observation sur cet élément
          observer.unobserve(entry.target);
          // Retrait de la class qui cachait par défaut l'élement
          entry.target.classList.remove("hidden");
        }

        if (
          elementName === "story-title hidden" ||
          elementName === "studio-title hidden" ||
          elementName === "characters-title hidden" ||
          elementName === "place-title hidden"
        ) {
          entry.target.classList.add("animtitre");
          observer.unobserve(entry.target);
          entry.target.classList.remove("hidden");
        }
      }
    });
  };

  const ratio = 0.05;

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
  };

  //  Initialisation de la fonction Intersection observer
  const observer = new IntersectionObserver(handleIntersect, options);

  // Activation des éléments que l'on va surveiller
  observer.observe(document.querySelector(".story"));
  observer.observe(document.querySelector(".studio"));
  observer.observe(document.querySelector(".nomination"));
  observer.observe(document.querySelector(".site-footer"));
  observer.observe(document.querySelector(".story-title"));
  observer.observe(document.querySelector(".studio-title"));
  observer.observe(document.querySelector(".characters-title"));
  observer.observe(document.querySelector(".place-title"));

  // Contrôle si on scroll sur la fenêtre
  window.addEventListener("scroll", () => {
    // Si on scroll, accéleration de la rotation des fleurs
    var vertical = -1;
    setInterval(function () {
      if (window.scrollY != vertical) {
        vertical = window.scrollY;
        root.style.setProperty("--rotate", "3s");
      } else {
        root.style.setProperty("--rotate", "15s");
      }
    }, 500);

    // Mouvements des 2 nuages en fonction du scroll
    posX = Math.round(0 - (window.scrollY - place.offsetTop - 200));
    if (posX <= 0 && posX > -400) {
      root.style.setProperty("--posX", posX + "px");
    }
  });
}
