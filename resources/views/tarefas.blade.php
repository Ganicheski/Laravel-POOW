<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 0 auto;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
    body {
        text-align: center
    }
</style>
<body>
    <h1>Lista de Tarefas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefa as $tarefas)
                <tr>
                    <td>{{ $tarefas->id }}</td>
                    <td>{{ $tarefas->nome_tarefa }}</td>
                    <td>{{ $tarefas->descricao }}</td>
                    <td>{{ $tarefas->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>