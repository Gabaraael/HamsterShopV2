@extends ('template')

@section('content')

<form action = "{{ route('roedor.cadastro') }}" method = "POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">


    <div class="form-group col-md-4">
      <label for="arquivo" class="form-label">Figura</label>
      <input class="form-control" type="file" name="arquivo" accept="image/*">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Tipo de roedor</label>
      <select name = "roedor_id" id="inputState" class="form-control">
      <option value="">rato</option>
      </select>
    
    </div>
    <div class="form-group col-md-4">

      <label for="inputState">Categoria</label>
      <select name = "categoria_id" id="inputState" class="form-control">
      <option value="">racao</option>
      </select>

    </div>
      <label for="inputDescricaol4">Nome do Produto</label>
      <input type="text" class="form-control" id="inputDescricaol4" placeholder="Nome do produto" name = "descricao">
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
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection

