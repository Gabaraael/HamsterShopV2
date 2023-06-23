<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <style>
      * {
        font-family: arial, sans-serif;
      }
      h1 {
        font-size: 3rem;
        text-align: center;
      }
      table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
      }
      th, td {
        border: solid 1px gray;
        padding: 0.5rem;
        font-size: 1.5rem;
        text-align: center;
      }
      img {
        width: fit-content;
        height: 100px;
      }
    </style>
  </head>
  <body>
    <h1>Relatório de Produtos</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Roedor</th>
          <th>Estoque</th>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
          <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->preco}}</td>
            <td>{{$produto->roedor->especie}}</td>
            <td>{{$produto->estoque->quantidade}}</td>
            <td>{{$produto->categoria->nome}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
