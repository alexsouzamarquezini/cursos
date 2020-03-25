new Vue({
    el:'#desafio',
    data: {
        nome: 'Alex Marquezini',
        idade: 35,
        linkImagem: 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1200px-Vue.js_Logo_2.svg.png'
    },
    methods: {
        multiplicaIdadePor3: function() {
            return this.idade * 3
        },
        random: function() {
            return Math.random()
        }
    }
})