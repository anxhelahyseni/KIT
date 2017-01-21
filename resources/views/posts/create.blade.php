@extends('main')

@section('title', ' | Krijo Temë Të Re')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1 style="text-align:center">Krijo Temë Të Re</h1>
      <hr>
      {!! Form::open(['route'=>'posts.store']) !!}
          {{Form::label('title', 'Titulli:')}}
          {{Form::text('title', null, array('class'=>'form-control', 'style'=>'margin-bottom:20px;'))}}

          {{Form::label('body', 'Përshkrimi Temës:')}}
          {{Form::textarea('body', null, array('class'=>'form-control'))}}

          {{Form::submit('Krjo Temë', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
