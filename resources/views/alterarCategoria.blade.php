@extends ('template')

@section('content')

<form action = "{{ route('categoria.alterar')}} " method = "POST">
@csrf
@method('PUT')
  <div class="form-row">
    <div class="form-group col-md-6">
    <select name="categoria" class="form-select" aria-label="categoria">
                                <option selected value="-1">Selecione uma categoria</option>
                                @foreach ($categoria as $cat)
                                    <option value="{{ $cat->id }}"
                                        {{ $cat->id == $cat->categoria ? 'sel ected' : '' }}>
                                        {{ $cat->nome }}</option>
                                @endforeach
                            </select>
      <label for="inputEmail4">Categoria</label>
      <input type="text" class="form-control" id="inputCategoria4" placeholder="Categoria" name = "nome" value="">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>
@endsection

                            