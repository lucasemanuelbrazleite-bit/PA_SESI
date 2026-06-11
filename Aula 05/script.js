// let aluno = "Lucas" //variável normal, mas pode ser usado para declarar qualquer tipo de variável
// var aluno_var = "Ana" //
// const nome = "Pedro" //valor que não muda em hipótese alguma, é um valor imutável

// console.log("O " + aluno + " é aluno do sesi") //concatenação nada mais é do que colocar o "+" para fazer com se completem ou seja junta os dois

// console.log(``) //fazer com crase funciona como se eu tivesse colocado o "+" mas é mais compacto

// let fruta1 = "Maçã" //exemplo de uso sem array(no caso vetor)
// let fruta2 = "Pera"
// let fruta3 = "laranja"

// console.log(fruta1, fruta2, fruta3)

// let frutas = ["laranja", "uva", "maçã"] //exemplo de uso de array(o array é um vetor e um vetor nada mais é do que uma variável composta)

// console.log(frutas)

// let aluno = { //variável composta usando objeto
//     id: 1,
//     nome: "lucas",
//     email: "teste123@email.com",
//     senha:123
// }
// console.log(aluno)
// console.log(aluno.nome) //exemplo caso queria puxar só um dado, de uma variável composta

// let alunos = [ //exemplo de junção de array com objeto
//     {
//         id:1,
//         nome: "Ana",
//         sobrenome: "Rodrigues"
//     },
//     {
//         id:2,
//         nome: "Dudu",
//         sobrenome: "Braz"
//     },
//     {
//         id:3,
//         nome: "Pedro",
//         sobrenome: "Bissoni"
//     }
// ]
// console.log(alunos) //exemplo pra printar tudo no console
// console.log(alunos[0]) //exemplo de puxar uma linha de dados a partir da posição no array
// console.log(alunos[1].nome) //exemplo de puxar um dado específico de uma parte do objeto específico

function soma(n1, n2){  //lembrete função é sempre uma automação, para não precisar ficando refazendo a mesma coisa
    return n1 + n2
} 
console.log(soma(10,20)) //exemplo de print da função