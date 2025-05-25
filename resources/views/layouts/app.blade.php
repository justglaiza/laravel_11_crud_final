<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Laravel 11 CRUD Application Tutorial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 text-center">
                <h3 class="mt-3 mb-4">Simple Laravel 11 CRUD Application Tutorial</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                @if (auth()->check() && !in_array(Route::currentRouteName(), ['login', 'register']))
                    <form action="{{ route('logout') }}" method="POST" class="mb-3">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-12">
                <p>
                    Return to Website:
                    <a href="https://www.usjr.edu.ph/"><strong>University of San Jose - Recoletos</strong></a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
