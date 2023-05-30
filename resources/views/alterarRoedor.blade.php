@extends('template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Alteração de Roedor</h5>
                    <form action="{{ route('roedor.alterar') }}" method="POST">
                        @csrf                        
                        <div class="form-group">
                            <label for="inputRoedor">Roedor</label>
                            <select name="roedor" class="form-select" aria-label="roedor" id="roedorSelected">
                                <option selected value="-1">Selecione um roedor</option>
                                @foreach ($roedor as $roed)
                                <option value="{{ $roed->id }}" {{ $roed->id == $roed->roedor ? 'selected' : '' }}>
                                    {{ $roed->especie }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputEspecie">Espécie</label>
                            <input type="text" class="form-control" id="inputEspecie" placeholder="Espécie" name="especie" value="">
                        </div>
                        <div class="mt-3 d-flex gap-1">
                        @method('PUT')                          
                            <button type="submit" class="btn btn-primary">Alterar</button>
                            </form>                             
                        
                        <form action="{{ route('roedor.remover') }}" method="POST">
                        @csrf
                        @method('DELETE')       
                        <input type="hidden" name="roedor" id="roedorHidden" value="">
                            <button type="submit" class="btn btn-danger">Remover</button>                     
                   
                    </div>
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
    document.getElementById('roedorSelected').addEventListener('change', function() {
        document.getElementById('roedorHidden').value = this.value;
    });
</script>

@endsection


