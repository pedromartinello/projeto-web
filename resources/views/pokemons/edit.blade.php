<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Pokemon</title>
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
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
        }




        .pokemon-form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }




        .pokemon-form h2 {
            color: #ca3b3b;
            text-align: center;
            margin-bottom: 20px;
        }




        .form-group {
            margin-bottom: 15px;
        }




        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }




        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }




        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3b4cca;
            box-shadow: 0 0 5px rgba(59, 76, 202, 0.2);
        }




        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #16fv0b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }




        .submit-btn:hover {
            background-color: #2c3b9b;
        }
    </style>
</head>
<body>
    <form action="{{ url('pokemons/'.$pokemon->id) }}" method="POST" class="pokemon-form">
        @csrf
        @method('PUT')


        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome"  value="{{ $pokemon->nome }}" placeholder="nome" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo"  value="{{ $pokemon->tipo }}" placeholder="tipo" required>
        </div>
        <div class="form-group">
            <label for="pontos_de_poder">Pontos de Poder</label>
            <textarea name="pontos_de_poder" placeholder="Pontos de poder" required>{{$pokemon->pontos_de_poder}}</textarea>
        </div>
       
        <button type="submit" class="submit-btn">Atualizar Pokemon</button>
    </form>
</body>




