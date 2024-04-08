<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Editar o curso</h2>

    <a href="{{ route('course.index') }}">Listar</a><br><br>
    {{-- <a href="{{ route('course.show') }}">Visualizar</a><br>
    <a href="{{ route('course.create') }}">Cadastrar</a><br> --}}
    <form action="{{ route('course.update', ['course' => $course]) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Nome do curso"
            value="{{ old('name', $course->name) }}" required><br><br>
        <label for="name">Preço</label>
        <input type="text" name="price" id="price" placeholder="Valor do curso"
            value="{{ old('name', $course->price) }}" required><br><br>

        <button type="submit">Atualizar</button>

</body>

</html>
