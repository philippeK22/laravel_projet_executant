@extends('layouts.index')

@section('content')
<div>
    <h1 class="text-center py-3">Toutes les categories</h1>
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
                    <a class="text-wrap text-center flex text-white text-bold flex-col rounded-md bg-green-500 justify-center items-center mr-10 p-2" href="{{ route('categorie.edit', $item->id) }}">Modifier</a>
                    <form action="{{ route('categorie.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="text-wrap text-center flex text-white text-bold flex-col rounded-md bg-red-500 justify-center items-center mr-10 p-2">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>





@endsection
