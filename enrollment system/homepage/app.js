const openButton = document.querySelector("#open-btn")
const closeButton = document.querySelector("#close-btn")
const navigationPage = document.querySelector("#nav-page")

openButton.addEventListener("click", function(){
    navigationPage.style.opacity = "1";
    closeButton.style.display = "block"
})

closeButton.addEventListener("click", function(){
    navigationPage.style.opacity = "0";
    closeButton.style.display = "none"
})