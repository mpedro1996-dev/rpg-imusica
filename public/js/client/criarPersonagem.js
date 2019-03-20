let script = {};
$(document).ready(function () {
    script.iniciar();
});

script = {
    campos:[],
    iniciarCampos:function(){
        this.campos.nomeHumano = $("#nome-humano");
        this.campos.nomeOrc    = $("#nome-orc");
        this.campos.btnIniciarBatalha = $("#btn-iniciar-batalha");



    },
    iniciarBotoes:function(){
        this.campos.btnIniciarBatalha.click(()=>{
            this.recolherDadosEEnviar();
        });
    },
    validarNomes:function(){
        if(this.campos.nomeHumano.val()===''||this.campos.nomeHumano.val()===''){
            bootbox.alert("Nomes dos personagens são obrigatórios.");
            return false;
        }else{
            return true;
        }

    },
    recolherDadosEEnviar:function(){
        if(this.validarNomes()){
            let dados ={
                humano:{
                    nome:this.campos.nomeHumano.val()
                },orc:{
                    nome:this.campos.nomeOrc.val()
                }
            };
            $('#alert').show();

            this.ajaxIniciarBatalha(dados);


        }
    },

    ajaxIniciarBatalha:function(data){
        $.ajax({
            url: BASE_URL+"api/personagem/criar",
            type:'post',
            async:false,
            data:data,
            success: (response)=>{
                bootbox.alert("Personagens criados, confirme para prosseguir com a batalha",()=>{
                    $('.alert').hide();
                    window.location = BASE_URL+"batalha/"+response.humano+"/"+response.orc;

                })

            }
        });
    },




    iniciar:function () {
        this.iniciarCampos();
        this.iniciarBotoes();


    }
}