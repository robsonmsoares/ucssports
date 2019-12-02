<div class="table-responsive">
    <table class="table" id="campeonatos-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Ano</th>
        <th>Quantidade de times</th>
        <th>Casa e fora</th>
        <th>Data de inicio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($campeonatos as $campeonatos)
            <tr>
                <td>{{ $campeonatos->nome }}</td>
            <td>{{ $campeonatos->ano }}</td>
            <td>{{ $campeonatos->qtdTimes }}</td>
            <td>{{ $campeonatos->casaFora }}</td>
            <td>{{ $campeonatos->dataInicio }}</td>
                <td>
                    {!! Form::open(['route' => ['campeonatos.destroy', $campeonatos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('campeonatos.show', [$campeonatos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('campeonatos.edit', [$campeonatos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
