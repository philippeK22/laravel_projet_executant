@extends('layouts.index')

@section('content')
<div>
    <h1 class="text-center py-3">Toutes les categories</h1>
    <a class="btn btn-danger mb-5" href="{{ route("categorie.create") }}">Ajout categorie</a>
    @include('layouts.flash')
</div>

    <div>
        @foreach ($categories as $item)
            <div class="bg-gray-50 border-gray-600 flex flex-row">
                <div
                    class="select-none flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-2 rounded-2xl border-2 p-6 hover:shadow-2xl border-gray-600">
                    <div class="flex-1 pl-1 mr-16">
                        <div class="font-medium">
                            <span class="font-bold">Nom de la catégorie :</span>
                            {{ $item->nom }}
                        </div>
                    </div>
                    <a class="btn btn-success mx-1" href="{{ route('categorie.edit', $item->id) }}">Modifier</a>
                    <form action="{{ route('categorie.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mx-1">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>





@endsection
