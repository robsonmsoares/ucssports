<div class="table-responsive">
    <table class="table" id="rodadas-table">
        <thead>
            <tr>
                <th>Rodada</th>
                <th>Data do jogo</th>
                <th>Hora do jogo</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rodadas as $rodadas)
            <tr>
                <td>{{ $rodadas->rodada }}</td>
                <td>{{ $rodadas->dataJogo->format("d/m/Y") }}</td>
                <td>{{ $rodadas->horaJogo->format("h:m:s") }}</td>
                <td>
                    {!! Form::open(['route' => ['rodadas.destroy', $rodadas->rodada], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rodadas.show', [$rodadas->rodada]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('rodadas.edit', [$rodadas->rodada]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
