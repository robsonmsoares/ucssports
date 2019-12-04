<div class="table-responsive">
    <table class="table" id="jogos-table">
        <thead>
            <tr>
                <th>Rodada</th>
                <th>Time da casa</th>
                <th>Gols</th>
                <th>X</th>
                <th>Gols</th>
                <th>Time visitante</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jogos as $jogos)
            <tr>
                <td>{{ $jogos->rodada }}</td>
                <td>{{ $jogos->timeCasaId }}</td>
                <td>{{ $jogos->golsTimeCasa }}</td>
                <td>X</td>
                <td>{{ $jogos->golsTimeFora }}</td>
                <td>{{ $jogos->timeForaId }}</td>
                <td>
                    {!! Form::open(['route' => ['jogos.create', $jogos->jogosId], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('jogos.show', [$jogos->jogosId]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('jogos.edit', [$jogos->jogosId]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
