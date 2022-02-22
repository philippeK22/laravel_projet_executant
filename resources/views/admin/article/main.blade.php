@extends('layouts.index')

@section('content')
<div class="text-center">
    <h1 class="text-center">page article</h1>
    <p class="mb-5"><i>count :{{ count($articles) }} article(s) dispo</i></p>
    <a href="{{ route('article.create') }}" class="btn btn-danger">Add a new article</a>
</div>
@include('layouts.flash')
<div class="container my-5">
    <table
    class='mx-auto'>
    <thead class="">
        <tr class="">
            <th class=" px-5 py-4">
                Auteur
            </th>
            <th class=" px-5 py-4">
                Titre
            </th>
            <th class=" px-5 py-4 text-center">
                Description
            </th>
            <th class=" px-5 py-4 text-center">
                Action
            </th>
            <th class=" px-5 py-4">

            </th>
        </tr>
    </thead>
    <tbody class="">
        @foreach ($articles as $article)
        <tr>
            <td class="px-5 py-4">
                <div class="flex items-center space-x-3">
                    <p class="">{{ $article->auteur }}</p>
                </div>
            </td>
            <td class="px-5 py-4">
                <p class="">{{ $article->titre }}</p>
            </td>
            <td class="px-5 py-4 text-center">
                <p class="">{{ $article->description }}</p>
            </td>
            <td class="flex justify-center">
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-success mx-1">Edit</a>
                <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mx-1">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


</div>


@endsection
