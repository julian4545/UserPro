@extends('adminlte::page')

@section('title', 'Post Usuarios')


@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">




<div class="container">

  <a>
      <h1  > &nbsp; </h1>
  </a>

  <h1 class="text-center "> Post de todos los usuarios</h1>


    <table id="postdata" class="table  mt-5" style="width:100%">

     
      <thead class="table-dark">
  
          <tr>
              <th scope="col">
                ID
              </th>
  
  
              <th scope="col">
                UserId
              </th>
  
              <th scope="col">
                Title
              </th>
  
              <th scope="col">
                Body
              </th>
  
              <th scope="col">
                Imagen
              </th>

          </tr>
      </thead>
  
      <tbody>
  
        @foreach ($usuarios as $usuario)
            <tr>
  
              <td>
                {{$usuario['id']}}
              </td>
  
              <td>
                {{$usuario['userId']}}
              </td>
  
              <td>
                 {{$usuario['title']}}
              </td>
  
              <td>
                 {{$usuario['body']}}
              </td>
  
              <td scope="col">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png"
                style="width: 40%;">
              </td>
  
            
            </tr>
        @endforeach
  
      </tbody>
  
    </table>

    @section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script  src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
    
    
    $(document).ready(function() {
        $('#postdata').dataTable( {
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


