<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINKS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- LINKS SWEETALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Práctica GIT</title>

    <style>
        nav{
            background: #000000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #0f9b0f, #000000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #0f9b0f, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>

</head>

<body>
    
<!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand text-light" href="#">Práctica GitHub</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apodoMain')? 'text-light fw-bold text-decoration-underline':'text-light' }}" href="main">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apodoForm')? 'text-light fw-bold text-decoration-underline':'text-light' }}" href="{{route('apodoForm')}}">Formulario</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('apodoTable')? 'text-light fw-bold text-decoration-underline':'text-light' }}" href="{{route('apodoTable')}}">Tabla</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>

            </div>
        </div>
    </nav>

<!-- Contenido -->

    <div class="text-center container">

    @yield('contenido')

    </div>



<!-- Pie de Página -->
    <div class="alert alert-dark text-center" role="alert">
        Benjamín Enríquez Téllez. 2022 CopyRight©
    </div>

    <!-- LINKS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>