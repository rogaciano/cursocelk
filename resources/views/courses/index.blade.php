<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons form {
            margin: 0;
        }
    </style>
</head>

<body>

    <a href="{{ route('course.create') }}">Cadastrar</a><br>


    <h2>Listar Cursos</h2>

    @if (session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>
    @endif

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Ações</th>
        </tr>
        @forelse ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ "R$ " . number_format($course->price, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($course->created_at)->tz('America/Recife')->format('d/m/Y H:i:s') }}</td>
                <td>{{ \Carbon\Carbon::parse($course->updated_at)->tz('America/Recife')->format('d/m/Y H:i:s') }}</td>
                <td class="action-buttons">
                    <a href="{{ route('course.show', ['course' => $course->id]) }}"><button
                            type="button">Visualizar</button></a>
                    <a href="{{ route('course.edit', ['course' => $course->id]) }}"><button
                            type="button">Editar</button></a>
                    <form method="POST" action="{{ route('course.destroy', ['course' => $course->id]) }}"
                        onsubmit="return confirm('Tem certeza que deseja apagar este curso {{ $course->id }}?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Apagar {{ $course->id }}</button>
                    </form>
                </td>
            </tr>
        @empty
            <p style="color: #f00">Não existem cursos cadastrados</p>
        @endforelse


        {{ $courses->links() }}

</body>

</html>
