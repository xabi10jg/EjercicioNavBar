<!DOCTYPE html>
<html>
<head>
	<title>Departamentos</title>
</head>
<body>
	<h2>Departamentos</h2>

  <table>
    
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td>{{$departamento->id}}</td>
      <td>{{$departamento->nombre}}</td>
    </tr>
    @endforeach

  </table>

</body>
</html>