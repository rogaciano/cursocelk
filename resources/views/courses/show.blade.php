<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @if (session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('course.index') }}"><button type="button">Listar</button></a><br><br>
    <a href="{{ route('course.edit', ['course' => $course->id]) }}"><button type="button">Editar</button></a>
    <form method="POST" action="{{ route('course.destroy', ['course' => $course->id]) }}"
        onsubmit="return confirm('Tem certeza que deseja apagar este curso {{ $course->id }}?');">
        @csrf
        @method('DELETE')
        <button type="submit">Apagar</button>
    </form>

    <h2>Detalhe do curso</h2>

    <table>

        <tr>
            <td>Id</td>
            <td>{{ $course->id }}</td>
        </tr>
        <tr>
            <td>Nome</td>
            <td>{{ $course->name }}</td>
        </tr>
        <tr>
            <td>Preço</td>
            <td>{{ $course->price }}</td>
        </tr>
        <tr>
            <td>Criado em</td>
            <td>{{ \Carbon\Carbon::parse($course->created_at)->tz('America/Recife')->format('d/m/Y H:i:s') }}</td>
        </tr>
        <tr>
            <td>Atualizado em</td>
            <td>{{ \Carbon\Carbon::parse($course->updated_at)->tz('America/Recife')->format('d/m/Y H:i:s') }}</td>
        </tr>

    </table>

</body>

</html>
