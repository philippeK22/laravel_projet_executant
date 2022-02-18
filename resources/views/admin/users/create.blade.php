{{-- @extends('layouts.index')

@section('content')
<div class="d-flex">
    @include('partials.nav')
    <div class="w-25 my-5">
        <h1 class="text-center">Formulaire de contact</h1>


    <form class="mx-5" action="{{ route("users.store") }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" name="name" class="form-control" id="nom">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="prenom">
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" id="age">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" name="name" class="form-control" id="role">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
@endsection --}}
