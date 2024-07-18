<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ADMIN de spbs</title>

    <!-- Favicons -->
  <link href="assets/assets/img/spbs.png" rel="icon">
  <link href="assets/assets/img/spbs.png" rel="apple-touch-icon">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/"> -->

    

    <!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/assets/css/style.css" rel="stylesheet">

    <style>
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">

    
    
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto text-black">
    <div>
      {{-- <h3 class="float-md-start mb-0">Administración</h3> --}}
      <nav class="nav nav-masthead justify-content-center float-md-end">
        {{-- <a class="nav-link active" aria-current="page" href="/admin">spbs</a>

        <a class="nav-link" href="/products">Productos</a>
        <a class="nav-link" href="/users">Usuarios</a>
        <a class="nav-link" href="/suppliers">Proveedores</a>
        <a class="nav-link" href="/clients">Clientes</a> --}}
        {{-- <a class="nav-link" href="/orders">Ordenes</a>
        <a class="nav-link" href="/order_details">Detalle Orden</a> --}}
      </nav>

      
      @include('layouts.navigation')
      <br>
      
    </div>
  </header>

  <main class="px-3">

      @yield('contenido')
    <!-- <h1>Cover your page.</h1>
    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-dark bg-dark">Learn more</a>
    </p> -->
  </main>

  <footer class="mt-auto text-white-50">
    {{-- <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p> --}}
  </footer>
</div>


    
  </body>
</html>
