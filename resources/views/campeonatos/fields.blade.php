<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', 'Ano:') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>

<!-- Qtdtimes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtdTimes', 'Quantidade de times:') !!}
    {!! Form::number('qtdTimes', null, ['class' => 'form-control']) !!}
</div>

<!-- Casafora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('casaFora', 'Casa e fora:') !!}
    {!! Form::text('casaFora', null, ['class' => 'form-control']) !!}
</div>

<!-- Datainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataInicio', 'Data de inicio:') !!}
    {!! Form::date('dataInicio', null, ['class' => 'form-control','id'=>'dataInicio']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dataInicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('campeonatos.index') }}" class="btn btn-default">Cancelar</a>
</div>
