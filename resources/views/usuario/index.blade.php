@extends('adminlte::page')

@section('title', 'Usuarios')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection



@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">






<div class="container">

  <a>
      <h1  > &nbsp; </h1>
  </a>

  <h1 class="text-center"> Todos los usarios</h1>


  <table id="usuariosdata" class="table  mt-5" style="width:100%">
  
    <thead class="table-dark">

        <tr>
            <th scope="col">
              ID
            </th>


            <th scope="col">
              Indetificator
            </th>

            <th scope="col">
              Email
            </th>

            <th scope="col">
              Nombre
            </th>

            <th scope="col">
              Rol
            </th>

            <th scope="col">
              Edad
            </th>

            <th scope="col">
              Numero
            </th>


            <th scope="col">
              Cedula
            </th>

            <th scope="col">
              Fecha de Nacimiento
            </th>

            <th scope="col">
              Codigo Cuidad
            </th>
            

            <th scope="col">
              Acciones
            </th>

        </tr>
    </thead>

    <tbody>

      @foreach ($usuarios as $usuario)
          <tr>

            <td>
              {{$usuario-> id}}
            </td>

            <td>
              {{$usuario-> indetificator}}
            </td>

            <td>
              {{$usuario-> email}}
            </td>

            <td>
              {{$usuario-> name}}
            </td>

            <td scope="col">
              {{$usuario-> rol}}
            </td>

            <td scope="col">
              {{$usuario-> edad}}
            </td>

            <td>
              {{$usuario-> numero}}
            </td>

            <td>
              {{$usuario-> cedula}}
            </td>

            <td>
              {{$usuario-> fechaNacimiento}}
            </td>

            <td>
              {{$usuario-> codigoCuidad}}
            </td>

            <td> 
              <form class="eliminar" action="{{route('usuarios.destroy' ,$usuario->id)}}" method="POST">
                @csrf
                @method('DELETE')
              <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info"> Editar</a>
              <button type="submit" class="btn btn-danger"> Eliminar  </button>
            </form>
            </td>
          </tr>
      @endforeach

    </tbody>

  </table>

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script  src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar')=='ok')

<script>

Swal.fire(
      '¡Eliminado!',
      'Usuario eliminado correctamente',
      'success'
    )
</script>
@endif

<script>
  $('.eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
  title: 'Estas seguro de eliminar este usuario?',
  text: "¡No podrás revertir esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }
})
  });



</script>

<script>


$(document).ready(function() {
    $('#usuariosdata').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        "lengthMenu": [[5,10,50, -1],[5,10,50,"ALL"]]
    } );
} );



</script>

@endsection


</div>

@stop

