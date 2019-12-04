<!-- Rodada Field -->
<div class="form-group">
    {!! Form::label('rodada', 'Rodada:') !!}
    <p>{{ $jogos->rodada }}</p>
</div>

<!-- Timecasaid Field -->
<div class="form-group">
    {!! Form::label('timeCasaId', 'Time da casa:') !!}
    <p>{{ $jogos->timeCasaId }}</p>
</div>

<!-- Golstimecasa Field -->
<div class="form-group">
    {!! Form::label('golsTimeCasa', 'Gols time da casa:') !!}
    <p>{{ $jogos->golsTimeCasa }}</p>
</div>

<!-- Timeforaid Field -->
<div class="form-group">
    {!! Form::label('timeForaId', 'Time visitante:') !!}
    <p>{{ $jogos->timeForaId }}</p>
</div>

<!-- Golstimefora Field -->
<div class="form-group">
    {!! Form::label('golsTimeFora', 'Gols time visitante:') !!}
    <p>{{ $jogos->golsTimeFora }}</p>
</div>

