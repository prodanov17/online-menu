const arrowLeft = document.querySelector('[data-scroll="left"]');
const arrowRight = document.querySelector('[data-scroll="right"]');
const carousel = document.querySelector('[data-scroll="content"]');

arrowLeft.addEventListener("click", ()=>{
    carousel.scrollBy({
        left: -275,
        behavior: 'smooth'
      });
})
arrowRight.addEventListener("click", ()=>{
    carousel.scrollBy({
        left: 275,
        behavior: 'smooth'
      });
})