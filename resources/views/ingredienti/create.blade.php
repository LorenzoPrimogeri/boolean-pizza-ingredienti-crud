<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('ingredienti.store') }}" method="POST">
        @csrf
        <label for="name">Inserisci il nome del'ingrediente:</label>
        <input type="text" name="name" placeholder="inseririre ingrediente">
        <button type="submit">salva</button>
    </form>
</body>

</html>