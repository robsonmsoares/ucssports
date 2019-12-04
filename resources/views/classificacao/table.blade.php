<div class="table-responsive">
    <table class="table" id="classificacao-table">
        <thead>
            <tr>
                <th>Posição</th>
                <th>Time</th>
                <th>Pontos</th>
                <th>Vitórias</th>
                <th>Empates</th>
                <th>Derrotas</th>
                <th>Gols pró</th>
                <th>Gols contra</th>
                <th>Saldo de gols</th>
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
