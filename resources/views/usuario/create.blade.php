@extends('adminlte::page')

@section('title', 'Crear Usuario')


@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">


<div class="container">

  <section >
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px; ">
              <div class="card-body p-4 p-md-5" style="padding: 1.5rem!important;">
                  <h1 class="text-center">Crear un usuario</h1>

                <form action="/usuarios" method="POST" >
                  @csrf
                  <div class="row">
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
 

                        <input type="number" id="identificador" name="identificador" class="form-control form-control-lg"
                        value="{{old('identificador')}}"
                        >
                        <label class="form-label" for="" >Identificador</label>
                        <br>

                        @if ($errors->has('identificador'))
                        <p class="alert alert-danger">{{ $errors->first('identificador') }}</p>
                           @endif
                        

                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="email" id="Email" name="Email" class="form-control form-control-lg"
                        value="{{old('Email')}}"
                        >
                        <label class="form-label" for="" >Email</label>
                        <br>
                        @if ($errors->has('Email'))
                        <p class="alert alert-danger">{{ $errors->first('Email') }}</p>
                           @endif
                      </div>
    
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">
    
                      <div class="form-outline datepicker w-100">
                        <input type="password" class="form-control form-control-lg" id="Contraseña" name="Contraseña" 
                        value="{{old('Contraseña')}}"
                        >
                        <label for="" class="form-label" >Contraseña</label>
                        <br>
                        @if ($errors->has('Contraseña'))
                        <p class="alert alert-danger">{{ $errors->first('Contraseña') }}</p>
                           @endif
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4">
    
                      <div class="form-outline">
                        <input type="password" id="Confirmar" class="form-control form-control-lg" name="Confirmar" 
                        value="{{old('Confirmar')}}"
                        >
                        <label class="form-label" for="" >Confirmar contraseña</label>
                        <br>
                        @if ($errors->has('Confirmar'))
                        <p class="alert alert-danger">{{ $errors->first('Confirmar') }}</p>
                           @endif
                      </div>
    
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div class="form-outline">
                        <input type="text" id="Nombre" name="Nombre" class="form-control form-control-lg" 
                        value="{{old('Nombre')}}"
                        >
                        <label class="form-label" for="" >Nombre</label>
                        <br>
                        @if ($errors->has('Nombre'))
                        <p class="alert alert-danger">{{ $errors->first('Nombre') }}</p>
                           @endif
                      </div>
    
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
    
                      <div class="form-outline">
                        <input type="tel" id="Numero" name="Numero" class="form-control form-control-lg" 
                        value="{{old('Numero')}}"
                        >
                        <label class="form-label" for="" >Numero celular</label>
                        <br>

                        @if ($errors->has('Numero'))
                        <p class="alert alert-danger">{{ $errors->first('Numero') }}</p>
                           @endif
                      </div>
    
                    </div>
                  </div>


                  <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="text" id="Cedula" name="Cedula" class="form-control form-control-lg" 
                          value="{{old('Cedula')}}"
                          >
                          <label class="form-label" for="" >Cedula</label>
                          <br>
                          @if ($errors->has('Cedula'))
                        <p class="alert alert-danger">{{ $errors->first('Cedula') }}</p>
                           @endif
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="date" id="nacimiento" name="nacimiento" class="form-control form-control-lg"
                          value="{{old('nacimiento')}}"
                          >
                          <label class="form-label" for="" >Fecha de nacimiento </label>
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
                          <input type="number" id="cuidad" name="cuidad" class="form-control form-control-lg" 
                          value="{{old('cuidad')}}"
                          >
                          <label class="form-label" for="" >Codigo de cuidad</label>
                          <br>
                          @if ($errors->has('cuidad'))
                        <p class="alert alert-danger">{{ $errors->first('cuidad') }}</p>
                           @endif
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div >
                          <input type="text" id="rol" name="rol" class="form-control form-control-lg"  
                          value="{{old('rol')}}"
                          >
                          
                          <label class="form-label" for="" >Admin o User</label>
                          <br>
                          @if ($errors->has('rol'))
                        <p class="alert alert-danger">{{ $errors->first('rol') }}</p>
                           @endif
                        </div>
                    </div>
                    

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input class="btn btn-primary btn-lg" type="submit" value="Crear" />
                        </div>
                        
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

