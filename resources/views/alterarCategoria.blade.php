@extends('template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alteração de Categoria</h5>
                    <form action="{{ route('categoria.alterar') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputCategoria">Categoria</label>
                            <select name="categoria" class="form-select" aria-label="categoria" id="categoriaSelect">
                                <option selected value="-1">Selecione uma categoria</option>
                                @foreach ($categoria as $cat)
                                <option value="{{ $cat->id }}" {{ $cat->id == $cat->categoria ? 'selected' : '' }}>
                                    {{ $cat->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNome">Novo nome da categoria</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Novo nome" name="nome" value="">
                        </div>
                        <div class="mt-3 d-flex gap-1">
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Alterar</button>
                        
                    </form>

                    <form action="{{ route('categoria.remover') }}" method="POST" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="categoria" id="categoriaHidden" value="">
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                    </div>
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

<script>
    document.getElementById('categoriaSelect').addEventListener('change', function() {
        document.getElementById('categoriaHidden').value = this.value;
    });
</script>

@endsection
