@extends('layouts.app')

@section('title', 'Visítanos - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
        <div class="page-hero-content">
            <h1>Visítanos</h1>
            <p>Nos encantaría verte en nuestros servicios</p>
        </div>
    </section>

    <!-- UBICACIÓN Y MAPA -->
    <section class="visitanos-section">
        <div class="visitanos-container">
            <!-- Información -->
            <div class="visitanos-info">
                <h2>¿Dónde Estamos?</h2>
                <p class="info-subtexto">Te esperamos en Familias Sobre La Roca en el siguiente horario</p>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h4>Dirección</h4>
                        <p>Calle Palma Kerpiz S/N<br>Col Quintin Arauz <br>Paraiso, Tabasco</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h4>Teléfono</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h4>Email</h4>
                        <p>contacto@fsrparaiso.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h4>Horarios</h4>
                        <ul class="horarios-visitanos">
                            <li><strong>Domingos:</strong> 10:00 AM</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mapa -->
            <div class="visitanos-mapa">
                <div id="mapa-google" class="mapa-container"></div>
            </div>
        </div>
    </section>


    <!-- COMODIDADES -->
    <section class="comodidades-section">
        <div class="container">
            <h2>Comodidades</h2>
            <div class="comodidades-grid">
                <div class="comodidad-item">
                    <i class="fas fa-wheelchair"></i>
                    <h4>Acceso para Discapacitados</h4>
                    <p>Rampas y espacios designados disponibles</p>
                </div>
                <div class="comodidad-item">
                    <i class="fas fa-baby"></i>
                    <h4>Sala de Niños</h4>
                    <p>Área segura y cómoda para los más pequeños</p>
                </div>
                <div class="comodidad-item">
                    <i class="fas fa-utensils"></i>
                    <h4>Café y Refrigerio</h4>
                    <p>Tome un café después del servicio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRIPT DE GOOGLE MAPS -->
    @section('extra-js')
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('maps.google.api_key') }}"></script>
<script>
    function inicializarMapa() {
        const ubicacion = {
            lat: {{ config('maps.google.latitude') }},
            lng: {{ config('maps.google.longitude') }}
        };

        const mapa = new google.maps.Map(document.getElementById('mapa-google'), {
            zoom: {{ config('maps.google.zoom') }},
            center: ubicacion,
            mapTypeId: '{{ config('maps.google.map_type') }}'
        });

        const marcador = new google.maps.Marker({
            position: ubicacion,
            map: mapa,
            title: '{{ config('maps.google.address') }}'
        });

        const ventana = new google.maps.InfoWindow({
            content: '<div style="padding: 10px;"><h4>{{ config('maps.google.address') }}</h4><p>Visítanos en nuestros servicios</p></div>'
        });

        marcador.addListener('click', function() {
            ventana.open(mapa, marcador);
        });
    }

    window.addEventListener('load', inicializarMapa);
</script>
@endsection

@endsection