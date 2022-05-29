@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefas</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tarefa</th>
                            <th scope="col">Data_limite_conclusão</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($tarefas as $key => $tarefa)
                            <tr>
                                <th scope="row">{{ $tarefa['id'] }}</th>
                                <td>{{ $tarefa['tarefa'] }}</td>
                                <td>{{ date('d/m/y', strtotime($tarefa['data_limite_conclusao']))}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
