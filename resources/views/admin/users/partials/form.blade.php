<x-alert class="mb-4"/>
@csrf()
    <div class="mb-4">
        <input type="text" name="name" id="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <div class="mb-4">
        <input type="email" name="email" id="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <div class="mb-4">
        <input type="password" name="password" id="password" placeholder="Senha" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300">
    </div>
<!-- @csrf()
    <input type="text" name="name" id="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
    <input type="password" name="password" id="password" placeholder="Senha">
    <button type="submit">Cadastrar</button> -->