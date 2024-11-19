@extends('layouts.app')
@section('titulo', 'Lista de Coaches')

@section('conteudo')
<header class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold">Lista de Coaches</h1>
        <p class="text-gray-300 mt-2">Visualize, edite ou exclua os registros</p>
    </div>
</header>

<main class="container mx-auto my-10">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach($coaches as $coach)
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-700">{{ $coach->nome }}</h2>
            <div class="mt-4 flex justify-between items-center">
                <a href="{{ url('coaches/' . $coach->id . '/edit') }}"
                   class="bg-teal-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-1">
                    Editar
                </a>
                <form action="{{ url('coaches/' . $coach->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-1">
                        Deletar
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</main>
@endsection

<!--editar pokemom-->
@foreach($coaches as $coach)
    @csrf
    @method('DELETE')
@endforeach
@endsection