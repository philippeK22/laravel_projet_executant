@extends('layouts.index')

@section('content')

<div>
    @foreach ($roles as $role)


    <h2>Role Edit:{{ $role->name }}</h2>
</div>
<div class="py-5">
    <div class="">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('users.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div>


                        <div class="col-span-6 sm:col-span-6">
                            <label for="nom" class="block text-sm font-medium text-gray-700">
                                Role</label>
                            <input type="text" value="{{ $role->name }}" name="name" id="name"
                                autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name')
                                    <p class="text-red-400 text-center">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="btn btn-success">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
