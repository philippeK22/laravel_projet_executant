<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){

        return view("home");
    }

    public function admin(){
        // $users= User::all()->where("role_id",1);

        $avatars = Avatar::all();
        $roles=Role::all();

        return view("admin.dashboard",compact("avatars","roles"));
    }
}
