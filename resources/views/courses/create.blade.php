@extends('main')

@section('title', ' | Krijo Kurs Të Ri')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 style="text-align:center;">Krijo Kurs Të Ri</h1>
      <hr>
      {!! Form::open(['route' => 'courses.store', 'data-parsley-validate'=>'']) !!}
          {{Form::label('title', 'Titulli:')}}
          {{Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'255'))}}

          {{Form::label('body', 'Përshkrimi Kursit:', array('style'=>'margin-top:20px;'))}}
          {{Form::textarea('body', null, array('class'=>'form-control', 'required'=>''))}}

          {{Form::submit('Krijo Kurs', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection
