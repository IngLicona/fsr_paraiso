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
                <!-- GRUPO 1 -->
                <div class="grupo-ubicacion-card">
                    <div class="ubicacion-header">
                        <h3>Grupo "Vision Joven"</h3>
                        <span class="grupo-lider">Lider: Ronald García</span>
                    </div>
                    
                    <div class="ubicacion-info">
                        <p><strong>📍 Dirección:</strong> Calle Principal 123, Sector Centro</p>
                        <p><strong>📅 Reunión:</strong> Viernes 7:00 PM</p>
                        <p><strong>👥 Integrantes:</strong> 15 - 20 jóvenes</p>
                        <p><strong>🎯 Edad:</strong> 16 - 25 años</p>
                    </div>

                    <div class="ubicacion-actividades">
                        <h4>Actividades Recientes:</h4>
                        <ul>
                            <li>✅ Retiro Espiritual en Montañas</li>
                            <li>✅ Proyecto Comunitario: Casa de Ancianos</li>
                            <li>✅ Noche de Cine Cristiano</li>
                        </ul>
                    </div>

                    <div class="ubicacion-contacto">
                        <p><strong>Contacto:</strong> (555) 456-7890</p>
                    </div>
                </div>

                <!-- GRUPO 2 -->
                <div class="grupo-ubicacion-card">
                    <div class="ubicacion-header">
                        <h3>Grupo "Fe en Acción"</h3>
                        <span class="grupo-lider">Lider: Valentina Morales</span>
                    </div>
                    
                    <div class="ubicacion-info">
                        <p><strong>📍 Dirección:</strong> Avenida Secundaria 456, Sector Norte</p>
                        <p><strong>📅 Reunión:</strong> Martes 6:30 PM</p>
                        <p><strong>👥 Integrantes:</strong> 12 - 18 jóvenes</p>
                        <p><strong>🎯 Edad:</strong> 18 - 30 años</p>
                    </div>

                    <div class="ubicacion-actividades">
                        <h4>Actividades Recientes:</h4>
                        <ul>
                            <li>✅ Campaña de Limpieza Comunitaria</li>
                            <li>✅ Estudio de Liderazgo</li>
                            <li>✅ Confraternidad Deportiva</li>
                        </ul>
                    </div>

                    <div class="ubicacion-contacto">
                        <p><strong>Contacto:</strong> (555) 456-7891</p>
                    </div>
                </div>

                <!-- GRUPO 3 -->
                <div class="grupo-ubicacion-card">
                    <div class="ubicacion-header">
                        <h3>Grupo "Discípulos del Reino"</h3>
                        <span class="grupo-lider">Lider: Jonathan López</span>
                    </div>
                    
                    <div class="ubicacion-info">
                        <p><strong>📍 Dirección:</strong> Barrio Sur, Casa 789</p>
                        <p><strong>📅 Reunión:</strong> Jueves 7:00 PM</p>
                        <p><strong>👥 Integrantes:</strong> 10 - 16 jóvenes</p>
                        <p><strong>🎯 Edad:</strong> 15 - 24 años</p>
                    </div>

                    <div class="ubicacion-actividades">
                        <h4>Actividades Recientes:</h4>
                        <ul>
                            <li>✅ Seminario: "Mi Propósito en Dios"</li>
                            <li>✅ Voluntariado en Albergue</li>
                            <li>✅ Adoración en Grupo</li>
                        </ul>
                    </div>

                    <div class="ubicacion-contacto">
                        <p><strong>Contacto:</strong> (555) 456-7892</p>
                    </div>
                </div>
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
