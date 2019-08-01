<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Nivel</title>
</head>
<body>
<form method="POST" action="{{url('/nivel')}}">
@csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Insira o nome do nível" id="nome"><br>
    <input type="submit" value="Enviar">

</form>

</body>
</html>