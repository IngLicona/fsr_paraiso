@extends('layouts.app')

@section('title', 'Rock Kids - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #8e44ad 0%, #3b5998 100%);">
        <div class="page-hero-content">
            <h1>🎸 Rock Kids</h1>
            <p>¡Donde los niños alaban a través del arte y la música!</p>
        </div>
    </section>

    <!-- DESCRIPCIÓN -->
    <section class="servicio-descripcion">
        <div class="container">
            <div class="descripcion-content">
                <h2>¿Qué es Rock Kids?</h2>
                <p>Rock Kids es nuestro ministerio dedicado a formar niños en la fe cristiana a través de la música, el arte y la alabanza. Creemos que los niños pueden expresar su amor por Dios de manera creativa y divertida.</p>
                
                <div class="caracteristicas-grid">
                    <div class="caracteristica-item">
                        <i class="fas fa-music"></i>
                        <h4>Música y Alabanza</h4>
                        <p>Aprendemos canciones cristianas y expresamos nuestra fe a través del canto.</p>
                    </div>
                    <div class="caracteristica-item">
                        <i class="fas fa-theater-masks"></i>
                        <h4>Dramatizaciones</h4>
                        <p>Presentamos historias bíblicas de manera entretenida y educativa.</p>
                    </div>
                    <div class="caracteristica-item">
                        <i class="fas fa-paint-brush"></i>
                        <h4>Artes Plásticas</h4>
                        <p>Creamos manualidades y proyectos artísticos con mensajes bíblicos.</p>
                    </div>
                    <div class="caracteristica-item">
                        <i class="fas fa-heart"></i>
                        <h4>Comunidad</h4>
                        <p>Formamos amistades duraderas en un ambiente seguro y amoroso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HORARIOS Y UBICACIONES -->
    <section class="horarios-ubicaciones">
        <div class="container">
            <h2>Horarios y Ubicaciones</h2>
            
            <div class="ubicaciones-grid">
                <!-- UBICACIÓN 1 -->
                <div class="ubicacion-card">
                    <h3><i class="fas fa-map-marker-alt"></i> Sede Principal</h3>
                    <p><strong>Dirección:</strong> Calle Principal #123, Ciudad</p>
                    <p><strong>Horarios:</strong></p>
                    <ul>
                        <li>Sábados: 10:00 AM - 12:00 PM</li>
                        <li>Miércoles: 5:00 PM - 6:30 PM</li>
                    </ul>
                    <p><strong>Edades:</strong> 5 - 12 años</p>
                    <p><strong>Contacto:</strong> (555) 123-4567</p>
                </div>

                <!-- UBICACIÓN 2 -->
                <div class="ubicacion-card">
                    <h3><i class="fas fa-map-marker-alt"></i> Sede Secundaria</h3>
                    <p><strong>Dirección:</strong> Avenida Secundaria #456, Ciudad</p>
                    <p><strong>Horarios:</strong></p>
                    <ul>
                        <li>Domingos: 3:00 PM - 5:00 PM</li>
                        <li>Viernes: 6:00 PM - 7:30 PM</li>
                    </ul>
                    <p><strong>Edades:</strong> 5 - 12 años</p>
                    <p><strong>Contacto:</strong> (555) 123-4568</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍDERES Y CONTACTO -->
    <section class="liderazgo-section">
        <div class="container">
            <h2>Nuestro Equipo Líder</h2>
            <div class="liderazgo-grid">
                <div class="lider-card">
                    <div class="lider-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4>Pastor Daniel Rodríguez</h4>
                    <p>Coordinador General de Rock Kids</p>
                    <p class="lider-contacto">📞 (555) 123-4567</p>
                </div>
                <div class="lider-card">
                    <div class="lider-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4>Lic. María Sandoval</h4>
                    <p>Directora de Música</p>
                    <p class="lider-contacto">📞 (555) 123-4569</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>¡Únete a Rock Kids!</h2>
            <p>Tu hijo(a) es bienvenido(a). Ven y experiencia el gozo de alabar a Dios con otros niños.</p>
            <a href="/contacto" class="btn-primary">Inscribirse o Preguntar</a>
        </div>
    </section>

@endsection
