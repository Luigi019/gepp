<!doctype html>
<html class="no-js" lang="en">

<head>
<title> @yield("title")  </title>
    @include('layout.inc.linksMeta')
    @include('layout.inc.linksCss')
</head>
<body id="page-top" class="px-2">
        <div id="preloader"></div>
        <!-- barra de navegación-->
        <nav>
        </nav>
<!-- Inicio del header-->
<header>
     
        </header>
<!--Termina el header-->
  @yield("content")


    @include('layout.inc.linksJs')

</body>
</html>
