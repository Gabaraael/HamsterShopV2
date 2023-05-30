@extends ('template')

@section('content')

<form action = "{{ route('criaUsuario')}}" method = "POST">
@csrf
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Your name</label>
      <input type="text" class="form-control" id="inputNome4" placeholder="Nome" name= "nome" value = "" style="background-color: #F3EBFC">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name= "email" value = "" style="background-color: #F3EBFC">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="senha" value = "" style="background-color: #F3EBFC">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone">Celular</label>
    <input type="text" class="form-control button-color" id="inputPhone" placeholder="xx xxxxxxxx" name= "telefone" value = "" style="background-color: #F3EBFC">
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Tipo de Usuario</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flg_admin" id="gridRadios1" value="1" checked>
          <label class="form-check-label" for="gridRadios1">
            Administrador
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flg_admin" id="gridRadios2" value="0">
          <label class="form-check-label" for="gridRadios2">
            Comum
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection