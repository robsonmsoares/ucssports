<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Apelido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apelido', 'Apelido:') !!}
    {!! Form::text('apelido', null, ['class' => 'form-control']) !!}
</div>

<!-- Datafundacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataFundacao', 'Data de fundação:') !!}
    {!! Form::date('dataFundacao', null, ['class' => 'form-control','id'=>'dataFundacao']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dataFundacao').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Nomeestadio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeEstadio', 'Nome do estádio:') !!}
    {!! Form::text('nomeEstadio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('times.index') }}" class="btn btn-default">Cancelar</a>
</div>
