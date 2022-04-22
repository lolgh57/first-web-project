const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href').substr(1)
    
    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}

let modalauth = document.querySelector(".auth");
let modalreg = document.querySelector(".reg");

let authbtn = document.querySelector(".authbtn");
let regbtn = document.querySelector(".registration");

let closemodal = document.querySelectorAll(".close");
let body = document.querySelector("body");

let commandimg = document.querySelector(".command__img img");
let commandtext = document.querySelector(".command__text");

authbtn.addEventListener('click', function(){
    modalauth.classList.remove("closed")
    modalauth.classList.add("opened")
    modalreg.classList.add("closed")
    modalreg.classList.remove("opened")
    console.log(1);
});
authbtn.addEventListener('click', function(){
    body.classList.add("open")
    body.classList.remove("closed")
    body.classList.add("scroll")
})

regbtn.addEventListener('click', function(){
    modalreg.classList.remove("closed")
    modalreg.classList.add("opened")
    modalauth.classList.add("closed")
    modalauth.classList.remove("opened")
    console.log(1);
});


closemodal.forEach((elem) => {
    elem.addEventListener("click", () => {
        modalauth.classList.add("closed")
        modalreg.classList.add("closed")
        modalauth.classList.remove("opened")
        modalreg.classList.remove("opened")
        body.classList.remove("open")
        body.classList.add("closed")
        body.classList.remove("scroll")
    })
})

window.addEventListener('click', function(event) {
    if (event.target === modalauth || event.target === modalreg) {
        modalauth.classList.add("closed")
        modalreg.classList.add("closed")
        modalauth.classList.remove("opened")
        modalreg.classList.remove("opened")
        body.classList.remove("open")
        body.classList.add("closed")
        body.classList.remove("closed")
    }
})