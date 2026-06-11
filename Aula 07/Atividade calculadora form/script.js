let somar = document.querySelector('#somar')
let sub = document.querySelector('#sub')
let div = document.querySelector('#div')
let mult = document.querySelector('#mult')
let resultado = document.querySelector('#resutaldo')

somar.addEventListener('click',() => {
    let valA = Number(document.querySelector('#valA').value)
    let valB = Number(document.querySelector('#valB').value)
    return resultado.innerHTML = `${valA} + ${valB}`
})

sub.addEventListener('click', () => {
    let valA = Number(document.querySelector('#valA').value)
    let valB = Number(document.querySelector('#valB').value)
    let sub = document.querySelector('#sub')
    return sub.innerHTML = valA - valB
})

div.addEventListener('click', () => {
    let valA = Number(document.querySelector('#valA').value)
    let valB = Number(document.querySelector('#valB').value)
    let div = document.querySelector('#div')
    return div.innerHTML = valA / valB
})

mult.addEventListener('click', () => {
    let valA = Number(document.querySelector('#valA').value)
    let valB = Number(document.querySelector('#valB').value)
    let mult = document.querySelector('#sub')
    return mult.innerHTML = valA * valB
})