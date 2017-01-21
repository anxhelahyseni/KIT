@extends('main')

@section('title', ' | Krijo Kurs Të Ri')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 style="text-align:center;">Krijo Kurs Të Ri</h1>
      <hr>
      {!! Form::open(['route' => 'courses.store']) !!}
          {{Form::label('title', 'Titulli:')}}
          {{Form::text('title', null, array('class'=>'form-control', 'style'=>'margin-bottom:20px;'))}}

          {{Form::label('body', 'Përshkrimi Kursit:')}}
          {{Form::textarea('body', null, array('class'=>'form-control'))}}

          {{Form::submit('Krjo Kurs', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
