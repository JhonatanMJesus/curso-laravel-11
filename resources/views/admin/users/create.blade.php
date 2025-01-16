@extends('admin.layouts.app')
@section('title', 'Criar usuário')

@section('content')
<h1>Cadastro</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('users.store') }}" method='POST'>
    @csrf()
    <input type="text" name="name" id="name" placeholder="Nome" value="{{ old('name') }}">
    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
    <input type="password" name="password" id="password" placeholder="Senha">
    <button type="submit">Cadastrar</button>
</form>
@endsection