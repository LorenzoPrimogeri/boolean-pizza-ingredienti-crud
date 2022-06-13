<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Nome Ingrediente:{{ $ingrediente->name }}</h1>

    <h1>Pizze contenenti l'ingrediente</h1>
    @if ($pizze->isEmpty())
    <div>
        non ci sono pizze con questo ingrediente!
    </div>
    @else
    <ul>
        @foreach ($pizze as $pizza)
        <li>{{$pizza->nome_pizza}} </li>
        @endforeach
    </ul>
    @endif

    <div>
        <a href="{{ route('ingredienti.edit', $ingrediente->id) }}">Modifica</a>
    </div>
    <div>
        <form action="{{ route('ingredienti.destroy', $ingrediente->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella ingrediente</button>
        </form>
    </div>
    <div>
        <a href="{{ route('ingredienti.index') }}">Home</a>
    </div>

</body>

</html>