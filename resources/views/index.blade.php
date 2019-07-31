<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KK EAE MAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p> EAE MAN </p>
    
    <table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Nivel</th>
    </tr>
    @foreach($usuarios as $u)
    <tr>
        <td>{{$u->nome}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->data_nascimento}}</td>
        <td>{{$u->nivel->nome}}</td>
    </tr>
    @endforeach

    </table>
</body>
</html>