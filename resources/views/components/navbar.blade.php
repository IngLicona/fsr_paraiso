<!-- NAVBAR COMPONENT -->
<header class="header">
    <div class="container-nav">
        <img src="{{ asset('images/logo.png') }}" alt="Logo FSR Paraiso" class="logo">
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/nosotros">Nosotros</a></li>
                
                <!-- DROPDOWN SERVICIOS -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Servicios <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Departamentos</li>
                        <li><a href="/servicios/rock-kids">Rock Kids</a></li>
                        <li><a href="/servicios/media">Media</a></li>
                        <li><a href="/servicios/bienvenida">Bienvenida</a></li>
                        
                        <li class="dropdown-divider"></li>
                        
                        <li class="dropdown-header">Grupos de Hogares</li>
                        <li><a href="/servicios/grupos-jovenes">Jóvenes</a></li>
                        <li><a href="/servicios/grupos-adultos">Adultos</a></li>
                    </ul>
                </li>
                
                <li><a href="/eventos">Eventos</a></li>
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="/visitanos" class="btn-visitanos">Visítanos</a></li>
                <li><a href="/login" class="btn-login">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        // Abrir/cerrar dropdown al hacer clic
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Cerrar otros dropdowns
            dropdowns.forEach(d => {
                if (d !== dropdown) {
                    d.classList.remove('active');
                }
            });
            
            // Toggle del actual
            dropdown.classList.toggle('active');
        });
        
        // Cerrar al hacer clic afuera
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });
    });
});
</script>
