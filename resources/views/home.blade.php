<!-- Listagem dos produtos -->
@extends ('template')

@section('content')

<div class="row text-black">
@csrf
@foreach ($produto as $prod)
                <div class="col-xl-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-car" style="font-size: 3rem"> </i>
                                    <div class="ms-3">
                                        <img src="{{ asset('images/' . $prod->image_link) }}" alt="">
                                        <p class="fw-bold mb-1">
                                            {{ $prod->nome }}
                                        </p>
                                        <p class="text-muted mb-0">
                                            <strong>
                                                Preço
                                            </strong>
                                            {{ $prod->preco }}
                                        </p>
                                        <p class="text-muted mb-0">
                                            <strong>
                                                Categoria
                                            </strong>
                                            {{$prod->categoria->nome}}                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div> 
@endforeach
@endsection