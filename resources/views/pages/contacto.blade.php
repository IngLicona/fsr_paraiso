@extends('layouts.app')

@section('title', 'Contacto - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
        <div class="page-hero-content">
            <h1>Contacta Con Nosotros</h1>
            <p>Estamos aquí para responder tus preguntas</p>
        </div>
    </section>

    <!-- MENSAJES DE ÉXITO/ERROR -->
    @if ($errors->any())
        <div class="container" style="margin-top: 20px;">
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                <strong>Por favor, corrige los siguientes errores:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="container" style="margin-top: 20px;">
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- CONTACTO PRINCIPAL -->
    <section class="contacto-section">
        <div class="container-contacto">
            <!-- INFORMACIÓN DE CONTACTO -->
            <div class="contacto-info">
                <h2>Información de Contacto</h2>
                <p>Si tienes preguntas o necesitas más información, puedes comunicarte con nosotros de las siguientes formas:</p>

                <div class="info-cards">
                    <!-- DIRECCIÓN -->
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Dirección</h4>
                        <p>Calle Principal #123<br>Ciudad, Pías</p>
                    </div>

                    <!-- TELÉFONO -->
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h4>Teléfono</h4>
                        <p><a href="tel:+15551234567">+1 (555) 123-4567</a></p>
                    </div>

                    <!-- EMAIL -->
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email</h4>
                        <p><a href="mailto:contacto@fsrparaiso.com">contacto@fsrparaiso.com</a></p>
                    </div>

                    <!-- HORARIOS -->
                    <div class="info-card">
                        <div class="card-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Horarios</h4>
                        <p>
                            Lun - Vie: 9:00 AM - 5:00 PM<br>
                            Sábados: 10:00 AM - 2:00 PM
                        </p>
                    </div>
                </div>

                <!-- REDES SOCIALES -->
                <div class="redes-sociales">
                    <h4>Síguenos en Redes Sociales</h4>
                    <div class="social-links">
                        <a href="#" class="social-btn"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO DE CONTACTO -->
            <div class="contacto-form-wrapper">
                <h2>Envíanos un Mensaje</h2>
                <form action="/contacto" method="POST" class="formulario-contacto">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo *</label>
                            <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required placeholder="tu@email.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="+1 (555) 123-4567">
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto *</label>
                            <select id="asunto" name="asunto" required>
                                <option value="">Selecciona un asunto</option>
                                <option value="informacion">Solicitar Información</option>
                                <option value="visitantes">Preguntas para Visitantes</option>
                                <option value="voluntarios">Quiero Ser Voluntario</option>
                                <option value="eventos">Información de Eventos</option>
                                <option value="grupos">Grupos Hogares</option>
                                <option value="servicios">Servicios Especiales</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje *</label>
                        <textarea id="mensaje" name="mensaje" rows="6" required placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>

                    <button type="submit" class="btn-primary btn-large">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </section>


    <!-- PREGUNTAS FRECUENTES -->
    <section class="faq-section">
        <div class="container">
            <h2>Preguntas Frecuentes</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> ¿Cuál es el horario de los servicios?</h4>
                    <p>Nuestros servicios se realizan los domingos a las 10:00 AM. También tenemos servicios entre semana. Puedes consultar <a href="/visitanos">aquí</a> para más detalles.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> ¿Cómo puedo ser voluntario?</h4>
                    <p>¡Nos encantaría que formes parte de nuestro equipo! Contáctanos indicando tu interés en el formulario o llámanos directamente.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> ¿Hay actividades para niños?</h4>
                    <p>Sí, contamos con nuestro ministerio Rock Kids y guardería durante los servicios. Consulta más detalles en <a href="/servicios/rock-kids">Rock Kids</a>.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> ¿Soy nuevo en la ciudad, cómo me integro?</h4>
                    <p>Ven a nuestro servicio y permite que nuestro equipo de bienvenida te oriente. También te invitamos a unirte a uno de nuestros <a href="/servicios/grupos-jovenes">grupos hogares</a>.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> ¿Cuándo responden los mensajes?</h4>
                    <p>Respondemos todos los mensajes dentro de 24 a 48 horas hábiles. Por urgencias, llama directamente al teléfono.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> ¿Hay estacionamiento disponible?</h4>
                    <p>Sí, contamos con amplio estacionamiento gratuito en nuestras instalaciones.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
  
