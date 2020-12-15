<?php

namespace App\Http\Controllers;
use App\Models\Habitat;
use App\Models\Recinto;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class HabitatController extends Controller
{
    public function showMenu(){

        $habitats = Habitat::all();

        return view('habitat/habitatMenu', compact('habitats'));

    }


    public function showAdminMenu(){

        $habitats = Habitat::all();

        return view('habitat/habitatAdminMenu', compact('habitats'));

    }

    public function showHabitat($id){

        $habitats = Habitat::find($id);
        $recintos = Habitat::find($id)->recintos;

        return view('habitat/showHabitat', compact('habitats','recintos'));

    }

    public function showAdminHabitat($id){

        $habitats = Habitat::find($id);

        return view('habitat/showAdminHabitat', compact('habitats'));

    }

    public static function addHabitat(Request $request){
        $request->validate([
           'nombre' => 'required|unique:habitat',
           'continente' => 'required',
           'temperatura' => 'required',
           'vegetacion' => 'required',
           'descripcion' => 'required',
           'imagen' => 'required',
        ]);

            $newHabitat = new Habitat;
            $newHabitat->nombre = $request->input('nombre');
            $newHabitat->continente = $request->input('continente');
            $newHabitat->temperatura = $request->input('temperatura');
            $newHabitat->vegetacion = $request->input('vegetacion');
            $newHabitat->descripcion = $request->input('descripcion');
            if ($request->hasFile('imagen')){
                $file = $request->file("imagen");
                $nombrearchivo  = $file->getClientOriginalName();
                $file->move(public_path("img/habitat/"),$nombrearchivo);
            }
            $newRecinto->img =  $nombrearchivo;
            $newHabitat->save();
            

        return redirect('/habitatAdminMenu');

    }

    public static function updateHabitat(Request $request){
        $request->validate([
           'nombre' => 'required',
           'continente' => 'required',
           'temperatura' => 'required',
           'vegetacion' => 'required',
           'descripcion' => 'required',
        ]);

            $updateHabitat = Habitat::find($request->input('idHab'));
            $id = $request->input('idHab');
            $updateHabitat->nombre = $request->input('nombre');
            $updateHabitat->continente = $request->input('continente');
            $updateHabitat->temperatura = $request->input('temperatura');
            $updateHabitat->vegetacion = $request->input('vegetacion');
            $updateHabitat->descripcion = $request->input('descripcion');
            $updateHabitat->save();
            

        return redirect()->route('habitatAdmin.show', ['id' => $id]);

    }

    public static function deleteHabitat($id){
        $habitat = Habitat::find($id);
            $habitat->delete();

        return redirect()->route('habitatAdmin.menu');
    }

    public function apiHabitats(Request $req){

        $habitats = Habitat::all();

        return response()->json($habitats,200);

    }

    public function apiHabitat($id){

        $habitat = Habitat::find($id);

        return response()->json($habitat,200);

    }
}
