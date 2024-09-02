<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/presentacion.css') }}">
    @stack('styles')
</head>

<body>
    <div class="main-content">
        <!-- Logo Section -->
        <div class="logo-section text-center">
            <img src="img/logoAdecue.jpg" alt="Logo" class="logo-img">
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/presentacion') }}">
                            <i class="fas fa-home"></i> Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mision') }}">
                            <i class="fas fa-envelope"></i> Sobre Nosotros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Sacha_Inchi') }}">
                            <i class="fas fa-seedling"></i> Sacha Inchi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/proyectos') }}">
                            <i class="fas fa-project-diagram"></i> Proyectos
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div>
            @yield('content')
        </div>

        <footer class="footer">
            <div class="container text-center">
                <p>Trabajamos con familias victimas del conflicto
                    interno y población civil con dificultades económicas,
                    en ejercicio de la gestión y la aplicabilidad de los derechos humanos.</p><br>
                <p>Teléfono: +57 314-7055-975 | Email: adecuetierrayproduzca@gmail.com </p><br>
                <p>Arturo Perlaza Guerrero - Representante Legal</p><br>

                <p>&copy; 2024 Adecue. Todos los derechos reservados.</p>
            </div>
        </footer>

        <!-- Script dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="{{ url('js/particles.min.js') }}"></script>
        @stack('scripts')
        <!-- Initialize Slick Carousel -->
        <script>
            $(document).ready(function () {
                $('.slick-carousel').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    fade: true,
                    cssEase: 'linear'
                });

                $('#modalSobreNosotros').on('hide.bs.modal', function () {
                    var $this = $(this).find('iframe'),
                        tempSrc = $this.attr('src');
                    $this.attr('src', "");
                    $this.attr('src', tempSrc);
                });
            });
        </script>

        <div class="social-buttons">
            <a href="https://link.redeban.com/checkout/Aok3pGXWbAE1zKGePOR" target="_blank" class="social-button redeban" style="background-color: #004080;"><i
                class="fas fa-credit-card"></i></a>
            <a href="https://wa.me/573147055975" target="_blank" class="social-button whatsapp" style="background-color: green;"><i
                    class="fab fa-whatsapp"></i></a>
            <a href="mailto:adecuetierrayproduzca@gmail.com" target="_blank" class="social-button gmail"><i
                    class="fas fa-envelope"></i></a>

        </div>
    </div>
</body>

</html>
