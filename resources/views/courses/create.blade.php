<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="{{ route('course.index') }}">Listar</a><br>


    <h2>Novo Curso</h2>

    <form action="{{ route('course.store') }}" method="post">
        @csrf
        @method('POST')

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Nome do curso"
            value="{{ old('name') }}"><br><br>
        <label for="name">Preço</label>
        <input type="text" name="price" id="price" placeholder="Valor do curso"
            value="{{ old('price') }}"><br><br>
        <button type="submit">Cadastrar</button>

</body>

</html>
