@extends('principal')

@section('content')
    <style>
        .log-humano{
            text-align: left;
            width: 60%;
            color:#f00;
            float: left;
        }
        .log-orc{
            text-align: right;
            color:#0f0;
            width: 60%;
            float: right;
        }
        .log-resolucao{
            text-align: center;
            color:#00f;
            width: 100%;
            float: right;
        }
        .caracteristica{
            font-weight: bold;
        }
    </style>
    <div class="container-fluid" id="app">
        <div class="container d-md-flex justify-content-between py-4">
            <div class="align-self-start">
                <div class="card">
                    <img src="{{asset('img/human.jpg')}}" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">HUMANO</h1>
                        <input type="hidden" id="id-humano" value="{{$idHumano}}">
                        <div class="form-group">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" id="barra-progresso-humano" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vida-humano" class="col-md-4">Vida:</label><div id="vida-humano" class="col-md caracteristica"></div>
                        </div>

                        <div class="form-group">
                            <label for="nome-orc">Nome do Jogador:<div id="nome-humano" class="caracteristica"></div></label>
                        </div>
                        <div class="form-group row">
                            <label for="orc-forca" class="col-md-4">Força:</label><div class="col-md caracteristica" id="forca-humano"></div>
                        </div>
                        <div class="form-group row">
                            <label for="orc-agilidade" class="col-md-4">Agilidade:</label><div id="agilidade-humano" class="col-md caracteristica"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-self-start px-4">
                <div class="card">
                    <div class="card-header">
                        LOG DE BATALHA
                    </div>
                    <div class="card-body" id="log-batalha" style="width:100%; height: 400px; overflow-y: scroll">

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" id="btn-iniciativa" style="display:none;" >Iniciativa</button>
                        <a href="{{route("iniciar_batalha",["idHumano"=>$idHumano,"idOrc"=>$idOrc])}}" class="btn btn-primary" id="btn-jogar-novamente" style="display:none;" >Jogar Novamente</a>
                        <button class="btn btn-danger" id="btn-ataque" style="display:none;">Ataque</button>
                        <a href="{{route("criar_personagem")}}" class="btn btn-success" id="btn-nova-partida" style="display:none;">Nova Partida</a>

                    </div>
                </div>


            </div>
            <div class="align-self-start">
                <div class="card">
                    <img src="{{asset('img/orc.jpg')}}" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">ORC</h1>
                        <input type="hidden" id="id-orc" value="{{$idOrc}}">
                        <div class="form-group">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" id="barra-progresso-orc" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vida-orc" class="col-md-4">Vida:</label> <div class="col-md caracteristica" id="vida-orc"></div>
                        </div>
                        <div class="form-group">
                            <label for="nome-orc">Nome do Jogador:<div id="nome-orc" class="caracteristica"></div></label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4" for="orc-forca">Força:</label><div class="col-md caracteristica" id="forca-orc"></div>
                        </div>
                        <div class="form-group row">
                            <label for="orc-agilidade" class="col-md-4">Agilidade:</label><div class="col-md caracteristica" id="agilidade-orc"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/client/batalha.js')}}"></script>
    <script>
    </script>


@endsection