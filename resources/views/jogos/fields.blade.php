<!-- Rodada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rodada', 'Rodada:') !!}
    {!! Form::number('rodada', null, ['class' => 'form-control']) !!}
</div>

<!-- Timecasaid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timeCasaId', 'Time da casa:') !!}
    {!! Form::number('timeCasaId', null, ['class' => 'form-control']) !!}
</div>

<!-- Golstimecasa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('golsTimeCasa', 'Gols time da casa:') !!}
    {!! Form::number('golsTimeCasa', null, ['class' => 'form-control']) !!}
</div>

<!-- Timeforaid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timeForaId', 'Time visitante:') !!}
    {!! Form::number('timeForaId', null, ['class' => 'form-control']) !!}
</div>

<!-- Golstimefora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('golsTimeFora', 'Gols time visitante:') !!}
    {!! Form::number('golsTimeFora', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('jogos.index') }}" class="btn btn-default">Cancelar</a>
</div>
