const openButton = document.querySelector("#open-btn")
const closeButton = document.querySelector("#close-btn")
const navigationPage = document.querySelector("#nav-page")
const submitButton = document.querySelector("#submitBtn")

openButton.addEventListener("click", function(){
    navigationPage.style.opacity = "1";
    closeButton.style.display = "block"
})

closeButton.addEventListener("click", function(){
    navigationPage.style.opacity = "0";
    closeButton.style.display = "none"
})

submitButton.addEventListener("click", function(){
    alert("Message success");
});
