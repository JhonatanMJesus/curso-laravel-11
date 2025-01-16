@extends('admin.layouts.app')

@section('title', 'Criar usuário')

@section('content')
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="font-semibold text-xl text-white-100 dark:text-white:100">
            Novo Usuário
        </h2>
    </div>
    <form action="{{ route('users.store') }}" method='POST'>
        @include('admin.users.partials.form')
    </form>
@endsection