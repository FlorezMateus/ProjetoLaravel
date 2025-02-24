<!DOCTYPE html>
<html>
<head>
<title>Prohuto</title>
</head>
<body>

<h1>Listagem de Produtos</h1>

<table>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>QUANTIDADE</th>
      <th>VALOR</th>
    </tr>
    @foreach ($produtos as $value)
        <tr>
            <td>{{$value -> id}}</td>
            <td>{{$value -> nome}}</td>
            <td>{{$value -> quantidade}}</td>
            <td>{{$value -> valor}}</td>
        </tr>
    @endforeach

  </table>

</body>
</html>
