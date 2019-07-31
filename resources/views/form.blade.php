<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{url('/')}}">
@csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Insira seu nome" id="nome"><br>
    <label for="email">email</label>
    <input type="text" name="email" placeholder="Insira seu email" id="email"><br>
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="text" name="data_nascimento" id="data_nascimento"><br>

    <select name="nivel_id">
        @foreach($niveis as $n)
        <option value="{{$n->id}}">{{$n->nome}}</option>
        @endforeach
    </select>

    <input type="submit" value="Enviar">

</form>

</body>
</html>