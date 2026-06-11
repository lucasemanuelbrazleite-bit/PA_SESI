let form = document.querySelector('#formulario');

form.addEventListener('submit', (e) => { // () => {} é uma função de callback, sendo função de callback toda função que executa outra função dentro da função chamada
    e.preventDefault() // o form tem o problema de recarregar a página como um F5, então para impedir isso coloca dentro do parâmetro o "e" e depois o coloca como preventdefault para não dar reload
    let nome = document.querySelector('#nome').value // se põe value para saber um valor específico
    let sobrenome = document.querySelector('#sobrenome').value
    let idade = document.querySelector('#idade').value
    let profissao = document.querySelector('#profissao').value

    let resposta = document.querySelector('#resposta') // não se coloca value aqui por querer buscar o valor todo
    
    resposta.innerHTML = `Olá ${nome} ${sobrenome}, você tem ${idade} anos e trabalha como ${profissao}` //dava pra fazer da forma que imaginei da pra usar o form direto caso queira
})