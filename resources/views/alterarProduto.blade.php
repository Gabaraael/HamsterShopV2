@extends ('template')

@section('content')

<form action = "{{ route('produto.alterar')}}" method = "POST">
@csrf
@method('PUT')
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDescricaol4">Produto Alterar</label>
      <select name="produto" class="form-select" aria-label="produto">
        <option selected value="-1">Selecione um produto para alterar</option>
          @foreach ($produto as $prod)
                    <option value="{{ $prod->id }}">{{ $prod->nome }}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Tipo de roedor</label>
      <select name="roedor_id" class="form-select" aria-label="roedor_id">
        <option selected value="-1">Selecione uma roedor</option>
          @foreach ($roedor as $roed)
                    <option value="{{ $roed->id }}">{{ $roed->especie }}</option>
          @endforeach
      </select>    
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Categoria</label>
      <select name="categoria_id" class="form-select" aria-label="categoria_id">
        <option selected value="-1">Selecione uma categoria</option>
          @foreach ($categoria as $cat)
            <option value="{{ $cat->id }}"{{ $cat->id == $cat->categoria ? 'selected' : '' }}>{{ $cat->nome }}</option>
          @endforeach
      </select>
    </div>

    </div class="form-group col-md-6" >
      <label for="inputDescricaol4">Nome do Produto</label>
      <input type="text" class="form-control" id="inputDescricaol4" placeholder="Nome do produto" name = "nome">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPreco4">Preco</label>
      <input type="number" step="0.01" min= "0" class="form-control" id="inputPreco4" placeholder="preco" name = "preco">
    </div>

    <div class="form-group col-md-6">
      <label for="inputQuantidade4">Quantidade</label>
      <input type="number" class="form-control" id="inputQuantidade4" placeholder="quantidade" name = "quantidade">
    </div>

  </div>
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>
@endsection

