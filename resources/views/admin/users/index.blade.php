@extends('admin.layouts.app')
@section('title', 'Listagem de Usuários')

@section('content')
    <body>
        <h1>Usuários</h1>

        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

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
                        <td>-</td>
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