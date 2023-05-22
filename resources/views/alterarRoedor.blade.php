@extends ('template')

@section('content')

<body>
<form action = "" method = "POST">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEspecie4">Especie</label>
      <input type="text" class="form-control" id="inputEspecie4" placeholder="Especie" name = "especie" value= "">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>    
</body>
@endsection