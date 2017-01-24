@extends('main')

@section('title', ' | Ndrysho Kurs')

@section('content')
  <div class="row">
    {!!Form::model($course, ['route'=>['courses.update', $course->id], 'method'=>'PUT'])!!}
    <div class="col-md-8">
      {{Form::label('title', 'Titulli:')}}
      {{Form::text('title', null, ['class'=>'form-control input-lg'])}}
      {{Form::label('body', 'Trupi:', ['class'=> 'form-spacing-top'])}}
      {{Form::textarea('body', null, ['class'=>'form-control'])}}
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Krijuar:</dt>
          <dd>{{ date('M j, Y H:i', strtotime($course->created_at))}}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Ndryshimi fundit:</dt>
          <dd>{{ date('M j, Y H:i', strtotime($course->updated_at))}}</dd>
        </dl>
        <hr>

        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('courses.show', 'Anullo', array($course->id), array('class'=>"btn btn-danger btn-block"))!!}
          </div>
          <div class="col-sm-6">
            {{Form::submit('Ruaj', ['class'=>"btn btn-success btn-block"])}}
          </div>
        </div>
      </div>
    </div>
    {!!Form::close()!!}
  </div><!-- end of .row -->
@endsection

