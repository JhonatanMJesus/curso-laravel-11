@extends('admin.layouts.app')

@section('title', 'Detalhes do usuário ')

@section('content')
    <h1>Detalhes do usuário:</h1>
    <x-alert/>
    <ul>
        <li><strong>Nome: </strong>{{ $user->name }}</li>
        <li><strong>E-mail: </strong>{{ $user->email }}</li>
        <li><strong>Criado em: </strong>{{ $user->created_at }}</li>
    </ul>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar o usuário</button>
    </form>
@endsection