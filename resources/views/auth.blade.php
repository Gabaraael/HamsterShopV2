@extends ('template')


@section('content')
<div class='row'>
  <form action = "{{ route('roedor.alterar')}}" method="post" name="login" id="login">
@csrf
    <div class="col-md-3 mb-1s">
      <label for="email" class="form-label">E-mail</label>
      <input class='form-control button-color' type="email" name="email" value="" style="background-color: #F3EBFC">
    </div>
    <div class="col-md-3 mb-1">
      <label for="senha" class="form-label">Senha</label>
      <input class='form-control button-color' type="password" name="senha" value="" style="background-color: #F3EBFC">          
    </div>

    <button class="btn btn-primary" type="submit" name="button" >Entrar</button>
    <a class="btn btn-dark" href="{{ route('cadastraUsuario') }}">Cadastrar</a>
  </form>
</div>
@endsection