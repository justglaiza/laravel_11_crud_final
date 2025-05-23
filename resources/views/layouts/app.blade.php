<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Simple Laravel 11 CRUD Application Tutorial</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.
min.css">
<link rel="stylesheet"

href="https://cdn.jsdelivr.net/npm/bootstrap-
icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
<div class="container-fluid">
<a class="navbar-brand" href="/">Home</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="{{ route('products.index') }}">Products</a>
</li>
</ul>
<ul class="navbar-nav ms-auto">
@auth
<li class="nav-item">
<form action="{{ route('logout') }}" method="POST">
@csrf
<button type="submit" class="btn btn-link nav-link">Logout</button>
</form>
</li>
@else
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}">Register</a>
</li>
@endauth
</ul>
</div>
</div>
</nav>

<h3 class=" mt-3">Simple Laravel 11 CRUD Application
Tutorial</h3>
@yield('content')
<div class="row justify-content-center text-center mt-3">
<div class="col-md-12">

<p>
Return to Website: <a

href="https://www.usjr.edu.ph/"><strong>University of San Jose -
Recoletos</strong></a>
</p>
</div>
</div>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bu
ndle.min.js"></script>
</body>
</html>
