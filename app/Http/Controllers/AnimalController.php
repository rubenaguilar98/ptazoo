<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;
use App\Models\Recinto;

class AnimalController extends Controller
{
    public function showAnimal($id){

        $animal = Animal::find($id);
        

        return view('animal/showAnimal', compact('animal'));

    }

    public function showAllAnimalesRecinto(){

        $recintos = Recinto::all();

        return view('animal/animalAdminMenu', compact('recintos'));

    }

    public function showTipoAnimal($id){

        $recinto = Recinto::find($id);
        
        $animales = Recinto::find($id)->animales;
        

        return view('animal/showTipoAnimal', compact('recinto','animales'));

    }

    public static function addAnimal(Request $request){
        $request->validate([
           'nombre' => 'required|unique:habitat',
           'peso' => 'required',
           'altura' => 'required',
           'tipo' => 'required',
           'especie' => 'required',
           'enfermedad' => 'required',
           'dieta' => 'required',
           'fech_nac' => 'required',
           'descripcion' => 'required',
           'imagen' => 'required',
           'idRec' => 'required',
        ]);

            $newAnimal = new Animal;
            $newAnimal->nombre = $request->input('nombre');
            $newAnimal->peso = $request->input('peso');
            $newAnimal->altura = $request->input('altura');
            $newAnimal->tipo = $request->input('tipo');
            $newAnimal->especie = $request->input('especie');
            $newAnimal->enfermedad = $request->input('enfermedad');
            $newAnimal->dieta = $request->input('dieta');
            $newAnimal->fech_nac = $request->input('fech_nac');
            $newAnimal->descripcion = $request->input('descripcion');
            if ($request->hasFile('imagen')){
                $file = $request->file("imagen");
                $nombrearchivo  = $file->getClientOriginalName();
                $file->move(public_path("img/animales/"),$nombrearchivo);
                $newAnimal->imagen =  $nombrearchivo;
            }
            
            $newAnimal->idRec = $request->input('idRec');
            $newAnimal->save();

            

        return redirect('/animalAdminMenu');

    }

    public static function updateAnimal(Request $request){
        $request->validate([
            'nombre' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'tipo' => 'required',
            'especie' => 'required',
            'enfermedad' => 'required',
            'dieta' => 'required',
            'fech_nac' => 'required',
            'descripcion' => 'required',
            'idRec' => 'required',
        ]);

            $updateAnimal = Animal::find($request->input('idAni'));
            $id = $request->input('idAni');
            $updateAnimal->nombre = $request->input('nombre');
            $updateAnimal->peso = $request->input('peso');
            $updateAnimal->altura = $request->input('altura');
            $updateAnimal->tipo = $request->input('tipo');
            $updateAnimal->especie = $request->input('especie');
            $updateAnimal->enfermedad = $request->input('enfermedad');
            $updateAnimal->dieta = $request->input('dieta');
            $updateAnimal->fech_nac = $request->input('fech_nac');
            $updateAnimal->descripcion = $request->input('descripcion');
            $updateAnimal->idRec = $request->input('idRec');
            $updateAnimal->save();
            

        return redirect()->route('animalAdmin.show', ['id' => $id]);

    }
    public function showAnimalEspecifico($id){

        $animal = Animal::find($id);
        $rec = Animal::find($id)->idRec;
        $recinto = Recinto::find($rec);
        $recintos = Recinto::all();
        

        return view('animal/showAnimalEspecifico', compact('animal','recintos','recinto'));

    }

    public static function deleteAnimal($id){
        $animal = Animal::find($id);
        $recinto = Animal::find($id)->idRec;
        $animal->delete();

        return redirect()->route('animalAdmin.menu', ['recinto' => $recinto]);
    }

    public function apiAnimales(Request $req){

        $animales = Animal::all();

        return response()->json($animales,200);

    }

    public function apiAnimal($id){

        $animal = Animal::find($id);

        return response()->json($animal,200);

    }
}
