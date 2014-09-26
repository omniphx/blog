<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('title')

    <!-- Bootstrap -->
    {{ HTML::style(asset('assets/styles/styles.css')) }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('header')

  </head>
  <body>

    @if(Session::get('flash_message'))
      <div class="flash">
        {{ Session::get('flash_message') }}
      </div>
    @endif

    <div class="container-fluid">
      @yield('container')
      
    </div>    

  </body>

  {{ HTML::script(asset('assets/scripts/built.js')) }}

</html>