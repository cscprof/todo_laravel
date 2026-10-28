<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Dynamic Title Component -->
    <title>@yield('title', 'Laravel Todo App')</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Extra Head JS Blocks -->
    @stack('head-scripts')
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

<!-- Header Section -->
<header class="bg-dark text-white py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h3 mb-0">GenevaCode</h1>
        <span class="text-muted small">Todo Demo</span>
    </div>
</header>

<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-side-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('todos.index') }}">Todos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('todos.create') }}">New Todo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content Section -->
<main class="container my-5 flex-grow-1">
    @yield('content')
</main>

<!-- Footer Section -->
<footer class="bg-dark text-white-50 text-center py-3 mt-auto border-top border-secondary">
    <div class="container">
        <p class="mb-0">&copy; {{ date('Y') }} GenevaCode Todo Demo. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!-- Extra Footer JS Blocks (Optional helper) -->
@stack('footer-scripts')
</body>
</html>
