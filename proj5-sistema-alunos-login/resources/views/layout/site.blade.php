<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
</head>

<body>

    @include('layout._cabecalho')

    <main>
        @yield('conteudo')
    </main>

</body>
</html>