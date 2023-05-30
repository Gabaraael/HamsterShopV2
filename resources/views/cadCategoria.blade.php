@extends('template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Categoria</h5>
                    <form action="{{ route('categoria.cadastro') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputCategoria">Categoria</label>
                            <input type="text" class="form-control" id="inputCategoria" placeholder="Categoria" name="nome" value="">
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
@if(session('alerta'))
    <div class="alert alert-info">
        {{ session('alerta') }}
    </div>
@endif
@endsection
