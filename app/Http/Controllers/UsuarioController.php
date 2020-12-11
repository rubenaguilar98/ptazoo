<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function showMenu(){

        $users = User::all();

        return view('user/userAdminMenu', compact('users'));

    }
    public function showAdminUser($id){

        $user = User::find($id);

        return view('user/showAdminUser', compact('user'));

    }

    public static function updateUser(Request $request){
        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'is_admin' => 'required',
        ]);

            $updateUser = User::find($request->input('id'));
            $id = $request->input('id');
            $updateUser->name = $request->input('name');
            $updateUser->email = $request->input('email');
            $updateUser->is_admin = $request->input('is_admin');
            $updateUser->save();
            

        return redirect()->route('userAdmin.show', ['id' => $id]);

    }

    public static function deleteUser($id){
        $user = User::find($id);
            $user->delete();

        return redirect()->route('userAdmin.menu');
    }

    public function loginApi(Request $request){
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
 
        if(!auth()->attempt($loginData)){
            return response(['message'=> 'Datos erroneos']);
        }
 
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
 
        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }
}
