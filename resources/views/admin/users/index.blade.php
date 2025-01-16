@extends('admin.layouts.app')
@section('title', 'Listagem de Usuários')

@section('content')
    <body>
        <h1>Usuários</h1>

        <x-alert/>

        <a href="{{ route('users.create') }}">Adicionar novo usuário</a>
        <table>
            <thead>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td><a href="{{ route('users.edit', $user->id) }}">Edit</a></td>
                        <td><a href="{{ route('users.show', $user->id) }}">Detalhes</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100">
                            Nenhum usuário cadastrado
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $users->links() }}
    </body>
@endsection