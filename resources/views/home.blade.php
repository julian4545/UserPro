@extends('adminlte::page')

@section('title', 'home')


@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">




<div class="container">

  <a>
      <h1  > &nbsp; </h1>
  </a>

  <a>
    <h1 style="text-align: center;" > Bienvenido: {{ Auth::user()->name }} </h1>
</a>





  <div class="card mb-3 mt-5" style="max-width: 700px; margin: auto;    ">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy7_QUoROqodWIqh-_P_t1oOCuT9Xz8doR-3lIlGzFHbub2SOjL0RiBVyYz_M0a4PQiUY&usqp=CAU" class="card-img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="line-height: 28px;">
          <h5 class="card-title">Identificador: <a class="negrita"> {{ Auth::user()->indetificator }} </a> </h5>
          <br>
          <h5 class="card-title">Correo: <a class="negrita"> {{ Auth::user()->email }} </a></h5>
          <br>
          <h5 class="card-title ">  Nombre completo:<a class="negrita"> {{ Auth::user()->name }}  </a> </h5>
          <br>
          <h5 class="card-title">Numero de celular: <a class="negrita"> {{ Auth::user()->numero }} </a></h5>
          <br>
          <h5 class="card-title">Cedula: <a class="negrita"> {{ Auth::user()->cedula }}</a></h5>
          <br>
          <h5 class="card-title">Fecha de nacimiento: <a class="negrita"> {{ Auth::user()->fechaNacimiento }}</a></h5> 
          <br>
          <h5 class="card-title">Codigo de cuidad: <a class="negrita"> {{ Auth::user()->codigoCuidad }}</a></h5>
         
        </div>
      </div>
    </div>
  </div>



</div>












@stop


