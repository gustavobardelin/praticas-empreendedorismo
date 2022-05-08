const btnMenu = document.querySelector(".btn-menu");
const navLinks = document.querySelector(".nav-links");

btnMenu.addEventListener("click", ()=>{
    btnMenu.classList.toggle("active");
    navLinks.classList.toggle("active");
})