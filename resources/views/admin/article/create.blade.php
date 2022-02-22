@extends('layouts.index')

@section('content')
<div class="container my-5">
    <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data"
        class=" mx-auto" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-content-center pt-5">
            <div class="d-flex">
                <h1 class="">Add a new Article</i></h1>
            </div>
        </div>
        <div class=" mt-5 mx-2">
            <div>
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">
                    </label>
                <input
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="titre" value="{{old('titre') }}" placeholder="Titre de l'article" />
                    @error('titre')
                    @include('partials.error')
                    @enderror
            </div>
            <div>
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"></label>
                <input
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="auteur" value="{{ old('auteur') }}" placeholder="Nom de l'auteur" />
                    @error('auteur')
                    @include('partials.error')
                    @enderror
            </div>
        </div>

        {{-- TextArea --}}
        <div class="grid grid-cols-1 mt-5 mx-7">
            <div>
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">
                    </label>
                <textarea name="description" id="" cols="30" rows="10"
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    placeholder="Description">{{ old('description') }}</textarea>
            </div>
            @error('description')
            @include('partials.error')
            @enderror

        </div>

        {{-- IMAGE --}}
        <div class="grid grid-cols-2 mt-5 mx-7">
            {{-- INPUT FILE --}}
            <div>
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"></label>
                <input
                    class="py-2 w-11/12 px-3 h-12 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="file" name="src" placeholder="Ton src" />

            </div>
            {{-- INPUT URL --}}
            <div>
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">
                    </label>
                <input
                    class="py-2 w-11/12 rounded-lg h-12 border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="srcURL" placeholder="URL de l'image" />
            </div>
            @error('src')
            @include('partials.error')
            @enderror
        </div>
        <div class='d-flex  justify-content-center pt-5 pb-5'>
            <button
                class='btn btn-danger'>Add</button>
        </div>

    </form>
</div>


@endsection
