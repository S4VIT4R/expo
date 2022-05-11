<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Personas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('auth.home');
    }

    public function agregarpersona(){
        return view('auth.agregarpersona');
    }

    public function guardarpersona(Request $request){
        $persona = new Personas();

        $persona->nombre=$request->nombre;
        $persona->edad=$request->edad;
        $persona->save();

        return view('auth.home');
    }

    public function verpersonas(){
        $personas = Personas::all();

        return view('auth.verusuarios',compact('personas'));
    }

    public function eliminarusuario($id){
        $persona = Personas::find($id);
        $persona->delete();

        $personas = Cursos::all();
        return view('auth.verusuarios',compact('personas'));

    }
}
