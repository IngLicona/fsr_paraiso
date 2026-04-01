@extends('layouts.app')

@section('title', 'Inicio - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="hero" style="background-image: url('{{ asset('images/ministrando.png') }}')">
        <div class="hero-content">
            <p class="hero-subtitle">IGLESIA CRISTIANA</p>
            <h1>JESÚS ES NUESTRA ROCA</h1>
            <p class="hero-description">Eres bienvenido a una iglesia cristiana donde podrás crecer en fe y amor.</p>
            <a href="/nosotros" class="btn-primary">ÚNETE A NOSOTROS</a>
            <p class="hero-verse">Mateo 7:24-25</p>
        </div>
    </section>

    <!-- PROPÓSITO SECTION -->
    <section class="proposito">
        <h2>NUESTRO PROPÓSITO</h2>
        <div class="proposito-cards">
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-cross"></i>
                </div>
                <h3>ADORAMOS</h3>
                <p>Amamos y exaltamos a Dios junto en espíritu.</p>
                <p class="verse">Efesios 7:45</p>
            </div>
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>CRECEMOS</h3>
                <p>Nos capacitamos y crecemos en la palabra de Dios.</p>
                <p class="verse">Hechos 7:30</p>
            </div>
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>COMPARTIMOS</h3>
                <p>Compartimos el amor y mensaje de Jesús a todos.</p>
                <p class="verse">Romanos 2:4</p>
            </div>
        </div>
    </section>

    <!-- HORARIOS SECTION -->
    <section class="horarios">
        <div class="horarios-content">
            <h2>HORARIOS</h2>
            <p>Únete a nuestros servicios</p>
            <ul class="horarios-list">
                <li><strong>Domingos:</strong> 11:00 AM</li>
                <li><strong>Miércoles:</strong> 7:30 PM</li>
                <li><strong>Viernes:</strong> 7:30 PM</li>
            </ul>
            <a href="#" class="btn-secondary">VER MÁS</a>
        </div>
        <div class="horarios-img">
            <img src="{{ asset('images/horarios.png') }}" alt="Servicios">
        </div>
    </section>

    <!-- EVENTOS SECTION -->
    <section class="eventos">
        <h2>¿QUÉ PUEDO ESPERAR?</h2>
        <p>Te esperamos en La Roca para juntos crecer en Cristo.</p>
        <div class="eventos-grid">
            <div class="evento-item">
                <img src="{{ asset('images/evento1.jpg') }}" alt="Evento 1">
                <div class="evento-info">
                    <span class="fecha">OCT<br>27</span>
                    <span class="hora">1 + 27 A</span>
                </div>
                <h3>Noche de Oración</h3>
                <p>Estudio Bíblico</p>
            </div>
            <div class="evento-item">
                <img src="{{ asset('images/evento2.jpg') }}" alt="Evento 2">
                <div class="evento-info">
                    <span class="fecha">25<br>SEP 23</span>
                    <span class="hora">1:30 PM</span>
                </div>
                <h3>Estudio Bíblico</h3>
            </div>
            <div class="evento-item">
                <img src="{{ asset('images/evento3.jpg') }}" alt="Evento 3">
                <div class="evento-info">
                    <span class="fecha">03<br>20 PM</span>
                </div>
                <h3>Salida Juvenil</h3>
            </div>
        </div>
    </section>


@endsection
