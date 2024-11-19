@extends('layouts.app')

@section('titulo', 'Criar Coach')

@section('conteudo')
<header class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold">Cadastro de Coach</h1>
        <p class="text-gray-300 mt-2">Adicione um novo coach ao sistema</p>
    </div>
</header>

<main class="container mx-auto my-10">
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-lg mx-auto">
        <form action="{{ url('coaches') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="nome" class="block text-lg font-semibold text-gray-700 mb-2">Nome do Coach</label>
                <input type="text" 
                       name="nome" 
                       id="nome" 
                       placeholder="Digite o nome completo" 
                       class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                       required>
            </div>
            
            <div class="text-center">
                <button type="submit" 
                        class="bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-1">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
