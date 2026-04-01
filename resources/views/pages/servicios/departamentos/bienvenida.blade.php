@extends('layouts.app')

@section('title', 'Bienvenida - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #27ae60 0%, #229954 100%);">
        <div class="page-hero-content">
            <h1>👋 Equipo de Bienvenida</h1>
            <p>Nos encanta recibirte con calidez en nuestros servicios</p>
        </div>
    </section>

    <!-- DESCRIPCIÓN -->
    <section class="servicio-descripcion">
        <div class="container">
            <h2>¿Quiénes somos?</h2>
            <p>El equipo de Bienvenida es la cara amable de Familias en La Roca. Nuestro propósito es que cada visitante se sienta bienvenido, cuidado y parte de nuestra comunidad. Creemos que la hospitalidad es un acto de servicio a Dios.</p>
            
            <div class="caracteristicas-grid">
                <div class="caracteristica-item">
                    <i class="fas fa-smile"></i>
                    <h4>Acogimiento Caloroso</h4>
                    <p>Recibimos cada visitante con una sonrisa genuina y calidez.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-map"></i>
                    <h4>Orientación</h4>
                    <p>Guiamos a los visitantes por nuestras instalaciones.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-chair"></i>
                    <h4>Asistencia en Seating</h4>
                    <p>Ayudamos a buscar asientos cómodos para el servicio.</p>
                </div>
                <div class="caracteristica-item">
                    <i class="fas fa-handshake"></i>
                    <h4>Seguimiento</h4>
                    <p>Nos preocupamos porque regreses y te sientas integrado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NUESTRO SERVICIO -->
    <section class="servicio-detalles">
        <div class="container">
            <h2>Cómo Servimos</h2>
            
            <div class="servicio-timeline">
                <div class="timeline-item">
                    <div class="timeline-marker">1</div>
                    <h4>Recepción Externa</h4>
                    <p>Nuestro primer equipo te recibe en la entrada con un saludo caloroso y responde tus preguntas iniciales.</p>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-marker">2</div>
                    <h4>Guía de Bienvenida</h4>
                    <p>Te mostramos donde está todo: salones de niños, baños, cafetería y área del servicio.</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-marker">3</div>
                    <h4>Conexión Especial</h4>
                    <p>Si es tu primera vez, te presentamos con líderes de grupos para que conozcas gente.</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-marker">4</div>
                    <h4>Seguimiento</h4>
                    <p>Te contactamos para asegurarnos de que tengas una buena experiencia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REQUISITOS -->
    <section class="requisitos-section">
        <div class="container">
            <h2>¿Quieres Unirte al Equipo?</h2>
            <p>Buscamos personas con corazón de servidor y disposición para servir a otros. Aquí están las cualidades que buscamos:</p>
            
            <div class="cualidades-grid">
                <div class="cualidad-item">
                    <i class="fas fa-heart"></i>
                    <h4>Corazón Servicial</h4>
                    <p>Genuino deseo de ayudar y bendecir a otros.</p>
                </div>
                <div class="cualidad-item">
                    <i class="fas fa-users"></i>
                    <h4>Trato Amable</h4>
                    <p>Habilidad para comunicarte con diferentes tipos de personas.</p>
                </div>
                <div class="cualidad-item">
                    <i class="fas fa-clock"></i>
                    <h4>Puntualidad</h4>
                    <p>Responsable y comprometido con los horarios.</p>
                </div>
                <div class="cualidad-item">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Iniciativa</h4>
                    <p>Capacidad para identificar necesidades sin ser instruido.</p>
                </div>
            </div>

            <div class="roles-grid" style="margin-top: 40px;">
                <div class="rol-card">
                    <h3>Ujier/Usher</h3>
                    <p>Asiste a los visitantes a encontrar asientos.</p>
                    <span class="badge">VACANTE ABIERTA</span>
                </div>
                <div class="rol-card">
                    <h3>Recepcionista</h3>
                    <p>Atiende visitantes en entrada principal.</p>
                    <span class="badge">VACANTE ABIERTA</span>
                </div>
                <div class="rol-card">
                    <h3>Guía de Instalaciones</h3>
                    <p>Orienta sobre lugares y servicios disponibles.</p>
                    <span class="badge">VACANTE ABIERTA</span>
                </div>
                <div class="rol-card">
                    <h3>Coordinador</h3>
                    <p>Supervisa y organiza al equipo de bienvenida.</p>
                    <span class="badge">CUBIERTO</span>
                </div>
            </div>
        </div>
    </section>

    <!-- LÍDERES Y CONTACTO -->
    <section class="liderazgo-section">
        <div class="container">
            <h2>Nuestro Liderazgo</h2>
            <div class="liderazgo-grid">
                <div class="lider-card">
                    <div class="lider-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4>Pastor Miguel González</h4>
                    <p>Director General</p>
                    <p class="lider-contacto">📞 (555) 345-6789</p>
                </div>
                <div class="lider-card">
                    <div class="lider-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h4>Dra. Patricia Flores</h4>
                    <p>Coordinadora de Voluntarios</p>
                    <p class="lider-contacto">📞 (555) 345-6790</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>¡Queremos Contar Contigo!</h2>
            <p>Si te interesa ser parte del equipo de bienvenida, comunícate con nosotros. Estamos listos para entrenar y equiparte.</p>
            <a href="/contacto" class="btn-primary">Quiero Participar</a>
        </div>
    </section>

@endsection
