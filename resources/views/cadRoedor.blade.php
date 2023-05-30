@extends('template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Roedor</h5>
                    <form action="{{ route('roedor.cadastro') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputEspecie">Espécie</label>
                            <input type="text" class="form-control" id="inputEspecie" placeholder="Espécie" name="especie" value="">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@if(session('alerta-info'))
    <div class="alert alert-info">
        {{ session('alerta-info') }}
    </div>
@endif

@if(session('alerta-danger'))
    <div class="alert alert-danger">
        {{ session('alerta-danger') }}
    </div>
@endif

@endsection