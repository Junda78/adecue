@extends('layouts.indexPresentacion')

@section('title', 'Adecue')
<link rel="stylesheet" href="{{ asset('css/mision.css') }}">

@section('content')
    <div class="mission-section">
        <div class="container">
            <h2 class="section-title">Misión</h2>
            <div class="row">
                <div class="col-lg-6" style="text-align:justify;">
                    <p>Establecer y consolidar una fábrica de sueños mediante la compra de tierras para la siembra y
                        cultivos de productos alimenticios y curativos 100% agronomía limpias.</p>
                    <p>Construir nuestra urbanización integral y la generación de más de 3.500 empleos directos y
                        permanentes con sueldos dignos en todas las secciones de nuestra fábrica de sueños.</p>
                </div>
                <div class="col-lg-6">
                    <img src="img/mision.jpg" alt="Nuestra Misión" class="mission-image">
                </div>
            </div>
        </div>
    </div>

    <div class="vision-section mt-5">
        <div class="container">
            <h2 class="section-title">Visión</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/vision.jpg" alt="Nuestra Visión" class="vision-image">
                </div>
                <div class="col-lg-6" style="text-align:justify;">
                    <p class="vision-text">Para el año 2025 habremos capacitado y formado 250 líderes con énfasis en los
                        sectores empresarial, social y ambiental.</p>
                    <p class="vision-text">Para el año 2027 habremos vinculado a 80,000 personas a través de organizaciones
                        sociales en el marco de políticas de créditos o donantes de fuentes internacionales.</p>
                    <p class="vision-text">Para el año 2030 seremos una de las fábricas de sueños líderes en Colombia en la
                        exportación de productos agrícolas y la importación de electrodomésticos, calzados, ropas,
                        vehículos, maquinarias, entre otros.</p>
                    <p class="vision-text">Para el año 2035 habremos contribuido con la recuperación del 50% de los jóvenes
                        que actualmente se encuentran en las filas de grupos armados al margen de la ley en los municipios
                        costeros del departamento de Nariño y la generación de 60 millones de toneladas de oxígeno mediante
                        la recuperación de bosques y la siembra de árboles.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="executive-summary-section mt-5">
        <div class="container">
            <h2 class="section-title">Resumen Ejecutivo</h2>
            <div class="row">
                <div class="col-lg-12" style="text-align:justify;">
                    <p>La Asociación ADECUE ha formulado un programa integral conformado por varios proyectos productivos
                        autosostenibles, de soporte y consolidación de las familias que la conforman, cuyo objetivo es
                        beneficiar y mejorar las condiciones de vida de Doscientas Cincuenta (250) familias campesinas y
                        desplazadas de sus territorios a causa del conflicto armado colombiano que hoy se encuentran en
                        calidad de socios honorarios conforme a las políticas establecidas por la Ley GESARA - NESARA
                        Redención Mundial, lo cual se puede observar en el Reglamento General de Convivencia, Administración
                        y Operación, las Resoluciones N' 001 y 002 del 3 de agosto de 2022 y el Reglamento Interno del
                        Consejo Directivo de "ADECUE".</p>
                    <p>Además de estos también contamos con la vinculación de Consejos Comunitarios y Organizaciones
                        Sociales de la Costa Pacífica Colombiana que agrupan más de Treinta Mil (30.000) familias de
                        Comunidades Negras Afrocolombianas de Profesión Agricultores, Mineros, Artesanos, Pescadores
                        Tradicionales en Diez (10) municipios de la Costa Pacífica Nariñense que ejercen diferentes
                        actividades económicas en esta región del país, a las cuales se pretende vincular activamente a este
                        programa de Redención con el fin de formular y ejecutar conjuntamente diferentes proyectos que
                        comprendan componentes productivos, humanitarios asociativos y colectivos, en la medida en que las
                        circunstancias presentes en la región permitan su desarrollo con un horizonte mínimo de ejecución de
                        Diez (10) años.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="location-section mt-5">
        <div class="container">
            <h2 class="section-title">Ubicación</h2>
            <h3 class="location-address">Dirección: Calle 122B #28D7-32 Tercer Piso, Cali-Colombia</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.948021641741!2d-76.53618538523895!3d3.3915289975195166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7028a827c0d%3A0x79502fbb46a1a3e8!2sCalle%20122B%20%2328D7-32%2C%20Cali%2C%20Valle%20del%20Cauca%2C%20Colombia!5e0!3m2!1sen!2sco!4v1690479842221!5m2!1sen!2sco"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- 
    <div class="contact-section mt-5">
        <div class="container">
            <h2 class="section-title">Contáctanos</h2>
            <div class="row">
                <div class="col-lg-12">
                    <a href="https://wa.me/573505153666" target="_blank" class="social-button whatsapp">
                        <i class="fab fa-whatsapp"></i> 
                    </a>
                    <a href="mailto:adecuetierrayproduzca@gmail.com" target="_blank" class="social-button gmail">
                        <i class="fas fa-envelope"></i> 
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
