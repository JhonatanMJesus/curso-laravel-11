@extends('admin.layouts.app')

@section('title', 'Detalhes do usuário ')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray:400">Detalhes do usuário:</h1>
    </div>
    <ul class="max-w-md space-y-1 text-gray-500 list-disc">
        <li><strong>Nome: </strong>{{ $user->name }}</li>
        <li><strong>E-mail: </strong>{{ $user->email }}</li>
        <li><strong>Criado em: </strong>{{ $user->created_at }}</li>
    </ul>
    <x-alert />
    @can('is-admin')
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800">Deletar o usuário</button>
        </form>
    @endcan
@endsection