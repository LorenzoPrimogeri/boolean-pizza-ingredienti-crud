<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('ingredienti.update', $ingrediente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Inserisci il nome</label>
        <input type="text" name="name" value="{{$ingrediente->name}}">
        <button type="submit">Modifica ingrediente</button>

    </form>
</body>

</html>