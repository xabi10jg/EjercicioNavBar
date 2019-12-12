@include('layouts.nav')
<h2>Proyectos</h2>
	<table style="text-align: center;">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Empleado Encargado</th>
      </tr>
      @foreach ($proyectos as $proyecto)
      <tr>
        <td><a href="{{route('proyectos.show',$proyecto->id)}}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a href="{{route('empleado',$proyecto->empleado_id)}}">{{$proyecto->empleado_id}}</a></td>
        <td><a href="{{route('proyectos.edit', $proyecto->id)}}">Editar</a></td>
        <td><a href="{{route('proyectos.destroy', $proyecto->id)}}">Eliminar</a></td>
        
        
      </tr>
      @endforeach
    </table>

    <a href="{{route('proyectos.create')}}">Crear Proyecto</a>


	
     

    
	
	
</body>
</html>