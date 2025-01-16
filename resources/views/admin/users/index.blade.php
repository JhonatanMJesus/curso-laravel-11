@extends('admin.layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-1 mb-4">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray:400">
            Usuários
        </h2>

        <a href="{{ route('users.create') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <i class="fa-solid fa-plus" aria-hidden="true"></i> Novo usuário
        </a>
    </div>

    <x-alert />

    <div class="bg-white overflow-x-auto shadow-md sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nome
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        E-mail
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <a href="{{ route('users.show', $user->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-4">Detalhes</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                            Nenhum usuário cadastrado
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="py-4">
        {{ $users->links() }}
    </div>
@endsection