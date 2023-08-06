@extends('adminlte::page')

@section('title', 'Editar')


@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">




<div class="container">

    <section >
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h1 class="text-center">Editar un usuario</h1>


                  <form action="/usuarios/{{$usuario->id}}" method="POST" >
                    @csrf
                    @method('PUT')
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="number" id="Identificador" name="Identificador" class="form-control form-control-lg" value="{{$usuario->indetificator}}" required>
                          <label class="form-label" for="">Identificador</label>
                          <br>

                        @if ($errors->has('identificador'))
                        <p class="alert alert-danger">{{ $errors->first('identificador') }}</p>
                           @endif
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="email" id="Email" name="Email" class="form-control form-control-lg" value="{{$usuario->email}}" readonly="readonly" required>
                          <label class="form-label" for="">Email</label>
                        </div>
      
                      </div>
                    </div>
      
          
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="text" id="Nombre" name="Nombre" class="form-control form-control-lg" value="{{$usuario->name}}" required>
                          <label class="form-label" for="">Nombre</label>
                          <br>
                        @if ($errors->has('Nombre'))
                        <p class="alert alert-danger">{{ $errors->first('Nombre') }}</p>
                           @endif
                        </div>

                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="tel" id="Numero" name="Numero" class="form-control form-control-lg" value="{{$usuario->numero}}" required>
                          <label class="form-label" for="">Numero celular</label>
                          @if ($errors->has('Numero'))
                        <p class="alert alert-danger">{{ $errors->first('Numero') }}</p>
                           @endif
                        </div>
      
                      </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" id="Cedula" name="Cedula" class="form-control form-control-lg" value="{{$usuario->cedula}}" readonly="readonly"required >
                            <label class="form-label" for="">Cedula</label>
                          </div>
        
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="date" id="nacimiento" name="nacimiento" class="form-control form-control-lg" value="{{$usuario->fechaNacimiento}}" required>
                            <label class="form-label" for="">Fecha de nacimiento </label>
                            <br>
                          @if ($errors->has('nacimiento'))
                        <p class="alert alert-danger">{{ $errors->first('nacimiento') }}</p>
                           @endif
                          </div>
        
                        </div>
                      </div>
                      

                      
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div >
                            <input type="number" id="cuidad" name="cuidad" class="form-control form-control-lg" value="{{$usuario->codigoCuidad}}" required>
                            <label class="form-label" for="">Codigo de cuidad</label>
                            @if ($errors->has('cuidad'))
                        <p class="alert alert-danger">{{ $errors->first('cuidad') }}</p>
                           @endif
                          </div>
        
                        </div>

                        <div class="col-md-6 mb-4 pb-2">
                          <div >
                            <input type="text" id="rol" name="rol" class="form-control form-control-lg" value="{{$usuario->rol}}" required >
                            <label class="form-label" for="">Admin o User</label>
                            @if ($errors->has('rol'))
                            <p class="alert alert-danger">{{ $errors->first('rol') }}</p>
                               @endif
                          </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input class="btn btn-primary btn-lg" type="submit" value="Editar" />
                          </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

@stop












