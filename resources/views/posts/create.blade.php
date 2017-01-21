@extends('main')

@section('title', ' | Krijo Temë Të Re')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 style="text-align:center">Krijo Temë Të Re</h1>
      <hr>
      {!! Form::open(['route'=>'posts.store', 'data-parsley-validate'=>'']) !!}
          {{Form::label('title', 'Titulli:')}}
          {{Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'255'))}}

          {{Form::label('body', 'Përshkrimi Temës:', array('style'=>'margin-top:20px;'))}}
          {{Form::textarea('body', null, array('class'=>'form-control', 'required'=>''))}}

          {{Form::submit('Krijo Temë', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection
