@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Campeonatos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($campeonatos, ['route' => ['campeonatos.update', $campeonatos->campId], 'method' => 'patch']) !!}

                        @include('campeonatos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
