<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            
        <form action='/contato' method='post'>
            {{ csrf_field() }}
            Nome: <input type='text' name='nome' value=''><br>
            Celular: <input type='text' name='celular' value=''><br>
            Cidade: <input type='text' name='cidade' value=''><br><br>
            <input type='submit' value='enviar'>
        </form>
    </body>
</html>