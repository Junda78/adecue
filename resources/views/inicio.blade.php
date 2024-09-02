<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos a Adecue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>

<body>
    <body>
        <div class="container-fluid">
            <!-- Sección de Bienvenida -->
            <section id="bienvenida" class="section">
                <div id="particles-js"></div> <!-- Contenedor para el fondo animado -->
                <div class="content">
                    <div>
                        <h2>Bienvenidos a Adecue</h2>
                        <p>Una asociación para el desarrollo cultural y educativo.</p>
                        <a href="{{ url('/presentacion') }}" class="btn btn-primary btn-cta">
                            Conoce más sobre nosotros <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <img src="img/logoAdecue.jpg" alt="Logo" class="logo">
                </div>
            </section>
        </div>
    
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="js/particles.js"></script>
    </body>

</html>



