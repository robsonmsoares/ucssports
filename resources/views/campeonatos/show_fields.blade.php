<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{{ $campeonatos->nome }}</p>
</div>

<!-- Ano Field -->
<div class="form-group">
    {!! Form::label('ano', 'Ano:') !!}
    <p>{{ $campeonatos->ano }}</p>
</div>

<!-- Qtdtimes Field -->
<div class="form-group">
    {!! Form::label('qtdTimes', 'Quantidade de times:') !!}
    <p>{{ $campeonatos->qtdTimes }}</p>
</div>

<!-- Casafora Field -->
<div class="form-group">
    {!! Form::label('casaFora', 'Casa e fora:') !!}
    <p>{{ $campeonatos->casaFora }}</p>
</div>

<!-- Datainicio Field -->
<div class="form-group">
    {!! Form::label('dataInicio', 'Data de inicio:') !!}
    <p>{{ $campeonatos->dataInicio }}</p>
</div>

