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
     <form>
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="textprenom" value="{{ auth::user()->name }}" class="form-control" id="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="email" value="{{ auth::user()->prenom }}" class="form-control" id="prenom">
          </div>

          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" value="{{ auth::user()->age }}" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ auth::user()->email }}" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <select name="avatar_id"  id="avatar">

                @foreach ($avatars as $avatar)

                <option value="{{ $avatar->id== Auth::user()->avatar_id ? "selected": "" }} ">{{ $avatar->name }}</option>
                @endforeach
            </select>
            {{-- <input type="email" class="form-control" id="avatar"> --}}
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
 </div>



@endsection


