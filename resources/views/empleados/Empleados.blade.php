@include('layouts.nav')



  <h2>Empleados</h2>

    <table style="text-align: center;">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto Asignado</th>
        <th>Departamento</th>
        <th>Proyectos que colabora</th>
      </tr>
      @foreach ($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleado',$empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td><a href="{{route('proyectos.show',$empleado->proyecto_id)}}">{{$empleado->proyecto_id}}</a></td>
        <td><a href="{{route('departamento',$empleado->departamento_id)}}">{{$empleado->departamento_id}}</a></td>
        <td>
           @foreach($empleado->proyectos as $proyecto)
              <a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a>
            @endforeach
        </td>
        
      </tr>
      @endforeach

    </table>


</body> 
</html>