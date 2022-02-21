<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars=Avatar::all();
        return view("admin.avatar.main",compact("avatars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = "img/"  ;
        $file = $request ->file("name");
        $new_image = date('Ymd').uniqid().'.jpg' ;
        // dd($file);
        $file->move(public_path($path),$new_image) ;
        // DB
        $file=new Avatar();
        $file->name = $new_image ;
        $file->save();
        return redirect()->back() ;

        $avatar = Avatar::all()->slice(1);
        request()->validate([
            "nom" => ["required"],
            // "src" => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

           //Conditon pour vérifier si le count est + de 5
           if (count($avatar)> 5) {
            return redirect()->route('avatar.index')->with('warning', "Demande refusé ! Le maximum est atteint");
        }

        $avatar = new Avatar();
        $avatar->nom = $request->nom;
        //Condition pour vérifier si le request vient d'input FILE ou un input URL (priorité à l'input FILE)
        if ($request->src) {
            $request->file('src')->storePublicly('img/','public');
            $avatar->src = $request->file('src')->hashName();
        }else{
            $fichierURL = file_get_contents($request->srcURL);
            $lien = $request->srcURL;
            $token = substr($lien, strrpos($lien, '/') + 1);
            Storage::disk('public')->put('img/'.$token , $fichierURL);
            $avatar->src = $token;
        }
        $avatar->save();
        return redirect()->route('avatar.index')->with('success', $request->nom . 'bien ajouté !');


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        $users = User::all()->where('avatar_id', $avatar->id);
        foreach ($users as $user) {
            $user->avatar_id = 1 ;   //seed 1 = avatar défault
            $user->save();
        }
        $avatar->delete();
        return redirect()->route("avatar.index")->with("warning","donnée bien supprimé");
    }
}
