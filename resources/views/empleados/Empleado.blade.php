@include('layouts.nav')



  <h2>Empleado</h2>

  @foreach ($empleados as $empleado)

    <ul>
      <li>Id: {{$empleado->id}}</li>
      <li>Nombre: {{$empleado->nombre}}</li>
      <li>Email: {{$empleado->email}}</li>
      <li>Telefono: {{$empleado->telefono}}</li>
      <li>Proyecto Asignado:<a href="{{route('proyecto',$empleado->proyecto_id)}}">{{$empleado->proyecto_id}}</a></li>
      </ul>
        
      @endforeach

    


</body>
</html>