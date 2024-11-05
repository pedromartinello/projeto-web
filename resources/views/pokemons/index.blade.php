<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pokemons</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 20px;
        }

        .pokemon-list {
            max-width: 600px;
            width: 100%;
        }

        .pokemon-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 15px;
        }

        .pokemon-card h3 {
            color: #3b4cca;
            margin-bottom: 10px;
        }

        .pokemon-card p {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
        }

        .pokemon-card a.edit-btn {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .pokemon-card a.edit-btn:hover {
            background-color: #388e3c;
        }

        .pokemon-card form {
            display: inline;
        }

        .pokemon-card button.delete-btn {
            padding: 8px 12px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .pokemon-card button.delete-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="pokemon-list">
        @foreach($pokemons as $pokemon)
            <div class="pokemon-card">
                <h3>{{ $pokemon->nome }}</h3>
                <p><strong>Tipo:</strong> {{ $pokemon->tipo }}</p>
                <p><strong>Pontos de Poder:</strong> {{ $pokemon->pontos_de_poder }}</p>
                <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}" class="edit-btn">Editar</a>
                <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn">Deletar</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>

@foreach($pokemons as $pokemon)
    @csrf
    @method('DELETE')
@endforeach