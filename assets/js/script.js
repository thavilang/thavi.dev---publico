//menu
let toggleMenuButton = document.querySelector("[js-button-menu]");
let menu = document.querySelector("[js-menu]");

iniciarMenu(toggleMenuButton, menu);

toggleMenuButton.addEventListener('click', function () {
  if (!menu.classList.contains('ativo')) {
    abrirMenu(toggleMenuButton, menu);
  } else {
    fecharMenu(toggleMenuButton, menu);
  }
});
menu.addEventListener("click", function () {
  fecharMenu(toggleMenuButton, menu);
});

function iniciarMenu(btn, nav) {
  nav.setAttribute('role', 'region');
  btn.setAttribute('aria-expanded', 'false');
  btn.setAttribute('aria-controls', nav.getAttribute('id'));
  nav.setAttribute('aria-labelledby', btn.getAttribute('id'));

  nav.setAttribute('tabindex', '-1');
  nav.querySelectorAll('a').forEach(a => {
    a.setAttribute('tabindex', '-1');
  });
}

function abrirMenu(btn, nav) {
  btn.classList.add('ativo');
  btn.setAttribute('aria-expanded', 'true');
  nav.setAttribute('tabindex', '0');
  nav.classList.add('ativo');
  nav.removeAttribute('tabindex');
  document.querySelector("body").classList.toggle("no-scroll");

  nav.querySelectorAll('a').forEach((a, i) => {
    a.removeAttribute('tabindex');
  });
}

function fecharMenu(btn, nav) {
  btn.classList.remove('ativo');
  btn.setAttribute('aria-expanded', 'false');
  nav.classList.remove('ativo');
  nav.setAttribute('tabindex', '-1');
  document.querySelector("body").classList.remove("no-scroll");

  nav.querySelectorAll('a').forEach(a => {
    a.setAttribute('tabindex', '-1');
  });
}

var swiper = new Swiper("[js-swiper-depoimentos]", {
  effect: "fade",
  speed: 1000,
  navigation: {
    nextEl: ".swiper-button-depoimentos-next",
    prevEl: ".swiper-button-depoimentos-prev",
  },
});