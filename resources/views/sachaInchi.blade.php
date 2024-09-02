@extends('layouts.indexPresentacion')

@section('title', 'Adecue')
<link rel="stylesheet" href="{{ url('css/sachaInchi.css') }}">

@section('content')

<div id="sachaInchi" >
    <div class="container">
        <h2 class="section-title">¿Qué es la Sacha Inchi?</h2>
        <div class="row">
            <div class="col-lg-6">
                <img src="img/sacha_inchi.jpg" alt="Sacha Inchi" class="sacha-image">
            </div>
            <div class="col-lg-6">
                <p>La Sacha Inchi (Plukenetia volubilis), conocida como maní del Inca, es una planta amazónica de Perú, famosa por sus semillas ricas en nutrientes. Estas semillas, utilizadas tradicionalmente por comunidades indígenas, ofrecen numerosos beneficios.</p>
                <h3>Beneficios y Usos</h3>
                <ul>
                    <li><strong>Ácidos Grasos Omega:</strong> Rica en omega-3, esencial para el corazón y cerebro.</li>
                    <li><strong>Proteínas:</strong> Contiene aproximadamente un 27% de proteína vegetal.</li>
                    <li><strong>Antioxidantes:</strong> Alta en vitamina E y tocoferoles.</li>
                    <li><strong>Fibra:</strong> Mejora la digestión.</li>
                </ul>
                <h3>Usos Comunes</h3>
                <ul>
                    <li><strong>Aceite:</strong> Utilizado en cocina y cosmética.</li>
                    <li><strong>Suplementos:</strong> Cápsulas o polvo.</li>
                    <li><strong>Snacks:</strong> Semillas tostadas como snack saludable.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection