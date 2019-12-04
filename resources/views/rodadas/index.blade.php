@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Rodadas</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div>
            <label>
                {!! Form::select('selectCampeonato', ['1' => 'Campeonato1', '2' => 'Campeonato2'], null, ['placeholder' => 'Selecione um campeonato', 'class' => 'pull-left form-control']) !!}
            </label>
            <label>
                {!! Form::select('selectRodada', ['1' => 'Rodada1', '2' => 'Rodada2'], null, ['placeholder' => 'Selecione uma rodada', 'class' => 'pull-left form-control']) !!}
            </label>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('rodadas.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

