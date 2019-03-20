@extends('principal')

@section('content')
    <div class="container-fluid" id="app">
        <div class="container d-md-flex justify-content-between py-4">
            <div class="align-self-start">
                <div class="card">
                    <img src="{{asset('img/human.jpg')}}" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">HUMANO</h1>
                        <div class="form-group">
                            <label for="vida">Vida</label>
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
            <div class="align-self-center">


            </div>
            <div class="align-self-start">
                <div class="card">
                    <img src="{{asset('img/orc.jpg')}}" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">ORC</h1>
                        <div class="form-group">
                            <label for="vida">Vida</label>
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