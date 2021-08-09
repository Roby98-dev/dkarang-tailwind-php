// const btn = document.getElementById('mobile-nav-btn');
// const menu = document.getElementById('mobile-menu');

// btn.addEventListener('click', () => {
//     menu.classList.toggle('hidden');
// })

// window.onscroll = function() {
//   navSticky()
// };

// let navbar = document.getElementById("navbar");
// let sticky = navbar.offsetTop;

// function navSticky() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("fixed");
//     navbar.classList.add("top-0");
//     navbar.classList.add("inset-x-0");
//     navbar.classList.add("shadow-md");
//   } else {
//     navbar.classList.remove("fixed");
//     navbar.classList.remove("top-0");
//     navbar.classList.remove("inset-x-0");
//     navbar.classList.remove("shadow-md");
//   }
// }

// Swiperjs
var swiper = new Swiper('.swiper-container', {
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});