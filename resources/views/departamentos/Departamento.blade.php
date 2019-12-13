@include('layouts.nav')



  <h2>Departamento</h2>

  @foreach ($departamentos as $departamento)

    <ul>
      <li>Id: {{$departamento->id}}</li>
      <li>Nombre: {{$departamento->nombre}}</li>
      <li>
                @foreach($departamento->empleado as $empleado)
                    <a href="{{route('empleado', $empleado->id)}}">{{$empleado->id}}</a>,  
                @endforeach
            </li>
      </ul>
        
      @endforeach

    


</body>
</html>