@extends('layouts.app')
@section('conteudo')
<div class="max-w-md mx-auto p-4 space-y-4">
    @foreach($pokemons as $pokemon)
        <div class="bg-white p-4 rounded shadow">
            <h3 class="text-xl font-bold mb-2 text-black">{{ $pokemon->nome }}</h3>
            <p class="text-black mb-2"><strong>Tipo:</strong> {{ $pokemon->tipo }}</p>
            <p class="text-black mb-4"><strong>Pontos de Poder:</strong> {{ $pokemon->pontos_de_poder }}</p>
            <div class="flex justify-between items-center">
                <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}" 
                   class="bg-blue-500 text-white px-3 py-1 text-sm rounded hover:bg-blue-600 transition">Editar</a>
                <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-500 text-white px-3 py-1 text-sm rounded hover:bg-red-600 transition">Deletar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection