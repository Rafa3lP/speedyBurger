var btnMenu = document.querySelector(".nav-icon");
var menu = document.querySelector("nav");

btnMenu.addEventListener("click", function(e){
    e.preventDefault();
    menu.classList.toggle("hide");
    console.log("clicou");
});