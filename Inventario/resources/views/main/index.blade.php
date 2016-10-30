<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">

      <title>@yield('title')</title>

      <!-- Bootstrap core CSS -->
        <link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css')}}">

        <link rel="stylesheet"  href="{{ asset('css/css/ie10-viewport-bug-workaround.css')}}">

        <link rel="stylesheet" type="sript" href="{{ asset('js/ie-emulation-modes-warning.js') }}">
    
</head>
<body>
        @section('sidebar')
            <!-- NAVBAR
            ================================================== -->
                <div class="navbar-wrapper">
                  <div class="container">

                    <nav class="navbar navbar-inverse navbar-top">
                      <div class="container">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="#">PGPB CI</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Inicio</a></li>
                            <li><a href="/#about">Rep. Mantto. Extintores</a></li>
                            <li><a href="/#ofertas">Rep. Contraincendio Paredón</a></li>
                            <li><a href="/#ofertas">Rep. Operaciones Pozos</a></li>
                            <li><a href="/#ofertas">Rep. Personal CI</a></li>
                            <li><a href="">Administración</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
               
        @show
        <div class="container">
            @yield('content')
        </div>

        @section('footer')
          <hr class="featurette-divider">
          <!-- FOOTER -->
          <footer>
            <p class="pull-right"><a href="#">Ir Arriba</a></p>
            <p>&copy; 2016 PEMEX &middot; <a href="#">Políticas de Privacidad</a> &middot; <a href="#"> Terminos de Servicio</a>&&nbsp;<em>by @montieliv</em></p>

          </footer>
        @show
      <!-- Bootstrap core JavaScript
          ================================================== -->
          <!-- Placed at the end of the document so the pages load faster -->
          <link rel="stylesheet" type="sript" href="{{ asset('js/jquery.min.js') }}">
          <link rel="stylesheet" type="sript" href="{{ asset('js/myjs.js') }}">
          <link rel="stylesheet" type="sript" href="{{ asset('js/bootstrap.min.js') }}">
          <link rel="stylesheet" type="sript" href="{{ asset('js/holder.min.js') }}">
          <link rel="stylesheet" type="sript" href="{{ asset('js/ie10-viewport-bug-workaround.js') }}">
    </body>
</html>