@extends('admin.layouts.app')
@section('title', 'Editar usuário ')

@section('content')
@include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray:400">
            Editar Usuário {{ $user->name }}
        </h2>
    </div>

<x-alert/>
<form action="{{ route('users.update', $user->id) }}" method='POST'>
    @method('PUT')
    @include('admin.users.partials.form')
</form>
@endsection