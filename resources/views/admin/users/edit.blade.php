@extends('admin.layouts.app')
@section('title', 'Editar usuário ')

@section('content')
<h1>Editar o usuário {{ $user->name }}</h1>

<x-alert/>
<form action="{{ route('users.update', $user->id) }}" method='POST'>
    @method('PUT')
    @include('admin.users.partials.form')
</form>
@endsection