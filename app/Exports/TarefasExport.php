<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Tarefa::all();

        return auth()->user()->tarefas()->get();
    }

    public function headings():array{ // declarando o tipo de retorno
        return [
            'ID da Tarefa',
            'Tarefa',
            'Data limite conclusão',
        ];
    }

    public function map($linha):array{
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/y', strtotime($linha->data_limite_conclusao))
        ];
    }
}
