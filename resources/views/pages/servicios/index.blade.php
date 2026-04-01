@extends('layouts.app')

@section('title', 'Servicios - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
        <div class="page-hero-content">
            <h1>Nuestros Servicios</h1>
            <p>Explora todos los ministerios y departamentos de nuestra iglesia</p>
        </div>
    </section>

    <!-- SERVICIOS PRINCIPALES -->
    <section class="servicios-grid-section">
        <div class="container">
            <h2>Departamentos</h2>
            <div class="servicios-grid">

                <!-- ROCK KIDS -->
                <div class="servicio-card">
                    <div class="servicio-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3>Rock Kids</h3>
                    <p>Ministerio de música y entretenimiento para niños. Donde los pequeños aprenden a alabar a través del arte.</p>
                    <a href="/servicios/rock-kids" class="btn-secondary">Conocer Más</a>
                </div>

                <!-- MEDIA -->
                <div class="servicio-card">
                    <div class="servicio-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Media</h3>
                    <p>Encargados de producción audiovisual, transmisiones en vivo y contenido de nuestros servicios.</p>
                    <a href="/servicios/media" class="btn-secondary">Conocer Más</a>
                </div>

                <!-- BIENVENIDA -->
                <div class="servicio-card">
                    <div class="servicio-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Bienvenida</h3>
                    <p>Nuestro equipo de ushers que recibe con calidez a todos nuestros visitantes.</p>
                    <a href="/servicios/bienvenida" class="btn-secondary">Conocer Más</a>
                </div>

            </div>
        </div>
    </section>

    <!-- GRUPOS DE HOGARES -->
    <section class="grupos-section">
        <div class="container">
            <h2>Grupos Hogares</h2>
            <p class="section-subtitle">Comunidades pequeñas donde nos reunimos para crecer juntos en fe</p>
            
            <div class="grupos-grid">

                <!-- GRUPOS JÓVENES -->
                <div class="grupo-card">
                    <div class="grupo-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Jóvenes</h3>
                    <p>Grupos dedicados a fortalecer la fe de nuestros jóvenes a través de encuentros, estudios bíblicos y actividades comunitarias.</p>
                    <ul class="grupo-info">
                        <li><strong>Edad:</strong> 15 - 35 años</li>
                        <li><strong>Frecuencia:</strong> Semanal</li>
                    </ul>
                    <a href="/servicios/grupos-jovenes" class="btn-secondary">Ver Detalles</a>
                </div>

                <!-- GRUPOS ADULTOS -->
                <div class="grupo-card">
                    <div class="grupo-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Adultos</h3>
                    <p>Comunidades de adultos para cultivo espiritual, confraternidad y apoyo mutuo en el camino cristiano.</p>
                    <ul class="grupo-info">
                        <li><strong>Edad:</strong> 35+ años</li>
                        <li><strong>Frecuencia:</strong> Semanal</li>
                    </ul>
                    <a href="/servicios/grupos-adultos" class="btn-secondary">Ver Detalles</a>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="container">
            <h2>¿Te gustaría participar?</h2>
            <p>Todos nuestros servicios y grupos están abiertos para ti. No importa tu experiencia, te recibiremos con brazos abiertos.</p>
            <a href="/contacto" class="btn-primary">Contáctanos</a>
        </div>
    </section>

@endsection
