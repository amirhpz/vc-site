// main.js

document.addEventListener("DOMContentLoaded", () => {

    /* =========================================
     Hero Slider
     ========================================= */

    if (document.querySelector(".heroSwiper")) {

        new Swiper(".heroSwiper", {
            loop: true,
            speed: 1000,

            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            pagination: {
                el: ".heroSwiper .swiper-pagination",
                clickable: true
            }
        });

    }

    /* =========================================
     Portfolio Slider
     ========================================= */

    if (document.querySelector(".portfolioSwiper")) {

        new Swiper(".portfolioSwiper", {

            loop: true,

            speed: 7000,

            autoplay: {
                delay: 1,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            freeMode: true,
            freeModeMomentum: false,

            grabCursor: true,

            slidesPerView: "auto",

            spaceBetween: 30

        });

    }

    /* =========================================
     News Slider
     ========================================= */

    if (document.querySelector(".newsSwiper")) {

        new Swiper(".newsSwiper", {

            loop: true,

            speed: 8000,

            autoplay: {
                delay: 1,
                reverseDirection: true,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            freeMode: true,
            freeModeMomentum: false,

            grabCursor: true,

            slidesPerView: "auto",

            spaceBetween: 30

        });

    }

    /* =========================================
     Partners Slider
     ========================================= */

    if (document.querySelector(".partnersSwiper")) {

        new Swiper(".partnersSwiper", {

            loop: true,

            speed: 9000,

            autoplay: {
                delay: 1,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },

            freeMode: true,
            freeModeMomentum: false,

            grabCursor: true,

            slidesPerView: "auto",

            spaceBetween: 25

        });

    }

    /* =========================================
     Counter Animation
     ========================================= */

    const counters = document.querySelectorAll(".counter");

    if (counters.length) {

        const observer = new IntersectionObserver((entries) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                const counter = entry.target;
                const target = parseInt(counter.dataset.target);

                let current = 0;

                const animate = () => {

                    const increment = target / 80;

                    current += increment;

                    if (current < target) {

                        counter.textContent = Math.floor(current);

                        requestAnimationFrame(animate);

                    } else {

                        counter.textContent = target.toLocaleString();

                    }

                };

                animate();

                observer.unobserve(counter);

            });

        }, {
            threshold: 0.4
        });

        counters.forEach(counter => observer.observe(counter));

    }

    /* =========================================
     Mobile Menu
     ========================================= */

    const mobileToggle = document.querySelector(".mobile-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (mobileToggle && navLinks) {

        mobileToggle.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });

        document.addEventListener("click", (e) => {

            if (
                !navLinks.contains(e.target) &&
                !mobileToggle.contains(e.target)
            ) {
                navLinks.classList.remove("active");
            }

        });

    }

    /* =========================================
     Dark Mode
     ========================================= */

    const darkToggle = document.querySelector("#darkModeToggle");

    if (darkToggle) {

        const savedTheme = localStorage.getItem("theme");

        if (savedTheme === "dark") {
            document.body.classList.add("dark");
        }

        darkToggle.addEventListener("click", () => {

            document.body.classList.toggle("dark");

            localStorage.setItem(
                "theme",
                document.body.classList.contains("dark")
                    ? "dark"
                    : "light"
            );

        });

    }

});
