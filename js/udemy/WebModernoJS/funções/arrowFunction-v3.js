let comparaComThis = function (param){
    console.log(this === param)
}

comparaComThis(global)

const o = {}
comparaComThis = comparaComThis.bind(o)
comparaComThis(global)
comparaComThis(o)

let comparaComThisArrow = param => console.log(this == param)
comparaComThisArrow(global)
comparaComThisArrow(module.exports)
comparaComThisArrow(this)

comparaComThisArrow = comparaComThisArrow.bind(o)
comparaComThisArrow(o)
comparaComThisArrow(module.exports)