<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){

      $users=User::all();

    return view("admin.users.main",compact("users"));
  }

  public function create(){
    //


    return view("admin.users.create");
  }

  public function store(Request $request){

    $users = new User();
    $users->name=$request->name;
    $users->prenom=$request->prenom;
    $users->age=$request->age;
    $users->email=$request->email;
    $users->role=$request->role;
    $users->save();
    return redirect()->route("users.index");



  }
    public function show(){
        //
    }

    public function edit(User $user){
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));

    }


    public function destroy($user){

        $user->delete();
        return redirect()->back()->with("warning",'utilisateur'.$user->prenom.'supprimé');


    }

    public function update(Request $request, User $user){
        $request->validate([
            'name' => ['required'],
            'prenom' => ['required'],
            'age' => ['required', 'numeric'],
            'email' => ['required'],
            'role_id' => ['required', 'numeric'],
        ]);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Utilisateur ' . $user->id .' bien modifié !');



    }

}
