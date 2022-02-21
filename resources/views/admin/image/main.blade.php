@extends('layouts.index')

@section('content')

<div class="text-center my-5">
    <h1>Toute les images</h1>
    <a class="btn btn-primary" href="{{ route("image.create") }}">Ajouter</a>
    @include('layouts.flash')
</div>
<div class="flex flex-wrap ">
    @foreach ($images as $image)
    <div class="mx-auto">
        <div class="h-100 rounded "
            style="background-image: url({{ asset('img/'. $image->src) }})">

        </div>

        <div class=" w-full bg-white -mt-10 shadow-lg rounded-lg p-5 text-center">
            <p class="title-post font-medium">Titre de l'image : {{ $image->nom }}</p>

            <p class="summary-post text-base  ">Categorie : {{ $image->categorie->nom }}</p>

            <form action="{{ route('image.destroy', $image->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection
