let parallaxGSap = document.querySelectorAll('[js-gsap-parallax]');
let filtroGSap = document.querySelector('[js-filtro]');

if (parallaxGSap || filtroGSap) {
    const pluginGsap = document.createElement('script');
    pluginGsap.src = 'assets/js/plugins/gsap.min.js';

    pluginGsap.addEventListener('load', _ => {

        gsap.registerPlugin(ScrollTrigger);

        parallaxGSap.forEach(elemento => {
            let movimento = elemento.getAttribute('gsap-movimento');
            movimento = movimento ? movimento : 30;
            let contexto = elemento.closest('section');
            gsap.to(elemento, {
                yPercent: -movimento,
                ease: "none",
                scrollTrigger: {
                    trigger: contexto,
                    start: "top bottom",
                    end: "bottom top",
                    scrub: 1
                },
            });
        });

        if (filtroGSap) {
            if (window.innerWidth > 992) {
                gsap.to('[js-filtro]', {
                    scrollTrigger: {
                        trigger: "[js-filtro]",
                        start: "top top",
                        endTrigger: ".paginacao-content",
                        end: "top top+=70",
                        pin: true,
                        pinSpacing: false,
                        scrub: false,
                    },
                });
            } else {
                gsap.to('[js-abrir-filtro]', {
                    scrollTrigger: {
                        trigger: "[js-abrir-filtro]",
                        start: "bottom bottom",
                        endTrigger: ".paginacao-content",
                        end: "top bottom",
                        pin: true,
                        pinSpacing: false,
                        scrub: false,
                    },
                });
            }
        }
    });

    document.body.appendChild(pluginGsap);
}

