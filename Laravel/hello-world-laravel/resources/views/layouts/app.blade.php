<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layouts</title>
</head>

<body style="margin:0; padding:0;">
    @section('header')
    @show

    <main style="padding: 20px; height: 84vh">
        @yield('content')
    </main>

    @section('footer')
    @show
</body>

</html>
