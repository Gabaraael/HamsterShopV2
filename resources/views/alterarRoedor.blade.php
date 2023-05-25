@extends ('template')

@section('content')

<body>
<form action = "{{ route('roedor.alterar')}}" method = "POST">
@csrf
@method('PUT')
  <div class="form-row">
    <div class="form-group col-md-6">
    <select name="roedor" class="form-select" aria-label="roedor">
                                <option selected value="-1">Selecione uma roedor</option>
                                @foreach ($roedor as $roed)
                                    <option value="{{ $roed->id }}"
                                        {{ $roed->id == $roed->roedor ? 'selected' : '' }}>
                                        {{ $roed->especie }}</option>
                                @endforeach
                            </select>
      <label for="inputEspecie4">Especie</label>
      <input type="text" class="form-control" id="inputEspecie4" placeholder="Especie" name = "especie" value= "">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>    
</body>
@endsection