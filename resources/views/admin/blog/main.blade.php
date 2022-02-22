@extends('layouts.index')

@section('content')
<div class="text-center mx-auto">
    <h1>Blog</h1>
    <p><i>Liste d'article</i></p>
</div>
<div class="container mx-auto my-5">
    @foreach ($articles as $article)
    <div class="lg:flex w-full">
        <div class="h-100 w-100"
            style=" url('{{ asset('img/' . $article->src) }}')" title="Woman holding a mug">
        </div>
        <div
            class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-black font-bold text-xl mb-2">{{ $article->titre }}</div>
                <p class="text-grey-darker text-base">{{$article->description}}
                </p>
            </div>
            <div class="flex items-center">
                <img class="w-25 h-25 " src="{{ asset('img/' . $article->src) }}"
                    alt="{{ $article->auteur }}">
                <div class="text-sm">
                    <p class="text-black leading-none">{{ $article->auteur }}</p>
                    <p class="text-grey-dark">{{ $article->created_at->format('d-m-Y') }}</p>
                </div>
            </div>
        </div>
        {{-- <div
        class="d-flex">
            <a class="btn btn-success mx-1" href="{{ route("article.edit",$article->id) }}">Modifier</a>
            <form action="{{ route("article.destroy",$article->id) }}"method="post">
                @csrf
                @method("DELETE")


                <button class="btn btn-warning mx-1" type="submit">Delete</button>
            </form>
        </div> --}}
    </div>
    @endforeach
</div>

@endsection
