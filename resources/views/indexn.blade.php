<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KK EAE MAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="main.js"></script>
</head>
<body>
    <p> Niveis </p>
    <a href="{{url('/nivel/form')}}">Cadastrar</a>
    <table border="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>#</th>
    </tr>
    @foreach($niveis as $n)
    <tr>
        <td>{{$n->id}}</td>
        <td>{{$n->nome}}</td>
        <td>
        <form action="{{url('/nivel/delete')}}" method="POST">
        @csrf
            <input type="hidden" name="id" value="{{$n->id}}" />
            <button type="submit">Deletar</button>
        </form>
        </td>

    </tr>
    @endforeach

    </table>
</body>
</html>