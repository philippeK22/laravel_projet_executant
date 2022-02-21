<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|numeric',
            'email' => 'required|string',
            'avatar_id' => 'required',
        ]);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;
        $user->save();
        return redirect()->back()->with('success', 'Profil a bien été modifié');



    }
    public function updateMembre(User $user, Request $request)
    {
        $this->authorize('isRealUser', $user);
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|numeric',
            'email' => 'required|string',
            'avatar_id' => 'required',
        ]);
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;

        $user->save();
        return redirect()->back()->with('success', 'Profil a bien été modifié');
    }

}
