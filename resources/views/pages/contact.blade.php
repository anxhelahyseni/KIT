@extends('main')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Na Kontaktoni</h1>
      <hr>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label name="email">Email:</label>
          <input id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
          <label name="subjekti">Subjekti:</label>
          <input id="subjekti" name="subjekti" class="form-control">
        </div>

        <div class="form-group">
          <label name="mesazhi">Mesazhi:</label>
          <textarea id="mesazhi" name="mesazhi" class="form-control">Shkruani mesazhin tuaj...</textarea>
        </div>

        <input type="submit" class="btn btn-success" value="Dërgo">
      </form>
    </div>
  </div>
@endsection
