{{-- {{ <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.index')

@section('content')

<div class="d-flex">
    @include('partials.nav')
     <div class="content w-75">
         <h1 class=" text-center">Bonjour {{ Auth::user()->prenom }}</h1>
         <div class="card mx-auto my-5 p-4" style="width: 30rem;">
            <img src="{{ asset("img/" . Auth::user()->avatar->name) }}" class="w-50" alt="...">
            <div class="card-body">
                {{-- @foreach ($users as $item) --}}

                <h2 class="card-text">{{ Auth::user()->name }}<br>{{ Auth::user()->prenom }}| {{ Auth::user()->age }}</h2>
                <h5 class="card-text">Email: {{ Auth::user()->email }}| Role: {{ Auth::user()->role->name }} </h5>
                <form action="">

                    <button class="btn btn-success mx-5 my-3" type="submit">Modifier</button>
                </form>
            </div>
            {{-- @endforeach --}}
          </div>
     </div>
     @if (Auth::user()->role_id == 1)
     <form action="{{ route("users.update",Auth::user()->id) }}" method="POST">
        @else
        <form action="{{ route('membre.update', Auth::user()->id ) }}" method="post"
        @endif
        @csrf
        @method("PUT")
        @include('layouts.flash')
        <div class="d-flex justify-content-center pt-5">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Modification de ton profil</h1>
            </div>
        </div>
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="textprenom" value="{{ auth::user()->name }}" name="name" class="form-control" id="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" value="{{ auth::user()->prenom }}" name="prenom" class="form-control" id="prenom">
          </div>

          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" value="{{ auth::user()->age }}" name="age" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ auth::user()->email }}" name="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="avatar" class="form-label"></label>
            <select name="avatar_id"  id="avatar">

                @foreach ($avatars as $avatar)

                <option {{ $avatar->id== Auth::user()->avatar_id ? "selected": "" }}  value="{{ $avatar->id }}">{{ $avatar->name }}</option>
                @endforeach
            </select>


          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
 </div>



@endsection


