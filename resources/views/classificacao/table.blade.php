<div class="table-responsive">
    <table class="table" id="classificacao-table">
        <thead>
            <tr>
                <th>Posicao</th>
                <th>Timeid</th>
                <th>Pontos</th>
                <th>Vitorias</th>
                <th>Empates</th>
                <th>Derrotas</th>
                <th>Golspro</th>
                <th>Golscontra</th>
                <th>Saldogols</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classificacao as $classificacao)
            <tr>
                <td>{{ $classificacao->posicao }}</td>
                <td>{{ $classificacao->timeId }}</td>
                <td>{{ $classificacao->pontos }}</td>
                <td>{{ $classificacao->vitorias }}</td>
                <td>{{ $classificacao->empates }}</td>
                <td>{{ $classificacao->derrotas }}</td>
                <td>{{ $classificacao->golsPro }}</td>
                <td>{{ $classificacao->golsContra }}</td>
                <td>{{ $classificacao->saldoGols }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
