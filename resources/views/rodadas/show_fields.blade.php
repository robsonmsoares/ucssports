<!-- Rodada Field -->
<div class="form-group">
    {!! Form::label('rodada', 'Rodada:') !!}
    <p>{{ $rodadas->rodada }}</p>
</div>

<!-- Campid Field -->
<div class="form-group">
    {!! Form::label('campId', 'Campid:') !!}
    <p>{{ $rodadas->campId }}</p>
</div>

<!-- Datajogo Field -->
<div class="form-group">
    {!! Form::label('dataJogo', 'Datajogo:') !!}
    <p>{{ $rodadas->dataJogo->format("d/m/Y") }}</p>
</div>

<!-- Horajogo Field -->
<div class="form-group">
    {!! Form::label('horaJogo', 'Horajogo:') !!}
    <p>{{ $rodadas->horaJogo->format("h:m:s") }}</p>
</div>

<!-- Localjogo Field -->
<div class="form-group">
    {!! Form::label('localJogo', 'Localjogo:') !!}
    <p>{{ $rodadas->localJogo }}</p>
</div>

