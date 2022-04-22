let plsbutton = document.querySelectorAll(".plus")
let minbutton = document.querySelectorAll(".minus")

plsbutton.forEach((elem) => {
  elem.addEventListener("click", () => {
    if (elem.nextElementSibling.textContent < 9) {
      elem.nextElementSibling.innerHTML = Number(elem.nextElementSibling.textContent) + 1
    }
  })
})

minbutton.forEach((elem) => {
  elem.addEventListener("click", () => {
    if(elem.previousElementSibling.textContent > 1) {
      elem.previousElementSibling.innerHTML = Number(elem.previousElementSibling.textContent) - 1
    }
  })
})
