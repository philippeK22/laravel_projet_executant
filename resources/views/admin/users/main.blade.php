@extends('layouts.index')

@section('content')
<div class="py-12">
    <a class="btn btn-primary" href="{{ url('/admin/dashboard') }}" class="">Dashboard</a>
    {{-- <a class="btn btn-danger" href="{{ route("users.create") }}">New Formulaire</a> --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('layouts.flash')
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nom</th>
                                <th class="px-4 py-2">Prenom</th>
                                <th class="px-4 py-2">Age</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">role</th>
                                <th class="px-4 py-2">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr class="text-center">
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->prenom }}</td>
                                <td class="border px-4 py-2">{{ $user->age }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">{{ $user->role->name }}</td>
                                <td class="border px-4 py-2 flex justify-center">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mx-1">Delete</button>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success mx-1">Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <h2 class="mx-auto">Pas d'utilisateurs</h2>
                            @endforelse
                        </tbody>
                    </table>

                  </div>
        </div>
    </div>
</div>

@endsection
