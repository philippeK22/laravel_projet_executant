@extends('layouts.index')

@section('content')
<div>
    <h1 class="text-center my-1">Les Avatars</h1>
</div>
@forelse ($avatars as Auth::user()->avatar)

<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="" src="{{ asset("img/" . Auth::user()->avatar->name) }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ Auth::user()->avatar->name }} {{ Auth::user()->avatar->id }}</h5>

          <form action={{ route("avatar.destroy", Auth::user()->avatar->id) }} method="POST" >
            @csrf
            @method("DELETE")

            <button class="btn btn-danger" type="submit">Delete</button>
          </form>

        </div>
    </div>
</div>
</div>
@empty
<p>rien supprimé</p>
  @endforelse


@endsection
