@php
use App\Models\Roedor;

$roedores = Roedor::orderBy('especie')->get();
@endphp

<!doctype html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>HamsterShop</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
  <link rel="stylesheet"  type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>  

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ACA1E4">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand --> 
      <a class="navbar-brand mt-2 mt-lg-0">
        <img
          src="./../../assets/BlackWhiteHamster.svg"                       
          alt="Hamster Logo"
          loading="lazy"          
          width= 120px
          height=120px;
        />
      </a>
      <!-- Left links -->     
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Roedores
          </a>          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
               
      
      
        @foreach ($roedores as $roedor)
        @php
        $listarProdutos = route('produto.listar', ['especie' => strtolower($roedor['especie'])]);  
        @endphp
        <li><a class="dropdown-item" href="{{ $listarProdutos }}">{{ ucfirst(strtolower($roedor['especie'])) }}</a></li>
        @endforeach
  
                   
          </ul>
        </li>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="">Produtos</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->    

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
      @if(session()->get('logado'))
      <a class='nav-link active' type="submit"  href="{{ route('deslogar') }}">Deslogar</a>     
      @else
      <a class='nav-link active' type="submit"  href="{{ route('login') }}">Logar</a>     
      @endif                      
      </a>  
    </div>
   

    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<main class="container">
    <div class="p-5" id="border-main">
    @yield('content')
    </div>
  </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
  <style>
  .button-color {
  background-color: #F3EBFC;
  }
  .button-color:hover {
  background-color: plum;
  }
  
  </style>
  </html>