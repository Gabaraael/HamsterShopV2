<!-- Listagem dos produtos -->
@extends('template')

@section('content')

@if(session('alerta'))
    <div class="alert alert-info">
        {{ session('alerta') }}
    </div>
@endif

<div class="row text-black">
    @csrf
    @foreach ($produto as $prod)
    <div class="col-xl-4 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <img src="{{ asset('images/' . $prod->image_link) }}" alt="" class="rounded-circle" style="width: 10rem; height: 10rem;">
                </div>
                <p class="fw-bold mb-1">
                    {{ $prod->nome }}
                </p>
                <p class="text-muted mb-0">
                    <strong>Preço</strong> {{ $prod->preco }}
                </p>
                <p class="text-muted mb-0">
                    <strong>Categoria</strong> {{ $prod->categoria->nome }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
