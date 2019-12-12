@include('layouts.nav')

<form action="{{route('proyectos.update', $proyectos->id)}}" method="post">
	@method('PUT')

	@csrf


	

      Título: <input type="text" name="titulo" value="{{$proyectos->titulo}}"><br>
      Fecha de Inicio: <input type="text" name="finicio" value="{{$proyectos->fechainicio}}"><br>
      Fecha  de Fin: <input type="text" name="ffin" value="{{$proyectos->fechafin}}"><br>
      Horas estimadas: <input type="text" name="hestimadas" value="{{$proyectos->horasestimadas}}"><br>
      Empleado Encargado: <input type="text" name="eencargado" value="{{$proyectos->empleado_id}}"><br>
      <button type="submit">Enviar</button>

      
        
     
	

</form>