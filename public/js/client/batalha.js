let script = {};
$(document).ready(function () {
    script.iniciar();
});

script = {
    campos:{humano: {},orc:{}},
    humano:null,
    orc:null,
    logBatalha:null,
    botaoIniciativa:null,
    botaoAtaque:null,
    botaoJogarNovamente:null,
    botaoNovaBatalha:null,
    rodada:0,
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

        this.logBatalha = $("#log-batalha");
        this.botaoIniciativa = $("#btn-iniciativa");
        this.botaoAtaque = $("#btn-ataque");
        this.botaoJogarNovamente = $("#btn-jogar-novamente");
        this.botaoNovaBatalha = $("#btn-nova-partida");

        this.logBatalha.empty();


        let mensagem = 'Aguarde...';

        this.printLogResolucao(mensagem);


        this.ajaxCarregarPersonagens(this.campos.humano.id.val());
        this.ajaxCarregarPersonagens(this.campos.orc.id.val());

        if(this.orc!==null && this.humano!==null){
            mensagem = "Batalha Iniciada";
            this.printLogResolucao(mensagem);
            this.iniciarTurno();

        }
    },

    iniciarBotoes:function(){
        this.botaoIniciativa.click(()=>{
            this.ajaxIniciativa();
        })
        this.botaoAtaque.click(()=>{
            this.ajaxAtaque();
        })

    },

    iniciarTurno:function(){
        this.rodada++;
        this.printLogResolucao("Rodada: "+this.rodada);
        this.botaoIniciativa.show();
        this.botaoAtaque.hide();

    },

    resolverIniciativa:function(){
        this.printLogHumano("Dado: " +this.humano.dadoIniciativa);
        this.printLogHumano("Iniciativa: " +this.humano.iniciativa);
        this.printLogOrc("Dado: " +this.orc.dadoIniciativa);
        this.printLogOrc("Iniciativa: " +this.orc.iniciativa);

        if(this.humano.iniciativa !== this.orc.iniciativa){
            this.botaoIniciativa.hide();
            this.botaoAtaque.show();
            if(this.humano.iniciativa > this.orc.iniciativa){
                this.printLogResolucao("Humano ataca Orc");
                this.humano.iniciativa =1;
                this.orc.iniciativa =0;
            }else{
                this.printLogResolucao("Orc ataca Ataca");
                this.humano.iniciativa = 0;
                this.orc.iniciativa = 1;
            }
        }else{
            this.printLogResolucao("Empate na iniciativa, role novamente.");
        }

    },

    resolverAtaque:function(response){
        if(this.humano.iniciativa===1){
            this.printLogHumano("D20: "+response['resultado-ataque']['resultado-dado']);
            this.printLogHumano("Fator: "+response['resultado-ataque']['fator']);
        }else{
            this.printLogOrc("D20: "+response['resultado-ataque']['resultado-dado']);
            this.printLogOrc("Fator: "+response['resultado-ataque']['fator']);
        }
        if(this.humano.iniciativa===0){
            this.printLogHumano("D20: "+response['resultado-defesa']['resultado-dado']);
            this.printLogHumano("Fator: "+response['resultado-defesa']['fator']);
        }else{
            this.printLogOrc("D20: "+response['resultado-defesa']['resultado-dado']);
            this.printLogOrc("Fator: "+response['resultado-defesa']['fator']);
        }

        this.printLogResolucao("Resolvendo batalha...")

        if(response.dano.dano===0){
            this.printLogResolucao("O atacante errou. Nenhum dano causado");
            this.decidirResultado();
        }else{
            this.printLogResolucao("O atacante feriu o defensor.");
            if(this.humano.iniciativa===1){
                this.printLogHumano("Dado: "+response['dano']['resultado-dado']);
                this.printLogHumano("Dano: "+response['dano']['dano']);
            }else{
                this.printLogOrc("Dado: "+response['dano']['resultado-dado']);
                this.printLogOrc("Dano: "+response['dano']['dano']);

            }
            this.renderizarBatalha(response['dano']['dano']);

        }

    },

    renderizarBatalha:function(dano){
        if(this.humano.iniciativa===0){
            this.humano.raca.vida = this.humano.raca.vida - dano;
            if(this.humano.raca.vida<0){
                this.humano.raca.vida = 0;
            }
            let porcentagem = this.calcularPorcentagem();
            this.renderizarHumano();
            this.campos.humano.barraProgresso.css({width:porcentagem});
            this.campos.humano.barraProgresso.text(porcentagem);
        }else{
            this.orc.raca.vida = this.orc.raca.vida - dano;
            if(this.orc.raca.vida<0){
                this.orc.raca.vida = 0;
            }
            let porcentagem = this.calcularPorcentagem();
            this.renderizarOrc();
            this.campos.orc.barraProgresso.css({width:porcentagem});
            this.campos.orc.barraProgresso.text(porcentagem);
        }
        this.decidirResultado();


    },
    decidirResultado:function(){
        if(this.humano.raca.vida===0||this.orc.raca.vida===0){
            this.printLogResolucao("Batalha Encerrada.");
            this.botaoNovaBatalha.show();
            this.botaoJogarNovamente.show();
            this.botaoAtaque.hide();
            if(this.humano.raca.vida===0){
                this.printLogResolucao("Orc Venceu.");
            }else{
                this.printLogResolucao("Humano Venceu.");

            }

        }else{
            this.iniciarTurno();
        }
    },
    calcularPorcentagem:function(){
        let vidaTotal = 1;
        let calculo = "";
        if(this.humano.iniciativa===0){
            vidaTotal = 12;
            calculo = (this.humano.raca.vida/vidaTotal)*100+"%";

        }else{
            vidaTotal = 20;
            calculo = (this.orc.raca.vida/vidaTotal)*100+"%";
        }

        return calculo


    },


    printLogHumano:function(mensagem){
        let print = '<p class="log log-humano">'+mensagem+'</p>';
        this.logBatalha.append(print);

    },

    printLogOrc:function(mensagem){
        let print = '<p class="log log-orc">'+mensagem+'</p>';
        this.logBatalha.append(print);



    },
    printLogResolucao:function(mensagem){
        let print = '<p class="log log-resolucao">'+mensagem+'</p>';
        this.logBatalha.append(print);



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
    ajaxIniciativa:function(){
        $.ajax({
            url: BASE_URL+"api/iniciativa/rolar",
            type:'post',
            async:false,
            data:{ids:[this.humano.id,this.orc.id]},
            success: (response)=>{
                response.forEach((iniciativa)=>{
                    if(iniciativa.id === this.humano.id){
                        this.humano.iniciativa = iniciativa.iniciativa;
                        this.humano.dadoIniciativa = iniciativa['valor-rolado'];
                    }else{
                        this.orc.iniciativa = iniciativa.iniciativa;
                        this.orc.dadoIniciativa = iniciativa['valor-rolado'];
                    }
                });

                this.resolverIniciativa();


            }
        });
    },

    ajaxAtaque:function(){
        $.ajax({
            url: BASE_URL+"api/batalha/batalhar",
            type:'post',
            async:false,
            data:
                {
                    personagens:[
                        {
                            id:this.humano.id,
                            iniciativa:this.humano.iniciativa,
                        },
                        {
                            id:this.orc.id,
                            iniciativa:this.orc.iniciativa,
                        }


                    ]
                },
            success: (response)=>{
                this.resolverAtaque(response);


            }
        });
    },

    iniciar:function () {
        this.iniciarCampos();
        this.iniciarBotoes();

    }
};