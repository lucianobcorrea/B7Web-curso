<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.style.css') }}">
</head>

<body>
    <div class="card">
        <img src="{{ $pessoa['image'] }}" alt="{{ $pessoa['nome'] }}" />
        <h1>{{ $pessoa['nome'] }}</h1>
        <h3>{{ $pessoa['idade'] }} Anos</h3>
        <p>Nasceu em {{ $pessoa['birth'] }}</p>
    </div>
</body>

</html>
