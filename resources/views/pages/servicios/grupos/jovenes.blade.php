@extends('layouts.app')

@section('title', 'Grupos de Jóvenes - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #e67e22 0%, #d35400 100%);">
        <div class="page-hero-content">
            <h1>🎉 Grupos de Hogares - Jóvenes</h1>
            <p>Comunidad de fe, diversión e impacto social</p>
        </div>
    </section>

    <!-- DESCRIPCIÓN -->
    <section class="servicio-descripcion">
        <div class="container">
            <h2>¡Eres Joven? ¡Estos grupos son para ti!</h2>
            <p>Nuestros grupos de hogares para jóvenes son espacios seguros donde podés crecer en fe, hacer amistades, divertirte y servir a tu comunidad.</p>
            
            <div class="caracteristicas-grid">
                <div class="caracteristica-item">
                    <i class="fas fa-book"></i>
                    <h4>Estudio Bíblico</h4>
                    <p>Estudiamos la Biblia de una manera contemporánea y relevante.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-laugh"></i>
                    <h4>Confraternidad</h4>
                    <p>Convivencias, retiros y actividades para fortalecer amistades.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-heart-hands"></i>
                    <h4>Acción Social</h4>
                    <p>Proyectos comunitarios y servicio solidario.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-users"></i>
                    <h4>Comunidad Segura</h4>
                    <p>Espacio de confianza para compartir y crecer juntos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GRUPOS DISPONIBLES -->
    <section class="grupos-ubicaciones">
        <div class="container">
            <h2>Grupos y Ubicaciones</h2>
            
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

    <!-- MAPA INTERACTIVO (opcional) -->
    <section class="grupo-mapa-section">
        <div class="container">
            <h2>Ubicar Grupos en el Mapa</h2>
            <p>Para ver los grupos en el mapa, visita nuestra página de <a href="/visitanos">Ubicaciones</a></p>
        </div>
    </section>

    <!-- TESTIMONIOS -->
    <section class="testimonios-section">
        <div class="container">
            <h2>¿Qué Dicen Nuestros Jóvenes?</h2>
            
            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <p class="testimonio-texto">"El grupo cambió mi vida. Encontré amistades genuinas y un propósito en Dios."</p>
                    <p class="testimonio-autor">- Juan, 22 años</p>
                </div>

                <div class="testimonio-card">
                    <p class="testimonio-texto">"No me sentía solo. Este grupo se convirtió en mi familia. ¡Lo recomiendo!"</p>
                    <p class="testimonio-autor">- María, 19 años</p>
                </div>

                <div class="testimonio-card">
                    <p class="testimonio-texto">"Aprendemos, nos divertimos y servimos juntos. ¡Es increíble ser parte de esto!"</p>
                    <p class="testimonio-autor">- Carlos, 25 años</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>¡Queremos Verte en Nuestro Grupo!</h2>
            <p>No importa tu trasfondo. Todos los jóvenes son bienvenidos. Ven tal como eres.</p>
            <a href="/contacto" class="btn-primary">Quiero Asistir</a>
        </div>
    </section>

@endsection
