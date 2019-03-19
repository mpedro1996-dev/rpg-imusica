@extends('principal')

@section('content')
    <div class="container-fluid">
        <div class="container d-md-flex justify-content-between py-4">
            <div class="align-self-start">
                <div class="card">
                    <img src="img/human.jpg" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">HUMANO</h1>
                        <div class="form-group">
                            <label for="nome-humano">Nome do Jogador</label>
                            <input type="text" class="form-control" id="nome-humano">
                        </div>

                    </div>
                </div>
            </div>
            <div class="align-self-center">
                <div class="m-auto w-100">
                    <img src="img/versus.png" class="img-fluid" alt="..." style="height: 100px;">
                </div>
                <div class="py-2 m-auto w-100">
                    <button type="button" class="btn btn-primary">Iniciar Batalha</button>
                </div>

            </div>
            <div class="align-self-start">
                <div class="card">
                    <img src="img/orc.jpg" class="card-img-top" alt="..." style="width: 300px; height: 300px;">
                    <div class="card-body">
                        <h1 class="text-center">ORC</h1>
                        <div class="form-group">
                            <label for="nome-humano">Nome do Jogador</label>
                            <input type="text" class="form-control" id="nome-orc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/client/criarPersonagem.js"></script>
@endsection