<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand nav-heading" href="{{ route('home') }}">Matt Mitchener</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-right navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li>
              <a href="{{ route('about') }}">About</a>
            </li>
            <li>
              {{ Form::open(array('route'=>'post.index','class'=>'navbar-form navbar-right', 'method'=>'GET')) }}
                <div class="form-group">

                  {{ Form::input('Search', 'q', null, ['placeholder' => 'Search...','class'=>'form-control'])}}
              
                  <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>

                </div>

              {{Form::close() }}
            </li>
            <li>
              @include('layouts.social.navicons')
            </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>