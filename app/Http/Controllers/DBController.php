<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class DBController extends Controller
{
	public function selectAll(){
    	$mensaje = DB::table('messages')->get();
    	return $mensaje;
    }

    public function select($id){
    	$mensaje = DB::table('messages')->where('id',$id)->first();
    	if ($mensaje!=null){
    		return $id." - ".$mensaje->nombre;
    	}
    	return "No existe ese mensaje";
    }
    public function insert(){
    	DB::table('messages')->insert(
		    [   'mensaje' => str_random(10),
		    	'nombre' => str_random(10),
	        	'email'=> str_random(10).'@gmail.com',
	        	'mayorDeEdad' => random_int(0, 1),
	        	'salario' => random_int(0, 10)/1.5,
	        	'fecha_nacimiento'=>random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1, 28),
	        	'contrasena'=>bcrypt(str_random(10)),
	        	'descripcion'=>str_random(100)]
		);
    	
    	return "Nuevo mensaje ha sido creado correctamente";
    }

    public function update($id){
    	DB::table('messages')->where('id', $id)->update(
		    [ 	'mensaje' => str_random(10),
		    	'nombre' => str_random(10),
	        	'email'=> str_random(10).'@gmail.com',
	        	'mayorDeEdad' => random_int(0, 1),
	        	'salario' => random_int(0, 10)/1.5,
	        	'fecha_nacimiento'=>random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1, 28),
	        	'contrasena'=>bcrypt(str_random(10)),
	        	'descripcion'=>str_random(100)]
		);
		return "El mensaje numero ".$id." se ha actualizado correctamente";
    }

    public function delete($id){
    	DB::table('messages')->where('id', $id)->delete();
    	return "El mensaje numero ".$id." se ha borrado correctamente";
    }
}
