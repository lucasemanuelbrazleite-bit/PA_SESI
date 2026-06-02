function exibirNome(){
    let nome = document.querySelector('#nome').value //criei uma variável no html e usei o querySelector pra puxar a variável do html pro js; lembrando q para id é usado "#"
    alert(nome) //alert é para o popup
}
function Somar(){
    let valorA = Number(document.querySelector('#valorA').value) //O number é para converter os dados de string para número 
    let valorB = Number(document.querySelector('#valorB').value) // sem converter para números, os valores seriam apenas concatenados
    alert(valorA + valorB)
}
function Mult(){
    let valorC = Number(document.querySelector('#valorC').value)
    let valorD = Number(document.querySelector('#valorD').value)
    alert(valorC * valorD)
}
function Div(){
    let valorE = Number(document.querySelector('#valorE').value)
    let valorF = Number(document.querySelector('#valorF').value)
    alert(valorE / valorF)
}
function Sub(){
    let valorG = Number(document.querySelector('#valorG').value)
    let valorH = Number(document.querySelector('#valorH').value)
    alert(valorG - valorH)
}