let resultado = document.querySelector('#resultado')

function bemvindo(){
    let nome = document.querySelector('#nome').value
    let sobrenome = document.querySelector('#sobrenome').value
    let idade = document.querySelector('#idade').value
    let profissao = document.querySelector('#profissao').value
    return resultado.innerHTML =  `Olá, bem vindo ${nome} ${sobrenome}, você tem ${idade} anos e trabalha como ${profissao} ` //A crase é para fazer quando se usa multiplas variáveis, sem ter q concatenar com aspas
} //O $ é para chamar tal variável dentro do que vai ser printado escrito
