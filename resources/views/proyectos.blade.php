@extends('layouts.indexPresentacion')

@section('title', 'Adecue')
<link rel="stylesheet" href="{{ asset('css/proyectos.css') }}">

@section('content')
    <div class="container mt-5">
        <h2 class="section-title">Nuestros Proyectos</h2>
        <div class="row">
            <!-- Card 1: Sacha Inchi -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/sacha_inchi.jpg" class="card-img-top" alt="Sacha Inchi">
                    <div class="card-body">
                        <h5 class="card-title">Siembra, Cosecha, Transformación y Comercialización de Sacha Inchi</h5>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalSachaInchi">Más
                            Información</button>
                    </div>
                </div>
            </div>
            <!-- Card 2: Piscicultura y Acuaponía -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/piscicultura.jpg" class="card-img-top" alt="Piscicultura y Acuaponía">
                    <div class="card-body">
                        <h5 class="card-title">Piscicultura y Acuaponía</h5><br>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalPiscicultura ">Más
                            Información</button>
                    </div>
                </div>
            </div>
            <!-- Card 3: Camaricultura -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/camaron.jpg" class="card-img-top" alt="Camaricultura">
                    <div class="card-body">
                        <h5 class="card-title">Camaricultura</h5><br>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalCamaricultura">Más
                            Información</button>
                    </div>
                </div>
            </div>
            <!-- Card 4: Urbanización Perlas del Pacífico -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/urbanizacion.jpg" class="card-img-top" alt="Urbanización Perlas del Pacífico">
                    <div class="card-body">
                        <h5 class="card-title">Construcción de Viviendas: Urbanización Perlas del Pacífico</h5>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalUrbanizacion">Más
                            Información</button>
                    </div>
                </div>
            </div>
            <!-- Card 5: Centro Comercial Saturno -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/centro-comercial.jpg" class="card-img-top" alt="Centro Comercial Saturno">
                    <div class="card-body">
                        <h5 class="card-title">Centro Comercial Saturno</h5><br>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalSaturno">Más
                            Información</button>
                    </div>
                </div>
            </div>
            <!-- Card 6: Seguridad y Soberanía Alimentaria -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/seguridad-alimentaria.jpg" class="card-img-top" alt="Seguridad y Soberanía Alimentaria">
                    <div class="card-body">
                        <h5 class="card-title">Seguridad y Soberanía Alimentaria</h5><br>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalSeguridadAlimentaria">Más
                            Información</button>
                    </div>
                </div>
            </div>
            <!-- Card 7: Apicultura -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/apicultura.jpg" class="card-img-top" alt="Apicultura">
                    <div class="card-body">
                        <h5 class="card-title">Apicultura</h5>
                        <button class="btn btn-primary" style="background-color: #29564A;" data-toggle="modal" data-target="#modalApicultura">Más
                            Información</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <!-- Modal Sacha Inchi -->
    <div class="modal fade" id="modalSachaInchi" tabindex="-1" role="dialog" aria-labelledby="modalSachaInchiLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSachaInchiLabel">Siembra, Cosecha, Transformación y Comercialización de
                        Sacha Inchi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Este proyecto se enfoca en la producción integral de Sacha Inchi, desde su siembra y cosecha hasta su
                        transformación y comercialización. Se busca fomentar el cultivo sostenible y rentable de esta
                        planta, conocida por su alto contenido de omega-3, proteínas y antioxidantes.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Piscicultura -->
    <div class="modal fade" id="modalPiscicultura" tabindex="-1" role="dialog" aria-labelledby="modalPisciculturaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPisciculturaLabel">Piscicultura y Acuaponía</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El objetivo de este proyecto es desarrollar sistemas de piscicultura y acuaponía que permitan la
                        producción sostenible de peces y plantas acuáticas. La integración de estas técnicas ofrece una
                        solución ecológica y eficiente para la producción de alimentos, utilizando menos agua y generando
                        menos residuos.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Camaricultura -->
    <div class="modal fade" id="modalCamaricultura" tabindex="-1" role="dialog"
        aria-labelledby="modalCamariculturaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCamariculturaLabel">Camaricultura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Este proyecto está dirigido a la cría y cultivo de camarones en un ambiente controlado. La
                        camaricultura se presenta como una alternativa viable para satisfacer la demanda de productos del
                        mar, proporcionando empleo y desarrollo económico en las áreas rurales.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Urbanización -->
    <div class="modal fade" id="modalUrbanizacion" tabindex="-1" role="dialog"
        aria-labelledby="modalUrbanizacionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUrbanizacionLabel">Construcción de Viviendas: Urbanización Perlas del
                        Pacífico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Este proyecto consiste en la construcción de una urbanización residencial que busca ofrecer viviendas
                        asequibles y de calidad. La Urbanización Perlas del Pacífico está diseñada para mejorar la calidad
                        de vida de sus habitantes, con infraestructuras modernas y servicios comunitarios.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Centro Comercial Saturno -->
    <div class="modal fade" id="modalSaturno" tabindex="-1" role="dialog" aria-labelledby="modalSaturnoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSaturnoLabel">Centro Comercial Saturno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>El proyecto del Centro Comercial Saturno tiene como finalidad crear un espacio comercial que reúna
                        una variedad de tiendas, restaurantes y servicios. Este centro comercial pretende convertirse en un
                        punto de referencia para el comercio y el entretenimiento en la región.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Seguridad y Soberanía Alimentaria -->
    <div class="modal fade" id="modalSeguridadAlimentaria" tabindex="-1" role="dialog"
        aria-labelledby="modalSeguridadAlimentariaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSeguridadAlimentariaLabel">Seguridad y Soberanía Alimentaria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Este proyecto tiene como meta asegurar el acceso a alimentos nutritivos y suficientes para toda la
                        población. Se centra en promover la producción local y sostenible de alimentos, reduciendo la
                        dependencia de importaciones y fortaleciendo la autosuficiencia alimentaria.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Apicultura -->
    <div class="modal fade" id="modalApicultura" tabindex="-1" role="dialog" aria-labelledby="modalApiculturaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalApiculturaLabel">Apicultura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>l proyecto de apicultura está dedicado a la cría de abejas para la producción de miel y otros
                        productos apícolas. Además de generar ingresos, la apicultura juega un papel crucial en la
                        polinización de cultivos y la conservación de la biodiversidad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
