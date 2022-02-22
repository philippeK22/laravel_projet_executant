@extends('layouts.index')

@section('content')
<div class="container my-5">
    <form action="{{ route('article.update', $article->id ) }}" method="post" enctype="multipart/form-data"
        class=" mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-center pt-5">
            <div class="d-flex">
                <h1 class="">Edit Article : "<i>{{ $article->titre }}"</i></h1>
            </div>
        </div>
        <div class=" mt-5 mx-2">
            <div>
                <label class="">Titre
                    d'article</label>
                <input
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="titre" value="{{ $article->titre }}" placeholder="Titre de l'article" />
                    @error('titre')
                    @include('partials.error')
                    @enderror
            </div>
            <div>
                <label class="">Nom de
                    l'auteur</label>
                <input
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="auteur" value="{{ $article->auteur }}" placeholder="Nom de l'auteur" />
                    @error('auteur')
                    @include('partials.error')
                    @enderror
            </div>
        </div>

        {{-- TextArea --}}
        <div class="grid grid-cols-1 mt-5 mx-7">
            <div>
                <label class="">Titre
                    d'article</label>
                <textarea name="description" id="" cols="30" rows="10"
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    placeholder="Description">{{ $article->description }}</textarea>
            </div>
            @error('description')
            @include('partials.error')
            @enderror

        </div>

        {{-- IMAGE --}}
        <div class="grid grid-cols-2 mt-5 mx-7">
            {{-- INPUT FILE --}}
            <div>
                <label class="">Image</label>
                <input
                    class="py-2 w-11/12 px-3 h-12 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="file" name="src" placeholder="Ton src" />

            </div>
            {{-- INPUT URL --}}
            <div>
                <label class="">Avatar
                    URL</label>
                <input
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="srcURL" placeholder="URL de l'image" />
            </div>
            @error('src')
            @include('partials.error')
            @enderror
        </div>
        <div class='d-flex justify-content-center   pt-5 pb-5'>
            <button
                class='w-auto btn btn-danger text-white px-4 py-2'>Add</button>
        </div>

    </form>
</div>

@endsection
