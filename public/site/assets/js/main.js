// main.js
const heroSwiper = new Swiper(".heroSwiper",{
  loop:true,
  speed:1000,
  spaceBetween:0,
  grabCursor:false,
  allowTouchMove:true,
  simulateTouch:true,
  pagination:{
    el:".heroSwiper .swiper-pagination",
    clickable:true
  },
  autoplay:{
    delay:5000,
    disableOnInteraction:false
  }
})

const portfolioSwiper = new Swiper(".portfolioSwiper",{
  loop:true,
  speed:900,
  spaceBetween:30,
  grabCursor:true,
  slidesPerView:3,
  pagination:{
    el:".portfolio-pagination",
    clickable:true
  },
  breakpoints:{
    0:{
      slidesPerView:1
    },
    768:{
      slidesPerView:2
    },
    1200:{
      slidesPerView:3
    }
  }
})

const newsSwiper = new Swiper(".newsSwiper",{
  loop:true,
  speed:900,
  spaceBetween:30,
  grabCursor:true,
  slidesPerView:2,
  breakpoints:{
    0:{
      slidesPerView:1
    },
    992:{
      slidesPerView:2
    }
  }
})

const counters = document.querySelectorAll(".counter")

const counterObserver = new IntersectionObserver(entries=>{

  entries.forEach(entry=>{

    if(entry.isIntersecting){

      const counter = entry.target
      const target = +counter.dataset.target
      let current = 0

      const updateCounter = ()=>{

        const increment = target / 80

        current += increment

        if(current < target){

          counter.innerText = Math.floor(current)
          requestAnimationFrame(updateCounter)

        }else{

          counter.innerText = target

        }

      }

      updateCounter()

      counterObserver.unobserve(counter)

    }

  })

},{
  threshold:.5
})

counters.forEach(counter=>{
  counterObserver.observe(counter)
})

const mobileToggle = document.querySelector(".mobile-toggle")
const navLinks = document.querySelectorAll(".nav-links")

mobileToggle.addEventListener("click",()=>{

  navLinks.forEach(menu=>{
    menu.classList.toggle("active")
  })

})