<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Department;
use App\Models\City;




class todosusuarios extends Controller
{
    /**
     *  return de los usuarios de la tabla user de la base de datos 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuarios = User::all();
        return view('usuario.index')->with('usuarios', $usuarios);
    }

 

    /**
     * return de la vista create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Metodo para crear un nuevo usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // validaciones del formulario para crear un usuario
        
        $request->validate([

            'identificador' => ['required','numeric'],
            'Email' => ['required', 'email', 'unique:users,email' ],
            'Contraseña' => ['required' , 'min:8' , 'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/' ],
            'Nombre' => ['required', 'max:100'],
            'Numero' => ['required', 'digits:10'],
            'Cedula' => ['required' , 'string', 'max:11'],
            'rol' => ['required'],
            'nacimiento' => ['required' ,'date_format:Y-m-d', 'before_or_equal:-18 years'  ],
            'cuidad' => ['required'],
            'Confirmar' => ['required' , 'min:8' , 'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', ],


        ]);
    



        $usuarios = new User();
        $usuarios-> indetificator = $request->get('identificador');
        $usuarios-> email = $request->get('Email');
        $usuarios->password = bcrypt($request->get('Contraseña'));
        $usuarios-> name = $request->get('Nombre');
        $usuarios-> numero = $request->get('Numero');
        $usuarios-> cedula = $request->get('Cedula');
        $usuarios-> rol = $request->get('rol');
        $usuarios-> fechaNacimiento = $request->get('nacimiento');
        $usuarios-> codigoCuidad = $request->get('cuidad');
   

        $usuarios->save();
        session()->flash('exitooo');
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Metodo para obtener el id un usuario 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('/usuario.edit')->with('usuario', $usuario);
    }

    /**
     * Metodo para actulizar campos de los usuarios obteniendo el id 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $request->validate([

            'nacimiento' => ['required' ,'date_format:Y-m-d', 'before_or_equal:-18 years'  ],
            'Nombre' => ['required', 'max:100'],
            'Numero' => ['required', 'digits:10'],
            'rol' => ['required'],
            'nacimiento' => ['required' ,'date_format:Y-m-d', 'before_or_equal:-18 years'  ],
            'cuidad' => ['required'],

        ]);
        
   

        $usuarios = User::find($id);


        $usuarios-> indetificator = $request->get('Identificador');
        $usuarios-> email = $request->get('Email');
        $usuarios-> name = $request->get('Nombre');
        $usuarios-> numero = $request->get('Numero');
        $usuarios-> cedula = $request->get('Cedula');
        $usuarios-> fechaNacimiento = $request->get('nacimiento');
        $usuarios-> codigoCuidad = $request->get('cuidad');
   

        $usuarios->save();
        return redirect('/usuarios');


    }

    /**
     * Metodo para eliminar un usuario por el id 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/usuarios')->with('eliminar','ok');

    }


   
    
}
