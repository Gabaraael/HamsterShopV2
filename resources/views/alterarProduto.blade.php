@extends('template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alteração de Produto</h5>
                    <form action="{{ route('produto.alterar') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputProduto">Produto a Alterar</label>
                            <select name="produto" class="form-select" aria-label="produto" id="produtoSelected">                            
                                <option selected value="-1">Selecione um produto para alterar</option>
                                @foreach ($produto as $prod)
                                    <option value="{{ $prod }}">{{ $prod->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputRoedor">Tipo de Roedor</label>
                                <select name="roedor_id" class="form-select" aria-label="roedor_id" id="roedorSelected">
                                    <option selected value="-1">Selecione um tipo de roedor</option>
                                    @foreach ($roedor as $roed)
                                        <option value="{{ $roed->id }}">{{ $roed->especie }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCategoria">Categoria</label>
                                <select name="categoria_id" class="form-select" aria-label="categoria_id" id="categoriaSelected">
                                    <option selected value="-1">Selecione uma categoria</option>
                                    @foreach ($categoria as $cat)
                                        <option value="{{ $cat->id }}"{{ $cat->id == $cat->categoria ? 'selected' : '' }}>
                                            {{ $cat->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNome">Nome do Produto</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Nome do produto" name="nome" id="nomeProduto">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPreco">Preço</label>
                                <input type="number" step="0.01" min="0" class="form-control" id="inputPreco" placeholder="Preço" name="preco">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputQuantidade">Quantidade</label>
                                <input type="number" class="form-control" id="inputQuantidade" placeholder="Quantidade" name="quantidade">
                            </div>
                        </div class="mt-3 d-flex" >
                        <button type="submit" class="btn btn-primary">Alterar</button>
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

<script>
    document.getElementById('produtoSelected').addEventListener('change', function() {
      data = this.value  
      var produto = JSON.parse(data)

      console.log(produto)
        document.getElementById('categoriaSelected').value = produto.categoria_id
        document.getElementById('roedorSelected').value = produto.roedor_id
        document.getElementById('inputPreco').value = produto.preco   
        document.getElementById('inputNome').value = produto.nome           
        
    });
</script>
@endsection