@extends('admin.layouts.app')

@section('title', 'Criar usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100">
            Novo Usuário
        </h2>
    </div>
    <form action="{{ route('users.store') }}" method='POST'>
        @include('admin.users.partials.form')
        <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-700 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" style="transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#3b82f6'" onmouseout="this.style.backgroundColor='#1d4ed8'"">Cadastrar</button>
    </form>
@endsection