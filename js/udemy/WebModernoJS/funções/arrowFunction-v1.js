let dobro = function (a){
    return 2 * a
}

dobro = (a) => {
    return 2 * a
}

dobro = a => 2 * a

console.log(dobro(Math.PI))

let ola = function() {
    return 'olá'
}

ola = () =>  'Olá'
ola = _ =>  'Olá' //parametro com omissão

console.log(ola())
