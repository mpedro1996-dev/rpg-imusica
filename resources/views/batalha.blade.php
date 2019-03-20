@extends('principal')

@section('content')
    <style>
        .log-humano{
            text-align: left;
            color:#f00;
        }
        .log-orc{
            text-align: right;
            color:#0f0;
        }
    </style>
    <div class="container-fluid" id="app">
        <div class="container d-md-flex justify-content-between py-4">
            <div class="align-self-start">
                <div class="card">
                    <img src="{{asset('img/human.jpg')}}" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">HUMANO</h1>
                        <div class="form-group">
                            <label for="vida-humano">Vida:<div id="vida-humano"></div></label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" id="barra-progresso-humano" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome-orc">Nome do Jogador:<div id="nome-orc"></div></label>
                        </div>
                        <div class="form-group">
                            <label for="orc-forca">Força:<div id="orc-forca"></div></label>
                        </div>
                        <div class="form-group">
                            <label for="orc-agilidade">Agilidade:<div id="orc-agilidade"></div></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="align-self-start px-4">
                <div class="card w-100">
                    <div class="card-header">
                        LOG DE BATALHA
                    </div>
                    <div class="card-body" id="log-batalha" style="width:100%; height: 400px; overflow-y: scroll">
                        <p class="log-humano">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, quae?
                        </p>
                        <p class="log-orc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, sint?
                        </p>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Iniciativa</button>
                        <button class="btn btn-danger">Ataque</button>

                    </div>
                </div>


            </div>
            <div class="align-self-start">
                <div class="card">
                    <img src="{{asset('img/orc.jpg')}}" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">ORC</h1>
                        <div class="form-group">
                            <label for="vida-orc">Vida:<div id="vida-orc"></div></label>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" id="barra-progresso-orc" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome-orc">Nome do Jogador:<div id="nome-orc"></div></label>
                        </div>
                        <div class="form-group">
                            <label for="orc-forca">Força:<div id="orc-forca"></div></label>
                        </div>
                        <div class="form-group">
                            <label for="orc-agilidade">Agilidade:<div id="orc-agilidade"></div></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection