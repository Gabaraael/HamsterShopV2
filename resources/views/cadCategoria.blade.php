@extends ('template')

@section('content')

<form action = " " method = "POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Categoria</label>
      <input type="categoria" class="form-control" id="inputCategoria4" placeholder="Categoria" name = "nome" value="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection