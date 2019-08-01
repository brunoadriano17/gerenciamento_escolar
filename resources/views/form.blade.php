<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="{{url('/'.(isset($usuario) ? $usuario->id : '') )}}">
    @csrf
    @if(isset($usuario))
        {{ method_field('PUT') }}
    @endif

    <label for="nome">Nome</label>
    <input type="text" value="{{ isset($usuario) ? $usuario->nome : ''}}" name="nome" placeholder="Insira seu nome" id="nome"><br>
    <label for="email">email</label>
    <input type="text" value="{{ isset($usuario) ? $usuario->email : ''}}" name="email" placeholder="Insira seu email" id="email"><br>
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="text" value="{{ isset($usuario) ? $usuario->data_nascimento : ''}}" name="data_nascimento" id="data_nascimento"><br>
    <select name="nivel_id">
        @foreach($niveis as $n)
            <option {{isset($usuario) && $usuario->nivel->id == $n->id ? 'selected' : ''}} value="{{$n->id}}">{{$n->nome}}</option>
        @endforeach
    </select>

    <input type="submit" value="{{ isset($usuario) ? 'Salvar' : 'Enviar'}}">

</form>

</body>
</html>