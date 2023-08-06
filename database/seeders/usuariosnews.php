<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class usuariosnews extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo1@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Adel',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'admin',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);


        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo2@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Adonis ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'admin',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);



        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo3@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Aquiles',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'admin',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);


        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo4@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Azariel ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'admin',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);


        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo5@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Danilo ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'admin',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);

        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo6@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Darin ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'user',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);

        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo7@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Miguel ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'user',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);

        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo8@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Jeremías ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'user',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);

        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo9@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Tao ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'user',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);

        DB::table('users')->insert([

            'indetificator' => '456',
            'email' => 'camilo10@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Pablo ',
            'numero' =>'1234567',
            'cedula' => '1003660849',
            'rol' => 'user',
            'fechaNacimiento' => '1990-08-15',
            'codigoCuidad' => '789',
            
         

        ]);

   


    }
}
