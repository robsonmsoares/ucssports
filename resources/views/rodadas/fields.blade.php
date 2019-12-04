<!-- Rodada Field -->
<!-- Datajogo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataJogo', 'Datajogo:') !!}
    {!! Form::date('dataJogo', null, ['class' => 'form-control','id'=>'dataJogo']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dataJogo').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Horajogo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horaJogo', 'Horajogo:') !!}
    {!! Form::date('horaJogo', null, ['class' => 'form-control','id'=>'horaJogo']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#horaJogo').datetimepicker({
            format: 'HH:MM:SS',
            useCurrent: false
        })
    </script>
@endsection

<!-- Localjogo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localJogo', 'Localjogo:') !!}
    {!! Form::text('localJogo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rodadas.index') }}" class="btn btn-default">Cancelar</a>
</div>
