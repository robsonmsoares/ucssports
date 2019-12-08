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
                <select class="pull-left form-control">
                    <option value=""> Selecione um campeonato </option>
                    @foreach($campeonatosDropDown as $camp)
                        <option value="{{$camp->campId}}"> {{$camp->nome}} </option>
                    @endforeach
                </select>
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

