<html>
    <head>
        <title>Página de Contatos</title> 
    </head>
    <body>
        <h3>Página de Contatos</h3>
        <table border=1>
            <tr> 
                <th> Nome </th>
                <th> Celular </th>
                <th> Cidade </th>
            </tr>
        <tr>
            @foreach ($contatos as $contato)
            <tr>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->celular }}</td>
            <td>{{ $contato->cidade }}</td>
            </tr>
            @endforeach
        </tr>    
        
        </table>
    </body>
</html>