<div class="table-responsive">
    <table class="table" id="times-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Estado</th>
        <th>Apelido</th>
        <th>Data de fundação</th>
        <th>Nome do estádio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($times as $times)
            <tr>
                <td>{{ $times->nome }}</td>
            <td>{{ $times->estado }}</td>
            <td>{{ $times->apelido }}</td>
            <td>{{ $times->dataFundacao }}</td>
            <td>{{ $times->nomeEstadio }}</td>
                <td>
                    {!! Form::open(['route' => ['times.destroy', $times->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('times.show', [$times->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('times.edit', [$times->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
