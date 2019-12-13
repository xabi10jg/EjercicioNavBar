@include('layouts.nav')



  <h2>Empleado</h2>

  @foreach ($empleados as $empleado)

    <ul>
      <li>Id: {{$empleado->id}}</li>
      <li>Nombre: {{$empleado->nombre}}</li>
      <li>Email: {{$empleado->email}}</li>
      <li>Telefono: {{$empleado->telefono}}</li>
      <li>Proyecto Asignado: <a href="{{route('proyectos.show',$empleado->proyecto_id)}}">{{$empleado->proyecto_id}}</a></li>
      <li>Departamento: <a href="{{route('departamento',$empleado->departamento_id)}}">{{$empleado->departamento_id}}</a></li>
      <li> Proyectos  en los que colabora
         @foreach($empleado->proyectos as $proyecto)
              <a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a>
          @endforeach
      </li>

      <li>Jefe de Departamento: <a href="{{route('departamento', $empleado->jefe->id)}}">{{$empleado->jefe->id}}</a></li>
      
      </ul>
        
      @endforeach

    


</body>
</html>