<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.style.css') }}">
    <title>Bem Vindo</title>
</head>

<body>
    <div class="cards-container">
        @foreach ($pessoas as $pessoa)
            {{-- @component('components.card')
                $@slot('img_src')
                    {{ $pessoa['image'] }}
                @endslot
                $@slot('img_alt')
                    {{ $pessoa['nome'] }}
                @endslot
                $@slot('nome')
                    {{ $pessoa['nome'] }}
                @endslot
                $@slot('idade')
                    {{ $pessoa['idade'] }}
                @endslot
                $@slot('data_nascimento')
                    {{ $pessoa['birth'] }}
                @endslot
            @endcomponent --}}
            @include('components.card', $pessoa)

            {{-- Com o @component, na pagina do componente da para acessar os atributos diretamente com o nome dele
                por exemplo $nome, $idade... ja com o include, e necessario acessar o indice $pessoa['nome']...--}}
        @endforeach
    </div>
</body>

</html>
