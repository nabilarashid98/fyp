<?php
session_start();
$username = session()->get('username');
$password = session()->get('password');
$name = session()->get('name');
$role = session()->get('role');
$userid = session()->get('userid');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <title>Screening Test For Parents With Dyslexia Children</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href=" {{ asset('carousel/carousel.css') }}" rel="stylesheet" media="all">
    <link href=" {{ asset('css/bootstrap.css') }}" rel="stylesheet" media="all">

  </head>
  <body>
    <header>
      <body style="background-color:blanchedalmond;">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Screening Test For Parents With Dyslexia Children</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav mr-auto">
       
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('adminscreening') }}">Screening Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('adminforum') }}">Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('adminfeedback') }}">Feedback</a>
        </li>
        

      </ul>

       

      <form class="form-inline my-2 my-lg-0">
      <ul>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout')}}">Logout</a>
      </li>
      </ul>
    </form>

    </div>
  </nav>
</header>

<main role="main">

 @yield('content')

</main>
  <!-- FOOTER -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.js') }}"></script></body>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script>

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

</html>
