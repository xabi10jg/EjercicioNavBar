@include('layouts.nav')



  <h2>Proyecto</h2>

  @foreach ($proyectos as $proyecto)

    <ul>
      <li>Nombre: {{$proyecto->nombre}}</li>
      <li>Título: {{$proyecto->titulo}}</li>
      <li>Fecha de Inicio: {{$proyecto->fechainicio}}</li>
      <li>Fecha  de Fin: {{$proyecto->fechafin}}</li>
      <li>Empleado Encargado: <a href="{{route('empleado',$proyecto->empleado_id)}}">{{$proyecto->empleado_id}}</a></li>
      <li>Empleados que colaboran: 

        @foreach($proyecto->empleados as $empleado)
                <a href="{{route('empleado', $empleado->id)}}">{{$empleado->id}}</a>
            @endforeach

      </li>
      </ul>
        
      @endforeach

    


</body>
</html>