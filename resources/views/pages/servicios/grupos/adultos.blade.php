@extends('layouts.app')

@section('title', 'Grupos de Adultos - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #16a085 0%, #138d75 100%);">
        <div class="page-hero-content">
            <h1>💚 Grupos de Hogares - Adultos</h1>
            <p>Comunidad de fe, crecimiento espiritual y apoyo mutuo</p>
        </div>
    </section>

    <!-- DESCRIPCIÓN -->
    <section class="servicio-descripcion">
        <div class="container">
            <h2>Creciendo Juntos en Fe</h2>
            <p>Nuestros grupos de hogares para adultos son comunidades sólidas donde compartimos nuestras vidas, aprendemos juntos de la Palabra de Dios y nos apoyamos en los desafíos de la vida cotidiana. Aquí encontrarás amistades duraderas y un sentido de pertenencia.</p>
            
            <div class="caracteristicas-grid">
                <div class="caracteristica-item">
                    <i class="fas fa-book-open"></i>
                    <h4>Estudio Profundo de la Biblia</h4>
                    <p>Crecer en conocimiento y sabiduría bíblica.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-handshake"></i>
                    <h4>Apoyo Mutuo</h4>
                    <p>Compartir cargas, alegría y consejería cristiana.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-pray"></i>
                    <h4>Intercesión</h4>
                    <p>Orar juntos por nuestras familias y situaciones.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-heart-pulse"></i>
                    <h4>Fortaleza Espiritual</h4>
                    <p>Mantenernos fuertes en la fe durante todas las etapas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GRUPOS DISPONIBLES -->
    <section class="grupos-ubicaciones">
        <div class="container">
            <h2>Grupos por Zona Geográfica</h2>
            
            <div class="grupo-ubicacion-grid">
                @forelse($grupos as $grupo)
                    <div class="grupo-ubicacion-card">
                        <div class="ubicacion-header">
                            <h3>{{ $grupo->nombre_grupo_hogar }}</h3>
                            <span class="grupo-lider">Líder: {{ $grupo->lider }}</span>
                        </div>
                        
                        <div class="ubicacion-info">
                            <p><strong>📍 Dirección:</strong> {{ $grupo->direccion }}</p>
                            <p><strong>📅 Reunión:</strong> {{ $grupo->reunion }}</p>
                            <p><strong>👥 Integrantes:</strong> Grupo activo</p>
                            <p><strong>🎯 Edad:</strong> {{ $grupo->edad ? $grupo->edad . ' años' : 'Variada' }}</p>
                        </div>

                        <div class="ubicacion-contacto">
                            <p><strong>Contacto:</strong> {{ $grupo->contacto }}</p>
                        </div>
                    </div>
                @empty
                    <div style="grid-column: 1 / -1; text-align: center; padding: 3rem;">
                        <p style="color: #999; font-size: 1.1rem;">No hay grupos disponibles en este momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- BENEFICIOS -->
    <section class="beneficios-section">
        <div class="container">
            <h2>Lo que Obtienes al Unirte</h2>
            
            <div class="beneficios-grid">
                <div class="beneficio-item">
                    <i class="fas fa-users"></i>
                    <h4>Comunidad Auténtica</h4>
                    <p>Conexiones genuinas con personas que comparten tus valores.</p>
                </div>
                <div class="beneficio-item">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Crecimiento Espiritual</h4>
                    <p>Profundización en conocimiento y obediencia a Dios.</p>
                </div>
                <div class="beneficio-item">
                    <i class="fas fa-shield"></i>
                    <h4>Apoyo en Crisis</h4>
                    <p>Hermanos que te acompañan en momentos difíciles.</p>
                </div>
                <div class="beneficio-item">
                    <i class="fas fa-smile-plus"></i>
                    <h4>Alegría y Celebración</h4>
                    <p>Compartir alegrías, logros y confraternidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section class="testimonios-section">
        <div class="container">
            <h2>Experiencias de Nuestros Adultos</h2>
            
            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <p class="testimonio-texto">"Mi matrimonio se fortaleció increíblemente. Este grupo nos ayudó a comunicarnos mejor y acercarnos a Dios juntos."</p>
                    <p class="testimonio-autor">- Roberto y Carmen, casados 25 años</p>
                </div>

                <div class="testimonio-card">
                    <p class="testimonio-texto">"En este grupo encontré apoyo cuando más lo necesitaba. Mis hermanos en la fe estuvieron conmigo en todo momento."</p>
                    <p class="testimonio-autor">- Elena, viuda</p>
                </div>

                <div class="testimonio-card">
                    <p class="testimonio-texto">"Es hermoso ver cómo crecemos juntos espiritualmente. ¡Realmente es como una segunda familia!"</p>
                    <p class="testimonio-autor">- Francisco, 52 años</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>¡Eres Bienvenido!</h2>
            <p>Independientemente de tu edad o situación, hay un grupo para ti. Ven tal como eres.</p>
            <a href="/contacto" class="btn-primary">Quiero Unirme a un Grupo</a>
        </div>
    </section>

@endsection
