<?php

namespace App\Http\Controllers;

use App\Models\Recinto;
use App\Models\Animal;
use App\Models\Habitat;

use Illuminate\Http\Request;

class RecintoController extends Controller
{
    public function showRecinto($id){

        $recinto = Recinto::find($id);
        
        $animales = Recinto::find($id)->animales;
        

        return view('recinto/showRecinto', compact('recinto','animales'));

    }

    public function showAllRecintos(){

        $recintos = Recinto::all();
        

        return view('recinto/showAllRecintos', compact('recintos'));

    }

    public function showAllRecintosMenu(){

        $recintos = Recinto::all();
        
        $habitats = Habitat::all();
        
        return view('recinto/recintoAdminMenu', compact('recintos','habitats'));

    }

    public function showAdminRecinto($id){

        $recintos = Recinto::find($id);
        $hab = Recinto::find($id)->idHab;
        $habitat = Habitat::find($hab);
        $habitats = Habitat::all();

        return view('recinto/showAdminRecinto', compact('recintos','habitat','habitats'));

    }

    public static function addRecinto(Request $request){
        $request->validate([
           'nombre' => 'required|unique:recinto',
           'cientifico' => 'required',
           'alimentacion' => 'required',
           'area' => 'required',
           'comederos' => 'required',
           'bebederos' => 'required',
           'vallado' => 'required',
           'descripcion' => 'required',
           'img' => 'required',
           'idHab' => 'required',
        ]);
            
            $newRecinto = new Recinto;
            $newRecinto->nombre = $request->input('nombre');
            $newRecinto->cientifico = $request->input('cientifico');
            $newRecinto->alimentacion = $request->input('cientifico');
            $newRecinto->area = $request->input('area');
            $newRecinto->comederos = $request->input('comederos');
            $newRecinto->bebederos = $request->input('bebederos');
            $newRecinto->vallado = $request->input('vallado');
            $newRecinto->descripcion = $request->input('descripcion');
            if ($request->hasFile('img')){
                $file = $request->file("img");
                $nombrearchivo  = $file->getClientOriginalName();
                $file->move(public_path("img/recintos/"),$nombrearchivo);
            }
            $newRecinto->img =  $nombrearchivo;
            $newRecinto->idHab = $request->input('idHab');
            $newRecinto->save();
         
            

        return redirect('/recintoAdminMenu');

    }
    public static function updateRecinto(Request $request){
        $request->validate([
            'nombre' => 'required',
            'cientifico' => 'required',
            'alimentacion' => 'required',
            'area' => 'required',
            'comederos' => 'required',
            'bebederos' => 'required',
            'vallado' => 'required',
            'descripcion' => 'required',
            'idHab' => 'required',
        ]);
        
            $updateRecinto = Recinto::find($request->input('idRec'));
            $id = $request->input('idRec');
            $updateRecinto->nombre = $request->input('nombre');
            $updateRecinto->cientifico = $request->input('cientifico');
            $updateRecinto->alimentacion = $request->input('alimentacion');
            $updateRecinto->area = $request->input('area');
            $updateRecinto->comederos = $request->input('comederos');
            $updateRecinto->bebederos = $request->input('bebederos');
            $updateRecinto->vallado = $request->input('vallado');
            $updateRecinto->descripcion = $request->input('descripcion');
            $updateRecinto->idHab = $request->input('idHab');
            $updateRecinto->save();
            

        return redirect()->route('recintoAdmin.show', ['id' => $id]);

    }
    public static function deleteRecinto($id){
        $recinto = Recinto::find($id);
        $recinto->delete();

        return redirect()->route('recintoAdmin.menu');
    }

    public function apiRecintos(Request $req){

        $recintos = Recinto::all();

        return response()->json($recintos,200);

    }

    public function apiRecinto($id){

        $recinto = Recinto::find($id);

        return response()->json($recinto,200);

    }


}
