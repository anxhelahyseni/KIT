@extends('main')

@section('title', ' | Të Gjitha Kurset')

@section('content')
  <div class="row">
    <div class="col-md-10">
      <h1>Të Gjitha Kurset</h1>
    </div>
    <div class="col-md-2">
      <a href="{{route('courses.create')}}" class="btn btn-lg btn-primary btn-h1-spacing btn-block">Krijo Kurs</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div><!-- end of .row-->
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Titulli</th>
          <th>Trupi</th>
          <th>Krijuar</th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($courses as $course)
            <tr>
              <th>{{$course->id}}</th>
              <td>{{$course->title}}</td>
              <td>{{substr($course->body, 0, 50)}}{{(strlen($course->body)>50?"...":"")}}</td>
              <td>{{date('M j, Y', strtotime($course->created_at))}}</td>
              <td><a href="{{route('courses.show', $course->id)}}" class="btn btn-sm btn-default">Shiko</a><a href="{{route('courses.edit', $course->id)}}" class="btn btn-sm btn-default">Ndrysho</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="text-center">
        {!! $courses->links(); !!}
      </div>
    </div>
  </div>
@endsection
