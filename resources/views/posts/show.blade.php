@extends('main')

@section('title', ' | Shiko Postimin')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p class="lead">{{ $post->body }}</p>
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Krijuar:</dt>
          <dd>{{ date('M j, Y H:i', strtotime($post->created_at))}}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Ndryshimi fundit:</dt>
          <dd>{{ date('M j, Y H:i', strtotime($post->updated_at))}}</dd>
        </dl>
        <hr>

        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.edit', 'Ndrysho', array($post->id), array('class'=>"btn btn-primary btn-block"))!!}
          </div>
          <div class="col-sm-6">
            {!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
            {!!Form::submit('Fshi', ['class'=>"btn btn-danger btn-block"])!!}
            {!!Form::close()!!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
