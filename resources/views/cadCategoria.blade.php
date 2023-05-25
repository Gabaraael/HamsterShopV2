@extends ('template')

@section('content')

<form action = "{{ route('categoria.cadastro') }} " method = "POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Categoria</label>
      <input type="text" class="form-control" id="inputCategoria4" placeholder="Categoria" name = "nome" value="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection