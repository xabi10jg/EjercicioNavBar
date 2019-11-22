<!DOCTYPE html>
<html>
<head>
  <title>Empleados</title>
</head>
<body>



  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
      </tr>
      @foreach ($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleado',$empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
      </tr>
      @endforeach

    </table>


</body>
</html>