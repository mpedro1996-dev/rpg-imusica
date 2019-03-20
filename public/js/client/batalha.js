let script = {};
$(document).ready(function () {
    script.iniciar();
});

script = {
    campos:{humano: {},orc:{}},
    humano:{},
    orc:{},
    iniciarCampos:function(){
        this.campos.humano.id =$("#id-humano");
        this.campos.humano.vida = $("#vida-humano");
        this.campos.humano.nome = $("#nome-humano");
        this.campos.humano.forca = $("#forca-humano");
        this.campos.humano.agilidade = $("#agilidade-humano");
        this.campos.humano.barraProgresso = $("#barra-progresso-humano");

        this.campos.orc.id=$("#id-orc");
        this.campos.orc.vida = $("#vida-orc");
        this.campos.orc.nome = $("#nome-orc");
        this.campos.orc.forca = $("#forca-orc");
        this.campos.orc.agilidade = $("#agilidade-orc");
        this.campos.orc.barraProgresso = $("#barra-progresso-orc");

        this.ajaxCarregarPersonagens(this.campos.humano.id.val());
        this.ajaxCarregarPersonagens(this.campos.orc.id.val());
    },

    renderizarHumano:function(){
        this.campos.humano.vida.text(this.humano.raca.vida);
        this.campos.humano.nome.text(this.humano.nome);
        this.campos.humano.forca.text(this.humano.raca.forca);
        this.campos.humano.agilidade.text(this.humano.raca.agilidade);

    },
    renderizarOrc:function(){
        this.campos.orc.vida.text(this.orc.raca.vida);
        this.campos.orc.nome.text(this.orc.nome);
        this.campos.orc.forca.text(this.orc.raca.forca);
        this.campos.orc.agilidade.text(this.orc.raca.agilidade);
    },

    ajaxCarregarPersonagens:function(id){
        $.ajax({
            url: BASE_URL+"api/personagem/"+id,
            type:'get',
            async:false,
            data:{},
            success: (response)=>{
                if(response.raca.tipo==="humano"){
                    this.humano = response;
                    this.renderizarHumano();

                }else{
                    this.orc = response;
                    this.renderizarOrc();


                }


            }
        });
    },

    iniciar:function () {
        this.iniciarCampos();

    }
};