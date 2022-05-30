<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
        .page-break {
            page-break-after: always;
        }

        .titulo{
            border: 1px;
            background-color: grey;
            text-align: center;
            widows: 100%;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 25px;
        }
        .tabela {
            width: 100%;
        }

        table th {
            text-align: left;
        }
    </style>

</head>
<body>
    
<div class="titulo">Lista de tarefas</div>

<table class="tabela">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tarefa</th>
            <th>Data limite conclusão</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($tarefas as $key => $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->tarefa }}</td>
                <td>{{ date('d/m/y', strtotime($tarefa->data_limite_conclusao)) }}</td>
            </tr>
        @endforeach

    </tbody>
    </table>
    <!-- 
    <div class="page-break"></div>
    <h2>Página 3</h2>
    <div class="page-break"></div>
    <h2>Página 4</h2>
    <div class="page-break"></div>
    <h2>Página 5</h2>
    <div class="page-break"></div>
    <h2>Página 6</h2>
    <div class="page-break"></div>
    <h2>Página 7</h2>
    -->
</body>
</html>