// main.js

document.addEventListener("DOMContentLoaded", () => {



    if (document.querySelector(".heroSwiper")) {

        new Swiper(".heroSwiper", {
            loop: true,
            speed: 1000,
            spaceBetween: 0,
            grabCursor: false,
            allowTouchMove: true,
            simulateTouch: true,

            pagination: {
                el: ".heroSwiper .swiper-pagination",
                clickable: true
            },

            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            }
        });

    }

    /* =========================================
       Portfolio Slider
       Slide width comes from CSS (.portfolioSwiper .swiper-slide = 360px),
       so slidesPerView must stay "auto" for the marquee to line up.
       ========================================= */

    if (document.querySelector(".portfolioSwiper")) {

        new Swiper(".portfolioSwiper", {
            loop: true,
            speed: 3000,
            spaceBetween: 30,

            freeMode: true,
            freeModeMomentum: false,

            grabCursor: true,
            slidesPerView: "auto",

            autoplay: {
                delay: 1,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            }
        });

    }

    /* =========================================
       News Slider
       Slide width comes from CSS (.newsSwiper .swiper-slide = 420px).
       ========================================= */

    if (document.querySelector(".newsSwiper")) {

        new Swiper(".newsSwiper", {
            loop: true,
            speed: 8000,
            spaceBetween: 30,

            freeMode: true,
            freeModeMomentum: false,

            grabCursor: true,
            slidesPerView: "auto",

            autoplay: {
                delay: 1,
                reverseDirection: true,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            }
        });

    }

    /* =========================================
       Partners Slider
       Slide width comes from CSS (.partnersSwiper .swiper-slide = 280px).
       ========================================= */

    if (document.querySelector(".partnersSwiper")) {

        new Swiper(".partnersSwiper", {
            loop: true,
            speed: 9000,
            spaceBetween: 25,

            freeMode: true,
            freeModeMomentum: false,

            grabCursor: true,
            slidesPerView: "auto",

            autoplay: {
                delay: 1,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            }
        });

    }

    /* =========================================
       Counter Animation
       ========================================= */

    const counters = document.querySelectorAll(".counter");

    if (counters.length) {

        const counterObserver = new IntersectionObserver(entries => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                const counter = entry.target;
                const target = parseInt(counter.dataset.target, 10);

                let current = 0;

                const updateCounter = () => {

                    const increment = target / 80;

                    current += increment;

                    if (current < target) {

                        counter.innerText = Math.floor(current);
                        requestAnimationFrame(updateCounter);

                    } else {

                        counter.innerText = target;

                    }

                };

                updateCounter();

                counterObserver.unobserve(counter);

            });

        }, {
            threshold: .5
        });

        counters.forEach(counter => {
            counterObserver.observe(counter);
        });

    }

    /* =========================================
       Mobile Menu
       ========================================= */

    const mobileToggle = document.querySelector(".mobile-toggle");
    const navLinks = document.querySelectorAll(".nav-links");

    if (mobileToggle) {

        mobileToggle.addEventListener("click", () => {

            navLinks.forEach(menu => {
                menu.classList.toggle("active");
            });

        });

    }

});
