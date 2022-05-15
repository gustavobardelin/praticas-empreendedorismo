/*==========================================================================================================*/
/*--------------------------------ANIMAÇÃO DO MENU QUANDO DÁ SCROLL ----------------------------------------*/
/*----------------------------------------------------------------------------------------------------------*/
const header = document.querySelector("header");

window.addEventListener('scroll', function () {
  header.classList.toggle('sticky', window.scrollY > 30);
});




const btnMenu = document.querySelector(".btn-menu");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li a");

btnMenu.addEventListener("click", ()=>{
    btnMenu.classList.add("active");
    navLinks.classList.toggle("active");
})


links.forEach((link)=>{
    link.addEventListener("click", ()=>{
        btnMenu.classList.remove("active");
        navLinks.classList.remove("active");
    })
})




const submenu = document.querySelector(".nav-links li a.submenu");
const dropsubmenu = document.querySelector(".nav-links li .dropdown li .drop-submenu");

submenu.addEventListener("click", (event)=>{
    event.preventDefault();
    submenu.classList.toggle("active")
})

dropsubmenu.addEventListener("click", (event)=>{
    event.preventDefault();
    submenu.classList.toggle("active")
})


