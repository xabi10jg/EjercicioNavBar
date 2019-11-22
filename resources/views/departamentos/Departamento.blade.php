<!DOCTYPE html>
<html>
<head>
  <title>Departamento</title>
</head>
<body>



  <h2>Empleado</h2>

  @foreach ($departamentos as $departamento)

    <ul>
      <li>Id: {{$departamento->id}}</li>
      <li>Nombre: {{$departamento->nombre}}</li>
      </ul>
        
      @endforeach

    


</body>
</html>