@extends('layouts.app')

@section('title', 'Media - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);">
        <div class="page-hero-content">
            <h1>📹 Media</h1>
            <p>Producción audiovisual y transmisión de nuestros servicios</p>
        </div>
    </section>

    <!-- DESCRIPCIÓN -->
    <section class="servicio-descripcion">
        <div class="container">
            <h2>Departamento de Media</h2>
            <p>El departamento de Media es responsable de capturar y compartir los momentos importantes de nuestra iglesia. Desde transmisiones en vivo hasta edición de contenido para redes sociales, nuestro equipo trabaja detrás de cámaras para llevar el mensaje de Dios a más personas.</p>
            
            <div class="caracteristicas-grid">
                <div class="caracteristica-item">
                    <i class="fas fa-camera"></i>
                    <h4>Cobertura Fotográfica</h4>
                    <p>Registramos eventos, actividades y momentos especiales de la iglesia.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-edit"></i>
                    <h4>Edición de Contenido</h4>
                    <p>Creamos videos, presentaciones y contenido para nuestras redes sociales.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-microphone"></i>
                    <h4>Audio y Sonido</h4>
                    <p>Manejo profesional de sonido en nuestros servicios y eventos especiales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REQUISITOS Y VACANTES -->
    <section class="requisitos-section">
        <div class="container">
            <h2>¿Quieres Unirte?</h2>
            <p>Buscamos personas apasionadas por la tecnología y con deseos de servir a Dios. No necesitas experiencia previa, ¡te entrenaremos!</p>
            
            <div class="roles-grid">
                <div class="rol-card">
                    <h3>Operador de Cámaras</h3>
                    <p>Encargado de la cobertura visual de los servicios y eventos.</p>
                    <span class="badge">VACANTE ABIERTA</span>
                </div>
                <div class="rol-card">
                    <h3>Editor de Video</h3>
                    <p>Edita y monta contenido audiovisual para diferentes plataformas.</p>
                    <span class="badge">VACANTE ABIERTA</span>
                </div>
                <div class="rol-card">
                    <h3>Técnico de Sonido</h3>
                    <p>Maneja el audio y sonorización de nuestros servicios.</p>
                    <span class="badge">CUBIERTO</span>
                </div>
                <div class="rol-card">
                    <h3>Fotógrafo</h3>
                    <p>Captura momentos especiales de eventos y actividades.</p>
                    <span class="badge">VACANTE ABIERTA</span>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍDERES Y CONTACTO -->
    <section class="liderazgo-section">
        <div class="container">
            <h2>Equipo de Media</h2>
            <div class="liderazgo-grid">
                <div class="lider-card">
                    <div class="lider-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4>Ing. Carlos Mendoza</h4>
                    <p>Director de Departamento</p>
                    <p class="lider-contacto">📞 (555) 234-5678</p>
                </div>
                <div class="lider-card">
                    <div class="lider-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4>Sofía Rodríguez</h4>
                    <p>Coordinadora de Redes Sociales</p>
                    <p class="lider-contacto">📞 (555) 234-5679</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PLATAFORMAS -->
    <section class="plataformas-section">
        <div class="container">
            <h2>Síguenos en Línea</h2>
            <div class="plataformas-grid">
                <a href="#" class="plataforma-link">
                    <i class="fab fa-facebook"></i>
                    <h4>Facebook</h4>
                    <p>Familias en la Roca</p>
                </a>
                <a href="#" class="plataforma-link">
                    <i class="fab fa-youtube"></i>
                    <h4>YouTube</h4>
                    <p>Canal Principal</p>
                </a>
                <a href="https://www.instagram.com/fsrparaisooficial/" target="_blank" class="plataforma-link">
                    <i class="fab fa-instagram"></i>
                    <h4>Instagram</h4>
                    <p>@familiasenlroca</p>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>¡Sé Parte del Equipo!</h2>
            <p>Si te interesa trabajar en media o tienes sugerencias, contáctanos.</p>
            <a href="/contacto" class="btn-primary">Enviar Mensaje</a>
        </div>
    </section>

@endsection
