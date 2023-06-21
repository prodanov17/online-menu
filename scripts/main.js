const navbarToggler = document.querySelector('[data-toggler]');
const navbarContent = document.querySelector('[data-content]');
const animatedIcon = document.querySelector('[data-animate="button"]');
const navLinks = [...document.getElementsByClassName("nav-link")];




navbarToggler.addEventListener("click", ()=>{
    
    if(!navbarContent.classList.contains("active")){
        navbarContent.style.transform = "translateX(0%)";
        navbarContent.style.pointerEvents = "all";
        animatedIcon.classList.toggle("open");
        navLinks.forEach((e)=>{
            e.style.opacity = 1;
        })
        
    }
    if(navbarContent.classList.contains("active")){
        animatedIcon.classList.toggle("open");
        navbarContent.style.transform = "translateX(100%)";
        navbarContent.style.pointerEvents = "none";
        navLinks.forEach((e)=>{
            e.style.opacity = "0";
        })
        
    }
    navbarContent.classList.toggle("active");
})


// $('.third-button').on('click', function () {
//   
    //   $('.animated-icon3').toggleClass('open');
    // });