@extends('layouts.app')

@section('title', 'Nosotros - FSR PARAISO')

@section('content')

    <!-- HERO SECTION -->
    <section class="page-hero" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
        <div class="page-hero-content">
            <h1>Nosotros</h1>
            <p>Conoce la historia y propósito de Familias Sobre La Roca</p>
        </div>
    </section>

    <!-- INTRODUCCIÓN -->
    <section class="nosotros-intro">
        <div class="container">
            <div class="intro-content">
                <h2>¿Quiénes Somos?</h2>
                <p>Familias Sobre La Roca es una iglesia cristiana fundada sobre la base sólida de la Palabra de Dios. Somos
                    una comunidad de creyentes comprometidos con el crecimiento espiritual y el servicio a nuestra
                    comunidad.</p>
                <p>Creemos que Jesús es el fundamento inamovible en el cual podemos construir nuestras vidas, nuestras
                    familias y nuestra iglesia. Cada día buscamos vivir según los principios del Evangelio y reflejar el
                    amor de Cristo en todas nuestras acciones.</p>
            </div>
        </div>
    </section>

    <!-- MISIÓN, VISIÓN, VALORES -->
    <section class="mvv-section">
        <div class="container">
            <div class="mvv-grid">
                <!-- MISIÓN -->
                <div class="mvv-card">
                    <div class="mvv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p>Mateo 28:19 Cumpir la gran comisión a travéz de alcansar a todo aquel que no cone al señor, asi como
                        afirmarlo y equiparlo a fin de que descubran y desarrollen su potencial.</p>

                </div>

                <!-- VISIÓN -->
                <div class="mvv-card">
                    <div class="mvv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Nuestra Visión</h3>
                    <p>Levantar y equipar familias fuertes en Jesús</p>

                </div>

                <!-- VALORES -->
                <div class="mvv-card">
                    <div class="mvv-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Identidad</h3>
                    <p>Somos una comunidad que comparte los principios y las buenas nuevas de Jesús a toda familia y persona
                        que esté a nuestro alcance a fin de llevarlos a la práctica en su vida diaria
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- POR QUÉ VISITARNOS -->
    <section class="ventajas-section">
        <div class="container">
            <h2>¿Como lo haremos?</h2>
            <p>A travéz de: Reuniones de iglesia, grupos hogar, reuniones de hombres, mujeres, jovenes y niños, asi como clases de formación de liderazgo.</p>
        </div>
    </section>

    <!-- HISTORIA -->
    <section class="historia-section">
        <div class="container">
            <h2>Nuestra Historia</h2>
            <div class="historia-timeline">
                <div class="timeline-item">
                    <div class="timeline-year">Inicio</div>
                    <div class="timeline-content">
                        <h4>Nuestros Comienzos</h4>
                        <p>Familias Sobre La Roca comenzó con un pequeño grupo de creyentes que compartían la visión de
                            tener un lugar donde las familias pudieran crecer juntas en la fe de Jesucristo.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Crecimiento</div>
                    <div class="timeline-content">
                        <h4>Expansión de Ministerios</h4>
                        <p>A medida que la comunidad creció, agregamos ministerios especializados: grupos de jóvenes,
                            academia de lideres, grupos de discipulado y ministerios sociales para alcanzar a nuestra
                            comunidad.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-year">Hoy</div>
                    <div class="timeline-content">
                        <h4>Presente y Futuro</h4>
                        <p>Hoy somos una comunidad vibrante dedicada a hacer discípulos, equipar a los santos y alcanzar a
                            nuestro mundo con el amor transformador de Cristo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- LLAMADO A ACCIÓN -->
    <section class="cta-section">
        <div class="container">
            <h2>¡Te Invitamos a Visitarnos!</h2>
            <p>Si buscas una comunidad de fe donde crecer espiritualmente, estamos aquí para recibirte. No importa tu
                trasfondo, todos somos bienvenidos en Familias en La Roca.</p>
            <a href="/visitanos" class="btn-primary">Conoce Nuestros Horarios</a>
        </div>
    </section>

@endsection