@extends('layouts.index')

@section('content')
<div class="mx-auto my-5">
    <h1 class="text-center">Gallerie photo </h1>
</div>
<div class="container mx-auto px-4">

    <section class="py-5 px-4">
        <div class="flex flex-wrap -mx-4 -mb-8">
            @foreach ($images as $image)
            <div class="h-100 p-4 md:mb-0 mb-5 flex flex-col justify-content-center  mx-auto">
                <div class="h-100 w-50"
                    style=" url({{ asset('img/'. $image->src) }})">
                    <img src="{{ asset('img/'. $image->src) }}" alt="">
                </div>

                <div class=" w-full bg-white -mt-10 shadow-lg rounded-lg p-5 text-center">
                    <p class="title-post font-medium">Titre de l'image : {{ $image->nom }}</p>

                    <p class="summary-post text-base  ">Categorie : {{ $image->categorie->nom }}</p>
                    <a class="btn btn-primary" href="{{ route('gallerie.download', $image->id) }}">Download</a>

                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>

@endsection
