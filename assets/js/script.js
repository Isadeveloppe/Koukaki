//****CLASSE REVEAL POUR FADE-IN-UP****//
/* Définir le ratio de visibilité pour déclencher l'observation*/
const ratio = .1; /*10% de visibilité*/
/*Définir les options pour l'IntersectionObserver*/
const options = {
    root: null, 
    rootMargin: '0px',
    threshold: ratio, /*Seuil de visibilité pour déclencher l'observation*/
  }
/* Fonction de gestion de l'intersection*/
const handleIntersect = function (entries, observer) {
/* Parcourir toutes les entrées observées*/
  entries.forEach(function (entry) {
    /* Vérifier si l'élément a dépassé le seuil de visibilité*/  
    if (entry.intersectionRatio > ratio) {
      /* Ajouter la classe 'reveal-visible' à l'élément*/
      entry.target.classList.add('reveal-visible')
        /* Arrêter d'observer cet élément car il a été révélé*/
      observer.unobserve(entry.target)
    }
  })
  }
/* Créer une instance de l'Intersection Observer avec la fonction de gestion et les options*/
const observer = new IntersectionObserver(handleIntersect, options)
/*Sélectionner tous les éléments dont la classe contient 'reveal-' et les observer*/
  document.querySelectorAll('[class*=".reveal-"]').forEach(function (entry) {
    observer.observe(entry)
  })




//****BURGER****//
/*Sélection du bouton modal*/
const modalButton = document.querySelector('.modal-open');
/*Sélection du contenu modal*/
const modalContent = document.querySelector('.modal__content');
/*Affichage du bouton modal dans la console*/
console.log(modalButton)
/*Ajout d'un évènement au clic sur le document*/
document.addEventListener('click', function (){
/*Basculement des classes sur les éléments modaux*/  
modalButton.classList.toggle( 'close') /*Ajoute la classe close à modalButton si elle ne l'a pas, ou la retire si elle l'a déjà*/
modalContent.classList.toggle( 'reveal-visible') /*Ajoute la classe reveal-visible à modalContent si elle ne l'a pas, ou la retire si elle l'a déjà*/
});





//****PARALLAX VIDEO****//
/** Utilisation de la bibliothèque simpleParallax **/
/*Sélection de l'éléments vidéo*/
const video = document.querySelectorAll('.video');
/*Création d'un nouvel objet Parallax*/
new simpleParallax(video , {
  delay: .6, /* effet de parallaxe légèrement retardé par rapport au défilement de la page --> sensation de fluidité*/
  transition: 'cubic-bezier(0.25, 0.1, 0.25, 1)', /*courbe de transition de l'animation --> effet d'animation doux et naturel*/
});




/****PARALLAX NUAGES****/
/* Ajout d'un écouteur d'évènement pour le défilement*/
window.addEventListener('scroll', function () {
/*Créations des fonctions*/
  const bigCloud = document.querySelector('.bigcloud');
  const littleCloud = document.querySelector('.littlecloud');
  const placeSection = document.querySelector('#place');
/*Calcul de l'élément #place par rapport au haut de la page*/
  const sectionOffsetTop = placeSection.offsetTop;
/*Obtention de la position actuelle du défilement*/
  const scrollPosition = window.scrollY || document.documentElement.scrollTop;
/* Condition pour vérifier si la positition de défilement a atteint la section #place*/
  if (scrollPosition >= sectionOffsetTop) {
/*Calcul de la valeur de parallaxe*/
      const parallaxValue = (scrollPosition - sectionOffsetTop) / 4;
/*Déplacement de la translation maximale limitée à 300px*/
      const translationX = Math.min(parallaxValue, 300);
/*Application de la transformation de translation aux nuages*/
      bigCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
      littleCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
  }
});



/****SWIPER****/
const swiper = new Swiper('.swiper-container', {
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
      disableOnInteraction: false,
  },
})
