@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classificacao
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classificacao, ['route' => ['classificacao.update', $classificacao->classificationId], 'method' => 'patch']) !!}

                        @include('classificacao.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
