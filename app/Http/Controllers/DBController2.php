<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;
use DB;

class DBController2 extends Controller
{
	public function selectAll(){
    	$mensaje = Message::all();
    	return $mensaje;
    }

    public function select($id){
    	$mensaje = Message::find($id);
    	if ($mensaje!=null){
    		return $id." - ".$mensaje->nombre;
    	}
    	return "No existe ese mensaje";
    }
    public function insert(){

        $m= new Message;
        $m->nombre='jon';
        $m->email='jon@jon.com';
        $m->mensaje = str_random(10);
        $m->mayorDeEdad = random_int(0, 1);
        $m->salario = random_int(0, 10)/1.5;
        $m->fecha_nacimiento=random_int(1500, 2500)."/".random_int(1, 12)."/".random_int(1, 28);
        $m->contrasena=bcrypt(str_random(10));
        $m->descripcion=str_random(100);
        
        $m->save();

    	
    	return "Nuevo mensaje ha sido creado correctamente";
    }

    public function update($id){
    	$m= Message::find($id);
        $m->nombre='jon';
        $m->save();
		return "El mensaje numero ".$id." se ha actualizado correctamente";
    }

    public function delete($id){
    	Message::destroy($id);
    	return "El mensaje numero ".$id." se ha borrado correctamente";
    }
}
