@include('layouts.nav')
	<h2>Departamentos</h2>

  <table>
    
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="{{route('departamento',$departamento->id)}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
      <td>
        @foreach($departamento->empleado as $empleado)
          <a href="{{route('empleado', $empleado->id)}}">{{$empleado->id}}</a>,  
        @endforeach
      </td>
    </tr>
    @endforeach

  </table>

</body>
</html>