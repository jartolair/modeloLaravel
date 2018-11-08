<?php

use Illuminate\Database\Seeder;

class messageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
	        DB::table('messages')->insert([
	        	'nombre' => str_random(10),
	        	'mensaje' => str_random(10),
	        	'email'=> str_random(10).'@gmail.com',
	        	'mayorDeEdad' => random_int(0, 1),
	        	'salario' => random_int(0, 10)/1.5,
	        	'fecha_nacimiento'=>random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1, 28),
	        	'contrasena'=>bcrypt(str_random(10)),
	        	'descripcion'=>str_random(100)
	        	]);
        }
    }
}
