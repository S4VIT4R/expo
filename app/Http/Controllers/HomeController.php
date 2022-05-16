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

        // $nombre = htmlspecialchars_decode($request->nombre, ENT_QUOTES);
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

        $personas = Personas::all();
        return view('auth.verusuarios',compact('personas'));

    }

    public function editardatos($id){
        $persona = Personas::all()->where('id',$id);
        return view('auth.editar',compact('persona'));
    }

    public function guardardatos(Request $request, Personas $persona){
        $persona->nombre = $request->nombre;
        $persona->edad = $request->edad;
        $persona->save();

        $personas = Personas::all();

        return view('auth.verusuarios',compact('personas'));

    }
}
