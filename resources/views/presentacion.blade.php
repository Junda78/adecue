@extends('layouts.indexPresentacion')

@section('title', 'Adecue')
<link rel="stylesheet" href="{{ asset('css/contenido.css') }}">

@section('content')
    <!-- Carrusel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.png" class="d-block w-100 carousel-img" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="img/img2.png" class="d-block w-100 carousel-img" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="img/img3.png" class="d-block w-100 carousel-img" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="img/img4.png" class="d-block w-100 carousel-img" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img src="img/img5.png" class="d-block w-100 carousel-img" alt="Fifth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

   
    <div class="sobre-nosotros-section mt-5">
        <div class="container">
            <h2 class="section-title">Adecue</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="sobre-nosotros-image-wrapper">
                        <img src="img/sobreNosotros.jpg" alt="Sobre Nosotros" class="sobre-nosotros-image">
                        <!-- Placeholder for image -->
                        <!-- <div class="image-placeholder">
                            <p>Imagen de Sobre Nosotros</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sobre-nosotros-text-wrapper">
                        <p class="sobre-nosotros-text">Somos una agremiación E.S.A.L constituida en julio del año 2007 y
                            legalizada en octubre del mismo año bajo el número de personería jurídica 3385 del libro(1)
                            de la Cámara de Comercio de Cali-Valle del Cauca.</p>
                        <p class="sobre-nosotros-text">Dicha organización está conformada por personas naturales de
                            grupos étnicos de comunidades negras y mestizos, domiciliados en la ciudad de Cali,
                            procedentes de los municipios de la costa pacífica colombiana afectados por la violencia del
                            conflicto armado colombiano.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
