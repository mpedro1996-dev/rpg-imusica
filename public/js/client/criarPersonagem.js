let script = {};

$(document).ready(function () {
   script.iniciar();
});

script = {
    campos:[],
    iniciarCampos:function(){
        this.campos.nomeHumano = $("#nome-humano");
        this.campos.nomeOrc    = $("#nome-orc");


    },

    iniciar:function () {
        this.iniciarCampos();
        console.log(this.campos);

    }
}