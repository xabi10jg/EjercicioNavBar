@include('layouts.nav')

<form action="{{route('proyectos.store')}}" method="post">
	
	@csrf


	
      Nombre: <input type="text" name="nombre"><br>
      Título: <input type="text" name="titulo"><br>
      Fecha de Inicio: <input type="text" name="finicio"><br>
      Fecha  de Fin: <input type="text" name="ffin"><br>
      Horas estimadas: <input type="text" name="hestimadas"><br>
      Empleado Encargado: <input type="text" name="eencargado"><br>
      <button type="submit">Enviar</button>

      
        
     
	

</form>