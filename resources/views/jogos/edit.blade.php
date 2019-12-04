@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jogos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jogos, ['route' => ['jogos.update', $jogos], 'method' => 'patch']) !!}

                        @include('jogos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
