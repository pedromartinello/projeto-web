@extends('layouts.app')
@section('conteudo')
    <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST" class="max-w-md mx-auto p-4 bg-white shadow rounded">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-bold mb-4 text-center text-black">Atualizar Pokémon</h2>

        <div class="mb-3">
            <label for="nome" class="block text-black">Nome</label>
            <input type="text" name="nome" value="{{ $pokemon->nome }}" placeholder="Nome" required 
                class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-3">
            <label for="tipo" class="block text-black">Tipo</label>
            <input type="text" name="tipo" value="{{ $pokemon->tipo }}" placeholder="Tipo" required 
                class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label for="pontos_de_poder" class="block text-black">Pontos de Poder</label>
            <textarea name="pontos_de_poder" placeholder="Pontos de poder" required 
                class="w-full border rounded px-3 py-2 resize-none">{{$pokemon->pontos_de_poder}}</textarea>
        </div>

        <button type="submit" class="w-full bg-lime-500 text-white py-2">Atualizar Pokémon</button>
    </form>
@endsection