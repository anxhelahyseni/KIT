<!--Default Bootstrap Navbar-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">KIT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Kryefaqja</a></li>
        <li class="{{ Request::is('posts') ? "active" : "" }}"><a href="/posts">Forum</a></li>
        <li class="{{ Request::is('courses') ? "active" : "" }}"><a href="/courses">Kurse</a></li>
        {{-- <li class="dropdown">
          <a href="/courses" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Kurse <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">C++</a></li>
            <li><a href="#">Java</a></li>
            <li><a href="#">PHP</a></li>
            <li><a href="#">HTML</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Laravel</a></li>
          </ul>
        </li> --}}
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">Rreth Nesh</a></li>
        <li class="{{ Request::is('help') ? "active" : "" }}"><a href="/help">Ndihmë</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Kontakt</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Kërko">
        </div>
        <button type="submit" class="btn btn-default">Dorëzo</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Llogaria juaj <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
