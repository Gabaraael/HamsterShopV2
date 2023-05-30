@extends('template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produto</h5>
                    <form action="{{ route('produto.cadastro') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputFigura" class="form-label">Figura</label>
                                    <input class="form-control" type="file" name="image" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputRoedor">Tipo de Roedor</label>
                                    <select name="roedor_id" class="form-select" aria-label="roedor_id">
                                        <option selected value="-1">Selecione um tipo de roedor</option>
                                        @foreach ($roedor as $roed)
                                            <option value="{{ $roed->id }}">{{ $roed->especie }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCategoria">Categoria</label>
                                    <select name="categoria_id" class="form-select" aria-label="categoria_id">
                                        <option selected value="-1">Selecione uma categoria</option>
                                        @foreach ($categoria as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $cat->categoria ? 'selected' : '' }}>
                                                {{ $cat->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputNome">Nome do Produto</label>
                                    <input type="text" class="form-control" id="inputNome" placeholder="Nome do produto" name="nome">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPreco">Preço</label>
                                    <input type="number" step="0.01" min="0" class="form-control" id="inputPreco" placeholder="Preço" name="preco">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputQuantidade">Quantidade</label>
                                    <input type="number" class="form-control" id="inputQuantidade" placeholder="Quantidade" name="quantidade">
                                </div>
                            </div>
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
@endsection
