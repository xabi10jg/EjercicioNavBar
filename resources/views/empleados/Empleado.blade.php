<!DOCTYPE html>
<html>
<head>
  <title>Empleado</title>
</head>
<body>



  <h2>Empleado</h2>

  @foreach ($empleados as $empleado)

    <ul>
      <li>Id: {{$empleado->id}}</li>
      <li>Nombre: {{$empleado->nombre}}</li>
      <li>Email: {{$empleado->email}}</li>
      <li>Telefono: {{$empleado->telefono}}</li>
      </ul>
        
      @endforeach

    


</body>
</html>